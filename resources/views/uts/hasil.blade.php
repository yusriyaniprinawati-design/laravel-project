<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rangkuman Pendaftaran - Luxury x Prina</title>
    <!-- Masukkan file CSS yang sama dengan form utama kamu -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Tambahan style khusus untuk halaman hasil jika diperlukan agar selaras */
        body {
            background-color: #0b0b0b;
            color: #e5e5e5;
            font-family: 'Cinzel', 'Times New Roman', serif; /* Sesuaikan font jika ada */
        }
        .result-container {
            max-width: 800px;
            margin: 40px auto;
            background: #121212;
            border: 1px solid #d4af37; /* Garis aksen emas */
            padding: 40px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.8);
        }
        .success-banner {
            background-color: rgba(212, 175, 55, 0.1);
            border: 1px solid #d4af37;
            color: #d4af37;
            padding: 15px;
            margin-bottom: 25px;
            text-align: center;
            font-weight: bold;
        }
        table.result-table {
            width: 100%;
            border-collapse: collapse;
        }
        table.result-table td {
            padding: 10px 5px;
            vertical-align: top;
            color: #f1f1f1;
        }
        .btn-luxury {
            background-color: #d4af37;
            color: #0b0b0b;
            padding: 10px 25px;
            border: none;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }
        .btn-luxury:hover {
            background-color: #f3c653;
        }
    </style>
</head>
<body>

    <!-- Bagian Header Luxury -->
    <div style="text-align: center; padding: 30px 0; border-bottom: 1px solid #222;">
        <div style="width: 50px; height: 50px; border: 1px solid #d4af37; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; color: #d4af37; font-weight: bold; margin-bottom: 10px;">LP</div>
        <h1 style="color: #d4af37; letter-spacing: 3px; font-size: 24px; margin: 0;">LUXURY X PRINA</h1>
        <p style="color: #777; font-size: 10px; letter-spacing: 4px; margin-top: 5px;">THE PINNACLE OF EXCELLENCE</p>
    </div>

    <!-- Kotak Rangkuman Data -->
    <div class="result-container">
        <div class="success-banner">
            Data Berhasil Disimpan!
        </div>

        <table class="result-table">
            <tr>
                <td width="30%">Nama</td>
                <td width="5%">:</td>
                <td>{{ $data['nama'] ?? '-' }}</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>{{ $data['tempat_lahir'] ?? '-' }}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $data['tanggal_lahir'] ?? '-' }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $data['jenis_kelamin'] ?? '-' }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $data['alamat'] ?? '-' }}</td>
            </tr>
            <tr>
                <td>Sekolah Asal</td>
                <td>:</td>
                <td>{{ $data['sekolah_asal'] ?? '-' }}</td>
            </tr>
            <tr>
                <td colspan="3" style="padding-top: 15px; font-weight: bold; color: #d4af37;">Nilai UAN :</td>
            </tr>
            <tr>
                <td style="padding-left: 20px;">Matematika</td>
                <td>:</td>
                <td>{{ $data['nilai_mtk'] ?? '-' }}</td>
            </tr>
            <tr>
                <td style="padding-left: 20px;">Bahasa Inggris</td>
                <td>:</td>
                <td>{{ $data['nilai_b_inggris'] ?? '-' }}</td>
            </tr>
            <tr>
                <td style="padding-left: 20px;">Bahasa Indonesia</td>
                <td>:</td>
                <td>{{ $data['nilai_b_indo'] ?? '-' }}</td>
            </tr>
            <tr>
                <td colspan="3" style="padding-top: 15px; font-weight: bold; color: #d4af37;">Jurusan Yang Dipilih :</td>
            </tr>
            <tr>
                <td style="padding-left: 20px;">Pilihan 1</td>
                <td>:</td>
                <td>{{ $data['pilihan_1'] ?? '-' }}</td>
            </tr>
            <tr>
                <td style="padding-left: 20px;">Pilihan 2</td>
                <td>:</td>
                <td>{{ $data['pilihan_2'] ?? '-' }}</td>
            </tr>
            <tr>
                <td>Alasan Masuk</td>
                <td>:</td>
                <td>{{ $data['alasan'] ?? '-' }}</td>
            </tr>
        </table>

        <hr style="border: 0; border-top: 1px solid #333; margin: 25px 0;">

        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="font-size: 12px; color: #888;">TANGGAL DAFTAR : {{ date('d F Y') }}</span>
            <a href="{{ url('/') }}" class="btn-luxury">KEMBALI</a>
        </div>
    </div>

</body>
</html>