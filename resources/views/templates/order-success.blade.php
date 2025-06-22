<div class="min-h-screen bg-gray-50 py-8">
    <div class="container mx-auto px-4">
        <!-- Success Header -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-green-100 rounded-full mb-4">
                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-700 mb-4">
                Order Berhasil Dibuat!
            </h1>
            <div class="h-2 rounded w-44 md:w-80 mx-auto bg-gradient-to-r from-green-600 to-green-400 mb-4"></div>
            <p class="text-gray-600 text-lg">Terima kasih telah mempercayai <span
                    class="text-sky-700 font-semibold">JOKIIN<span class="text-base">IT</span></span></p>
        </div>

        <!-- Order Details Card -->
        <div class="max-w-3xl mx-auto bg-white rounded-3xl shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-sky-700 to-sky-500 p-6">
                <h2 class="text-white text-2xl font-semibold text-center">Detail Pesanan</h2>
            </div>

            <div class="p-6 md:p-8">
                <!-- Order ID -->
                <div class="text-center mb-8">
                    <div class="inline-block bg-sky-50 px-6 py-3 rounded-xl border border-sky-200">
                        <p class="text-base md:text-xl text-gray-700 font-semibold mb-1">ID Pesanan</p>
                        <div class="flex items-center justify-center gap-2">
                            <p id="uniqueIdText" class="text-base md:text-2xl font-bold text-sky-700">{{ $order->unique_id }}</p>
                            <button onclick="copyUniqueId()" class="text-sky-600 hover:text-sky-800" title="Salin ID">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 16h8M8 12h8m-9 8h10a2 2 0 002-2V8a2 2 0 00-2-2h-4l-2-2H7a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Order Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-gray-50 rounded-2xl p-4">
                        <h3 class="font-semibold text-gray-700 mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-sky-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Data Pemesan
                        </h3>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Nama:</span>
                                <span class="font-medium">{{ $order->name }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">WhatsApp:</span>
                                <span class="font-medium">{{ $order->nomor_wa }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-4">
                        <h3 class="font-semibold text-gray-700 mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-sky-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                            Detail Layanan
                        </h3>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kategori:</span>
                                <span class="font-medium">{{ $order->kategori_joki->nama_kategori ?? '-' }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Pembayaran:</span>
                                <span class="font-medium">{{ $order->metode_pembayaran->nama_metode ?? '-' }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Price Summary -->
                <div class="bg-gradient-to-r from-sky-50 to-blue-50 rounded-2xl p-6 mb-8">
                    <h3 class="font-semibold text-gray-700 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                            </path>
                        </svg>
                        Ringkasan Pembayaran
                    </h3>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Harga Awal:</span>
                            <span class="font-medium">Rp
                                {{ number_format($order->total_harga_awal, 0, ',', '.') }}</span>
                        </div>
                        @if ($order->voucher)
                            <div class="flex justify-between text-green-600">
                                <span>Diskon ({{ $order->voucher->persentase }}%):</span>
                                <span>- Rp
                                    {{ number_format($order->total_harga_awal - $order->total_harga_setelah_diskon, 0, ',', '.') }}</span>
                            </div>
                        @endif
                        <hr class="border-gray-300">
                        <div class="flex justify-between font-bold text-base">
                            <span class="text-gray-700">Total Dibayar:</span>
                            <span class="text-sky-700">Rp
                                {{ number_format($order->total_harga_setelah_diskon, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Status Information -->
                <div class="bg-yellow-50 border border-yellow-200 rounded-2xl p-6 mb-8">
                    <div class="flex items-center mb-3">
                        <svg class="w-6 h-6 text-yellow-600 mr-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="font-semibold text-yellow-800">Status Pesanan</h3>
                    </div>
                    <p class="text-yellow-700 mb-2">
                        <span class="font-medium">{{ $order->status_order->status ?? '-' }}</span>
                    </p>
                    <p class="text-sm text-yellow-600">
                        Perkiraan selesai:
                        {{ $order->perkiraan_selesai ? \Carbon\Carbon::parse($order->perkiraan_selesai)->format('d F Y') : 'Akan ditentukan' }}
                    </p>
                </div>

                <!-- Next Steps -->
                <div class="bg-blue-50 border border-blue-200 rounded-2xl p-6 mb-8">
                    <h3 class="font-semibold text-blue-800 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Langkah Selanjutnya
                    </h3>
                    <div class="space-y-2 text-blue-700">
                        <div class="flex items-start">
                            <span
                                class="inline-block w-6 h-6 bg-blue-200 text-blue-800 text-xs font-bold rounded-full flex items-center justify-center mr-3 mt-0.5">1</span>
                            <p>Tim kami akan memverifikasi pembayaran Anda dalam 1x24 jam</p>
                        </div>
                        <div class="flex items-start">
                            <span
                                class="inline-block w-6 h-6 bg-blue-200 text-blue-800 text-xs font-bold rounded-full flex items-center justify-center mr-3 mt-0.5">2</span>
                            <p>Anda akan dihubungi melalui WhatsApp untuk konfirmasi detail tugas</p>
                        </div>
                        <div class="flex items-start">
                            <span
                                class="inline-block w-6 h-6 bg-blue-200 text-blue-800 text-xs font-bold rounded-full flex items-center justify-center mr-3 mt-0.5">3</span>
                            <p>Pengerjaan tugas akan dimulai setelah semua detail dikonfirmasi</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="text-center">
                    <p class="text-gray-600 mb-4">
                        Simpan ID pesanan Anda untuk referensi. Jika ada pertanyaan, hubungi kami:
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="https://wa.me/6287711447242?text=Halo, saya ingin menanyakan pesanan dengan ID: {{ $order->unique_id }}"
                            target="_blank"
                            class="inline-flex items-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-xl transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                            </svg>
                            WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Back to Home Button -->
                <div class="text-center mt-8">
                    <a href="{{ route('HomePage') }}"
                        class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-sky-700 to-sky-500 hover:from-sky-800 hover:to-sky-600 text-white font-semibold rounded-2xl transition-all duration-300 transform hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function copyUniqueId() {
        const uniqueId = document.getElementById("uniqueIdText").textContent;
        navigator.clipboard.writeText(uniqueId).then(() => {
            showToast("ID Pesanan berhasil disalin!");
        }).catch(err => {
            showToast("Gagal menyalin ID", true);
            console.error(err);
        });
    }

    function showToast(message, isError = false) {
        const toast = document.createElement("div");
        toast.className = `
            fixed top-5 right-5 z-50 px-4 py-3 rounded-xl shadow-lg text-white text-sm font-semibold transition transform duration-300 ease-in-out
            ${isError ? 'bg-red-500' : 'bg-green-500'}
        `;
        toast.textContent = message;

        document.body.appendChild(toast);

        // Animate in
        toast.style.opacity = '0';
        toast.style.transform = 'translateY(-20px)';
        setTimeout(() => {
            toast.style.opacity = '1';
            toast.style.transform = 'translateY(0)';
        }, 10);

        // Remove after 3 seconds
        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transform = 'translateY(-20px)';
            setTimeout(() => {
                toast.remove();
            }, 300);
        }, 3000);
    }
</script>
