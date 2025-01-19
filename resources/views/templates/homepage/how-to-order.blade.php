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