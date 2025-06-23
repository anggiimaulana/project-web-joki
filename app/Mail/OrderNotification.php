<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;

class OrderNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Load relasi yang diperlukan
        $this->order->load(['kategori_joki', 'metode_pembayaran', 'voucher']);

        return $this->subject('🔔 Order Baru Masuk - JOKIINIT #' . ($this->order->unique_id ?? $this->order->id))
            ->view('templates.order-notification')
            ->with([
                'order' => $this->order,
                'orderNumber' => $this->order->unique_id ?? $this->order->id,
                'customerName' => $this->order->name,
                'whatsappNumber' => $this->order->nomor_wa,
                'kategori' => $this->order->kategori_joki->nama_kategori ?? 'Tidak diketahui',
                'metodePembayaran' => $this->order->metode_pembayaran->nama_metode ?? 'Tidak diketahui',
                'metodePembayaranDetail' => $this->getPaymentMethodDetails(),
                'hargaAwal' => number_format($this->order->total_harga_awal, 0, ',', '.'),
                'hargaFinal' => number_format($this->order->total_harga_setelah_diskon, 0, ',', '.'),
                'discountAmount' => $this->order->total_harga_awal - $this->order->total_harga_setelah_diskon,
                'voucher' => $this->order->voucher ? $this->order->voucher->code : null,
                'buktiPembayaran' => $this->order->bukti_pembayaran,
                'createdAt' => $this->order->created_at->format('d/m/Y H:i:s'),
            ]);
    }

    /**
     * Get payment method details for email
     */
    private function getPaymentMethodDetails()
    {
        if (!$this->order->metode_pembayaran) {
            return null;
        }

        $metodePembayaran = $this->order->metode_pembayaran;
        $details = [];

        return $details;
    }
}
