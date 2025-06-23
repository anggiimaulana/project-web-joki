<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order Baru Masuk - JOKIINIT</title>
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style>
        /* Reset dan Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            line-height: 1.6;
            color: #2d3748;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #f7fafc 100%);
            margin: 0;
            padding: 20px 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            min-height: 100vh;
        }

        /* Container utama */
        .email-container {
            width: 100%;
            max-width: 650px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(52, 125, 198, 0.15), 0 0 0 1px rgba(52, 125, 198, 0.05);
            overflow: hidden;
            position: relative;
            animation: fadeInUp 0.6s ease-out;
        }

        .email-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, #347dc6, #2563eb, #1d4ed8, #347dc6);
            background-size: 200% 100%;
            animation: shimmer 3s linear infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Header dengan gradient modern */
        .header {
            background: linear-gradient(135deg, #347dc6 0%, #2563eb 50%, #1d4ed8 100%);
            color: #ffffff;
            padding: 50px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: pulse 6s ease-in-out infinite;
        }

        .header::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20" fill="none"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="0.5"/></pattern></defs><rect width="100" height="20" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1) rotate(0deg);
                opacity: 0.3;
            }

            50% {
                transform: scale(1.05) rotate(1deg);
                opacity: 0.6;
            }
        }

        .header-content {
            position: relative;
            z-index: 3;
        }

        .header h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 12px;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            letter-spacing: -0.5px;
        }

        .header p {
            font-size: 16px;
            opacity: 0.95;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .status-badge {
            display: inline-block;
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            backdrop-filter: blur(20px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        /* Content area */
        .content {
            padding: 40px 40px;
        }

        .greeting {
            font-size: 16px;
            margin-bottom: 30px;
            line-height: 1.7;
            font-weight: 400;
        }

        .greeting strong {
            color: #347dc6;
            font-weight: 600;
        }

        /* Card untuk informasi order */
        .order-card {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border-radius: 16px;
            padding: 30px;
            margin: 30px 0;
            border: 1px solid #e2e8f0;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(52, 125, 198, 0.08);
        }

        .order-card::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(180deg, #347dc6 0%, #2563eb 50%, #1d4ed8 100%);
            border-radius: 0 3px 3px 0;
        }

        .info-grid {
            display: grid;
            gap: 0;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 16px 0;
            border-bottom: 1px solid rgba(52, 125, 198, 0.08);
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 500;
            color: #4a5568;
            font-size: 14px;
            min-width: 160px;
            flex-shrink: 0;
            margin-right: 20px;
        }

        .info-value {
            font-weight: 500;
            color: #1a202c;
            font-size: 14px;
            flex: 1;
            word-break: break-word;
            text-align: right;
        }

        /* Price summary dengan desain modern */
        .price-summary {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-radius: 16px;
            padding: 30px;
            margin: 30px 0;
            border: 2px solid #bae6fd;
            position: relative;
            box-shadow: 0 8px 20px rgba(14, 165, 233, 0.1);
        }

        .price-summary::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #347dc6, #2563eb, #0ea5e9);
            border-radius: 16px 16px 0 0;
        }

        .price-summary h3 {
            color: #0c4a6e;
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            font-size: 14px;
            border-bottom: 1px solid rgba(14, 165, 233, 0.1);
            font-weight: 500;
        }

        .price-row:last-child:not(.total) {
            border-bottom: none;
        }

        .price-row.total {
            border-top: 3px solid #347dc6;
            padding-top: 16px;
            margin-top: 16px;
            font-weight: 700;
            font-size: 16px;
            color: #0c4a6e;
            border-bottom: none;
        }

        /* Voucher info */
        .voucher-card {
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
            border: 2px solid #a7f3d0;
            border-radius: 12px;
            padding: 16px;
            margin: 16px 0;
            box-shadow: 0 4px 12px rgba(34, 197, 94, 0.1);
        }

        /* CTA Button */
        .cta-section {
            text-align: center;
            margin: 35px 0;
        }

        .btn-primary {
            display: inline-block;
            padding: 16px 32px;
            background: linear-gradient(135deg, #347dc6 0%, #2563eb 100%);
            color: #ffffff !important;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 14px;
            box-shadow: 0 8px 25px rgba(52, 125, 198, 0.4);
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Notes section */
        .notes-section {
            background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%);
            border: 2px solid #fed7aa;
            border-radius: 12px;
            padding: 20px;
            margin: 30px 0;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.1);
        }

        .notes-title {
            color: #c2410c;
            font-weight: 600;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .notes-content {
            color: #7c2d12;
            font-size: 14px;
            line-height: 1.6;
            font-weight: 400;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%);
            color: #a0aec0;
            padding: 30px;
            text-align: center;
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, #347dc6, #2563eb, #1d4ed8);
        }

        .footer p {
            margin: 6px 0;
            font-size: 12px;
        }

        .footer .company-name {
            color: #ffffff;
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 12px;
        }

        /* Responsive Design */
        @media only screen and (max-width: 768px) {
            body {
                padding: 10px 0;
            }

            .email-container {
                margin: 0 10px;
                border-radius: 16px;
            }

            .header {
                padding: 30px 20px;
            }

            .header h1 {
                font-size: 22px;
            }

            .header p {
                font-size: 14px;
            }

            .status-badge {
                font-size: 11px;
                padding: 8px 16px;
            }

            .content {
                padding: 25px 20px;
            }

            .greeting {
                font-size: 15px;
            }

            .order-card,
            .price-summary {
                padding: 20px;
                margin: 20px 0;
            }

            .info-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 6px;
                padding: 12px 0;
            }

            .info-label {
                min-width: auto;
                font-size: 13px;
                font-weight: 600;
                margin-right: 0;
                margin-bottom: 4px;
            }

            .info-value {
                text-align: left;
                font-size: 13px;
                font-weight: 500;
                color: #2d3748;
            }

            .price-summary h3 {
                font-size: 16px;
                margin-bottom: 16px;
            }

            .price-row {
                font-size: 13px;
                padding: 8px 0;
            }

            .price-row.total {
                font-size: 15px;
                padding-top: 12px;
                margin-top: 12px;
            }

            .btn-primary {
                padding: 14px 24px;
                font-size: 13px;
                width: 100%;
                max-width: 280px;
            }

            .notes-section {
                padding: 16px;
                margin: 20px 0;
            }

            .notes-title {
                font-size: 13px;
            }

            .footer {
                padding: 25px 20px;
            }

            .footer .company-name {
                font-size: 15px;
            }

            .footer p {
                font-size: 11px;
            }
        }

        @media only screen and (max-width: 480px) {
            .email-container {
                margin: 0 5px;
                border-radius: 12px;
            }

            .header {
                padding: 25px 15px;
            }

            .header h1 {
                font-size: 20px;
            }

            .header p {
                font-size: 13px;
            }

            .status-badge {
                font-size: 10px;
                padding: 6px 12px;
            }

            .content {
                padding: 20px 15px;
            }

            .greeting {
                font-size: 14px;
            }

            .order-card,
            .price-summary,
            .notes-section {
                padding: 16px;
                margin: 16px 0;
            }

            .info-label {
                font-size: 12px;
            }

            .info-value {
                font-size: 12px;
            }

            .price-summary h3 {
                font-size: 15px;
            }

            .price-row {
                font-size: 12px;
            }

            .price-row.total {
                font-size: 14px;
            }

            .btn-primary {
                font-size: 12px;
                padding: 12px 20px;
            }

            .notes-title {
                font-size: 12px;
            }
        }

        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            body {
                background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            }

            .email-container {
                background-color: #1e293b;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            }

            .content {
                color: #e2e8f0;
            }

            .order-card {
                background: linear-gradient(135deg, #334155 0%, #475569 100%);
                border-color: #475569;
            }

            .price-summary {
                background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
                border-color: #3b82f6;
            }

            .info-label {
                color: #cbd5e0;
            }

            .info-value {
                color: #f1f5f9;
            }

            .notes-section {
                background: linear-gradient(135deg, #451a03 0%, #78350f 100%);
                border-color: #a16207;
            }
        }

        /* Email client specific fixes */
        table {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
            border: 0;
            outline: none;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h1>🔔 Order Baru Masuk!</h1>
                <p>JOKIINIT - Order #{{ $orderNumber }}</p>
                <span class="status-badge">Baru Masuk</span>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="greeting">
                <strong>Halo Admin JOKIINIT!</strong><br>
                Ada pesanan baru yang masuk ke sistem. Berikut detail lengkapnya:
            </div>

            <!-- Order Information -->
            <div class="order-card">
                <div class="info-grid">
                    <div class="info-item">
                        <span class="info-label">Unique ID Order:</span>
                        <span class="info-value">{{ $orderNumber }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Nama Customer:</span>
                        <span class="info-value">{{ $customerName }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">WhatsApp:</span>
                        <span class="info-value">{{ $whatsappNumber }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Kategori:</span>
                        <span class="info-value">{{ $kategori }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Metode Pembayaran:</span>
                        <span class="info-value">{{ $metodePembayaran }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Waktu Order:</span>
                        <span class="info-value">{{ $createdAt }}</span>
                    </div>
                </div>
            </div>

            <!-- Price Summary -->
            <div class="price-summary">
                <h3>Detail Harga Pesanan</h3>
                <div class="price-row">
                    <span>Harga Awal:</span>
                    <span>Rp {{ $hargaAwal }}</span>
                </div>

                @if ($voucher)
                    <div class="voucher-card">
                        <div class="price-row" style="border: none; padding: 5px 0;">
                            <span>🎫 Voucher {{ $voucher }}:</span>
                        </div>
                        <div class="price-row" style="border: none; padding: 5px 0;">
                            <span>Potongan:</span>
                            <span style="color: #059669; font-weight: 600;">-Rp
                                {{ number_format($discountAmount, 0, ',', '.') }}</span>
                        </div>
                    </div>
                @endif

                <div class="price-row total">
                    <span>Total Bayar:</span>
                    <span>Rp {{ $hargaFinal }}</span>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="cta-section">
                <a href="{{ url('/admin/orders/' . $order->id . '/edit') }}" class="btn-primary">
                    👀 Lihat Detail Order
                </a>
            </div>

            <!-- Notes Section -->
            <div class="notes-section">
                <div class="notes-title">
                    📌 Catatan Penting
                </div>
                <div class="notes-content">
                    Segera proses pesanan ini dan hubungi customer melalui WhatsApp untuk konfirmasi lebih lanjut.
                    Pastikan untuk memverifikasi bukti pembayaran sebelum memulai pekerjaan joki.
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p class="company-name">JOKIINIT</p>
            <p>&copy; 2025 All rights reserved.</p>
            <p>Email otomatis dari Sistem JOKIINIT</p>
        </div>
    </div>
</body>

</html>
