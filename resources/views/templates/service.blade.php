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
                    <img src="{{ asset('images/programming.jpg') }}" alt="Product Image"
                        class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                </div>
                <div class="p-4 text-center text-gray-600 flex flex-col flex-grow">
                    <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                        JOKIIN<span class="text-base md:text-xl">IT</span> Apps – Jasa Pembuatan Aplikasi Mobile &
                        Website
                    </h3>
                    <p class="text-base lg:text-xl flex-grow">
                        Butuh aplikasi untuk skripsi, proyek organisasi, bisnis, atau startup?
                        <span class="text-sky-700 font-bold">
                            JOKIIN<span class="text-sm md:text-base">IT</span>
                        </span> siap bantu kamu mewujudkan ide menjadi aplikasi nyata, baik berbasis Android, iOS,
                        maupun Web.
                    </p>

                    <div id="hidden-subscribe" class="hidden">
                        <p class="text-base lg:text-xl mt-2">
                            Kami mengerjakan berbagai jenis aplikasi seperti sistem informasi, marketplace, katalog
                            produk, e-learning, dan lainnya.
                            Kamu bisa request desain, fitur, hingga teknologi yang diinginkan seperti Flutter, Laravel,
                            React, Firebase, dan sebagainya.
                        </p>
                        <p class="text-base lg:text-xl mt-2">
                            Cocok untuk mahasiswa, UMKM, organisasi, atau siapa pun yang ingin punya aplikasi sendiri.
                            Konsultasikan kebutuhanmu dan biarkan tim kami bantu mengembangkan solusinya! 💻📱
                        </p>
                    </div>

                    <button id="button-subscribe" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                        Baca Selengkapnya
                    </button>

                    <div class="flex mt-4 justify-center gap-x-2 md:gap-x-4">
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-lavender hover:bg-sky-500 text-white py-2 rounded-3xl font-semibold" onclick="window.location.href='/order'">
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
                    <img src="{{ asset('images/programming.jpg') }}" alt="Product Image"
                        class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                </div>
                <div class="p-4 text-center text-gray-600 flex flex-col flex-grow">
                    <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                        JOKIIN<span class="text-base md:text-xl">IT</span>
                        Express - Jasa Joki Tugas Secepat Kilat
                    </h3>
                    <p class="text-base lg:text-xl flex-grow">
                        Butuh tugas diselesaikan dengan cepat? Gunakan <span class="text-sky-700 font-semibold">
                            Paket Express dari JOKIINIT! </span>
                        Dengan paket ini, tugas Anda akan diprioritaskan dan diselesaikan dalam waktu singkat.
                    </p>
                    <div id="hidden-express" class="hidden">
                        <p class="text-base lg:text-xl mt-2">
                            Meskipun harganya sedikit lebih mahal dibandingkan paket lainnya, kami memastikan kualitas
                            dan kecepatan pengerjaan yang maksimal untuk memenuhi kebutuhan mendesak Anda!
                        </p>
                    </div>

                    <button id="button-express" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                        Baca Selengkapnya
                    </button>
                    <div class="flex mt-4 justify-center gap-x-2 md:gap-x-4">
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-lavender hover:bg-sky-500 text-white py-2 rounded-3xl font-semibold" onclick="window.location.href='/order'">Order
                            <span>
                                JOKIIN<span class="text-sm">IT</span>
                            </span></button>
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-zinc-100 hover:bg-zinc-200 text-lavender py-2 rounded-3xl font-semibold border border-sky-200">Konsultasi</button>
                    </div>
                </div>
            </div>

            <!-- Laprak -->
            <div class="service-item bg-white shadow rounded-3xl hidden flex-col h-full">
                <div class="relative">
                    <img src="{{ asset('images/programming.jpg') }}" alt="Product Image"
                        class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                </div>
                <div class="p-4 text-center text-gray-600 flex flex-col flex-grow">
                    <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                        JOKIIN<span class="text-base md:text-xl">IT</span> Laprak
                        - Jasa Joki Laporan Tugas & Praktikum IT
                    </h3>
                    <p class="text-base lg:text-xl flex-grow">
                        Dengan <span class="text-sky-700 font-semibold">
                            Jasa Joki Laporan Tugas & Praktikum IT</span>,
                        kamu akan mendapatkan laporan berkualitas tinggi, lengkap dengan format yang sesuai dan analisis
                        yang mendalam.
                    </p>
                    <div id="hidden-laprak" class="hidden">
                        <p class="text-base lg:text-xl mt-2">
                            Mulai dari coding, troubleshooting, hingga penulisan laporan, semuanya kami kerjakan dengan
                            detail dan profesional. Waktu dan tenagamu jadi lebih efisien, tanpa perlu repot memikirkan
                            tugas yang menumpuk.
                        </p>
                        <p class="text-base lg:text-xl mt-2">
                            Fokus saja pada hal penting lainnya, dan biarkan kami yang menangani tugas-tugas IT-mu.
                            Yuk, serahkan laporan tugas dan praktikum-mu kepada tim ahli dari <span
                                class="text-sky-700 font-bold">
                                JOKIIN<span class="text-sm md:text-base">IT</span>
                            </span>! 🎓
                        </p>
                    </div>

                    <button id="button-laprak" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                        Baca Selengkapnya
                    </button>
                    <div class="flex mt-4 justify-center gap-x-2 md:gap-x-4">
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-lavender hover:bg-sky-500 text-white py-2 rounded-3xl font-semibold" onclick="window.location.href='/order'">Order
                            <span>
                                JOKIIN<span class="text-sm">IT</span>
                            </span></button>
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-zinc-100 hover:bg-zinc-200 text-lavender py-2 rounded-3xl font-semibold border border-sky-200">Konsultasi</button>
                    </div>
                </div>
            </div>

            <!-- Tubes -->
            <div class="service-item bg-white shadow rounded-3xl hidden md:flex flex-col h-full">
                <div class="relative">
                    <img src="{{ asset('images/programming3.jpg') }}" alt="Product Image"
                        class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                </div>
                <div class="p-4 text-center text-gray-600 flex flex-col flex-grow">
                    <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                        JOKIIN<span class="text-base md:text-xl">IT</span> Tubes - Jasa Joki Tugas Besar dan Proyek IT
                    </h3>
                    <p class="text-base lg:text-xl flex-grow">
                        Tugas besar IT di akhir semester sering kali terasa berat, apalagi saat mendekati UAS.
                        Tapi jangan khawatir, kami siap membantu kamu menyelesaikan tugas besar dengan hasil terbaik!
                    </p>
                    <div id="hidden-tubes" class="hidden">
                        <p class="text-base lg:text-xl mt-2">
                            Dengan <span class="text-sky-700 font-semibold">
                                Jasa Joki Tugas Besar IT</span>, semua kebutuhan tugasmu—mulai dari analisis, coding,
                            implementasi, hingga dokumentasi—ditangani oleh tim profesional. Kami memastikan hasilnya
                            sesuai dengan standar dosen dan kebutuhan proyekmu.
                        </p>
                        <p class="text-base lg:text-xl mt-2">
                            💻 Fokuslah pada persiapan UAS atau hal penting lainnya, dan biarkan kami membantu
                            menyelesaikan tugas besarmu dengan cepat dan tepat waktu.
                            Yuk, percayakan tugas besar IT-mu kepada <span class="text-sky-700 font-bold">
                                JOKIIN<span class="text-sm md:text-base">IT</span>
                            </span>! 🎓 sekarang! 🚀
                        </p>
                    </div>

                    <button id="button-tubes" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                        Baca Selengkapnya
                    </button>
                    <div class="flex mt-4 justify-center gap-x-2 md:gap-x-4">
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-lavender hover:bg-sky-500 text-white py-2 rounded-3xl font-semibold" onclick="window.location.href='/order'">Order
                            <span>
                                JOKIIN<span class="text-sm">IT</span>
                            </span></button>
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-zinc-100 hover:bg-zinc-200 text-lavender py-2 rounded-3xl font-semibold border border-sky-200">Konsultasi</button>
                    </div>
                </div>
            </div>

            <!-- Karya Ilmiah -->
            <div class="service-item bg-white shadow rounded-3xl hidden md:flex flex-col h-full">
                <div class="relative">
                    <img src="{{ asset('images/programming.png') }}" alt="Product Image"
                        class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                </div>
                <div class="p-4 text-center text-gray-600 flex flex-col flex-grow">
                    <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                        JOKIIN<span class="text-base md:text-xl">IT</span>
                        - Jasa Joki Karya Ilmiah Bidang IT
                    </h3>
                    <p class="text-base lg:text-xl flex-grow">
                        Kami hadir untuk mempermudah perjalanan akademikmu! Dengan Jasa Joki IT dari <span
                            class="text-sky-700 font-bold">
                            JOKIIN<span class="text-sm md:text-base">IT</span>
                        </span>, semua kebutuhanmu, mulai dari penelitian hingga penulisan, akan diselesaikan dengan
                        profesional.
                    </p>
                    <div id="hidden-karya-ilmiah" class="hidden">
                        <p class="text-base lg:text-xl mt-2">
                            🔍 Topik IT seperti kecerdasan buatan, sistem informasi, pengembangan perangkat lunak, atau
                            keamanan siber bukanlah masalah bagi tim ahli kami. Kami menjamin hasil yang relevan, sesuai
                            standar akademik, dan bebas dari plagiarisme, sehingga kamu bisa tenang fokus pada hal lain.
                        </p>
                        <p class="text-base lg:text-xl mt-2">
                            Jangan biarkan deadline dan kompleksitas tugas menghambat langkahmu! Hubungi <span
                                class="text-sky-700 font-bold">
                                JOKIIN<span class="text-sm md:text-base">IT</span>
                            </span> sekarang untuk karya ilmiah dan makalah IT berkualitas yang sesuai dengan
                            keinginanmu! 🌟
                        </p>
                    </div>

                    <button id="button-karya-ilmiah" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                        Baca Selengkapnya
                    </button>
                    <div class="flex mt-4 justify-center gap-x-2 md:gap-x-4">
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-lavender hover:bg-sky-500 text-white py-2 rounded-3xl font-semibold" onclick="window.location.href='/order'">Order
                            <span>
                                JOKIIN<span class="text-sm">IT</span>
                            </span></button>
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-zinc-100 hover:bg-zinc-200 text-lavender py-2 rounded-3xl font-semibold border border-sky-200">Konsultasi</button>
                    </div>
                </div>
            </div>

            <!-- Layanan Joki Skripsi Bidang IT -->
            <div class="service-item bg-white shadow rounded-3xl hidden md:flex flex-col h-full">
                <div class="relative">
                    <img src="{{ asset('images/programming.png') }}" alt="Product Image"
                        class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                </div>
                <div class="p-4 text-center text-gray-600 flex flex-col flex-grow">
                    <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                        JOKIIN<span class="text-base md:text-xl">IT</span> – Skripsi IT Bikin Pusing?
                    </h3>
                    <p class="text-base lg:text-xl flex-grow">
                        Tenang! <span class="text-sky-700 font-bold">JOKIIN<span
                                class="text-sm md:text-base">IT</span></span> hadir untuk bantu kamu ngerjain skripsi
                        di bidang Teknologi Informasi, mulai dari analisis sistem, perancangan aplikasi, implementasi,
                        sampai dokumentasi lengkap.
                    </p>

                    <div id="hidden-skripsi" class="hidden">
                        <p class="text-base lg:text-xl mt-2 hidden md:block">
                            Cocok buat kamu yang lagi kejar deadline atau butuh bantuan teknis dalam pembuatan skripsi
                            berbasis IT. Kami punya tim berpengalaman di berbagai topik seperti website, mobile apps,
                            AI, IoT, dan lainnya.
                        </p>
                        <p class="text-base lg:text-xl mt-2">
                            Layanan ini disesuaikan dengan tingkat kesulitan dan permintaan kamu. Konsultasikan dulu
                            idemu, lalu tim kami bantu sesuaikan solusi terbaiknya. Skripsi jadi lebih ringan, lulus
                            jadi lebih dekat! 😎
                        </p>
                    </div>

                    <button id="button-skripsi" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                        Baca Selengkapnya
                    </button>

                    <div class="flex mt-4 justify-center gap-x-2 md:gap-x-4">
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-lavender hover:bg-sky-500 text-white py-2 rounded-3xl font-semibold" onclick="window.location.href='/order'">
                            Order <span>JOKIIN<span class="text-sm">IT</span></span>
                        </button>
                        <button
                            class="w-full cursor-pointer text-sm md:text-base bg-zinc-100 hover:bg-zinc-200 text-lavender py-2 rounded-3xl font-semibold border border-sky-200">
                            Konsultasi
                        </button>
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
