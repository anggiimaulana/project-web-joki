@extends('layouts.main')

@section('title', 'Jokitugaslo: Belajar Super Lengkap')

@section('data')
    <div>
        <!-- Hero Section -->
        <section class="bg-lavender relative px-6 md:px-8 ">
            <div class="container mx-auto flex flex-col lg:flex-row items-center">
                <div class="max-w-2xl pt-28 pb-16 md:pt-36 md:pb-24 lg:pt-56 lg:pb-40 text-zinc-100">
                    <p class="italic text-sm font-bold">Jasa Joki Tugas <strong>Bidang IT</strong> Murah, Cepat, &
                        Berkualitas</p>
                    <h2 class="text-2xl font-serif lg:text-4xl font-bold leading-tight my-6 lg:mb-6 md:mt-0">
                        <span class="font-bold">
                            JOKIIN<span class="text-xl lg:text-3xl">IT.com:</span>
                        </span> <br class="mt-3">Pengerjaan Super
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
                            <img src="{{ asset('images/programming3.jpg') }}" alt="Belajar"
                                class="w-60 max-w-full object-cover">
                        </div>
                    </div>
                    <p class="text-base font-semibold my-6">
                        Platform Bimbingan Belajar dan Pengerjaan Tugas Online di <strong>Bidang IT</strong> Terbaik dan
                        Terpercaya se
                        Indonesia.
                    </p>
                    <div class="flex flex-wrap gap-2 md:gap-4">
                        {{-- mobile --}}
                        <button onclick="self()"
                            class="cursor-pointer text-xs bg-blue-400 w-40 py-2 lg:h-10 px-2 rounded-3xl text-white font-bold hover:bg-blue-500 flex md:hidden items-center justify-center">
                            Order JOKIINIT.com
                        </button>
                        <button onclick="order()"
                            class="cursor-pointer text-xs bg-white w-36 py-2 lg:h-10 px-2 rounded-3xl text-sky-500 font-bold hover:bg-gray-100 flex md:hidden items-center justify-center">
                            Support Team
                        </button>

                        {{-- desktop --}}
                        <button onclick="self()"
                            class="hidden cursor-pointer text-xs md:text-sm bg-white lg:max-w-full md:w-60 w-36 py-2 lg:h-10 px-4 lg:px-6 rounded-3xl text-sky-500 font-bold hover:bg-gray-100 md:flex items-center justify-center">
                            JOKIINIT.com Self Order
                        </button>
                        <button onclick="order()"
                            class="hidden cursor-pointer text-xs md:text-sm bg-white lg:max-w-full md:w-60 w-44 py-2 lg:h-10 px-4 lg:px-6 rounded-3xl text-sky-500 font-bold hover:bg-gray-100 md:flex items-center justify-center">
                            JOKIINIT.com Support Team
                        </button>
                    </div>
                </div>

                <div class="relative hidden lg:flex mt-10">
                    <div class="rounded-full overflow-hidden bg-white">
                        <img src="{{ asset('images/programming3.jpg') }}" alt="Belajar" class="w-full object-cover">
                    </div>
                </div>
            </div>
        </section>


        <!-- Additional Section -->
        <section class="bg-white py-10">
            <div class="container mx-auto text-center">
                <p class="text-gray-600 text-lg">Selamat datang di aplikasi bimbingan belajar terbaik!</p>
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
            const words = ["Profesional", "Cepat", "Canggih", "Dipercaya", "Lengkap", "Berkualitas"];
            const descElement = document.getElementById("desc");
            let currentIndex = 0;

            const updateWord = () => {
                // Fade out current word
                descElement.classList.add("opacity-0", "scale-90");

                // Wait for the fade-out animation, then update text and fade in
                setTimeout(() => {
                    currentIndex = (currentIndex + 1) % words.length;
                    descElement.textContent = words[currentIndex];

                    // Fade in the new word
                    descElement.classList.remove("opacity-0", "scale-90");
                }, 500); // Duration matches half of the total animation
            };

            // Run updateWord every 2 seconds
            setInterval(updateWord, 3500);
        });
    </script>
@endsection
