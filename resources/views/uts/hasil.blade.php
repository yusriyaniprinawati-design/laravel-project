<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .box { width: 600px; border: 2px solid black; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        td { padding: 5px; vertical-align: top; }
        .alert-success { background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border: 1px solid #c3e6cb; border-radius: 4px; }
        .footer-date { border-top: 1px solid black; margin-top: 15px; padding-top: 10px; font-weight: bold; }
    </style>
</head>
<body>

<div class="box">
    <!-- Notifikasi hijau data berhasil disimpan -->
    <div class="alert-success">
        Data berhasil disimpan!
    </div>

    <table>
        <tr>
            <td width="35%">Nama</td>
            <td width="5%">:</td>
            <td>{{ $validated['nama'] }}</td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>{{ $validated['tempat_lahir'] }}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $validated['tanggal_lahir'] }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $validated['jenis_kelamin'] }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $validated['alamat_rumah'] }}</td>
        </tr>
        <tr>
            <td>Sekolah Asal</td>
            <td>:</td>
            <td>{{ $validated['sekolah_asal'] }}</td>
        </tr>
        <tr>
            <td colspan="3"><b>Nilai UAN :</b></td>
        </tr>
        <tr>
            <td style="padding-left: 20px;">Matematika</td>
            <td>:</td>
            <td>{{ $validated['nilai_matematika'] }}</td>
        </tr>
        <tr>
            <td style="padding-left: 20px;">Bahasa Inggris</td>
            <td>:</td>
            <td>{{ $validated['nilai_bahasa_inggris'] }}</td>
        </tr>
        <tr>
            <td style="padding-left: 20px;">Bahasa Indonesia</td>
            <td>:</td>
            <td>{{ $validated['nilai_bahasa_indonesia'] }}</td>
        </tr>
        <tr>
            <td colspan="3"><b>Jurusan Yang Dipilih :</b></td>
        </tr>
        <tr>
            <td style="padding-left: 20px;">&bull; Pilihan 1</td>
            <td>:</td>
            <td>{{ $validated['pilihan_1'] }}</td>
        </tr>
        <tr>
            <td style="padding-left: 20px;">&bull; Pilihan 2</td>
            <td>:</td>
            <td>{{ $validated['pilihan_2'] }}</td>
        </tr>
        <tr>
            <td>Alasan Masuk</td>
            <td>:</td>
            <td>{{ $validated['alasan_masuk'] }}</td>
        </tr>
    </table>
    
    <div class="footer-date">
        TANGGAL DAFTAR : {{ $tanggal_daftar }}
    </div>
</div>

</body>
</html>