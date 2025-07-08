<section class="bg-lavender relative">
    <div class="container px-6 md:px-0 mx-auto flex flex-col lg:flex-row items-center mb-8">
        <div class="max-w-3xl pt-28 pb-16 md:pt-36 md:pb-24 lg:pt-64 lg:pb-44 text-zinc-100">
            <p class="italic text-sm md:text-base font-bold">
                Solusi Tugas <strong class="font-serif">IT</strong> Anti Ribet — Hemat, Cepat, Berkualitas!
            </p>

            <h2 class="text-2xl font-serif md:text-4xl lg:text-5xl font-bold leading-tight my-4 lg:mb-6 md:mt-0">
                <span class="font-bold lg:text-5xl">
                    JOKIIN<span class="text-xl md:text-3xl lg:text-4xl">IT:</span>
                </span>
                <br class="mt-3">Hasil Joki Super
                <span id="desc"
                    class="text-zinc-200 transition-opacity duration-1000 ease-in-out text-2xl md:text-4xl">Terjamin</span>
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
                        class="w-60 max-w-full object-cover" loading="lazy">
                </div>
            </div>
            <p class="text-sm md:text-lg font-semibold my-6">
                Platform Jasa Joki Tugas <strong>IT</strong> Terlengkap & Terpercaya untuk Mahasiswa dan Profesional
                se-Indonesia. Yuk, order di <strong>JOKIIN<span class="text-xs md:text-sm">IT</span></strong> sekarang!
                🚀
            </p>


            <div class="flex flex-wrap gap-2 md:gap-4">
                {{-- mobile --}}
                <button onclick="self()"
                    class="cursor-pointer text-sm bg-blue-400 w-40 py-2 lg:h-10 px-2 rounded-3xl text-white font-bold hover:bg-sky-600 flex md:hidden items-center justify-center">
                    Order JOKIIN<span class="text-xs">IT</span>
                </button>
                <button onclick="order()"
                    class="cursor-pointer text-sm bg-white w-36 py-2 lg:h-10 px-2 rounded-3xl text-sky-500 font-bold hover:bg-gray-100 flex md:hidden items-center justify-center">
                    Support Team
                </button>

                {{-- desktop --}}
                <button onclick="self()"
                    class="hidden cursor-pointer text-sm md:text-base bg-blue-400 lg:max-w-full md:w-60 w-36 py-2 lg:h-10 px-4 lg:px-6 rounded-3xl font-bold hover:bg-sky-600 md:flex items-center justify-center">
                    Order JOKIIN<span class="text-xs md:text-sm">IT</span>
                </button>
                <button onclick="order()"
                    class="hidden cursor-pointer text-sm md:text-base bg-white lg:max-w-full md:w-60 w-44 py-2 lg:h-10 px-4 lg:px-6 rounded-3xl text-sky-500 font-bold hover:bg-gray-100 md:flex items-center justify-center">
                    JOKIIN<span class="text-xs md:text-sm">IT <span class="text-sm md:text-base">Support Team</span></span>
                </button>
            </div>
        </div>

        <div class="relative hidden lg:flex mt-10">
            <div class="rounded-full overflow-hidden bg-white">
                <img src="{{ asset('images/programming3.jpg') }}" alt="Belajar" class="w-full object-cover"
                    loading="lazy">
            </div>
        </div>

        <!-- Logo Code -->
        <div class="code absolute top-24 md:top-28 lg:top-56 left-6 lg:left-10 text-xl lg:text-3xl text-sky-100 ">
            <i class="bx bx-code-alt"></i>
        </div>

        <div
            class="absolute text-3xl lg:text-4xl text-sky-300 bottom-48 md:top-72 lg:top-1/3 right-9 md:right-2/4 lg:right-16">
            <div class="flex gap-x-3 md:gap-x-4 pb-1 lg:pb-2">
                <i class='bx bxs-file-pdf'></i>
                <i class='bx bxs-file-doc'></i>
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
