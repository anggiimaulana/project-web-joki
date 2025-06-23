// Production Order Form Script
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('orderForm');
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const loadingIcon = document.getElementById('loadingIcon');
    const hargaAwalInput = document.getElementById('total_harga_awal');
    const voucherCodeInput = document.getElementById('voucher_code');
    const checkVoucherBtn = document.getElementById('checkVoucherBtn');
    const metodePembayaranSelect = document.getElementById('metode_pembayaran_id');

    if (!form) return;

    let currentVoucher = null;

    // Get CSRF token
    function getCSRFToken() {
        const metaTag = document.querySelector('meta[name="csrf-token"]');
        if (metaTag) return metaTag.getAttribute('content');

        const tokenInput = form.querySelector('input[name="_token"]');
        if (tokenInput) return tokenInput.value;

        if (typeof window.Laravel !== 'undefined' && window.Laravel.csrfToken) {
            return window.Laravel.csrfToken;
        }

        return null;
    }

    // Format currency
    function formatRupiah(number) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        }).format(number);
    }

    // Update price summary
    function updateHargaRingkasan() {
        const hargaAwal = parseInt(hargaAwalInput.value) || 0;
        const displayHargaAwal = document.getElementById('displayHargaAwal');
        const discountRow = document.getElementById('discountRow');
        const discountPercent = document.getElementById('discountPercent');
        const discountAmount = document.getElementById('discountAmount');
        const totalBayar = document.getElementById('totalBayar');

        if (displayHargaAwal) {
            displayHargaAwal.textContent = formatRupiah(hargaAwal);
        }

        let finalPrice = hargaAwal;

        if (currentVoucher && hargaAwal > 0) {
            const diskon = (hargaAwal * currentVoucher.discount_percentage) / 100;
            finalPrice = hargaAwal - diskon;

            if (discountPercent) discountPercent.textContent = currentVoucher.discount_percentage;
            if (discountAmount) discountAmount.textContent = '- ' + formatRupiah(diskon);
            if (discountRow) discountRow.style.display = 'flex';
        } else {
            if (discountRow) discountRow.style.display = 'none';
        }

        if (totalBayar) {
            totalBayar.textContent = formatRupiah(finalPrice);
            document.getElementById('total_total_harga_awal_hidden').value = hargaAwal;
            document.getElementById('total_harga_setelah_diskon_hidden').value = finalPrice;
        }
    }

    // Show payment method details
    async function showPaymentMethodDetails(metodePembayaranId) {
        const paymentDetailsContainer = document.getElementById('paymentDetailsContainer');
        
        if (!metodePembayaranId) {
            if (paymentDetailsContainer) {
                paymentDetailsContainer.innerHTML = '';
                paymentDetailsContainer.classList.add('hidden');
            }
            return;
        }

        const csrfToken = getCSRFToken();
        if (!csrfToken) return;

        try {
            const response = await fetch('/api/payment-method-details', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    metode_pembayaran_id: metodePembayaranId
                })
            });

            if (!response.ok) return;

            const data = await response.json();

            if (data.success && data.payment_method) {
                const paymentMethod = data.payment_method;
                let detailsHtml = `
                    <div class="bg-blue-50 rounded-xl p-4 border border-blue-200">
                        <h4 class="font-semibold text-lavender mb-3 flex items-center">
                            <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Detail Pembayaran - ${paymentMethod.nama_metode}
                        </h4>
                        <div class="space-y-2">
                `;

                if (paymentMethod.atas_nama) {
                    detailsHtml += `
                        <div class="flex justify-between">
                            <span class="text-gray-600 text-sm md:text-base">Atas Nama:</span>
                            <span class="font-medium text-gray-800 text-sm md:text-base">${paymentMethod.atas_nama}</span>
                        </div>
                    `;
                }

                if (paymentMethod.nomor_rekening) {
                    detailsHtml += `
                        <div class="flex justify-between">
                            <span class="text-gray-600 text-sm md:text-base">No. Rekening:</span>
                            <span class="font-medium text-gray-800 select-all text-sm md:text-base">${paymentMethod.nomor_rekening}</span>
                        </div>
                    `;
                }

                if (paymentMethod.foto_qr) {
                    detailsHtml += `
                        <div class="mt-3">
                            <span class="text-gray-600 block mb-2">QR Code:</span>
                            <div class="flex justify-center">
                                <img src="${paymentMethod.foto_qr_url}" alt="QR Code ${paymentMethod.nama_metode}" 
                                     class="max-w-48 max-h-48 rounded-lg border border-gray-300 shadow-sm">
                            </div>
                        </div>
                    `;
                }

                detailsHtml += `
                        </div>
                        <div class="mt-3 p-2 bg-yellow-50 rounded-lg">
                            <p class="text-sm md:text-base text-yellow-800">
                                <span class="font-medium">💡 Penting:</span> Lakukan pembayaran sesuai nominal yang tertera, kemudian upload bukti pembayaran di bawah.
                            </p>
                        </div>
                    </div>
                `;

                if (paymentDetailsContainer) {
                    paymentDetailsContainer.innerHTML = detailsHtml;
                    paymentDetailsContainer.classList.remove('hidden');
                }
            } else {
                if (paymentDetailsContainer) {
                    paymentDetailsContainer.innerHTML = '';
                    paymentDetailsContainer.classList.add('hidden');
                }
            }

        } catch (error) {
            if (paymentDetailsContainer) {
                paymentDetailsContainer.innerHTML = `
                    <div class="bg-red-50 rounded-xl p-4 border border-red-200">
                        <p class="text-red-800 text-sm">
                            ⚠️ Gagal memuat detail pembayaran. Silakan refresh halaman atau hubungi support.
                        </p>
                    </div>
                `;
                paymentDetailsContainer.classList.remove('hidden');
            }
        }
    }

    // Event listeners
    if (hargaAwalInput) {
        hargaAwalInput.addEventListener('input', updateHargaRingkasan);
    }

    if (metodePembayaranSelect) {
        metodePembayaranSelect.addEventListener('change', function() {
            showPaymentMethodDetails(this.value);
        });
    }

    // Voucher checking
    if (checkVoucherBtn && voucherCodeInput) {
        checkVoucherBtn.addEventListener('click', async function() {
            const voucherCode = voucherCodeInput.value.trim();
            const voucherInfo = document.getElementById('voucherInfo');

            if (!voucherCode) {
                showAlert('Masukkan kode voucher terlebih dahulu', 'error');
                return;
            }

            const csrfToken = getCSRFToken();
            if (!csrfToken) {
                showAlert('CSRF token tidak ditemukan. Silakan refresh halaman.', 'error');
                return;
            }

            checkVoucherBtn.disabled = true;
            checkVoucherBtn.textContent = 'Checking...';

            try {
                const response = await fetch('/api/check-voucher', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({
                        code: voucherCode
                    })
                });

                let data;
                try {
                    data = await response.json();
                } catch (e) {
                    showAlert('Terjadi kesalahan pada server. Coba lagi nanti.', 'error');
                    return;
                }

                if (response.ok && data.success) {
                    currentVoucher = data.voucher;
                    document.getElementById('voucher_id_hidden').value = data.voucher.id;
                    if (voucherInfo) {
                        voucherInfo.innerHTML = `
                            <div class="text-green-600 text-sm bg-green-50 p-2 rounded">
                                ✅ Voucher valid! Diskon ${data.voucher.discount_percentage}% - ${data.voucher.description}
                            </div>
                        `;
                        voucherInfo.classList.remove('hidden');
                    }
                    updateHargaRingkasan();
                    showAlert('Voucher berhasil diterapkan!', 'success');
                } else {
                    currentVoucher = null;
                    if (voucherInfo) {
                        voucherInfo.innerHTML = `
                            <div class="text-red-600 text-sm bg-red-50 p-2 rounded">
                                ❌ ${data.message || 'Voucher tidak valid atau sudah habis.'}
                            </div>
                        `;
                        voucherInfo.classList.remove('hidden');
                    }
                    updateHargaRingkasan();
                    showAlert(data.message || 'Voucher tidak valid atau sudah habis.', 'error');
                }

            } catch (error) {
                currentVoucher = null;
                updateHargaRingkasan();
                
                let errorMessage = 'Terjadi kesalahan saat mengecek voucher';
                if (error.message.includes('Failed to fetch')) {
                    errorMessage = 'Koneksi bermasalah. Cek internet Anda.';
                }
                
                showAlert(errorMessage, 'error');
            } finally {
                checkVoucherBtn.disabled = false;
                checkVoucherBtn.textContent = 'Cek';
            }
        });

        // Reset voucher when code changes
        voucherCodeInput.addEventListener('input', function() {
            if (currentVoucher) {
                currentVoucher = null;
                
                const voucherInfo = document.getElementById('voucherInfo');
                if (voucherInfo) {
                    voucherInfo.classList.add('hidden');
                }
                
                document.getElementById('voucher_id_hidden').value = '';
                updateHargaRingkasan();
            }
        });
    }

    // Form submission
    if (form) {
        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            const csrfToken = getCSRFToken();
            if (!csrfToken) {
                showAlert('CSRF token tidak ditemukan. Silakan refresh halaman.', 'error');
                return;
            }

            if (!validateForm()) {
                showAlert('Harap lengkapi semua field yang wajib diisi', 'error');
                return;
            }

            submitBtn.disabled = true;
            submitText.textContent = 'Memproses...';
            if (loadingIcon) loadingIcon.classList.remove('hidden');

            clearErrorMessages();

            try {
                const formData = new FormData(form);

                const response = await fetch('/orders', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const contentType = response.headers.get('content-type');
                if (!contentType || !contentType.includes('application/json')) {
                    throw new Error('Server error: Response bukan JSON.');
                }

                const data = await response.json();

                if (response.ok && data.success) {
                    showAlert('Pesanan berhasil dibuat! Mengalihkan...', 'success');
                    setTimeout(() => {
                        window.location.href = data.data.redirect_url;
                    }, 2000);
                } else {
                    if (data.errors) {
                        Object.keys(data.errors).forEach(field => {
                            const errorElement = document.querySelector(`[data-field="${field}"]`);
                            if (errorElement) {
                                errorElement.textContent = data.errors[field][0];
                            }
                        });
                    }
                    const errMsg = data.message || 'Data tidak valid atau terjadi kesalahan pada server.';
                    showAlert(errMsg, 'error');
                }
            } catch (error) {
                let errorMessage = 'Terjadi kesalahan saat mengirim pesanan.';
                if (error.message.includes('Failed to fetch')) {
                    errorMessage = 'Koneksi internet bermasalah. Silakan cek koneksi Anda dan coba lagi.';
                } else if (error.message.includes('CSRF')) {
                    errorMessage = 'Session expired. Silakan refresh halaman dan coba lagi.';
                } else if (error.message.includes('500')) {
                    errorMessage = 'Terjadi kesalahan server. Silakan coba lagi atau hubungi support.';
                } else if (error.message.includes('422')) {
                    errorMessage = 'Data yang dikirim tidak valid. Silakan periksa kembali.';
                }
                showAlert(errorMessage, 'error');
            } finally {
                submitBtn.disabled = false;
                submitText.textContent = 'Kirim Pesanan';
                if (loadingIcon) loadingIcon.classList.add('hidden');
            }
        });
    }

    function validateForm() {
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');
        requiredFields.forEach(field => {
            const errorElement = document.querySelector(`[data-field="${field.name}"]`);
            if (!field.value || (field.type === 'checkbox' && !field.checked)) {
                isValid = false;
                if (errorElement) {
                    errorElement.textContent = `${field.name.replace('_', ' ')} harus diisi`;
                }
            } else if (errorElement) {
                errorElement.textContent = '';
            }
        });
        return isValid;
    }

    function clearErrorMessages() {
        document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
        const alertContainer = document.getElementById('alertContainer');
        if (alertContainer) alertContainer.classList.add('hidden');
    }

    function showAlert(message, type) {
        const alertContainer = document.getElementById('alertContainer');
        const alertClass = type === 'success' ?
            'bg-green-50 border-green-200 text-green-800' :
            'bg-red-50 border-red-200 text-red-800';
        const iconClass = type === 'success' ? 'text-green-400' : 'text-red-400';
        const icon = type === 'success' ?
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>' :
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16c-.77.833.192 2.5 1.732 2.5z"></path>';

        alertContainer.innerHTML = `
            <div class="border rounded-lg p-4 ${alertClass}">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 ${iconClass}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            ${icon}
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-base font-medium text-gray-600">${message}</p>
                    </div>
                </div>
            </div>
        `;
        alertContainer.classList.remove('hidden');
        alertContainer.scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });

        setTimeout(() => {
            alertContainer.classList.add('hidden');
        }, type === 'success' ? 4000 : 8000);
    }

    // Initialize
    updateHargaRingkasan();
});