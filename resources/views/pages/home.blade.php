@extends('layouts.main')

@section('title', $title)

@section('data')
    <div>
        <!-- Hero Section -->
        <section class="bg-lavender relative">
            <div class="container px-6 md:px-0 mx-auto flex flex-col lg:flex-row items-center">
                <div class="max-w-3xl pt-28 pb-16 md:pt-36 md:pb-24 lg:pt-64 lg:pb-44 text-zinc-100">
                    <p class="italic text-sm md:text-base font-bold">Jasa Joki Tugas <strong class="font-serif">Bidang IT</strong> Murah, Cepat, &
                        Berkualitas</p>
                    <h2 class="text-2xl font-serif md:text-4xl lg:text-5xl font-bold leading-tight my-4 lg:mb-6 md:mt-0">
                        <span class="font-bold lg:text-5xl">
                            JOKIIN<span class="text-xl md:text-2xl lg:text-4xl">IT:</span>
                        </span> <br class="mt-3">Hasil Super
                        <span id="desc"
                            class="text-zinc-200 transition-opacity duration-1000 ease-in-out text-2xl md:text-4xl">Profesional</span>
                    </h2>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full max-w-lg" viewBox="0 0 548 15" fill="none">
                        <path d="M1 14C54.8932 10.1481 239.544 2.15556 547 1" stroke="#2EB5C0" stroke-width="2"
                            stroke-linecap="round"></path>
                        <path d="M2 8C128.553 4.98151 414.327 0.755614 545 8" stroke="#2EB5C0" stroke-width="2"
                            stroke-linecap="round"></path>
                    </svg>
                    <div class="relative flex lg:hidden my-6">
                        <div class="rounded-full overflow-hidden bg-white">
                            <img src="{{ asset('images/programming3.jpg') }}" 
                                alt="Belajar"
                                class="w-60 max-w-full object-cover"
                                loading="lazy"
                            >
                        </div>
                    </div>
                    <p class="text-sm md:text-lg font-semibold my-6">
                        Platform Bimbingan Belajar dan Pengerjaan Tugas Online di <strong>Bidang IT</strong> Terbaik dan
                        Terpercaya se-Indonesia.
                    </p>
                    <div class="flex flex-wrap gap-2 md:gap-4">
                        {{-- mobile --}}
                        <button onclick="self()"
                            class="cursor-pointer text-sm bg-blue-400 w-40 py-2 lg:h-10 px-2 rounded-3xl text-white font-bold hover:bg-sky-600 flex md:hidden items-center justify-center">
                            Order JOKIINIT
                        </button>
                        <button onclick="order()"
                            class="cursor-pointer text-sm bg-white w-36 py-2 lg:h-10 px-2 rounded-3xl text-sky-500 font-bold hover:bg-gray-100 flex md:hidden items-center justify-center">
                            Support Team
                        </button>

                        {{-- desktop --}}
                        <button onclick="self()"
                            class="hidden cursor-pointer text-sm md:text-base bg-blue-400 lg:max-w-full md:w-60 w-36 py-2 lg:h-10 px-4 lg:px-6 rounded-3xl font-bold hover:bg-sky-600 md:flex items-center justify-center">
                            Order JOKIINIT
                        </button>
                        <button onclick="order()"
                            class="hidden cursor-pointer text-sm md:text-base bg-white lg:max-w-full md:w-60 w-44 py-2 lg:h-10 px-4 lg:px-6 rounded-3xl text-sky-500 font-bold hover:bg-gray-100 md:flex items-center justify-center">
                            JOKIINIT Support Team
                        </button>
                    </div>
                </div>

                <div class="relative hidden lg:flex mt-10">
                    <div class="rounded-full overflow-hidden bg-white">
                        <img 
                            src="{{ asset('images/programming3.jpg') }}" 
                            alt="Belajar" 
                            class="w-full object-cover"
                            loading="lazy"
                        >
                    </div>
                </div>

                <!-- Logo Code -->
                <div class="code absolute top-24 md:top-28 lg:top-56 left-6 lg:left-10 text-xl lg:text-3xl text-sky-100 ">
                    <i class="bx bx-code-alt"></i>
                </div>

                <div class="absolute text-3xl lg:text-4xl text-sky-300 bottom-48 md:top-72 lg:top-1/3 right-9 md:right-2/4 lg:right-16">
                    <div class="flex gap-x-3 md:gap-x-4 pb-1 lg:pb-2">
                        <i class='bx bxs-file-pdf'></i>
                        <i class='bx bxs-file-doc' ></i>
                        <i class='bx bxl-flutter'></i>
                    </div>
                    <div class="flex gap-x-3 md:gap-x-4 py-1 lg:py-2">
                        <i class='bx bxl-html5'></i>
                        <i class='bx bxl-typescript'></i>
                        <i class='bx bxl-python'></i>
                    </div>
                    <div class="flex gap-x-3 md:gap-x-4 py-1 lg:py-2">
                        <i class='bx bxl-javascript'></i>
                        <i class='bx bxl-nodejs'></i>
                        <i class='bx bxl-php'></i>
                    </div>
                    <div class="flex gap-x-3 md:gap-x-4 py-1 lg:py-2">
                        <i class='bx bxl-figma'></i>
                        <i class='bx bxl-vuejs'></i>
                        <i class='bx bxl-bootstrap'></i>
                    </div>
                    <div class="flex gap-x-3 md:gap-x-4 py-1 lg:py-2">
                        <i class='bx bxl-java'></i>
                        <i class='bx bxl-tailwind-css'></i>
                        <i class='bx bxl-go-lang'></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="bg-gray-200">
            <div class="container mx-auto py-12 md:py-16 lg:py-20">
                <div class="text-center">
                    <h3 class="text-gray-700 text-2xl md:text-4xl font-bold">
                        Tentang <span class="text-sky-700">
                            JOKIIN<span class="text-xl md:text-3xl">IT</span>
                        </span>
                    </h3>
                    <div class="h-2 rounded w-36 md:w-56 mx-auto bg-gradient-to-r from-blue-700 to-blue-300 my-4"></div>
                </div>
                <div class="grid px-4 mx-auto my-5 md:my-10 grid-cols-1 lg:grid-cols-2 gap-4 items-center">
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
                        <div id="hidden-content" class="hidden lg:block">
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
                        <button id="toggle-button" class="mt-2 text-sky-700 font-bold text-sm md:text-base lg:hidden">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>
                
            </div>
        </section>

        {{-- Rating --}}
        <section class="bg-lavender">
            <div class="container mx-auto py-8">
                <div class="flex flex-col md:flex-row justify-center items-center md:items-stretch gap-4 md:gap-2 lg:gap-4">
                    <div class="text-center text-rose-300 text-3xl md:text-4xl lg:text-5xl flex flex-col items-center w-full max-w-60 md:max-w-64 p-2">
                        <i class='bx bxs-group mb-1'></i>
                        <h4 class="text-2xl lg:text-3xl text-zinc-200 font-bold">100+</h4>
                        <p class="text-sm md:text-base text-zinc-200">
                            Pengguna Jasa Joki Tugas di 
                            <span class="font-semibold">JOKIIN<span class="text-sm">IT</span></span>
                        </p>
                    </div>
                    <div class="text-center text-green-300 text-3xl md:text-4xl lg:text-5xl flex flex-col items-center w-full max-w-60 md:max-w-64 p-2">
                        <i class='bx bxs-graduation mb-1'></i>
                        <h4 class="text-2xl lg:text-3xl text-zinc-200 font-bold">15+</h4>
                        <p class="text-sm md:text-base text-zinc-200">
                            Tim Pengajar 
                            <span class="font-semibold">JOKIIN<span class="text-sm">IT</span></span>
                        </p>
                    </div>
                    <div class="text-center text-fuchsia-200 text-3xl md:text-4xl lg:text-5xl flex flex-col items-center w-full max-w-60 md:max-w-64 p-2">
                        <i class='bx bxs-user mb-1'></i>
                        <h4 class="text-2xl lg:text-3xl text-zinc-200 font-bold ">100%</h4>
                        <p class="text-sm md:text-base text-zinc-200">
                            Pengguna Jasa Joki Tugas 
                            <span class="font-semibold">JOKIIN<span class="text-sm">IT</span></span>
                            Mendapatkan Nilai Baik
                        </p>
                    </div>
                    <div class="text-center text-amber-300 text-3xl md:text-4xl lg:text-5xl flex flex-col items-center w-full max-w-60 md:max-w-64 p-2">
                        <i class='bx bxs-star mb-1'></i>
                        <h4 class="text-2xl lg:text-3xl text-zinc-200 font-bold ">9.8/10</h4>
                        <p class="text-sm md:text-base text-zinc-200">Tingkat Kepuasan Pengguna</p>
                    </div>
                </div>
            </div>
        </section>
        
        {{-- Service --}}
        <section class="bg-gray-200">
            <div class="container mx-auto py-12 md:py-16 lg:py-20">
                <div class="text-center px-2 md:px-0">
                    <h3 class="text-gray-700 text-2xl md:text-4xl font-bold">
                        Service Jasa Joki Tugas By <span class="text-sky-700">
                            JOKIIN<span class="text-xl md:text-3xl">IT</span>
                        </span>
                    </h3>
                    <div class="h-2 rounded w-44 md:w-1/2 lg:w-1/3 mx-auto bg-gradient-to-r from-blue-700 to-blue-300 my-4"></div>
                    <p class="text-base md:text-lg text-gray-700">
                        Bingung memilih jenis tugas yang perlu dijokikan? Tenang, kami siap membantu! Konsultasikan tugasmu dengan Jasa Joki Tugas by
                        <span class="text-sky-700 font-semibold">
                            JOKIIN<span class="text-sm md:text-base">IT</span>
                        </span>
                    </p>
                </div>
                <div class="my-5 md:my-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3 px-4 md:px-0">
                    <!-- Berlangganan -->
                    <div class="bg-white shadow rounded-3xl">
                        <div class="relative">
                            <img src="{{ asset('images/programming.jpg') }}" alt="Product Image" class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                        </div>
                        <div class="p-4 text-center text-gray-600">
                            <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                                Subscription JOKIIN<span class="text-base md:text-xl">IT</span>
                                - Jasa Joki Tugas IT Unlimitied
                            </h3>
                            <p class="text-base lg:text-xl">
                                Untuk kamu yang aktif berorganisasi, sibuk mengejar karier, atau sekadar malas mengerjakan tugas kuliah, <span class="text-sky-700 font-semibold">
                                    Jasa Joki Tugas Subscription
                                </span> dari <span class="text-sky-700 font-bold">
                                    JOKIIN<span class="text-sm md:text-base">IT</span>
                                </span> adalah solusi terbaik! 
                            </p>
                            <div id="hidden-subscribe" class="hidden">
                                <p class="text-base lg:text-xl mt-2">
                                    Kami siap membantumu menyelesaikan tugas dengan cepat dan tepat, tanpa mengganggu jadwal sibukmu. 
                                    Waktumu bisa digunakan untuk hal lain yang lebih penting, sementara kami yang mengurus tugasmu. Yuk, serahkan tugasmu kepada kami sekarang! 🚀
                                </p>
                            </div>

                            <button id="button-subscribe" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                                Baca Selengkapnya
                            </button>
                            <div class="flex gap-2 md:gap-4">
                                <button class="mt-4 w-full cursor-pointer bg-lavender hover:bg-sky-500 text-zinc-200 py-1 md:py-2 rounded-2xl font-bold">Konsultasi</button>
                                <button class="mt-4 w-full cursor-pointer bg-zinc-100 hover:bg-zinc-200 text-lavender py-1 md:py-2 rounded-2xl font-bold">Detail</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Laprak -->
                    <div class="bg-white shadow rounded-3xl">
                        <div class="relative">
                            <img src="{{ asset('images/programming.jpg') }}" alt="Product Image" class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                        </div>
                        <div class="p-4 text-center text-gray-600">
                            <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                                JOKIIN<span class="text-base md:text-xl">IT</span>
                                - Jasa Joki Laporan Tugas & Praktikum IT
                            </h3>
                            <p class="text-base lg:text-xl">
                                Dengan <span class="text-sky-700 font-semibold">
                                    Jasa Joki Laporan Tugas & Praktikum IT</span>, 
                                    kamu akan mendapatkan laporan berkualitas tinggi, lengkap dengan format yang sesuai dan analisis yang mendalam.
                            </p>
                            <div id="hidden-laprak" class="hidden">
                                <p class="text-base lg:text-xl mt-2">
                                    Mulai dari coding, troubleshooting, hingga penulisan laporan, semuanya kami kerjakan dengan detail dan profesional. Waktu dan tenagamu jadi lebih efisien, tanpa perlu repot memikirkan tugas yang menumpuk.
                                </p>
                                <p class="text-base lg:text-xl mt-2">
                                    Fokus saja pada hal penting lainnya, dan biarkan kami yang menangani tugas-tugas IT-mu. 
                                    Yuk, serahkan laporan tugas dan praktikum-mu kepada tim ahli dari <span class="text-sky-700 font-bold">
                                        JOKIIN<span class="text-sm md:text-base">IT</span>
                                    </span>! 🎓
                                </p>
                            </div>

                            <button id="button-laprak" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                                Baca Selengkapnya
                            </button>
                            <div class="flex gap-2 md:gap-4">
                                <button class="mt-4 w-full cursor-pointer bg-lavender hover:bg-sky-500 text-zinc-200 py-1 md:py-2 rounded-2xl font-bold">Konsultasi</button>
                                <button class="mt-4 w-full cursor-pointer bg-zinc-100 hover:bg-zinc-200 text-lavender py-1 md:py-2 rounded-2xl font-bold">Detail</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Tubes -->
                    <div class="bg-white shadow rounded-3xl">
                        <div class="relative">
                            <img src="{{ asset('images/programming3.jpg') }}" alt="Product Image" class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                        </div>
                        <div class="p-4 text-center text-gray-600">
                            <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                                JOKIIN<span class="text-base md:text-xl">IT</span> - Jasa Joki Tugas Besar IT
                            </h3>
                            <p class="text-base lg:text-xl">
                                Tugas besar IT di akhir semester sering kali terasa berat, apalagi saat mendekati UAS. 
                                Tapi jangan khawatir, kami siap membantu kamu menyelesaikan tugas besar dengan hasil terbaik!
                            </p>
                            <div id="hidden-tubes" class="hidden">
                                <p class="text-base lg:text-xl mt-2">
                                    Dengan <span class="text-sky-700 font-semibold">
                                        Jasa Joki Tugas Besar IT</span>, semua kebutuhan tugasmu—mulai dari analisis, coding, implementasi, hingga dokumentasi—ditangani oleh tim profesional. Kami memastikan hasilnya sesuai dengan standar dosen dan kebutuhan proyekmu.
                                </p>
                                <p class="text-base lg:text-xl mt-2">
                                    💻 Fokuslah pada persiapan UAS atau hal penting lainnya, dan biarkan kami membantu menyelesaikan tugas besarmu dengan cepat dan tepat waktu. 
                                    Yuk, percayakan tugas besar IT-mu kepada <span class="text-sky-700 font-bold">
                                        JOKIIN<span class="text-sm md:text-base">IT</span>
                                    </span>! 🎓 sekarang! 🚀
                                </p>
                            </div>

                            <button id="button-tubes" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                                Baca Selengkapnya
                            </button>
                            <div class="flex gap-2 md:gap-4">
                                <button class="mt-4 w-full cursor-pointer bg-lavender hover:bg-sky-500 text-zinc-200 py-1 md:py-2 rounded-2xl font-bold">Konsultasi</button>
                                <button class="mt-4 w-full cursor-pointer bg-zinc-100 hover:bg-zinc-200 text-lavender py-1 md:py-2 rounded-2xl font-bold">Detail</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Karya Ilmiah -->
                    <div class="bg-white shadow rounded-3xl">
                        <div class="relative">
                            <img src="{{ asset('images/programming.png') }}" alt="Product Image" class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                        </div>
                        <div class="p-4 text-center text-gray-600">
                            <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                                JOKIIN<span class="text-base md:text-xl">IT</span>
                                - Jasa Joki Karya Ilmiah Bidang IT
                            </h3>
                            <p class="text-base lg:text-xl">
                                Kami hadir untuk mempermudah perjalanan akademikmu! Dengan Jasa Joki IT dari <span class="text-sky-700 font-bold">
                                    JOKIIN<span class="text-sm md:text-base">IT</span>
                                </span>, semua kebutuhanmu, mulai dari penelitian hingga penulisan, akan diselesaikan dengan profesional.
                            </p>
                            <div id="hidden-karya-ilmiah" class="hidden">
                                <p class="text-base lg:text-xl mt-2">
                                    🔍 Topik IT seperti kecerdasan buatan, sistem informasi, pengembangan perangkat lunak, atau keamanan siber bukanlah masalah bagi tim ahli kami. Kami menjamin hasil yang relevan, sesuai standar akademik, dan bebas dari plagiarisme, sehingga kamu bisa tenang fokus pada hal lain.
                                </p>
                                <p class="text-base lg:text-xl mt-2">
                                    Jangan biarkan deadline dan kompleksitas tugas menghambat langkahmu! Hubungi <span class="text-sky-700 font-bold">
                                        JOKIIN<span class="text-sm md:text-base">IT</span>
                                    </span> sekarang untuk karya ilmiah dan makalah IT berkualitas yang sesuai dengan keinginanmu! 🌟
                                </p>
                            </div>

                            <button id="button-karya-ilmiah" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                                Baca Selengkapnya
                            </button>
                            <div class="flex gap-2 md:gap-4">
                                <button class="mt-4 w-full cursor-pointer bg-lavender hover:bg-sky-500 text-zinc-200 py-1 md:py-2 rounded-2xl font-bold">Konsultasi</button>
                                <button class="mt-4 w-full cursor-pointer bg-zinc-100 hover:bg-zinc-200 text-lavender py-1 md:py-2 rounded-2xl font-bold">Detail</button>
                            </div>
                        </div>
                    </div>

                    <!-- Magang -->
                    <div class="bg-white shadow rounded-3xl">
                        <div class="relative">
                            <img src="{{ asset('images/programming.png') }}" alt="Product Image" class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                        </div>
                        <div class="p-4 text-center text-gray-600">
                            <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                                JOKIIN<span class="text-base md:text-xl">IT</span>
                                - Jasa Joki Laporan Magang IT
                            </h3>
                            <p class="text-base lg:text-xl">Dengan layanan ini, kamu hanya perlu mengirimkan data-data yang diperlukan, dan kami akan menyusun laporan magangmu dengan rapi dan sesuai dengan arahan serta instruksi yang kamu berikan.</p>
                            <div id="hidden-magang" class="hidden">
                                <p class="text-base lg:text-xl mt-2">
                                    Tidak hanya itu, kami juga memastikan hasilnya sesuai dengan format dan kebutuhanmu. Yuk, wujudkan laporan magang terbaikmu bersama <span class="text-sky-700 font-semibold">
                                        JOKIIN<span class="text-sm md:text-base">IT</span>
                                    </span>!
                                </p>
                            </div>

                            <button id="button-magang" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                                Baca Selengkapnya
                            </button>

                            <div class="flex gap-2 md:gap-4">
                                <button class="mt-4 w-full cursor-no-drop bg-lavender hover:bg-sky-500 text-zinc-200 py-1 md:py-2 rounded-2xl font-bold" disabled>Coming Soon</button>
                                {{-- <button class="mt-4 w-full cursor-pointer bg-zinc-100 hover:bg-zinc-200 text-lavender py-1 md:py-2 rounded-2xl font-bold">Detail</button> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Skripsi -->
                    <div class="bg-white shadow rounded-3xl">
                        <div class="relative">
                            <img src="{{ asset('images/programming.png') }}" alt="Product Image" class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                        </div>
                        <div class="p-4 text-center text-gray-600">
                            <h3 class="text-xl md:text-2xl text-lavender font-bold mb-2 md:mb-4">
                                JOKIIN<span class="text-base md:text-xl">IT</span>
                                - Jasa Joki Tugas Akhir dan Skripsi IT
                            </h3>
                            <p class="text-base lg:text-xl">
                                Bingung dengan skripsi? Tenang, 
                                <span class="text-sky-700 font-bold">
                                    JOKIIN<span class="text-sm md:text-base">IT</span>
                                </span> hadir untuk membantu kamu! Dengan layanan Jasa Joki Skripsi, kamu bisa mendapatkan bimbingan langsung dari tim ahli kami.
                            </p>
                            <div id="hidden-skripsi" class="hidden">
                                <p class="text-base lg:text-xl mt-2">
                                    Tidak hanya membantu bimbingan, kami juga siap mengeksekusi skripsi kamu sesuai kesepakatan bersama. Kamu tetap bisa memantau setiap progress pengerjaannya, dari awal hingga selesai. Yuk, wujudkan skripsi impianmu dengan 
                                    <span class="text-sky-700 font-semibold">
                                        JOKIIN<span class="text-sm md:text-base">IT</span>
                                    </span>!
                                </p>
                            </div>

                            <button id="button-skripsi" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                                Baca Selengkapnya
                            </button>

                            <div class="flex gap-2 md:gap-4">
                                <button class="mt-4 w-full cursor-no-drop bg-lavender hover:bg-sky-500 text-zinc-200 py-1 md:py-2 rounded-2xl font-bold" disabled>Coming Soon</button>
                                {{-- <button class="mt-4 w-full cursor-pointer bg-zinc-100 hover:bg-zinc-200 text-lavender py-1 md:py-2 rounded-2xl font-bold">Detail</button> --}}
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        {{-- How To Order --}}
        <section class="bg-lavender">
            <div class="container mx-auto py-12 md:py-16 lg:py-20">
                <div class="text-center px-2 md:px-0">
                    <h3 class="text-zinc-200 text-2xl md:text-4xl font-bold">
                        Alur Transaksi Jasa Joki Tugas di <span class="text-zinc-200">
                            JOKIIN<span class="text-xl md:text-3xl">IT</span>
                        </span>
                    </h3>
                    <div class="h-2 rounded w-44 md:w-1/2 lg:w-1/3 mx-auto bg-gradient-to-r from-zinc-200 to-gray-400 my-4"></div>
                    <p class="text-base md:text-lg text-zinc-200">
                        Kami memberikan kemudahan dalam proses order jasa joki di <span class="font-semibold">
                            JOKIIN<span class="text-sm md:text-base">IT</span>
                        </span> tugas demi kenyamanan pelayanan.
                    </p>
                </div>
                <div class="my-5 md:my-10 px-4 md:px-6 lg:px-16">
                    <img 
                        src="{{ asset('images/how-to-order-jokiinit.jpg') }}" 
                        alt="how-to-order-jokiinit"
                        class="rounded-3xl shadow w-full cursor-pointer object-cover"
                        loading="lazy"
                        onclick="openImage()"
                        id="how-to-order-jokiinit"
                    >
                </div>
                <!-- Modal untuk menampilkan gambar besar -->
                <div id="image-modal" class="fixed inset-0 bg-black bg-opacity-75 hidden justify-center items-center z-50" onclick="closeImage()">
                    <img id="large-image" class="w-full max-w-[90%] rounded-3xl object-contain" src="" alt="Large Image">
                </div>

            </div>
        </section>
    </div>
    
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
