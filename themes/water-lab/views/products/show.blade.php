<div style="margin-top: 50px">
    <h1 class="mb-1 text-2xl font-bold text-center text-white-500">Detail Produk</h1>

    <!-- Card Detail Produk -->
    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 h-fit">

        <!-- Kolom Gambar -->
        <div class="flex items-center justify-center">
            @if ($product->image)
            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                class="object-contain object-center w-full rounded-md h-96">
            @endif
        </div>

        <!-- Kolom Informasi Produk -->
        <div class="flex flex-col justify-center">

            <!-- Status Stok -->
            @if ($product->stock === 0)
            <span class="text-xs font-medium me-2 px-2.5 py-0.5 rounded bg-red-900 text-red-300 w-fit mb-3">
                {{ __('product.out_of_stock', ['product' => $product->name]) }}
            </span>
        @elseif($product->stock > 0)
            <span class="text-xs font-medium me-2 px-2.5 py-0.5 rounded bg-green-900 text-green-300 w-fit mb-3">
                {{ __('product.in_stock') }}
            </span>
        @endif

            <!-- Nama & Harga -->
            <div class="flex flex-row items-start justify-between mb-4">
                <div>
                    <h2 class="mb-2 text-4xl font-bold text-white lg:text-5xl">{{$product->name}}</h2>
                    <h3 class="text-3xl font-semibold text-transparent bg-gradient-to-r from-sky-400 to-cyan-300 bg-clip-text">
                        {{ $product->price() }}
                    </h3>
                </div>

                <!-- Tombol Ikon Keranjang -->
                <div>
                    <button class="p-3 transition-all duration-300 border rounded-full border-slate-700 text-slate-400 hover:text-white hover:bg-sky-500/20 hover:border-sky-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.763.746-1.858 1.705l-1.262 12.62A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.858-2.425l-1.262-12.62A1.875 1.875 0 0 0 18.487 6.75H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 9a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 0 1.5h-4.5A.75.75 0 0 1 9 12Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Deskripsi -->
            <article class="mb-6 prose prose-invert prose-p:text-slate-400 prose-headings:text-slate-200">
                <p> {!! $product->description !!} </p>
            </article>

            <!-- Tombol Aksi Utama -->
            @if ($product->stock !== 0 && $product->price()->available)
            <a href="{{ route('products.checkout', ['category' => $category, 'product' => $product->slug]) }}"
                wire:navigate>
                <x-button.primary>{{ __('product.add_to_cart') }}</x-button.primary>
            </a>
            @endif
        </div>
    </div>
</div>