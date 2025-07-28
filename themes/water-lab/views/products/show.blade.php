<!-- =================================================================== -->
        <!-- BAGIAN DETAIL PRODUK (Hasil dari show.blade.php)                 -->
        <!-- =================================================================== -->
        <div class="mb-16">
            <h1 class="mb-6 text-2xl font-bold text-slate-400">Detail Produk</h1>
            
            <!-- Card Detail Produk -->
            <div class="flex flex-col grid-cols-2 gap-8 p-6 transition-all duration-300 border md:grid md:gap-12 bg-slate-900/50 backdrop-blur-lg border-sky-900/50 rounded-2xl md:p-8 hover:border-sky-500/70 hover:shadow-2xl hover:shadow-sky-500/10">

                <!-- Kolom Gambar -->
                <div class="flex items-center justify-center">
                    <img src="https://i.ibb.co/6P7D8m2/new-design-preview.png" alt="Product Image"
                        class="object-contain object-center w-full transition-transform duration-300 ease-in-out max-h-96 rounded-xl group-hover:scale-105">
                </div>

                <!-- Kolom Informasi Produk -->
                <div class="flex flex-col justify-center">

                    <!-- Status Stok -->
                    <span class="px-3 py-1 mb-4 text-xs font-medium text-green-400 border rounded-full me-2 bg-green-500/10 border-green-500/30 w-fit">
                        In Stock
                    </span>

                    <!-- Nama & Harga -->
                    <div class="flex flex-row items-start justify-between mb-4">
                        <div>
                            <h2 class="mb-2 text-4xl font-bold text-white lg:text-5xl">CALM AURA 1GB</h2>
                            <h3 class="text-3xl font-semibold text-transparent bg-gradient-to-r from-sky-400 to-cyan-300 bg-clip-text">
                                Rp 10.000,00
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
                        <p>Hosting standar kami dirancang untuk menyediakan layanan hosting terjangkau dengan kinerja stabil. Dengan sistem berbagi, layanan ini cocok untuk server dengan kebutuhan ringan hingga sedang.</p>
                    </article>

                    <!-- Tombol Aksi Utama -->
                    <a href="#" class="w-full">
                        <button class="w-full px-6 py-3 font-bold text-center text-white transition-all duration-300 ease-in-out rounded-lg shadow-lg bg-gradient-to-r shadow-sky-500/20 hover:scale-105 hover:shadow-xl hover:shadow-sky-500/40" style="background-color: rgb(14, 146, 27);">
                            Add to Cart
                        </button>
                    </a>
                </div>
            </div>
        </div>