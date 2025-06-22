// Enhanced error logging function
     function logOrderError(context, errorObj) {
         const log = {
             context: context,
             message: errorObj?.message || String(errorObj),
             stack: errorObj?.stack || null,
             status: errorObj?.status || null,
             response: errorObj?.response || null,
             responseText: errorObj?.responseText || null,
             data: errorObj?.data || null,
             url: errorObj?.url || window.location.href,
             time: (new Date()).toISOString(),
             userAgent: navigator.userAgent,
             formData: context === 'form_submit' ? getFormDataForLog() : null
         };

         // 1. Tampilkan di console dengan detail
         console.group(`🔴 ORDER ERROR: ${context}`);
         console.error('Error Details:', log);
         if (errorObj?.stack) {
             console.error('Stack Trace:', errorObj.stack);
         }
         console.groupEnd();

         // 2. Simpan ke localStorage untuk debugging
         try {
             const existingLogs = JSON.parse(localStorage.getItem('orderErrorLogs') || '[]');
             existingLogs.push(log);
             // Keep only last 10 errors
             if (existingLogs.length > 10) {
                 existingLogs.splice(0, existingLogs.length - 10);
             }
             localStorage.setItem('orderErrorLogs', JSON.stringify(existingLogs));
             localStorage.setItem('lastOrderError', JSON.stringify(log));
         } catch (e) {
             console.warn('Failed to save error to localStorage:', e);
         }

         // 3. Tampilkan di halaman untuk debugging
         const errorArea = document.getElementById('orderErrorLog');
         if (errorArea) {
             errorArea.innerHTML = `
                    <h3 style="color: #d32f2f; margin-bottom: 1em;">🔴 Debug Error Log:</h3>
                    <pre style="white-space: pre-wrap; word-break: break-word;">${JSON.stringify(log, null, 2)}</pre>
                `;
             errorArea.style.display = 'block';
         }

         return log;
     }

     function getFormDataForLog() {
         try {
             const form = document.getElementById('orderForm');
             if (!form) return null;

             const formData = new FormData(form);
             const data = {};

             for (let [key, value] of formData.entries()) {
                 if (key === 'bukti_pembayaran') {
                     data[key] = value instanceof File ? {
                         name: value.name,
                         size: value.size,
                         type: value.type
                     } : 'No file';
                 } else {
                     data[key] = value;
                 }
             }
             return data;
         } catch (e) {
             return {
                 error: 'Failed to extract form data'
             };
         }
     }

     // Enhanced JavaScript untuk Order Form
     document.addEventListener('DOMContentLoaded', function() {
         console.log('🟢 Order form script loaded');

         const form = document.getElementById('orderForm');
         const submitBtn = document.getElementById('submitBtn');
         const submitText = document.getElementById('submitText');
         const loadingIcon = document.getElementById('loadingIcon');
         const hargaAwalInput = document.getElementById('total_harga_awal');
         const voucherCodeInput = document.getElementById('voucher_code');
         const checkVoucherBtn = document.getElementById('checkVoucherBtn');

         if (!form) {
             console.error('🔴 Form with ID "orderForm" not found!');
             return;
         }

         let currentVoucher = null;

         // Enhanced CSRF token function
         function getCSRFToken() {
             // Priority order: meta tag, form input, global variable
             let token = null;

             // 1. Try meta tag
             const metaTag = document.querySelector('meta[name="csrf-token"]');
             if (metaTag) {
                 token = metaTag.getAttribute('content');
             }

             // 2. Try form input
             if (!token) {
                 const tokenInput = form.querySelector('input[name="_token"]');
                 if (tokenInput) {
                     token = tokenInput.value;
                 }
             }

             // 3. Try global Laravel variable (if available)
             if (!token && typeof window.Laravel !== 'undefined' && window.Laravel.csrfToken) {
                 token = window.Laravel.csrfToken;
             }

             console.log('🔍 CSRF Token found:', token ? '✅' : '❌', token?.substring(0, 10) + '...');
             return token;
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
                 // Tambahan di akhir fungsi updateHargaRingkasan()
                 document.getElementById('total_total_harga_awal_hidden').value = hargaAwal;
                 document.getElementById('total_harga_setelah_diskon_hidden').value = finalPrice;

             }
         }

         // Event listeners
         if (hargaAwalInput) {
             hargaAwalInput.addEventListener('input', updateHargaRingkasan);
         }

         // Enhanced voucher checking
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

                 // UI feedback
                 checkVoucherBtn.disabled = true;
                 checkVoucherBtn.textContent = 'Checking...';

                 try {
                     console.log('🔍 Checking voucher:', voucherCode);

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

                     console.log('📡 Voucher check response status:', response.status);

                     if (!response.ok) {
                         const errorText = await response.text();
                         console.error('❌ Voucher check failed:', {
                             status: response.status,
                             statusText: response.statusText,
                             responseText: errorText
                         });
                         throw new Error(`HTTP ${response.status}: ${response.statusText}`);
                     }

                     const data = await response.json();
                     console.log('📦 Voucher check result:', data);

                     if (data.success) {
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
                                        ❌ ${data.message}
                                    </div>
                                `;
                             voucherInfo.classList.remove('hidden');
                         }
                         updateHargaRingkasan();
                         showAlert(data.message, 'error');
                     }

                 } catch (error) {
                     logOrderError('voucher_check', error);
                     currentVoucher = null;
                     updateHargaRingkasan();

                     let errorMessage = 'Terjadi kesalahan saat mengecek voucher';
                     if (error.message.includes('Failed to fetch')) {
                         errorMessage = 'Koneksi bermasalah. Cek internet Anda.';
                     } else if (error.message.includes('500')) {
                         errorMessage = 'Server error. Coba lagi nanti.';
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

                     // Sembunyikan info voucher
                     const voucherInfo = document.getElementById('voucherInfo');
                     if (voucherInfo) {
                         voucherInfo.classList.add('hidden');
                     }

                     // RESET voucher_id_hidden saat kode diubah
                     document.getElementById('voucher_id_hidden').value = '';

                     // Update ringkasan harga ke harga awal
                     updateHargaRingkasan();
                 }
             });
         }

         // Enhanced form submission
         if (form) {
             form.addEventListener('submit', async function(e) {
                 e.preventDefault();
                 console.log('📝 Form submit started');

                 const csrfToken = getCSRFToken();
                 if (!csrfToken) {
                     showAlert('CSRF token tidak ditemukan. Silakan refresh halaman.', 'error');
                     logOrderError('form_submit', new Error('CSRF token missing'));
                     return;
                 }

                 // Enhanced form validation
                 if (!validateForm()) {
                     showAlert('Harap lengkapi semua field yang wajib diisi', 'error');
                     return;
                 }

                 // UI feedback
                 submitBtn.disabled = true;
                 submitText.textContent = 'Memproses...';
                 if (loadingIcon) loadingIcon.classList.remove('hidden');

                 // Clear previous errors
                 clearErrorMessages();

                 try {
                     const formData = new FormData(form);

                     // Log form data for debugging (without file content)
                     console.log('📤 Submitting form with data:');
                     for (let [key, value] of formData.entries()) {
                         if (key === 'bukti_pembayaran') {
                             console.log(`  ${key}:`, value instanceof File ?
                                 `File(${value.name}, ${value.size} bytes, ${value.type})` :
                                 'No file');
                         } else {
                             console.log(`  ${key}:`, value);
                         }
                     }

                     const response = await fetch('/orders', {
                         method: 'POST',
                         body: formData,
                         headers: {
                             'X-CSRF-TOKEN': csrfToken,
                             'Accept': 'application/json',
                             'X-Requested-With': 'XMLHttpRequest'
                         }
                     });

                     console.log('📡 Order submit response status:', response.status);
                     console.log('📡 Response headers:', [...response.headers.entries()]);

                     // Check if response is JSON
                     const contentType = response.headers.get('content-type');
                     if (!contentType || !contentType.includes('application/json')) {
                         const responseText = await response.text();
                         console.error('❌ Non-JSON response received:', {
                             status: response.status,
                             contentType: contentType,
                             responseText: responseText.substring(0, 500) + '...'
                         });

                         logOrderError('form_submit', {
                             message: 'Server returned non-JSON response',
                             status: response.status,
                             contentType: contentType,
                             responseText: responseText.substring(0, 1000)
                         });

                         throw new Error(
                             `Server error: ${response.status}. Response bukan JSON.`);
                     }

                     const data = await response.json();
                     console.log('📦 Order submit result:', data);

                     if (response.ok && data.success) {
                         console.log('✅ Order created successfully');
                         showAlert('Pesanan berhasil dibuat! Mengalihkan...', 'success');

                         setTimeout(() => {
                             window.location.href = data.data.redirect_url;
                         }, 2000);
                     } else {
                         console.log('❌ Order submission failed:', data);
                         // Handle validation errors
                         if (data.errors) {
                             Object.keys(data.errors).forEach(field => {
                                 const errorElement = document.querySelector(
                                     `[data-field="${field}"]`
                                 );
                                 if (errorElement) {
                                     errorElement.textContent = data.errors[field][0];
                                 }
                             });
                         }
                         const errMsg = data.message ||
                             'Data tidak valid atau terjadi kesalahan pada server.';
                         showAlert(errMsg, 'error');
                         logOrderError('form_submit', {
                             message: errMsg,
                             status: response.status,
                             data: data
                         });
                     }
                 } catch (error) {
                     // General error (network, server, etc)
                     logOrderError('form_submit', error);
                     let errorMessage = 'Terjadi kesalahan saat mengirim pesanan.';
                     if (error.message.includes('Failed to fetch')) {
                         errorMessage =
                             'Koneksi internet bermasalah. Silakan cek koneksi Anda dan coba lagi.';
                     } else if (error.message.includes('CSRF')) {
                         errorMessage = 'Session expired. Silakan refresh halaman dan coba lagi.';
                     } else if (error.message.includes('500')) {
                         errorMessage =
                             'Terjadi kesalahan server. Silakan coba lagi atau hubungi support.';
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
                                <p class="text-sm font-medium">${message}</p>
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

         // Initial
         updateHargaRingkasan();
     });