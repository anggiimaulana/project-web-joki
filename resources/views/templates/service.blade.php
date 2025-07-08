<section class="bg-gray-50">
    <div class="container mx-auto py-8 md:py-12">
        <div class="text-center px-2 md:px-0">
            <h3 class="text-gray-700 text-2xl md:text-4xl font-bold">
                Layanan Jasa Joki Tugas By <span class="text-sky-700 font-serif">
                    JOKIIN<span class="text-xl md:text-3xl">IT</span>
                </span>
            </h3>
            <div class="h-2 rounded w-44 md:w-1/2 lg:w-1/3 mx-auto bg-gradient-to-r from-blue-700 to-blue-300 my-4">
            </div>
            <p class="text-base md:text-xl text-gray-700">
                Bingung memilih jenis tugas yang perlu dijokikan? Tenang, kami siap membantu! Konsultasikan tugasmu
                dengan Jasa Joki Tugas by
                <span class="text-sky-700 font-semibold">
                    JOKIIN<span class="text-sm md:text-base">IT</span>
                </span>
            </p>
        </div>
        <div class="mt-5 grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-4 md:px-0" id="services-list">
            <!-- Layanan Pembuatan Aplikasi -->
            <div class="service-item bg-white shadow rounded-3xl flex flex-col h-full">
                <div class="relative">
                    <img src="{{ asset('images/apps.jpg') }}" alt="Product Image"
                        class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                </div>
                <div class="p-4 text-center text-gray-600 flex flex-col flex-grow">
                    <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                        JOKIIN<span class="text-base md:text-xl">IT</span> Apps – Wujudkan Aplikasi Impianmu!
                    </h3>
                    <p class="text-base lg:text-xl flex-grow">
                        Punya ide keren tapi gak tahu cara mulai bikin aplikasinya? Atau butuh aplikasi buat bisnis,
                        tugas akhir, organisasi, atau start-up kamu?
                        <span class="text-sky-700 font-bold">JOKIINIT Apps</span> siap bantu kamu mulai dari nol hingga
                        jadi aplikasi beneran!
                    </p>

                    <div id="hidden-subscribe" class="hidden">
                        <p class="text-base lg:text-xl mt-2">
                            Mau bikin aplikasi mobile Android/iOS? Atau aplikasi web modern? Tenang, kami siap bantu
                            semua jenis aplikasi —
                            mulai dari sistem informasi, katalog produk, marketplace, hingga platform edukasi.
                        </p>
                        <p class="text-base lg:text-xl mt-2">
                            Request desain, fitur, dan teknologi sesuka kamu — dari Flutter, Laravel, React, hingga
                            Firebase. Semua bisa kami sesuaikan!
                            Cocok banget buat mahasiswa, UMKM, komunitas, atau siapa pun yang pengen tampil profesional
                            dengan aplikasi sendiri.
                        </p>
                        <p class="text-base lg:text-xl mt-2">
                            Yuk, konsultasi sekarang dan biar kami bantu mewujudkan solusi digitalmu! 🚀
                        </p>
                    </div>

                    <button id="button-subscribe" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                        Baca Selengkapnya
                    </button>

                    <div class="flex mt-4 justify-center gap-x-2 md:gap-x-4">
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-lavender hover:bg-sky-500 text-white py-2 rounded-3xl font-semibold"
                            onclick="window.location.href='/order'">
                            Order <span>JOKIIN<span class="text-sm">IT</span></span>
                        </button>
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-zinc-100 hover:bg-zinc-200 text-lavender py-2 rounded-3xl font-semibold border border-sky-200">
                            Konsultasi
                        </button>
                    </div>
                </div>
            </div>


            <!-- Express -->
            <div class="service-item bg-white shadow rounded-3xl flex flex-col h-full">
                <div class="relative">
                    <img src="{{ asset('images/express.jpg') }}" alt="Product Image"
                        class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                </div>
                <div class="p-4 text-center text-gray-600 flex flex-col flex-grow">
                    <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                        JOKIIN<span class="text-base md:text-xl">IT</span> Express – Solusi Kilat Tugas Mepet Deadline!
                    </h3>
                    <p class="text-base lg:text-xl flex-grow">
                        Dikejar deadline? Tugas belum kelar padahal waktunya udah mepet banget? Jangan panik!
                        <span class="text-sky-700 font-semibold">Paket Express dari JOKIINIT</span> hadir buat kamu yang
                        butuh bantuan super cepat!
                    </p>
                    <div id="hidden-express" class="hidden">
                        <p class="text-base lg:text-xl mt-2">
                            Kami kerjakan tugasmu dengan prioritas tinggi, tanpa ngorbanin kualitas.
                            Meskipun biaya sedikit lebih tinggi dari paket biasa, kecepatan dan kualitas adalah
                            prioritas kami.
                            Cocok banget buat kamu yang udah kepepet tapi tetap pengen hasil terbaik. Gak perlu
                            khawatir, tinggal order – kami langsung gas!
                        </p>
                    </div>

                    <button id="button-express" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                        Baca Selengkapnya
                    </button>
                    <div class="flex mt-4 justify-center gap-x-2 md:gap-x-4">
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-lavender hover:bg-sky-500 text-white py-2 rounded-3xl font-semibold"
                            onclick="window.location.href='/order'">Order
                            <span>
                                JOKIIN<span class="text-sm">IT</span>
                            </span></button>
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-zinc-100 hover:bg-zinc-200 text-lavender py-2 rounded-3xl font-semibold border border-sky-200">Konsultasi</button>
                    </div>
                </div>
            </div>


            <!-- Layanan Joki Desain Aplikasi, Desain Grafis & Animasi -->
            <div class="service-item bg-white shadow rounded-3xl hidden md:flex flex-col h-full">
                <div class="relative">
                    <img src="{{ asset('images/creative.jpg') }}" alt="Desain Kreatif"
                        class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                </div>
                <div class="p-4 text-center text-gray-600 flex flex-col flex-grow">
                    <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                        JOKIIN<span class="text-base md:text-xl">IT</span> CREATIVE – Desain Keren, Proyek Makin
                        Perfect!
                    </h3>
                    <p class="text-base lg:text-xl flex-grow">
                        Gak jago desain tapi pengen hasil yang estetik dan profesional? 🎨<br>
                        Tenang, <span class="text-sky-700 font-bold">JOKIIN<span class="text-sm md:text-base">IT</span>
                            CREATIVE</span> siap bantuin kamu bikin <span class="font-semibold text-sky-700">desain
                            aplikasi, konten grafis</span>, sampai <span class="font-semibold text-sky-700">animasi
                            presentasi</span> yang memukau!
                    </p>

                    <div id="hidden-creative" class="hidden">
                        <p class="text-base lg:text-xl mt-2 hidden md:block">
                            Kami melayani pembuatan UI/UX, konten digital, visual branding, animasi produk, dan desain
                            presentasi.
                            Cocok buat tugas kuliah, portofolio, promosi usaha, atau pitching proyek besar!
                        </p>
                        <p class="text-base lg:text-xl mt-2">
                            Cukup ceritain idemu, sisanya biar kami yang garap sampai jadi desain kece yang siap pakai!
                            💡<br>
                            Konsultasi? GRATIS tanpa ribet!
                        </p>
                    </div>

                    <button id="button-creative" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                        Baca Selengkapnya
                    </button>

                    <div class="flex mt-4 justify-center gap-x-2 md:gap-x-4">
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-lavender hover:bg-sky-500 text-white py-2 rounded-3xl font-semibold"
                            onclick="window.location.href='/order'">
                            Order <span>JOKIIN<span class="text-sm">IT</span></span>
                        </button>
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-zinc-100 hover:bg-zinc-200 text-lavender py-2 rounded-3xl font-semibold border border-sky-200">
                            Konsultasi
                        </button>
                    </div>
                </div>
            </div>



            <!-- Laprak -->
            <div class="service-item bg-white shadow rounded-3xl hidden flex-col h-full">
                <div class="relative">
                    <img src="{{ asset('images/laprak.jpg') }}" alt="Jasa Joki Laporan"
                        class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                </div>
                <div class="p-4 text-center text-gray-600 flex flex-col flex-grow">
                    <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                        JOKIIN<span class="text-base md:text-xl">IT</span> Laprak – Laporan Auto Jadi, Nilai Aman
                        Terkendali!
                    </h3>
                    <p class="text-base lg:text-xl flex-grow">
                        Lagi dikejar deadline <span class="font-semibold text-sky-700">laporan praktikum</span> atau
                        <span class="font-semibold text-sky-700">tugas akhir coding</span>? 📚💻
                        <br><span class="text-sky-700 font-bold">JOKIIN<span class="text-sm md:text-base">IT</span>
                            Laprak</span>
                        siap bantu kamu nyelesein laporan dari awal sampai akhir, lengkap, rapi, dan sesuai format
                        kampus!
                    </p>
                    <div id="hidden-laprak" class="hidden">
                        <p class="text-base lg:text-xl mt-2">
                            Mulai dari implementasi kode, dokumentasi, troubleshooting error, sampai penulisan analisis,
                            semua kami
                            kerjain dengan teliti dan sesuai standar dosen.
                        </p>
                        <p class="text-base lg:text-xl mt-2">
                            Gak usah stres mikirin tugas numpuk. Serahin aja ke tim <span
                                class="text-sky-700 font-bold">JOKIIN<span
                                    class="text-sm md:text-base">IT</span></span>
                            yang udah berpengalaman bantuin
                            ratusan mahasiswa
                            di seluruh Indonesia. 🎓✨
                        </p>
                    </div>

                    <button id="button-laprak" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                        Baca Selengkapnya
                    </button>

                    <div class="flex mt-4 justify-center gap-x-2 md:gap-x-4">
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-lavender hover:bg-sky-500 text-white py-2 rounded-3xl font-semibold"
                            onclick="window.location.href='/order'">
                            Order <span>JOKIIN<span class="text-sm">IT</span></span>
                        </button>
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-zinc-100 hover:bg-zinc-200 text-lavender py-2 rounded-3xl font-semibold border border-sky-200">
                            Konsultasi
                        </button>
                    </div>
                </div>
            </div>


            <!-- Tubes -->
            <div class="service-item bg-white shadow rounded-3xl hidden md:flex flex-col h-full">
                <div class="relative">
                    <img src="{{ asset('images/tubes-proyek.jpg') }}" alt="Jasa Joki Tugas Besar & Proyek IT"
                        class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                </div>
                <div class="p-4 text-center text-gray-600 flex flex-col flex-grow">
                    <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                        JOKIIN<span class="text-base md:text-xl">IT</span> Tubes – Tugas Besar & Proyek IT? Serahin Aja
                        ke Kami!
                    </h3>
                    <p class="text-base lg:text-xl flex-grow">
                        Pusing mikirin <span class="font-semibold text-sky-700">Tubes atau Proyek Akhir</span> yang
                        belum kelar
                        padahal UAS udah mepet? 😵‍💫
                        <br><span class="text-sky-700 font-bold">JOKIIN<span class="text-sm md:text-base">IT</span>
                            Tubes</span> siap bantu kamu dari awal sampai akhir—coding,
                        laporan, dokumentasi, semua beres!
                    </p>
                    <div id="hidden-tubes" class="hidden">
                        <p class="text-base lg:text-xl mt-2">
                            Tim kami terbiasa ngerjain tugas besar mulai dari analisis kebutuhan, desain sistem,
                            backend/frontend,
                            API, sampai deployment. Dijamin hasilnya sesuai standar dosen & siap presentasi!
                        </p>
                        <p class="text-base lg:text-xl mt-2">
                            Fokus aja ke UAS atau kegiatan lain, tugas besar biar kami yang beresin. ✨
                            Percayain tugas pentingmu ke <span class="text-sky-700 font-bold">JOKIIN<span
                                    class="text-sm md:text-base">IT</span></span> dan rasakan sendiri hasilnya: cepat,
                            rapi, dan
                            tanpa drama! 🚀
                        </p>
                    </div>

                    <button id="button-tubes" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                        Baca Selengkapnya
                    </button>

                    <div class="flex mt-4 justify-center gap-x-2 md:gap-x-4">
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-lavender hover:bg-sky-500 text-white py-2 rounded-3xl font-semibold"
                            onclick="window.location.href='/order'">
                            Order <span>JOKIIN<span class="text-sm">IT</span></span>
                        </button>
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-zinc-100 hover:bg-zinc-200 text-lavender py-2 rounded-3xl font-semibold border border-sky-200">
                            Konsultasi
                        </button>
                    </div>
                </div>
            </div>


            <!-- Karya Ilmiah -->
            <div class="service-item bg-white shadow rounded-3xl hidden md:flex flex-col h-full">
                <div class="relative">
                    <img src="{{ asset('images/karya-ilmiah.jpg') }}" alt="Jasa Karya Ilmiah IT"
                        class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                </div>
                <div class="p-4 text-center text-gray-600 flex flex-col flex-grow">
                    <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                        JOKIIN<span class="text-base md:text-xl">IT</span> Karya Ilmiah – Artikel & Makalah IT? Biar
                        Kami yang Beresin!
                    </h3>

                    <p class="text-base lg:text-xl flex-grow">
                        Ribet ngerjain <span class="font-semibold text-sky-700">skripsi</span>, <span
                            class="font-semibold text-sky-700">makalah ilmiah</span>, atau <span
                            class="font-semibold text-sky-700">artikel jurnal</span> IT? 😓
                        <br>Tenang, <span class="text-sky-700 font-bold">JOKIIN<span
                                class="text-sm md:text-base">IT</span></span> siap bantu dari riset awal, metodologi,
                        hingga bab
                        akhir!
                    </p>
                    <div id="hidden-karya-ilmiah" class="hidden">
                        <p class="text-base lg:text-xl mt-2">
                            Tim kami ahli di topik IT seperti AI, IoT, pengembangan sistem, keamanan siber, hingga data
                            science.
                            Semua dikerjakan sesuai kaidah akademik, bebas plagiarisme, dan siap diuji di hadapan dosen
                            pembimbing.
                        </p>
                        <p class="text-base lg:text-xl mt-2">
                            Kamu tinggal fokus kuliah atau persiapan sidang—biar tim kami yang beresin laporan dan
                            analisisnya. 🎓
                            <br><span class="text-sky-700 font-bold">JOKIIN<span
                                    class="text-sm md:text-base">IT</span></span> siap jadi partner terbaikmu buat
                            karya ilmiah
                            berkualitas tinggi!
                        </p>
                    </div>

                    <button id="button-karya-ilmiah" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                        Baca Selengkapnya
                    </button>

                    <div class="flex mt-4 justify-center gap-x-2 md:gap-x-4">
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-lavender hover:bg-sky-500 text-white py-2 rounded-3xl font-semibold"
                            onclick="window.location.href='/order'">
                            Order <span>JOKIIN<span class="text-sm">IT</span></span>
                        </button>
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-zinc-100 hover:bg-zinc-200 text-lavender py-2 rounded-3xl font-semibold border border-sky-200">
                            Konsultasi
                        </button>
                    </div>
                </div>
            </div>


            <!-- lainnya -->
            <div class="service-item bg-white shadow rounded-3xl hidden md:flex flex-col h-full">
                <div class="relative">
                    <img src="{{ asset('images/non-it.jpg') }}" alt="Product Image"
                        class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                </div>
                <div class="p-4 text-center text-gray-600 flex flex-col flex-grow">
                    <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                        JOKIIN<span class="text-base md:text-xl">IT</span> Non-IT – Tugas Bukan IT? Boleh Banget, Coba
                        Dulu Konsultasi! 💬
                    </h3>

                    <p class="text-base lg:text-xl flex-grow">
                        Selain bidang IT,
                        <span class="text-sky-700 font-bold">
                            JOKIIN<span class="text-sm md:text-base">IT</span>
                        </span>juga menerima pengerjaan tugas di berbagai bidang non-IT, seperti makalah, essay atau
                        karya ilmiah, matematika, analisis, laporan, presentasi, dan lainnya.
                    </p>
                    <div id="hidden-lainnya" class="hidden">
                        <p class="text-base lg:text-xl mt-2 hidden md:block">
                            Kami memahami bahwa tidak semua tugas akademik berkaitan dengan teknologi, sehingga kami
                            berupaya memberikan solusi terbaik bagi Anda yang membutuhkan bantuan di bidang lain.
                        </p>
                        <p class="text-base lg:text-xl mt-2">
                            Layanan ini tersedia berdasarkan kesanggupan worker, dan harga akan disesuaikan dengan
                            tingkat kesulitan serta kompleksitas tugas.
                            Jika worker tidak dapat mengerjakannya, maka tugas tersebut tidak bisa kami proses. Jadi,
                            pastikan untuk menghubungi kami terlebih dahulu untuk memastikan ketersediaan! 😊
                        </p>
                    </div>

                    <button id="button-lainnya" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                        Baca Selengkapnya
                    </button>

                    <div class="flex mt-4 justify-center gap-x-2 md:gap-x-4">
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-lavender hover:bg-sky-500 text-white py-2 rounded-3xl font-semibold">Order
                            <span>
                                JOKIIN<span class="text-sm">IT</span>
                            </span></button>
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-zinc-100 hover:bg-zinc-200 text-lavender py-2 rounded-3xl font-semibold border border-sky-200">Konsultasi</button>
                    </div>
                </div>
            </div>


            {{-- Lebih banyak/sedikit --}}
            <div class="col-span-full flex justify-center">
                <button id="show-more"
                    class="bg-lavender hover:bg-sky-600 text-sm md:text-base text-white py-2 w-40 font-semibold rounded-3xl transition-all duration-300 md:hidden">
                    Lihat Lebih Banyak
                </button>
                <button id="show-less"
                    class="bg-lavender hover:bg-sky-600 text-sm md:text-base text-white py-2 w-40 font-semibold rounded-3xl transition-all duration-300 hidden">
                    Lebih Sedikit
                </button>
            </div>
        </div>
    </div>
</section>
