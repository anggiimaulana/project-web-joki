@extends('layouts.main')

@section('title', 'Jokitugaslo: Belajar Super Lengkap')

@section('data')
    <div>
        <!-- Hero Section -->
        <section class="bg-lavender relative">
            <div class="container px-6 md:px-0 mx-auto flex flex-col lg:flex-row items-center">
                <div class="max-w-3xl pt-28 pb-16 md:pt-36 md:pb-24 lg:pt-64 lg:pb-44 text-zinc-100">
                    <p class="italic text-sm md:text-base font-bold">Jasa Joki Tugas <strong class="font-serif">Bidang IT</strong> Murah, Cepat, &
                        Berkualitas</p>
                    <h2 class="text-3xl font-serif md:text-4xl lg:text-5xl font-bold leading-tight my-4 lg:mb-6 md:mt-0">
                        <span class="font-bold">
                            JOKIIN<span class="text-2xl md:text-3xl lg:text-4xl">IT:</span>
                        </span> <br class="mt-3">Hasil Super
                        <span id="desc"
                            class="text-zinc-200 transition-opacity duration-1000 ease-in-out">Profesional</span>
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
                            class="cursor-pointer text-sm bg-blue-400 w-40 py-2 lg:h-10 px-2 rounded-3xl text-white font-bold hover:bg-blue-500 flex md:hidden items-center justify-center">
                            Order JOKIINIT
                        </button>
                        <button onclick="order()"
                            class="cursor-pointer text-sm bg-white w-36 py-2 lg:h-10 px-2 rounded-3xl text-sky-500 font-bold hover:bg-gray-100 flex md:hidden items-center justify-center">
                            Support Team
                        </button>

                        {{-- desktop --}}
                        <button onclick="self()"
                            class="hidden cursor-pointer text-sm md:text-base bg-blue-400 lg:max-w-full md:w-60 w-36 py-2 lg:h-10 px-4 lg:px-6 rounded-3xl font-bold hover:bg-blue-500 md:flex items-center justify-center">
                            JOKIINIT Self Order
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
                    <div class="">
                        <img class="rounded-3xl rounded- w-full md:max-w-3xl lg:max-w-2xl h-fit" src="{{ asset('images/programming.jpg') }}" alt="jokiinit.com" loading="lazy">
                    </div>
                    <div class="text-gray-700">
                        <p class="text-base md:text-xl"><span class="text-sky-700 font-bold">
                            JOKIIN<span class="text-sm md:text-lg">IT</span></span> telah hadir sejak awal tahun 2025 sebagai platform resmi yang menyediakan jasa pengerjaan tugas untuk membantu kebutuhan akademik Anda, baik tugas sekolah maupun tugas kuliah. 
                            Layanan kami mencakup berbagai bidang, termasuk <span class="text-sky-700 font-bold">Bidang IT</span> seperti pemrograman, pengembangan aplikasi, desain website, dan lainnya. Kami bahkan melayani pengerjaan Laporan Magang dan Skripsi juga loh!
                        </p>
                        <p class="text-base md:text-xl mt-2">
                            Dengan didukung oleh lebih dari <span class="text-sky-700 font-bold"> 17 tim penjoki profesional</span> yang telah melalui seleksi ketat, 
                            <span class="text-sky-700 font-bold">JOKIIN<span class="text-lg">IT</span></span> 
                            memastikan tugas Anda dikerjakan dengan cepat dan berkualitas. 
                            Saat ini, kami berhasil menyelesaikan <span class="text-sky-700 font-bold">100+ proyek</span> dari berbagai jenis tugas, menjadikan kami solusi terbaik untuk kebutuhan akademik Anda.
                        </p>
                        <p class="text-base md:text-xl mt-2 lg:hidden">
                            Tunggu apa lagi? Serahkan tugas Anda kepada tim <span class="text-sky-700 font-bold">
                                JOKIIN<span class="text-lg">IT</span></span>, dan biarkan kami menyelesaikannya untuk Anda!
                        </p>
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
            const words = ["Profesional", "Satset", "Canggih", "Dipercaya", "Lengkap", "Berkualitas"];
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
    </script>
@endsection
