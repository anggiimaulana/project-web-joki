<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TrackOrderController extends Controller
{
    public function index()
    {
        $slug = 'track-order';
        $title = 'Track Order - JOKIINIT.com';
        return view('pages.track-order', compact('slug', 'title'));
    }

    public function getOrderStatus(Request $request)
    {
        try {
            // Log request data untuk debugging
            Log::info('Track Order Request:', $request->all());

            // Validasi input
            $request->validate([
                'unique_id' => 'required|string'
            ]);

            // Cari order dengan logging
            $order = Order::with(['kategori_joki', 'status_order'])
                ->select('unique_id', 'name', 'kategori_joki_id', 'total_harga_setelah_diskon', 'status_order_id', 'perkiraan_selesai')
                ->where('unique_id', $request->unique_id)
                ->first();

            Log::info('Order Query Result:', ['order' => $order]);

            if (!$order) {
                Log::warning('Order not found:', ['unique_id' => $request->unique_id]);
                return response()->json([
                    'success' => false,
                    'message' => 'UID pesanan tidak ditemukan. Pastikan UID yang Anda masukkan benar.'
                ], 404);
            }

            // Debug relasi
            Log::info('Order Relations:', [
                'kategori_joki' => $order->kategori_joki,
                'status_order' => $order->status_order
            ]);

            // Try different possible field names for kategori
            $kategoriNama = 'N/A';
            if ($order->kategori_joki) {
                $kategoriNama = $order->kategori_joki->nama_kategori ??
                    $order->kategori_joki->nama ??
                    $order->kategori_joki->name ?? 'N/A';
            }

            // Try different possible field names for status
            $statusNama = 'N/A';
            if ($order->status_order) {
                $statusNama = $order->status_order->status ??
                    $order->status_order->nama ??
                    $order->status_order->name ?? 'N/A';
            }

            // Format data untuk response
            $responseData = [
                'success' => true,
                'data' => [
                    'unique_id' => $order->unique_id,
                    'customer_name' => $order->name,
                    'service_type' => $kategoriNama,
                    'total_amount' => 'Rp. ' . number_format($order->total_harga_setelah_diskon, 0, ',', '.'),
                    'status' => $statusNama,
                    'estimated_completion' => $order->perkiraan_selesai ?
                        \Carbon\Carbon::parse($order->perkiraan_selesai)->format('d F Y') :
                        'Belum ditentukan'
                ]
            ];

            Log::info('Response Data:', $responseData);

            return response()->json($responseData);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation Error:', $e->errors());
            return response()->json([
                'success' => false,
                'message' => 'Data tidak valid: ' . implode(', ', $e->errors()['unique_id'] ?? ['Unknown error'])
            ], 422);
        } catch (\Exception $e) {
            Log::error('Track Order Error:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan server. Silakan coba lagi nanti.'
            ], 500);
        }
    }
}
