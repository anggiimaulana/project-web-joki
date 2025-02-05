<section class="bg-gray-50 flex items-center justify-center">
    <div class="container mx-auto py-8 md:py-12">
        <div class="text-center px-2 md:px-0">
            <h3 class="text-gray-700 text-2xl md:text-4xl font-bold">
                Lacak Progres Pesananmu By <span class="text-sky-700 font-serif">
                    JOKIIN<span class="text-xl md:text-3xl">IT</span>
                </span>
            </h3>
            <div class="h-2 rounded w-44 md:w-1/2 lg:w-1/3 mx-auto bg-gradient-to-r from-blue-700 to-blue-300 my-4"></div>
            <p class="text-base md:text-xl text-gray-700">
                Pantau status pesananmu dengan mudah dan cepat. Dapatkan pembaruan real-time tentang setiap tahap pengerjaan, dari proses awal hingga selesai! 🚀
            </p>
        </div>

        <div class="flex justify-center items-center mt-4">
            <div class="w-full bg-transparent p-4 rounded-2xl shadow-md">
                <div class="p-1 border border-sky-200 rounded-2xl bg-gray-100 flex items-center justify-center w-72 md:w-full md:max-w-xs mx-auto text-center">
                    <i class='bx bxs-info-circle text-lavender text-xl md:text-2xl'></i>
                    <h2 class="text-base md:text-lg font-semibold text-lavender ml-2">Data diperbarui setiap 3 jam.</h2>
                </div>
        
        
                <div class="items-center justify-center flex gap-2 p-4">
                    <input type="text" id="orderId" placeholder="Masukkan UID pesananmu." required
                        class="w-full md:max-w-96 px-4 py-2 border text-gray-600 text-base md:text-lg border-gray-300 rounded-2xl focus:border-sky-300 focus:ring focus:ring-sky-300 outline-none">
                    <button onclick="trackOrder()" 
                        class="bg-lavender text-white px-6 py-2 md:text-lg rounded-2xl hover:bg-sky-500 focus:outline-none focus:ring-2 focus:ring-sky-500">Lacak</button>
                </div>                
        
                <div id="orderStatus" class="hidden bg-transparent rounded-2xl items-center justify-center md:pb-4">
                    <div class="text-center border-t border-gray-200 pt-6 pb-4">
                        <h3 class="text-2xl md:text-3xl font-bold text-lavender">Halo, Anggi Maulana</h3>
                        <p class="text-gray-600 text-base md:text-lg">Berikut adalah detail status pesananmu saat ini:</p>
                    </div>
        
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 md:gap-4 py-4">
                        <div class="bg-white p-2 md:px-0 rounded-lg shadow">
                            <h3 class="text-gray-700 text-base md:text-lg border-b border-gray-200 text-center font-semibold pb-2">Unique ID (UID)</h3>
                            <p class="text-sm md:text-base font-semibold text-gray-600 text-center pt-2">#123456</p>
                        </div>
                        <div class="bg-white p-2 rounded-lg shadow">
                            <h3 class="text-gray-700 text-base md:text-lg border-b border-gray-200 text-center font-semibold pb-2">Jenis Layanan</h3>
                            <p class="text-sm md:text-base font-semibold text-gray-600 text-center pt-2">Express</p>
                        </div>
                        <div class="bg-white p-2 rounded-lg shadow">
                            <h3 class="text-gray-700 text-base md:text-lg border-b border-gray-200 text-center font-semibold pb-2">Status</h3>
                            <p class="text-sm md:text-base font-semibold text-yellow-500 text-center pt-2">Sedang Diproses</p>
                        </div>
                        <div class="bg-white p-2 rounded-lg shadow">
                            <h3 class="text-gray-700 text-base md:text-lg border-b border-gray-200 text-center font-semibold pb-2">Perkiraan Selesai</h3>
                            <p class="text-sm md:text-base font-semibold text-gray-600 text-center pt-2">12 Agustus 2024</p>
                        </div>
                        <div class="bg-white p-2 rounded-lg shadow">
                            <h3 class="text-gray-700 text-base md:text-lg border-b border-gray-200 text-center font-semibold pb-2">Total Transaksi</h3>
                            <p class="text-sm md:text-base font-semibold text-gray-600 text-center pt-2">Rp. 75000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function trackOrder() {
        let orderId = document.getElementById("orderId").value;
        let orderStatus = document.getElementById("orderStatus");

        if (orderId.trim() !== "") {
            orderStatus.classList.remove("hidden");
        } else {
            alert("Masukkan ID Pesanan terlebih dahulu!");
        }
    }
</script>
