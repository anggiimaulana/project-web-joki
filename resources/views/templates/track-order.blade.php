<section class="bg-gray-50 flex items-center justify-center">
    <div class="container mx-auto py-8 md:py-12">
        <div class="text-center px-2 md:px-0">
            <h3 class="text-gray-700 text-2xl md:text-4xl font-bold">
                Lacak Progres Pesananmu By <span class="text-sky-700 font-serif">
                    JOKIIN<span class="text-xl md:text-3xl">IT</span>
                </span>
            </h3>
            <div class="h-2 rounded w-44 md:w-1/2 lg:w-1/3 mx-auto bg-gradient-to-r from-blue-700 to-blue-300 my-4">
            </div>
            <p class="text-base md:text-lg text-gray-700">
                Pantau status pesananmu dengan mudah dan cepat. Dapatkan pembaruan real-time tentang setiap tahap
                pengerjaan, dari proses awal hingga selesai! 🚀
            </p>
        </div>

        <div class="flex justify-center items-center mt-4">
            <div class="w-full p-4 rounded-2xl">
                <div
                    class="p-1 border border-sky-200 rounded-2xl bg-gray-100 flex items-center justify-center w-72 md:w-full md:max-w-xs mx-auto text-center">
                    <i class='bx bxs-info-circle text-sky-600 text-xl md:text-2xl'></i>
                    <h2 class="text-base md:text-lg font-semibold text-sky-600 ml-2">Data diperbarui setiap 3 jam.</h2>
                </div>

                <div class="items-center justify-center flex gap-2 p-4">
                    <input type="text" id="orderId" placeholder="Masukkan UID pesananmu." required
                        class="w-full md:max-w-96 px-4 py-2 border text-gray-600 text-base md:text-lg border-gray-300 rounded-2xl focus:border-sky-300 focus:ring focus:ring-sky-300 outline-none">
                    <button onclick="trackOrder()" id="trackButton"
                        class="bg-sky-600 text-white px-6 py-2 md:text-lg rounded-2xl hover:bg-sky-500 focus:outline-none focus:ring-2 focus:ring-sky-500 transition-colors duration-200">
                        <span id="trackButtonText">Lacak</span>
                        <i id="loadingIcon" class="bx bx-loader-alt animate-spin hidden ml-2"></i>
                    </button>
                </div>

                <!-- Loading State -->
                <div id="loadingState" class="hidden text-center py-8">
                    <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-sky-600 mx-auto"></div>
                    <p class="text-gray-600 mt-4">Mencari data pesanan...</p>
                </div>

                <!-- Order Status Display -->
                <div id="orderStatus" class="hidden bg-transparent rounded-2xl items-center justify-center md:pb-4">
                    <div class="text-center border-t border-gray-200 pt-6 pb-4">
                        <h3 id="customerName" class="text-2xl md:text-3xl font-bold text-sky-600">Halo, Customer</h3>
                        <p class="text-gray-600 text-base md:text-lg">Berikut adalah detail status pesananmu saat ini:
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-2 md:gap-4 py-4">
                        <div class="bg-white p-2 md:px-0 rounded-lg shadow">
                            <h3
                                class="text-gray-700 text-base md:text-lg border-b border-gray-200 text-center font-bold pb-2">
                                Unique ID (UID)
                            </h3>
                            <p id="uniqueId" class="text-base font-semibold text-gray-600 text-center pt-2">
                                #</p>
                        </div>
                        <div class="bg-white p-2 rounded-lg shadow">
                            <h3
                                class="text-gray-700 text-base md:text-lg border-b border-gray-200 text-center font-bold pb-2">
                                Jenis Layanan
                            </h3>
                            <p id="serviceType"
                                class="text-base font-semibold text-gray-600 text-center pt-2">-</p>
                        </div>
                        <div class="bg-white p-2 rounded-lg shadow hidden md:block">
                            <h3
                                class="text-gray-700 text-base md:text-lg border-b border-gray-200 text-center font-bold pb-2">
                                Total Transaksi
                            </h3>
                            <p id="totalAmount"
                                class="text-base font-semibold text-gray-600 text-center pt-2">Rp. 0</p>
                        </div>
                        <div class="bg-white p-2 rounded-lg shadow">
                            <h3
                                class="text-gray-700 text-base md:text-lg border-b border-gray-200 text-center font-bold pb-2">
                                Status
                            </h3>
                            <p id="orderStatusText" class="text-base font-semibold text-center pt-2"></p>
                        </div>
                        <div class="bg-white p-2 rounded-lg shadow">
                            <h3
                                class="text-gray-700 text-base md:text-lg border-b border-gray-200 text-center font-bold pb-2">
                                Perkiraan Selesai
                            </h3>
                            <p id="estimatedCompletion"
                                class="text-base font-semibold text-gray-600 text-center pt-2">-</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Error Popup -->
<div id="errorPopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div
        class="bg-white rounded-2xl p-6 mx-4 max-w-sm w-full shadow-2xl transform transition-all duration-300 scale-95">
        <div class="text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100 mb-4">
                <i class='bx bx-error text-red-600 text-2xl'></i>
            </div>
            <h3 id="errorTitle" class="text-lg font-semibold text-gray-900 mb-2">Oops! Terjadi Kesalahan</h3>
            <p id="errorMessage" class="text-gray-600 mb-6">Terjadi kesalahan saat memproses permintaan Anda.</p>
            <button onclick="closePopup()"
                class="w-full bg-sky-600 text-white px-4 py-2 rounded-xl hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500 transition-colors">
                Mengerti
            </button>
        </div>
    </div>
</div>
