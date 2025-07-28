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
        
    <div class="flex flex-col justify-center">

        <div class="flex flex-col items-center w-full gap-5 p-6 border md:p-10 backdrop-blur-md rounded-2xl border-white/10">
        <h2 class="text-base md:text-xl font-semibold tracking-[0.2em] md:tracking-[0.3em] uppercase text-white mb-5 text-shadow text-center">
           📊 Our Statistic 📊
        </h2>

        @php
    $userCount = 0; // Nilai default
    $apiToken = 'PAYMb16ec9b919ea8ed549083f421bfd1c82ef0346f9903d697fbeffa65cb4114489'; 

    if ($apiToken) {
        $response = \Illuminate\Support\Facades\Http::withToken($apiToken)
                        ->get(config('app.url') . '/api/v1/admin/users');

        if ($response->successful()) {
            $userCount = $response->json()['meta']['total'] ?? 0;
        }
    }
@endphp
        
        <div class="flex flex-col flex-wrap items-center justify-center w-full gap-5 md:flex-row md:items-stretch md:gap-8">
            
            <!-- KARTU 1: PENGGUNA AKTIF -->
            <div class="group flex-grow w-full md:w-auto md:min-w-[220px] md:max-w-[250px] p-6 rounded-xl bg-gradient-to-brfrom-gray-900/45 to-white-800/35 backdrop-blur-lg shadow-lg shadow-black/40 border border-blue-400/50 transition-all duration-300 ease-in-out hover:-translate-y-2 hover:scale-105 hover:shadow-xl hover:shadow-blue-500/25 hover:from-gray-900/55 hover:to-blue-800/45 flex flex-col gap-3">
                <div class="flex items-center justify-center w-12 h-12 transition-colors rounded-lg bg-blue-400/15 group-hover:bg-blue-400/25">
                     <svg class="w-6 h-6 stroke-blue-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 11.21 12.77 10.5 12 10.5s-1.536.71-2.121 1.256c-1.172.879-1.172 2.303 0 3.182z" />
                    </svg>
                </div>
                <p class="text-sm font-normal text-blue-100 md:text-base text-shadow-sm">Pengguna Aktif</p>
                <h3 class="text-3xl font-bold md:text-4xl text-shadow-md">{{ $userCount }}</h3>
            </div>

            <!-- KARTU 2: PENDAPATAN -->
            <div class="group flex-grow w-full md:w-auto md:min-w-[220px] md:max-w-[250px] p-6 rounded-xl bg-gradient-to-brfrom-gray-900/45 to-white-800/35 backdrop-blur-lg shadow-lg shadow-black/40 border border-blue-400/50 transition-all duration-300 ease-in-out hover:-translate-y-2 hover:scale-105 hover:shadow-xl hover:shadow-blue-500/25 hover:from-gray-900/55 hover:to-blue-800/45 flex flex-col gap-3">
                <div class="flex items-center justify-center w-12 h-12 transition-colors rounded-lg bg-blue-400/15 group-hover:bg-blue-400/25">
                     <svg class="w-6 h-6 stroke-blue-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 11.21 12.77 10.5 12 10.5s-1.536.71-2.121 1.256c-1.172.879-1.172 2.303 0 3.182z" />
                    </svg>
                </div>
                <p class="text-sm font-normal text-blue-100 md:text-base text-shadow-sm">Pendapatan (Bulan Ini)</p>
                <h3 class="text-3xl font-bold md:text-4xl text-shadow-md">$250k</h3>
            </div>

            <!-- KARTU 3: UPTIME SERVER -->
            <div class="group flex-grow w-full md:w-auto md:min-w-[220px] md:max-w-[250px] p-6 rounded-xl bg-gradient-to-brfrom-gray-900/45 to-white-800/35 backdrop-blur-lg shadow-lg shadow-black/40 border border-blue-400/50 transition-all duration-300 ease-in-out hover:-translate-y-2 hover:scale-105 hover:shadow-xl hover:shadow-blue-500/25 hover:from-gray-900/55 hover:to-blue-800/45 flex flex-col gap-3">
                <div class="flex items-center justify-center w-12 h-12 transition-colors rounded-lg bg-blue-400/15 group-hover:bg-blue-400/25">
                     <svg class="w-6 h-6 stroke-blue-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 11.21 12.77 10.5 12 10.5s-1.536.71-2.121 1.256c-1.172.879-1.172 2.303 0 3.182z" />
                    </svg>
                </div>
                <p class="text-sm font-normal text-blue-100 md:text-base text-shadow-sm">Uptime Server</p>
                <h3 class="text-3xl font-bold md:text-4xl text-shadow-md">99.98%</h3>
            </div>

            <!-- KARTU 4: PROYEK BARU -->
            <div class="group flex-grow w-full md:w-auto md:min-w-[220px] md:max-w-[250px] p-6 rounded-xl bg-gradient-to-brfrom-gray-900/45 to-white-800/35 backdrop-blur-lg shadow-lg shadow-black/40 border border-blue-400/50 transition-all duration-300 ease-in-out hover:-translate-y-2 hover:scale-105 hover:shadow-xl hover:shadow-blue-500/25 hover:from-gray-900/55 hover:to-blue-800/45 flex flex-col gap-3">
                <div class="flex items-center justify-center w-12 h-12 transition-colors rounded-lg bg-blue-400/15 group-hover:bg-blue-400/25">
                     <svg class="w-6 h-6 stroke-blue-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 11.21 12.77 10.5 12 10.5s-1.536.71-2.121 1.256c-1.172.879-1.172 2.303 0 3.182z" />
                    </svg>
                </div>
                <p class="text-sm font-normal text-blue-100 md:text-base text-shadow-sm">Proyek Baru</p>
                <h3 class="text-3xl font-bold md:text-4xl text-shadow-md">142</h3>
            </div>
        </div>
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
