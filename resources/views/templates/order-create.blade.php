 <div class="min-h-screen bg-gray-50 py-8">
     <div class="container mx-auto px-4">
         <div class="text-center mb-8">
             <h1 class="text-3xl md:text-4xl font-bold mb-4 text-gray-700">
                 Order <span class="font-serif text-sky-700">JOKIIN<span class="text-2xl md:text-3xl">IT</span></span>
             </h1>
             <div class="h-2 rounded w-44 md:w-1/2 lg:w-1/3 mx-auto bg-gradient-to-r from-blue-700 to-blue-300 mb-4">
             </div>
             <p class="text-gray-600 text-lg">Lengkapi formulir di bawah untuk melakukan pemesanan</p>
         </div>

         <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-lg overflow-hidden">
             <div class="bg-gradient-to-r from-sky-700 to-sky-500 p-6">
                 <h2 class="text-white text-2xl font-semibold text-center">Formulir Pemesanan</h2>
             </div>

             <form id="orderForm" class="p-6 md:p-8 space-y-6" enctype="multipart/form-data">
                 @csrf

                 <div id="alertContainer" class="hidden"></div>

                 <!-- Data Diri -->
                 <div class="bg-gray-50 rounded-2xl p-6">
                     <h3 class="text-xl font-semibold text-gray-700 mb-4 flex items-center">
                         <svg class="w-6 h-6 mr-2 text-sky-600" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                         </svg>
                         Data Diri
                     </h3>
                     <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                         <div>
                             <label class="block text-gray-700 font-medium mb-2">Nama Lengkap *</label>
                             <input type="text" name="name" id="name" required
                                 class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-100 outline-none transition-all"
                                 placeholder="Masukkan nama lengkap">
                             <span class="text-red-500 text-sm error-message" data-field="name"></span>
                         </div>
                         <div>
                             <label class="block text-gray-700 font-medium mb-2">Nomor WhatsApp *</label>
                             <input type="number" name="nomor_wa" id="nomor_wa" required
                                 class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none transition-all"
                                 placeholder="08123456789">
                             <span class="text-red-500 text-sm error-message" data-field="nomor_wa"></span>
                             <p class="text-sm text-gray-500 mt-1">Format: 08xxx atau 628xxx</p>
                         </div>
                     </div>
                 </div>

                 <!-- Detail Pesanan -->
                 <div class="bg-gray-50 rounded-2xl p-6">
                     <h3 class="text-xl font-semibold text-gray-700 mb-4 flex items-center">
                         <svg class="w-6 h-6 mr-2 text-sky-600" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                             </path>
                         </svg>
                         Detail Pesanan
                     </h3>
                     <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                         <div>
                             <label class="block text-gray-700 font-medium mb-2">Kategori Joki *</label>
                             <select name="kategori_joki_id" id="kategori_joki_id" required
                                 class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 transition-all outline-none">
                                 <option value="" selected disabled>Pilih salah satu</option>
                                 @foreach ($kategoriJoki as $kategori)
                                     <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                 @endforeach
                             </select>
                             <span class="text-red-500 text-sm error-message" data-field="kategori_joki_id"></span>
                         </div>
                         <div>
                             <label class="block text-gray-700 font-medium mb-2">Metode Pembayaran *</label>
                             <select name="metode_pembayaran_id" id="metode_pembayaran_id" required
                                 class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 transition-all outline-none">
                                 <option value="" disabled selected>Pilih salah satu</option>
                                 @foreach ($metodePembayaran as $metode)
                                     <option value="{{ $metode->id }}">{{ $metode->nama_metode }}</option>
                                 @endforeach
                             </select>
                             <span class="text-red-500 text-sm error-message" data-field="metode_pembayaran_id"></span>
                             <div id="paymentDetailsContainer" class="mt-4 hidden"></div>
                         </div>
                     </div>
                 </div>

                 <!-- Harga & Voucher -->
                 <div class="bg-gray-50 rounded-2xl p-6">
                     <h3 class="text-xl font-semibold text-gray-700 mb-4 flex items-center">
                         <svg class="w-6 h-6 mr-2 text-sky-600" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                             </path>
                         </svg>
                         Harga & Voucher
                     </h3>
                     <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                         <div>
                             <label class="block text-gray-700 font-medium mb-2">Harga Awal *</label>
                             <div class="relative">
                                 <span class="absolute left-4 top-3 text-gray-500">Rp</span>
                                 <input type="number" name="total_harga_awal" id="total_harga_awal" required
                                     min="1000"
                                     class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 transition-all outline-none"
                                     placeholder="50000">
                             </div>
                             <span class="text-red-500 text-sm error-message" data-field="total_harga_awal"></span>
                         </div>
                         <div>
                             <label class="block text-gray-700 font-medium mb-2">Kode Voucher (Opsional)</label>

                             <div class="flex flex-col sm:flex-row gap-2">
                                 <input type="text" name="voucher_code" id="voucher_code"
                                     class="sm:flex-1 px-4 py-3 rounded-xl border border-gray-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 transition-all outline-none"
                                     placeholder="Masukkan kode voucher">
                                 <input type="hidden" name="voucher_id" id="voucher_id_hidden">

                                 <button type="button" id="checkVoucherBtn"
                                     class="px-6 py-2 md:py-3 bg-gradient-to-r from-sky-700 to-sky-500 hover:from-sky-700 hover:to-sky-600 text-white rounded-xl transition-all duration-300 transform hover:scale-105 sm:w-auto w-full">
                                     Cek
                                 </button>
                             </div>

                             <span class="text-red-500 text-sm error-message" data-field="voucher_code"></span>
                             <div id="voucherInfo" class="mt-2 hidden"></div>
                         </div>

                     </div>
                     <div class="mt-6 bg-white rounded-xl p-4 border border-gray-200">
                         <h4 class="font-semibold text-gray-700 mb-3">Ringkasan Harga</h4>
                         <div class="space-y-2">
                             <div class="flex justify-between">
                                 <span>Harga Awal:</span>
                                 <span id="displayHargaAwal">Rp 0</span>
                             </div>
                             <div class="flex justify-between text-green-600" id="discountRow"
                                 style="display: none;">
                                 <span>Diskon (<span id="discountPercent">0</span>%):</span>
                                 <span id="discountAmount">- Rp 0</span>
                             </div>
                             <hr>
                             <div class="flex justify-between font-semibold text-base">
                                 <span>Total Bayar:</span>
                                 <span id="totalBayar" class="text-sky-600">Rp 0</span>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Bukti Pembayaran -->
                 <div class="bg-gray-50 rounded-2xl p-6">
                     <h3 class="text-xl font-semibold text-gray-700 mb-4 flex items-center">
                         <svg class="w-6 h-6 mr-2 text-sky-600" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                             </path>
                         </svg>
                         Bukti Pembayaran
                     </h3>
                     <div>
                         <label class="block text-gray-700 font-medium mb-2">Upload Bukti Pembayaran *</label>
                         <div class="relative">
                             <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" required
                                 accept=".jpg,.jpeg,.png,.pdf"
                                 class="w-full px-2 md:px-4 py-1 md:py-3 rounded-xl border border-gray-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 transition-all file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-sky-600 file:text-white file:cursor-pointer">
                         </div>
                         <span class="text-red-500 text-sm error-message" data-field="bukti_pembayaran"></span>
                         <p class="text-sm text-gray-500 mt-1">Format: JPG, JPEG, PNG, PDF (Max: 2MB)</p>
                     </div>
                 </div>

                 <!-- Pernyataan -->
                 <div class="bg-gray-50 rounded-2xl p-6">
                     <h3 class="text-xl font-semibold text-gray-700 mb-4 flex items-center">
                         <svg class="w-6 h-6 mr-2 text-sky-600" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                         </svg>
                         Pernyataan
                     </h3>
                     <div class="space-y-4">
                         <div class="flex items-start space-x-3">
                             <input type="checkbox" name="consultation_agreement" id="consultation_agreement"
                                 required class="mt-1 h-5 w-5 text-sky-600 border-gray-300 rounded focus:ring-sky-500">
                             <label for="consultation_agreement" class="text-gray-700 cursor-pointer">
                                 Saya telah melakukan konsultasi terlebih dahulu mengenai harga dan detail pengerjaan
                                 tugas
                             </label>
                         </div>
                         <span class="text-red-500 text-sm error-message" data-field="consultation_agreement"></span>
                         <div class="flex items-start space-x-3">
                             <input type="checkbox" name="agreement" id="agreement" required
                                 class="mt-1 h-5 w-5 text-sky-600 border-gray-300 rounded focus:ring-sky-500">
                             <label for="agreement" class="text-gray-700 cursor-pointer">
                                 Saya telah membaca dan menyetujui
                                 <a href="#" class="text-sky-600 hover:text-sky-700 underline">Syarat &
                                     Ketentuan</a>
                                 yang berlaku di JOKIINIT
                             </label>
                         </div>
                         <span class="text-red-500 text-sm error-message" data-field="agreement"></span>
                     </div>
                 </div>

                 <input type="hidden" name="total_total_harga_awal" id="total_total_harga_awal_hidden">
                 <input type="hidden" name="total_harga_setelah_diskon" id="total_harga_setelah_diskon_hidden">
                 <input type="hidden" name="status_order_id" value="1">

                 <div class="text-center pt-2 md:pt-4">
                     <button type="submit" id="submitBtn"
                         class="w-full sm:w-auto bg-gradient-to-r from-sky-700 to-sky-500 hover:from-sky-700 hover:to-sky-600 text-white font-semibold py-2 md:py-3 px-6 rounded-2xl text-base sm:text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                         <span id="submitText">Buat Pesanan</span>
                         <svg id="loadingIcon" class="hidden animate-spin -mr-1 ml-3 h-5 w-5 text-white inline"
                             fill="none" viewBox="0 0 24 24">
                             <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                 stroke-width="4"></circle>
                             <path class="opacity-75" fill="currentColor"
                                 d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                         </svg>
                     </button>
                 </div>
             </form>
             <pre id="orderErrorLog"
                 style="display:none; background:#fff; color:#d00; padding:1em; border-radius:1em; margin-top:1em; overflow-x:auto; font-size:13px"></pre>
         </div>
     </div>
 </div>

 <script src="{{ asset('js/create-order.js') }}"></script>
