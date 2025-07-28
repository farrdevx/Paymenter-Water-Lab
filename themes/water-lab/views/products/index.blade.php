<div class="grid gap-4 md:grid-cols-4">

 <style>
    .menu-container {
    width: 280px;
    padding: 20px;
    border-radius: 16px; /* Sudut melengkung */
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
    
    /* --- PROPERTI EFEK KACA --- */
    background-color: rgba(255, 255, 255, 0.15); /* Latar belakang transparan */
    backdrop-filter: blur(10px); /* Efek blur pada konten di belakangnya */
    -webkit-backdrop-filter: blur(10px); /* Untuk kompatibilitas browser Safari */
    border: 1px solid rgba(255, 255, 255, 0.3); /* Garis tepi tipis seperti kaca */
    /* -------------------------- */
}

/* Penampung untuk ikon agar mudah diatur posisinya */
.icon-wrapper {
    display: flex;
    justify-content: center;
    margin-bottom: 24px; /* Jarak antara ikon dan menu */
    border-bottom: 1px solid rgba(255, 255, 255, 0.2); /* Garis pemisah transparan */
    padding-bottom: 24px;
}

/* Lingkaran di belakang ikon */
.icon-circle {
    width: 50px;
    height: 50px;
    background-color: #0e7490;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Gaya untuk ikon SVG */
.icon-circle svg {
    color: #cffafe;
    width: 24px;
    height: 24px;
}

/* Menghilangkan gaya default dari daftar */
.menu-navigation ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

/* Memberi jarak antar item menu */
.menu-navigation li {
    margin-bottom: 8px;
}

.menu-navigation li:last-child {
    margin-bottom: 0;
}

/* Gaya untuk setiap tautan di menu */
.menu-navigation a {
    display: block;
    padding: 12px 16px;
    color: #e2e8f0; /* Warna teks dibuat lebih terang */
    text-decoration: none;
    border-radius: 8px;
    font-weight: 500;
    transition: background-color 0.2s ease, color 0.2s ease;
}

/* Efek saat kursor mouse diarahkan ke item (kecuali yang aktif) */
.menu-navigation a:not(.active):hover {
    background-color: rgba(255, 255, 255, 0.1);
    color: #ffffff;
}

/* Gaya khusus untuk item menu yang sedang aktif */
.menu-navigation a.active {
    background-color: rgba(14, 116, 144, 0.5); /* Background aktif dibuat transparan */
    color: #67e8f9; /* Warna teks dibuat lebih cerah */
}
 </style>

    <div class="menu-container">
        <div class="icon-wrapper">
            <div class="icon-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="8" y1="6" x2="21" y2="6"></line>
                    <line x1="8" y1="12" x2="21" y2="12"></line>
                    <line x1="8" y1="18" x2="21" y2="18"></line>
                    <line x1="3" y1="6" x2="3.01" y2="6"></line>
                    <line x1="3" y1="12" x2="3.01" y2="12"></line>
                    <line x1="3" y1="18" x2="3.01" y2="18"></line>
                </svg>
            </div>
        </div>

        <nav class="text-center menu-navigation">
            <h1 class="text-3xl font-bold">{{ $category->name }}</h1>
            <article class="prose dark:prose-invert" style="margin-bottom: 3px">
                {!! $category->description !!}
            </article>
            <hr style="margin-bottom: 12px">
            <ul>
                @foreach ($categories as $ccategory)
                <li>
                    <a class="active" href="{{ route('category.show', ['category' => $ccategory->slug]) }}" wire:navigate
                    @if ($category->id == $ccategory->id) @endif>
                    {{ $ccategory->name }}
                </a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
            
             <div class="flex flex-col col-span-3 gap-6">
                @if (count($childCategories) >= 1)
                <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 h-fit">
                    @foreach ($childCategories as $childCategory)   
            
                    <!-- Kartu Kategori 1 -->
                    <a href="{{ route('category.show', ['category' => $childCategory->slug]) }}" class="flex flex-col justify-start p-6 transition-all duration-300 ease-in-out border group bg-slate-900/50 backdrop-blur-md border-slate-800/80 rounded-xl hover:bg-sky-600/10 hover:border-sky-500 hover:-translate-y-1 hover:shadow-2xl hover:shadow-sky-500/10">
                        <div class="p-3 mb-4 transition-all duration-300 rounded-lg bg-slate-800/70 w-fit group-hover:bg-sky-500/20">
                            @if ($childCategory->image)
                            <img src="{{ Storage::url($childCategory->image) }}" alt="{{ $childCategory->name }}"
                                class="rounded-md">
                            @endif
                        </div>
                        <div class="flex flex-col">
                            <h2 class="text-xl font-bold transition-colors duration-300 text-slate-100 group-hover:text-sky-300">
                                {{ $childCategory->name }}
                            </h2>
                            @if(theme('show_category_description', true))
                            <article class="mt-2 prose dark:prose-invert">
                                {!! $childCategory->description !!}
                            </article>
                            @endif
                        </div>
                        <div class="flex items-end justify-end flex-grow mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="transition-all duration-300 size-5 text-slate-600 group-hover:text-sky-400 group-hover:translate-x-1">
                                <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </a>
             @endforeach
        </div>
        @endif

        <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 h-fit">
            @foreach ($products as $product)
            <div class="flex flex-col p-4 border rounded-lg bg-background-secondary hover:bg-background-secondary/80 border-neutral">
                @if(theme('small_images', false))
                <div class="flex items-center gap-x-3">
                    @endif
                    @if ($product->image)
                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                        class="rounded-md {{ theme('small_images', false) ? 'w-14 h-fit' : 'w-full object-cover object-center' }}">
                    @endif
                    <h2 class="text-xl font-bold">{{ $product->name }}</h2>
                    @if(theme('small_images', false))
                </div>
                @endif
                @if(theme('direct_checkout', false) && $product->description)
                <article class="prose dark:prose-invert">
                    {!! $product->description !!}
                </article>
                @endif
                <h3 class="mb-2 text-lg font-semibold">
                    {{ $product->price() }}
                </h3>
                @if (($product->stock > 0 || !$product->stock) && $product->price()->available && theme('direct_checkout', false))
                <a href="{{ route('products.checkout', ['category' => $category, 'product' => $product->slug]) }}"
                    wire:navigate>
                    <x-button.primary>{{ __('product.add_to_cart') }}</x-button.primary>
                </a>
                @else
                <a href="{{ route('products.show', ['category' => $product->category, 'product' => $product->slug]) }}"
                    wire:navigate>
                    <x-button.primary>
                        {{ __('general.view') }}
                    </x-button.primary>
                </a>
                @endif
            </div>
            @endforeach
        </div>


</div>
