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
                    <h3 class="text-gray-700 text-3xl md:text-4xl lg:text-5xl font-bold">
                        Tentang <span class="text-sky-700">
                            JOKIIN<span class="text-2xl md:text-3xl lg:text-4xl">IT</span>
                        </span>
                    </h3>
                    <div class="h-2 rounded w-48 md:w-80 mx-auto bg-gradient-to-r from-blue-700 to-blue-300 my-4"></div>
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
                    <div class="text-center text-rose-300 text-4xl lg:text-5xl flex flex-col items-center w-full max-w-60 md:max-w-64 p-2">
                        <i class='bx bxs-group mb-1'></i>
                        <h4 class="text-2xl lg:text-3xl text-zinc-200 font-bold">100+</h4>
                        <p class="text-sm md:text-base text-zinc-200">
                            Pengguna Jasa Joki Tugas di 
                            <span class="font-semibold">JOKIIN<span class="text-sm">IT</span></span>
                        </p>
                    </div>
                    <div class="text-center text-green-300 text-4xl lg:text-5xl flex flex-col items-center w-full max-w-60 md:max-w-64 p-2">
                        <i class='bx bxs-graduation mb-1'></i>
                        <h4 class="text-2xl lg:text-3xl text-zinc-200 font-bold">15+</h4>
                        <p class="text-sm md:text-base text-zinc-200">
                            Tim Pengajar 
                            <span class="font-semibold">JOKIIN<span class="text-sm">IT</span></span>
                        </p>
                    </div>
                    <div class="text-center text-fuchsia-200 text-4xl lg:text-5xl flex flex-col items-center w-full max-w-60 md:max-w-64 p-2">
                        <i class='bx bxs-user mb-1'></i>
                        <h4 class="text-2xl lg:text-3xl text-zinc-200 font-bold ">100%</h4>
                        <p class="text-sm md:text-base text-zinc-200">
                            Pengguna Jasa Joki Tugas 
                            <span class="font-semibold">JOKIIN<span class="text-sm">IT</span></span>
                            Mendapatkan Nilai Baik
                        </p>
                    </div>
                    <div class="text-center text-amber-300 text-4xl lg:text-5xl flex flex-col items-center w-full max-w-60 md:max-w-64 p-2">
                        <i class='bx bxs-star mb-1'></i>
                        <h4 class="text-2xl lg:text-3xl text-zinc-200 font-bold ">9.8/10</h4>
                        <p class="text-sm md:text-base text-zinc-200">Tingkat Kepuasan Pengguna</p>
                    </div>
                </div>
            </div>
        </section>
        
        {{-- Service --}}
        <section class="bg-gray-200">
            <div class="container mx-auto py-12">
                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 px-4 md:px-0">
                    <!-- Card 1 -->
                    <div class="bg-white shadow rounded-3xl">
                        <div class="relative">
                            <img src="{{ asset('images/programming.jpg') }}" alt="Product Image" class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                        </div>
                        <div class="p-4 text-center text-gray-500">
                            <h3 class="text-xl md:text-2xl text-lavender font-semibold mb-2">Zip Tote Basket</h3>
                            <p class="text-base lg:text-xl">White and black</p>
                            <div class="flex gap-2 md:gap-4">
                                <button class="mt-4 w-full max-w-36 md:max-w-56 bg-lavender hover:bg-sky-500 text-zinc-200 py-1 md:py-2 rounded-2xl font-bold">Order</button>
                                <button class="mt-4 w-full max-w-36 md:max-w-56 bg-zinc-100 hover:bg-zinc-200 text-lavender py-1 md:py-2 rounded-2xl font-bold">Detail</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Card 2 -->
                    <div class="bg-white shadow rounded-3xl">
                        <div class="relative">
                            <img src="{{ asset('images/programming.jpg') }}" alt="Product Image" class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                        </div>
                        <div class="p-4 text-center text-gray-500">
                            <h3 class="text-xl md:text-2xl text-lavender font-semibold mb-2">Zip High Wall Tote</h3>
                            <p class="text-base lg:text-xl">White and blue</p>
                            <div class="flex gap-2 md:gap-4">
                                <button class="mt-4 w-full max-w-36 md:max-w-56 bg-lavender hover:bg-sky-500 text-zinc-200 py-1 md:py-2 rounded-2xl font-bold">Order</button>
                                <button class="mt-4 w-full max-w-36 md:max-w-56 bg-zinc-100 hover:bg-zinc-200 text-lavender py-1 md:py-2 rounded-2xl font-bold">Detail</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Card 3 -->
                    <div class="bg-white shadow rounded-3xl">
                        <div class="relative">
                            <img src="{{ asset('images/programming3.jpg') }}" alt="Product Image" class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                        </div>
                        <div class="p-4 text-center text-gray-500">
                            <h3 class="text-xl md:text-2xl text-lavender font-semibold mb-2">Halfsize Tote</h3>
                            <p class="text-base lg:text-xl">Clay</p>
                            <div class="flex gap-2 md:gap-4">
                                <button class="mt-4 w-full max-w-36 md:max-w-56 bg-lavender hover:bg-sky-500 text-zinc-200 py-1 md:py-2 rounded-2xl font-bold">Order</button>
                                <button class="mt-4 w-full max-w-36 md:max-w-56 bg-zinc-100 hover:bg-zinc-200 text-lavender py-1 md:py-2 rounded-2xl font-bold">Detail</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Card 4 -->
                    <div class="bg-white shadow rounded-3xl">
                        <div class="relative">
                            <img src="{{ asset('images/programming.png') }}" alt="Product Image" class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                        </div>
                        <div class="p-4 text-center text-gray-500">
                            <h3 class="text-xl md:text-2xl text-lavender font-semibold mb-2">High Wall Tote</h3>
                            <p class="text-base lg:text-xl">Black and orange</p>
                            <div class="flex gap-2 md:gap-4">
                                <button class="mt-4 w-full max-w-36 md:max-w-56 bg-lavender hover:bg-sky-500 text-zinc-200 py-1 md:py-2 rounded-2xl font-bold">Order</button>
                                <button class="mt-4 w-full max-w-36 md:max-w-56 bg-zinc-100 hover:bg-zinc-200 text-lavender py-1 md:py-2 rounded-2xl font-bold">Detail</button>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="bg-white shadow rounded-3xl">
                        <div class="relative">
                            <img src="{{ asset('images/programming.png') }}" alt="Product Image" class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                        </div>
                        <div class="p-4 text-center text-gray-500">
                            <h3 class="text-xl md:text-2xl text-lavender font-semibold mb-2">Jasa Joki Laporan Magang</h3>
                            <p class="text-base lg:text-xl">Bingung dengan laporan magang? Tenang, JOKIIN<span class="text-sm">IT</span> hadir untuk membantu kamu! Dengan layanan ini, kamu hanya perlu mengirimkan data-data yang diperlukan, dan kami akan menyusun laporan magangmu dengan rapi dan sesuai dengan arahan serta instruksi yang kamu berikan.</p>
                            <div id="hidden-jasa" class="hidden">
                                <p class="text-base lg:text-xl mt-2">
                                    Tidak hanya membantu bimbingan, kami juga siap mengeksekusi skripsi kamu sesuai kesepakatan bersama. Kamu tetap bisa memantau setiap progress pengerjaannya, dari awal hingga selesai. Yuk, wujudkan skripsi impianmu dengan 
                                    <span class="text-sky-700 font-bold">
                                        JOKIIN<span class="text-sm md:text-base">IT</span>
                                    </span>!
                                </p>
                            </div>
                            <div class="flex gap-2 md:gap-4">
                                <button class="mt-4 w-full max-w-36 md:max-w-56 bg-lavender hover:bg-sky-500 text-zinc-200 py-1 md:py-2 rounded-2xl font-bold">Order</button>
                                <button class="mt-4 w-full max-w-36 md:max-w-56 bg-zinc-100 hover:bg-zinc-200 text-lavender py-1 md:py-2 rounded-2xl font-bold">Detail</button>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="bg-white shadow rounded-3xl">
                        <div class="relative">
                            <img src="{{ asset('images/programming.png') }}" alt="Product Image" class="w-full h-64 object-cover rounded-2xl" loading="lazy">
                        </div>
                        <div class="p-4 text-center text-gray-500">
                            <h3 class="text-xl md:text-2xl text-lavender font-semibold mb-2">Jasa Joki Skripsi</h3>
                            <p class="text-base lg:text-xl">
                                Bingung dengan skripsi? Tenang, 
                                <span class="text-sky-700 font-bold">
                                    JOKIIN<span class="text-sm md:text-base">IT</span>
                                </span> hadir untuk membantu kamu! Dengan layanan Jasa Joki Skripsi, kamu bisa mendapatkan bimbingan langsung dari tim ahli kami.
                            </p>
                            <!-- Konten tambahan -->
                            <div id="hidden-jasa" class="hidden">
                                <p class="text-base lg:text-xl mt-2">
                                    Tidak hanya membantu bimbingan, kami juga siap mengeksekusi skripsi kamu sesuai kesepakatan bersama. Kamu tetap bisa memantau setiap progress pengerjaannya, dari awal hingga selesai. Yuk, wujudkan skripsi impianmu dengan 
                                    <span class="text-sky-700 font-bold">
                                        JOKIIN<span class="text-sm md:text-base">IT</span>
                                    </span>!
                                </p>
                            </div>

                            <!-- Tombol toggle -->
                            <button id="button-jasa" class="mt-2 text-lavender font-semibold text-sm md:text-base">
                                Baca Selengkapnya
                            </button>

                            <div class="flex gap-2 md:gap-4">
                                <button class="mt-4 w-full bg-lavender hover:bg-sky-500 text-zinc-200 py-1 md:py-2 rounded-2xl font-bold cursor-pointer" disabled>Coming Soon</button>
                                {{-- <button class="mt-4 w-full md:max-w-56 bg-zinc-100 hover:bg-zinc-200 text-lavender py-1 md:py-2 rounded-2xl font-bold">Detail</button> --}}
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
    <script>
        function self() {
            window.location.href = 'https://jokitugaslo.com';
        }

        function order() {
            window.location.href = 'https://jokitugaslo.com';
        }

        document.addEventListener("DOMContentLoaded", () => {
            const words = ["Profesional", "Sat-set", "Canggih", "Dipercaya", "Lengkap", "Berkualitas"];
            const descElement = document.getElementById("desc");
            let currentIndex = 0;

            const updateWord = () => {
                descElement.classList.add("opacity-0", "scale-90");

                setTimeout(() => {
                    currentIndex = (currentIndex + 1) % words.length;
                    descElement.textContent = words[currentIndex];

                    descElement.classList.remove("opacity-0", "scale-90");
                }, 500);
            };

            // Run updateWord every 2 seconds
            setInterval(updateWord, 3500);
        });

        document.addEventListener("DOMContentLoaded", function () {
            const hiddenContent = document.getElementById("hidden-content");
            const toggleButton = document.getElementById("toggle-button");

            toggleButton.addEventListener("click", () => {
                hiddenContent.classList.toggle("hidden");
                toggleButton.textContent = hiddenContent.classList.contains("hidden")
                    ? "Baca Selengkapnya"
                    : "Sembunyikan";
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
        const toggleButton = document.getElementById("button-jasa");
        const hiddenContent = document.getElementById("hidden-jasa");

        toggleButton.addEventListener("click", function () {
            // Toggle visibility of the hidden content
            if (hiddenContent.classList.contains("hidden")) {
                hiddenContent.classList.remove("hidden");
                toggleButton.textContent = "Sembunyikan";
            } else {
                hiddenContent.classList.add("hidden");
                toggleButton.textContent = "Baca Selengkapnya";
            }
        });
    });


    </script>
@endsection
