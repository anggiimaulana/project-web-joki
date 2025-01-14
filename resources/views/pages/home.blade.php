@extends('layouts.main')

@section('title', 'Jokitugaslo: Belajar Super Lengkap')

@section('data')
    <div>
        <!-- Hero Section -->
        <section class="bg-sky-600 relative px-8 lg:px-0 md:px-8">
            <div class="container mx-auto flex flex-col lg:flex-row items-center">
                <div class="max-w-3xl py-40 lg:py-56 text-zinc-100">
                    <p class="italic text-sm font-bold text-center">Jasa Joki Tugas Kuliah Murah, Cepat, & Berkualitas</p>
                    <h1 class="text-2xl lg:text-4xl font-bold leading-tight my-4">
                        <span class=" font-bold">
                            JOKIIN<span class=" text-xl lg:text-3xl">IT.com</span>
                        </span>: <br class="mt-3">Belajar Super Lengkap
                    </h1>
                    <p class="text-lg font-semibold mb-8 lg:mb-8">
                        Platform <strong>JOKI</strong> Pengerjaan Tugas Online Bidang <strong><i>IT</i></strong> Terbaik di
                        Indonesia.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button onclick="self()"
                            class="cursor-pointer bg-white lg:w-full w-64 h-12 lg:h-10 px-4 lg:px-6 rounded-3xl text-sky-600 font-semibold hover:bg-gray-100 flex items-center justify-center">
                            Self Order
                            <span class="text-base text-sky-500 font-bold ml-1">
                                JOKIIN<span class="text-sm">IT.com</span>
                            </span>
                        </button>
                        <button onclick="order()"
                            class="cursor-pointer bg-white lg:w-full w-64 h-12 lg:h-10 px-4 lg:px-6 rounded-3xl text-sky-600 font-semibold hover:bg-gray-100 flex items-center justify-center">
                            <span class="text-base text-sky-500 font-bold">
                                JOKIIN<span class="text-sm mr-1">IT.com</span>
                            </span>Support Team
                        </button>
                    </div>
                </div>

                <div class="relative mt-4 lg:mt-10 ml-0 lg:ml-12">
                    <div class="rounded-full overflow-hidden bg-white">
                        <img src="{{ asset('images/banda-neira.jpg') }}" alt="Belajar" class="w-72 h-72 object-cover">
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
    </script>
@endsection
