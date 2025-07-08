<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\KategoriJoki;
use App\Models\MetodePembayaran;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderNotification;

class OrderController extends Controller
{
    public function create()
    {
        try {
            $kategoriJoki = KategoriJoki::all();
            $metodePembayaran = MetodePembayaran::all();
            $slug = 'orders';
            $title = 'Order Joki - JOKIINIT.com';

            return view('pages.order-create', compact('kategoriJoki', 'metodePembayaran', 'slug', 'title'));
        } catch (Exception $e) {
            Log::error('Error loading order create page', ['error' => $e->getMessage()]);
            return back()->with('error', 'Terjadi kesalahan saat memuat halaman.');
        }
    }

    // [BARU] API endpoint untuk mengambil detail metode pembayaran
    public function getPaymentMethodDetails(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'metode_pembayaran_id' => 'required|exists:metode_pembayarans,id'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Metode pembayaran tidak valid'
                ], 422);
            }

            $metodePembayaran = MetodePembayaran::find($request->metode_pembayaran_id);

            if (!$metodePembayaran) {
                return response()->json([
                    'success' => false,
                    'message' => 'Metode pembayaran tidak ditemukan'
                ], 404);
            }

            // Siapkan data response
            $paymentMethodData = [
                'id' => $metodePembayaran->id,
                'nama_metode' => $metodePembayaran->nama_metode,
                'atas_nama' => $metodePembayaran->atas_nama,
                'nomor_rekening' => $metodePembayaran->nomor_rekening,
                'foto_qr' => $metodePembayaran->foto_qr,
                'foto_qr_url' => $metodePembayaran->foto_qr ? Storage::url($metodePembayaran->foto_qr) : null
            ];

            return response()->json([
                'success' => true,
                'message' => 'Detail metode pembayaran ditemukan',
                'payment_method' => $paymentMethodData
            ]);
        } catch (Exception $e) {
            Log::error('Get payment method details failed', [
                'error' => $e->getMessage(),
                'metode_pembayaran_id' => $request->metode_pembayaran_id ?? 'null'
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mengambil detail pembayaran'
            ], 500);
        }
    }

    public function store(Request $request)
    {
        Log::info('Order store request received', [
            'request_data' => $request->except(['bukti_pembayaran', '_token']),
            'has_file' => $request->hasFile('bukti_pembayaran'),
            'file_info' => $request->hasFile('bukti_pembayaran') ? [
                'name' => $request->file('bukti_pembayaran')->getClientOriginalName(),
                'size' => $request->file('bukti_pembayaran')->getSize(),
                'mime' => $request->file('bukti_pembayaran')->getMimeType()
            ] : null,
            'headers' => [
                'content-type' => $request->header('Content-Type'),
                'accept' => $request->header('Accept'),
                'user-agent' => $request->header('User-Agent')
            ]
        ]);

        try {
            // Validasi input
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'nomor_wa' => 'required|string|max:20',
                'kategori_joki_id' => 'required|exists:kategori_jokis,id',
                'metode_pembayaran_id' => 'required|exists:metode_pembayarans,id',
                'total_harga_awal' => 'required',
                'total_harga_setelah_diskon' => 'required',
                'voucher_id' => 'nullable|exists:vouchers,id',
                'bukti_pembayaran' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
                'status_order_id' => 'required|exists:status_orders,id',
                'agreement' => 'accepted',
                'consultation_agreement' => 'accepted',
            ], [
                'name.required' => 'Nama harus diisi',
                'name.max' => 'Nama maksimal 255 karakter',
                'nomor_wa.required' => 'Nomor WhatsApp harus diisi',
                'nomor_wa.regex' => 'Format nomor WhatsApp tidak valid',
                'kategori_joki_id.required' => 'Kategori joki harus dipilih',
                'kategori_joki_id.exists' => 'Kategori joki tidak valid',
                'metode_pembayaran_id.required' => 'Metode pembayaran harus dipilih',
                'metode_pembayaran_id.exists' => 'Metode pembayaran tidak valid',
                'harga_awal.required' => 'Harga awal harus diisi',
                'harga_awal.numeric' => 'Harga awal harus berupa angka',
                'harga_awal.min' => 'Harga minimal Rp 1.000',
                'bukti_pembayaran.required' => 'Bukti pembayaran harus diupload',
                'bukti_pembayaran.file' => 'Bukti pembayaran harus berupa file',
                'bukti_pembayaran.mimes' => 'File harus berupa JPG, JPEG, PNG, atau PDF',
                'bukti_pembayaran.max' => 'Ukuran file maksimal 2MB',
                'agreement.accepted' => 'Anda harus menyetujui syarat dan ketentuan',
                'consultation_agreement.accepted' => 'Anda harus sudah melakukan konsultasi terlebih dahulu',
                'voucher_id.exists' => 'Voucher tidak valid',
            ]);

            if ($validator->fails()) {
                Log::warning('Order validation failed', [
                    'errors' => $validator->errors()->toArray(),
                    'input' => $request->except(['bukti_pembayaran', '_token'])
                ]);

                return response()->json([
                    'success' => false,
                    'message' => 'Data yang dikirim tidak valid',
                    'errors' => $validator->errors()
                ], 422);
            }

            DB::beginTransaction();

            // Format nomor WhatsApp ke +62...
            $nomorWa = $this->formatWhatsAppNumber($request->nomor_wa);
            Log::info('WhatsApp number formatted', ['original' => $request->nomor_wa, 'formatted' => $nomorWa]);

            // Ambil harga awal & voucher_id
            $hargaAwal = (int) $request->total_harga_awal;
            $voucherId = $request->voucher_id; // frontend WAJIB kirim voucher_id (nullable)
            $hargaSetelahDiskon = $hargaAwal;

            // Hitung diskon jika ada voucher_id
            if ($voucherId) {
                $voucher = Voucher::find($voucherId);
                $isValid = false;
                if ($voucher && $voucher->status_voucher == 'Aktif' && $voucher->tanggal_kadaluarsa > now()) {
                    if (!is_null($voucher->maksimal_person)) {
                        $usedCount = $voucher->orders()->count();
                        if ($usedCount < $voucher->maksimal_person) {
                            $isValid = true;
                        } else {
                            Log::warning('Voucher usage exceeds maksimal_person', [
                                'voucher_id' => $voucherId,
                                'max' => $voucher->maksimal_person,
                                'used' => $usedCount
                            ]);
                        }
                    } else {
                        $isValid = true; // unlimited usage
                    }
                }
                if ($isValid) {
                    $diskon = ($hargaAwal * $voucher->persentase) / 100;
                    $hargaSetelahDiskon = $hargaAwal - $diskon;
                    Log::info('Voucher applied', [
                        'voucher_id' => $voucherId,
                        'discount_percent' => $voucher->persentase,
                        'original_price' => $hargaAwal,
                        'final_price' => $hargaSetelahDiskon
                    ]);
                } else {
                    $voucherId = null;
                    $hargaSetelahDiskon = $hargaAwal;
                }
            }

            // Upload bukti pembayaran
            $buktiPembayaran = null;
            if ($request->hasFile('bukti_pembayaran')) {
                $file = $request->file('bukti_pembayaran');
                if (!$file->isValid()) {
                    throw new Exception('File upload tidak valid atau rusak');
                }
                if ($file->getSize() > 2048 * 1024) { // 2MB in bytes
                    throw new Exception('Ukuran file terlalu besar (maksimal 2MB)');
                }
                $allowedMimes = ['image/jpeg', 'image/jpg', 'image/png', 'application/pdf'];
                if (!in_array($file->getMimeType(), $allowedMimes)) {
                    throw new Exception('Tipe file tidak didukung. Gunakan JPG, JPEG, PNG, atau PDF');
                }
                $fileName = 'bukti_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $uploadPath = 'pembayaran';
                $buktiPembayaran = $file->storeAs($uploadPath, $fileName, 'public');
                if (!$buktiPembayaran) {
                    throw new Exception('Gagal menyimpan file bukti pembayaran');
                }
            } else {
                throw new Exception('File bukti pembayaran tidak ditemukan');
            }

            // Status order default 1 (baru)
            $statusOrderId = 1;

            // Buat order
            $orderData = [
                'name' => trim($request->name),
                'nomor_wa' => $nomorWa,
                'kategori_joki_id' => $request->kategori_joki_id,
                'metode_pembayaran_id' => $request->metode_pembayaran_id,
                'voucher_id' => $voucherId,
                'total_harga_awal' => $hargaAwal,
                'total_harga_setelah_diskon' => $hargaSetelahDiskon,
                'bukti_pembayaran' => $buktiPembayaran,
                'status_order_id' => $statusOrderId,
                'perkiraan_selesai' => now()->addDays(7), // opsional, admin bisa isi/ubah
            ];

            Log::info('Creating order with data', $orderData);
            $order = Order::create($orderData);

            if (!$order) {
                throw new Exception('Gagal membuat order di database');
            }

            // [BARU] Kirim email notifikasi ke owner
            try {
                $order->load(['kategori_joki', 'metode_pembayaran', 'status_order', 'voucher']);
                Mail::to('official.jokiinit@gmail.com')->send(new OrderNotification($order));
                Log::info('Order notification email sent successfully', ['order_id' => $order->id]);
            } catch (Exception $emailError) {
                Log::error('Failed to send order notification email', [
                    'order_id' => $order->id,
                    'email_error' => $emailError->getMessage()
                ]);
                // Jangan throw error untuk email, order tetap berhasil
            }

            DB::commit();

            Log::info('Order created successfully', [
                'order_id' => $order->id,
                'unique_id' => $order->unique_id ?? 'not_generated'
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Order berhasil dibuat!',
                'data' => [
                    'order_id' => $order->id,
                    'unique_id' => $order->unique_id ?? $order->id,
                    'redirect_url' => route('orders.success', $order->unique_id ?? $order->id)
                ]
            ], 201);
        } catch (Exception $e) {
            DB::rollback();

            if (isset($buktiPembayaran) && $buktiPembayaran) {
                try {
                    Storage::disk('public')->delete($buktiPembayaran);
                } catch (Exception $deleteError) {
                    Log::warning('Failed to delete uploaded file after error', [
                        'file' => $buktiPembayaran,
                        'error' => $deleteError->getMessage()
                    ]);
                }
            }

            Log::error('Order creation failed', [
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->except(['bukti_pembayaran', '_token'])
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat memproses pesanan: ' . $e->getMessage()
            ], 500);
        }
    }

    // AJAX endpoint cek voucher
    public function checkVoucher(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'code' => 'required|string|max:50'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Kode voucher harus diisi'
                ], 422);
            }

            $voucher = Voucher::where('code', $request->code)
                ->where('status_voucher', 'Aktif')
                ->where('tanggal_kadaluarsa', '>', now())
                ->first();

            if (!$voucher) {
                return response()->json([
                    'success' => false,
                    'message' => 'Kode voucher tidak valid atau sudah expired.'
                ], 404);
            }

            // Cek maksimal_person (jika ada)
            if (!is_null($voucher->maksimal_person)) {
                $usedCount = $voucher->orders()->count();
                if ($usedCount >= $voucher->maksimal_person) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Voucher sudah mencapai batas maksimal penggunaan (' . $voucher->maksimal_person . 'x)'
                    ], 400);
                }
            }

            return response()->json([
                'success' => true,
                'message' => 'Voucher valid',
                'voucher' => [
                    'id' => $voucher->id,
                    'code' => $voucher->code,
                    'discount_percentage' => $voucher->persentase,
                    'description' => $voucher->description ?? 'Diskon ' . $voucher->persentase . '%'
                ]
            ]);
        } catch (Exception $e) {
            Log::error('Check voucher failed', [
                'error' => $e->getMessage(),
                'code' => $request->code ?? 'null'
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mengecek voucher'
            ], 500);
        }
    }

    public function success($uniqueId)
    {
        try {
            $order = Order::with(['kategori_joki', 'metode_pembayaran', 'status_order', 'voucher'])
                ->where('unique_id', $uniqueId)
                ->orWhere('id', $uniqueId)
                ->firstOrFail();

            $slug = 'orders';
            $title = 'Order Berhasil - JOKIINIT.com';

            return view('pages.order-success', compact('order', 'slug', 'title'));
        } catch (Exception $e) {
            Log::error('Order success page failed', [
                'unique_id' => $uniqueId,
                'error' => $e->getMessage()
            ]);

            abort(404, 'Order tidak ditemukan');
        }
    }

    /**
     * Format nomor WA ke +62 tanpa regex
     */
    private function formatWhatsAppNumber($number)
    {
        $number = trim($number);
        $number = str_replace([' ', '-', '(', ')'], '', $number);

        if (substr($number, 0, 1) === '+') {
            $number = substr($number, 1);
        }
        $number = preg_replace('/\D/', '', $number);

        if (substr($number, 0, 1) === '0') {
            $number = '62' . substr($number, 1);
        }
        if (substr($number, 0, 2) !== '62') {
            $number = '62' . $number;
        }
        return '+' . $number;
    }

    // private function sendWhatsAppNotification($phone, $message)
    // {
    //     $token = 'elClY0h8T69MzKJgTL5hUmDXwCljMfwfYsJi1OmnY7OxWEL2uUA27ln';
    //     $url = 'https://sby.wablas.com/api/send-message';

    //     $data = [
    //         'phone' => $phone,
    //         'message' => $message,
    //         'secret' => false,
    //         'priority' => false,
    //     ];

    //     $curl = curl_init();
    //     curl_setopt_array($curl, [
    //         CURLOPT_URL => $url,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_POST => true,
    //         CURLOPT_POSTFIELDS => http_build_query($data),
    //         CURLOPT_HTTPHEADER => [
    //             'Authorization: ' . $token,
    //         ],
    //     ]);

    //     $response = curl_exec($curl);
    //     curl_close($curl);

    //     Log::info('WA Response: ' . $response);
    // }
}
