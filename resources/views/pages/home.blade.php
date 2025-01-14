@extends('layouts.main')

@section('title', 'Jokitugaslo: Belajar Super Lengkap')

@section('data')
    <div>
        <!-- Hero Section -->
        <section class="bg-sky-600 relative">
            <div class="container mx-auto md:px-8 flex flex-col lg:flex-row items-center">
                <div class="max-w-3xl py-56 text-zinc-100">
                    <p class="italic text-sm font-bold">Jasa Joki Tugas Kuliah Murah, Cepat, & Berkualitas</p>
                    <h1 class="text-2xl lg:text-4xl font-bold leading-tight mb-4 mt-1"><span class="italic font-bold">
                            JOKIIN<span span class="italic text-3xl">IT.com</span>
                        </span>: <br>Belajar Super Lengkap</h1>
                    <p class="text-lg font-semibold mb-8"><a href="/" class="italic text-lg hover:text-white font-bold">
                            JOKIIN<span class="text-sm">IT</span></a> berdiri sejak Januari 2025 dan resmi berdiri menjadi
                        platform yang menyediakan jasa joki
                        tugas untuk kamu yang butuh bantuan pengerjaan tugas – tugas sekolah maupun tugas kuliah kamu.
                        Bahkan, termasuk Laporan Magang & Skripsi loh!</p>
                    <div class="flex gap-4">
                        <button onclick="self()"
                            class="cursor-pointer bg-white w-60 h-10 px-4 rounded-2xl text-sky-600 font-semibold hover:bg-gray-100 flex items-center justify-center">
                            Self Order
                            <span class="italic text-base text-sky-500 font-bold ml-1">
                                JOKIIN<span class="text-sm">IT.com</span>
                            </span>
                        </button>
                        <button onclick="order()"
                            class="cursor-pointer bg-white w-60 h-10 px-4 rounded-2xl text-sky-600 font-semibold hover:bg-gray-100 flex items-center justify-center">
                            <span class="italic text-base text-sky-500 font-bold">
                                JOKIIN<span class="text-sm mr-1">IT.com</span></span>Support Team
                        </button>
                    </div>

                </div>

                <div class="relative mt-4 lg:mt-10 ml-12">
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
