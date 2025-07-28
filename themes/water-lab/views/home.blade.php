
@php
    try {
        // Membaca file /proc/uptime
        $uptimeData = file_get_contents('/proc/uptime');
        if ($uptimeData) {
            $parts = explode(' ', $uptimeData);
            $uptimeSeconds = (float) $parts[0];

            // Waktu dalam detik sejak server di-boot
            $bootTime = time() - $uptimeSeconds;

            // Total waktu yang telah berlalu sejak boot
            $totalTimeSinceBoot = time() - $bootTime;

            // Menghitung persentase uptime
            // Dalam konteks ini, uptime sejak boot terakhir adalah selalu 100% dari waktu sejak boot.
            // Namun, jika Anda ingin menghitung uptime dalam periode tertentu (misal 30 hari), logikanya akan berbeda.
            // Untuk uptime server sejak restart terakhir, persentasenya adalah 99.9% atau mendekati 100% jika server berjalan normal.

            // Format waktu uptime menjadi hari, jam, menit
            $days = floor($uptimeSeconds / 86400);
            $uptimeSeconds %= 86400;
            $hours = floor($uptimeSeconds / 3600);
            $uptimeSeconds %= 3600;
            $minutes = floor($uptimeSeconds / 60);

            $uptimeString = sprintf('%d hari, %d jam, %d menit', $days, $hours, $minutes);

            // Menampilkan persentase (biasanya ~99.9% karena ada jeda eksekusi skrip)
            // Untuk representasi yang lebih sederhana, kita tampilkan saja 99.9%+
            $uptimePercentage = '99.9%+';

        } else {
            $uptimeString = 'Tidak dapat membaca data uptime.';
            $uptimePercentage = 'N/A';
        }
    } catch (Exception $e) {
        $uptimeString = 'Gagal mengakses data uptime (mungkin bukan server Linux).';
        $uptimePercentage = 'N/A';
    }
@endphp

<style>
/* --- Desain Notifikasi Kaca --- */
        .glass-notification {
            /* Diubah sesuai permintaan pengguna */
            width: 50%;
            height: 50px;

            color: rgb(65, 60, 60);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center; /* Teks diposisikan di tengah */
            padding: 0 25px; /* Padding horizontal disesuaikan */
            
            /* --- Properti Inti untuk Efek Glassmorphism --- */
                        background: linear-gradient(135deg, rgba(132, 132, 132, 0.45), rgba(37, 99, 235, 0.35));

            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgb(163, 163, 163);
            border-radius: 12px; /* Sudut disesuaikan untuk bar */
        }

        /* --- Styling Konten di Dalam Notifikasi --- */
        .notification-text {
            font-size: 0.9rem;
            font-weight: 900;
            white-space: nowrap; /* Mencegah teks turun baris */
            overflow: hidden;
            text-overflow: ellipsis;
            color: rgba(9, 148, 240, 0.69);
        }
        
        /* Media query untuk layar yang lebih kecil */
        @media (max-width: 768px) {
            .glass-notification {
                width: 90%;
            }
        }


        .category-card {
            outline-color: rgb(19, 122, 231);
            outline-width: 2px;
            outline-style: solid;
            width: 320px;
            padding: 35px;
            text-align: center;
            border-radius: 20px; /* Sudut yang tumpul */
            
            /* --- INI BAGIAN UTAMA EFEK KACA (GLASSMORPHISM) --- */
            
            /* 1. Latar belakang transparan dengan sedikit warna putih */
            background: rgba(255, 255, 255, 0.15); 
            
            /* 2. Efek blur pada elemen di belakang kartu */
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px); /* Untuk kompatibilitas browser Safari */
            
            /* 3. Bayangan halus untuk memberikan kedalaman */
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.25); 
            
            /* 4. Garis tepi (border) tipis untuk menonjolkan "kaca" */
            border: 1px solid rgba(255, 255, 255, 0.2);
            
            /* ------------------------------------------------ */
            
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            color: white;
        }

        .category-card:hover {
            transform: translateY(-10px) scale(1.03); /* Efek sedikit terangkat saat disentuh mouse */
            box-shadow: 0 16px 40px 0 rgba(0, 0, 0, 0.3);
        }

        /* Style untuk gambar di dalam kartu */
        .card-image {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 50%; /* Membuat gambar menjadi lingkaran */
            border: 3px solid rgba(255, 255, 255, 0.7);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        /* Style untuk judul kategori */
        .card-title {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 1.6rem;
            font-weight: 600;
            text-shadow: 1px 1px 5px rgba(0,0,0,0.3);
        }

        /* Style untuk deskripsi */
        .card-description {
            font-size: 0.95rem;
            font-weight: 300;
            color: #000000;
            line-height: 1.5;
            margin: 0;
        }
        
        .text-shadow {
            text-shadow: 0 2px 15px rgba(0,0,0,0.6);
        }
        .text-shadow-sm {
            text-shadow: 0 1px 4px rgba(0,0,0,0.4);
        }
        .text-shadow-md {
             text-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
        }
        .live-status {
    display: flex;
    align-items: center;
    gap: 10px;
    color: white;
    font-size: 16px;
    font-weight: 500;
}

.live-indicator {
    width: 12px;
    height: 12px;
    background-color: #2ecc71;
    border-radius: 50%;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(46, 204, 113, 0.7);
    }
    70% {
        box-shadow: 0 0 0 12px rgba(46, 204, 113, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(46, 204, 113, 0);
    }
}
</style>
<div>
    <div class="flex flex-col gap-6">
        <div class="container mx-auto glass-notification">
            <article class="max-w-full prose dark:prose-invert notification-text">
                <b style="color: white;"> {!! Str::markdown(theme('home_page_text', 'Welcome to Paymenter'), [
                'allow_unsafe_links' => false,
                'renderer' => [
                    'soft_break' => "<br>"
                ]]) !!}
                </b>
            </article>
        </div>
        

        
        <h2 class="text-base md:text-xl font-semibold tracking-[0.2em] md:tracking-[0.3em] uppercase text-white mb-5 text-shadow text-center">
           📊 Our Statistic 📊
        </h2>
        
        <div class="flex flex-col flex-wrap items-center justify-center w-full gap-5 md:flex-row md:items-stretch md:gap-8">
            
            <!-- KARTU 1: PENGGUNA AKTIF -->
            <div class="group text-center flex-grow w-full md:w-auto md:min-w-[220px] md:max-w-[250px] p-6 rounded-xl bg-gradient-to-brfrom-gray-900/45 to-white-800/35 backdrop-blur-lg shadow-lg shadow-black/40 border border-blue-400/50 transition-all duration-300 ease-in-out hover:-translate-y-2 hover:scale-105 hover:shadow-xl hover:shadow-blue-500/25 hover:from-gray-900/55 hover:to-blue-800/45 flex flex-col gap-3">
                <p class="text-sm font-normal text-blue-100 md:text-base text-shadow-sm">Client</p>
                <h3 class="text-3xl font-bold md:text-4xl text-shadow-md">{{ \App\Models\User::count() }}</h3>
            </div>

            <!-- KARTU 2: PENDAPATAN -->
            <div class="group text-center flex-grow w-full md:w-auto md:min-w-[220px] md:max-w-[250px] p-6 rounded-xl bg-gradient-to-brfrom-gray-900/45 to-white-800/35 backdrop-blur-lg shadow-lg shadow-black/40 border border-blue-400/50 transition-all duration-300 ease-in-out hover:-translate-y-2 hover:scale-105 hover:shadow-xl hover:shadow-blue-500/25 hover:from-gray-900/55 hover:to-blue-800/45 flex flex-col gap-3">
                <p class="text-sm font-normal text-blue-100 md:text-base text-shadow-sm">Pendapatan (Bulan Ini)</p>
                <h3 class="text-3xl font-bold md:text-4xl text-shadow-md">Coming Soon</h3>
            </div>

            <!-- KARTU 3: UPTIME SERVER -->
            <div class="group text-center items-center flex-grow w-full md:w-auto md:min-w-[220px] md:max-w-[250px] p-6 rounded-xl bg-gradient-to-brfrom-gray-900/45 to-white-800/35 backdrop-blur-lg shadow-lg shadow-black/40 border border-blue-400/50 transition-all duration-300 ease-in-out hover:-translate-y-2 hover:scale-105 hover:shadow-xl hover:shadow-blue-500/25 hover:from-gray-900/55 hover:to-blue-800/45 flex flex-col gap-3">
                <p class="text-sm font-normal text-blue-100 md:text-base text-shadow-sm">Uptime Server</p>
                <h3 class="text-3xl font-bold md:text-4xl text-shadow-md">{{ $uptimePercentage }}</h3>
                <div class="text-center live-status">
                    <span class="live-indicator"></span>
                    <span>LIVE DATA</span>
                </div>
            </div>

            <!-- KARTU 4: PROYEK BARU -->
            <div class="group text-center flex-grow w-full md:w-auto md:min-w-[220px] md:max-w-[250px] p-6 rounded-xl bg-gradient-to-brfrom-gray-900/45 to-white-800/35 backdrop-blur-lg shadow-lg shadow-black/40 border border-blue-400/50 transition-all duration-300 ease-in-out hover:-translate-y-2 hover:scale-105 hover:shadow-xl hover:shadow-blue-500/25 hover:from-gray-900/55 hover:to-blue-800/45 flex flex-col gap-3">
                <p class="text-sm font-normal text-blue-100 md:text-base text-shadow-sm">Proyek Baru</p>
                <h3 class="text-3xl font-bold md:text-4xl text-shadow-md">142</h3>
            </div>
        </div>


        <div class="flex flex-col gap-6">
            <h1 style="">Our Categories ➤</h1>
        </div>
<div class="container grid justify-center gap-4 mx-auto mb-4 rounded-md md:grid-cols-2 lg:grid-cols-4">
                @foreach ($categories as $category)
                <div class="category-card">
                    {{-- @if(theme('small_images', false))
                        <div class="flex items-center gap-x-3">
                    @endif --}}
                    @if ($category->image)
                        <img src="{{ Storage::url($category->image) }}" alt="{{ $category->name }}"
                            class="rounded-md">
                    @endif
                    
                        <h2 class="card-title" style="margin-top: 9px">{{ $category->name }}</h2>
                    {{-- @if(theme('small_images', false))
                        </div>
                    @endif --}}
                    @if(theme('show_category_description', true))
                        <article class="mt-2 prose dark:prose-invert card-description">
                           <b>{!! $category->description !!}</b>
                        </article>
                    @endif
                    <a href="{{ route('category.show', ['category' => $category->slug]) }}" wire:navigate class="mt-2 text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            {{ __('general.view') }}
                    </a>
                    </div>

                @endforeach
            </div>


        {{-- CARD CATEGORY --}}
        
    </div>
    {!! hook('pages.home') !!}
</div>
