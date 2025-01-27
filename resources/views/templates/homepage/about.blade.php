<section class="bg-gray-200">
    <div class="container mx-auto py-12 md:py-16 lg:py-20">
        <div class="text-center">
            <h3 class="text-gray-700 text-2xl md:text-4xl font-bold">
                Tentang <span class="text-sky-700 font-serif">
                    JOKIIN<span class="text-xl md:text-3xl">IT</span>
                </span>
            </h3>
            <div class="h-2 rounded w-36 md:w-56 mx-auto bg-gradient-to-r from-blue-700 to-blue-300 my-4"></div>
        </div>
        <div class="grid px-4 mx-auto my-5 grid-cols-1 lg:grid-cols-2 gap-4 items-center">
            <div>
                <img class="rounded-3xl w-full md:max-w-3xl lg:max-w-2xl h-fit" 
                    src="{{ asset('images/programming.jpg') }}" 
                    alt="jokiinit.com" 
                    loading="lazy">
            </div>
            <div class="text-gray-700">
                <p class="text-base md:text-xl">
                    <span class="text-sky-700 font-bold">
                        JOKIIN<span class="text-sm md:text-lg">IT</span>
                    </span> telah hadir sejak awal tahun 2025 sebagai platform resmi yang menyediakan jasa pengerjaan tugas untuk membantu kebutuhan akademik Anda, baik tugas sekolah maupun tugas kuliah. 
                    Layanan kami mencakup berbagai bidang, termasuk 
                    <span class="text-sky-700 font-bold">Bidang IT</span> seperti pembuatan UI/UX website dan aplikasi, Laporan Praktikum, karya tulis ilmiah, pemrograman, pengembangan aplikasi, desain website, dan lainnya. Kami bahkan melayani pengerjaan Laporan Magang dan Skripsi juga loh!
                </p>
                <!-- Paragraf yang akan disembunyikan di mobile -->
                <div id="hidden-about" class="hidden lg:block">
                    <p class="text-base md:text-xl mt-2">
                        Dengan didukung oleh lebih dari <span class="text-sky-700 font-bold">17 tim penjoki profesional</span> yang telah melalui seleksi ketat, 
                        <span class="text-sky-700 font-bold">JOKIIN<span class="text-lg">IT</span></span> 
                        memastikan tugas Anda dikerjakan dengan cepat dan berkualitas. 
                        Saat ini, kami berhasil menyelesaikan <span class="text-sky-700 font-bold">100+ proyek</span> dari berbagai jenis tugas, menjadikan kami solusi terbaik untuk kebutuhan akademik Anda.
                    </p>
                    <p class="text-base md:text-xl mt-2 lg:hidden">
                        Tunggu apa lagi? Serahkan tugas Anda kepada tim 
                        <span class="text-sky-700 font-bold">
                            JOKIIN<span class="text-lg">IT</span>
                        </span>, dan biarkan kami menyelesaikannya untuk Anda!
                    </p>
                </div>
                <!-- Tombol "Baca Selengkapnya" -->
                <button id="button-about" type="button" class="mt-2 text-sky-700 font-bold text-sm md:text-base lg:hidden">
                    Baca Selengkapnya
                </button>
            </div>
        </div>
        
    </div>
</section>