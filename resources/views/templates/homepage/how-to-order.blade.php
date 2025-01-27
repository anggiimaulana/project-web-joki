<section class="bg-gray-50">
    <div class="container mx-auto py-12 md:py-16 lg:py-20">
        <div class="text-center px-2 md:px-0">
            <h3 class="text-gray-700 text-2xl md:text-4xl font-bold">
                Alur Transaksi Jasa Joki Tugas di <span class="text-sky-700">
                    JOKIIN<span class="text-xl md:text-3xl">IT</span>
                </span>
            </h3>
            <div class="h-2 rounded w-44 md:w-2/3 lg:w-1/3 mx-auto bg-gradient-to-r from-blue-700 to-blue-300 my-4"></div>
            <p class="text-base md:text-lg text-gray-700">
                Kami memberikan kemudahan dalam proses order jasa joki di <span class="font-semibold">
                    JOKIIN<span class="text-sm md:text-base">IT</span>
                </span> tugas demi kenyamanan pelayanan.
            </p>
        </div>
        <div class="mt-5 px-4 md:px-6 lg:px-16">
            <img 
                src="{{ asset('images/how-to-order-jokiinit.jpg') }}" 
                alt="how-to-order-jokiinit"
                class="rounded-3xl shadow shadow-sky-300 w-full cursor-pointer object-cover"
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