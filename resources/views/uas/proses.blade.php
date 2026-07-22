<?php
include 'koneksi.php';

// Menangkap data POST dari formulir pendaftaran
$nama                   = $_POST['nama'] ?? '';
$tempat_lahir           = $_POST['tempat_lahir'] ?? '';
$tanggal_lahir          = $_POST['tanggal_lahir'] ?? '';
$jenis_kelamin          = $_POST['jenis_kelamin'] ?? '-';
$alamat_rumah           = $_POST['alamat_rumah'] ?? '';
$sekolah_asal           = $_POST['sekolah_asal'] ?? '-';
$nilai_matematika       = $_POST['nilai_matematika'] ?? '0';
$nilai_bahasa_inggris   = $_POST['nilai_bahasa_inggris'] ?? '0';
$nilai_bahasa_indonesia = $_POST['nilai_bahasa_indonesia'] ?? '0';
$pilihan_1              = $_POST['pilihan_1'] ?? '';
$pilihan_2              = $_POST['pilihan_2'] ?? '';
$alasan_masuk           = $_POST['alasan_masuk'] ?? '';

// Query SQL disesuaikan dengan nama kolom tabel database pendaftaran
$query = "INSERT INTO pendaftaran 
(nama, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat_rumah, sekolah_asal, nilai_matematika, nilai_bahasa_inggris, nilai_bahasa_indonesia, pilihan_1, pilihan_2, alasan_masuk)
VALUES 
('$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat_rumah', '$sekolah_asal', '$nilai_matematika', '$nilai_bahasa_inggris', '$nilai_bahasa_indonesia', '$pilihan_1', '$pilihan_2', '$alasan_masuk')";

$simpan = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Registrasi | The Prestige</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Montserrat:wght@300;400;600&display=swap');
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #000;
            color: #fff;
            padding: 40px 20px;
        }
        .container {
            width: 100%;
            max-width: 700px;
            margin: 40px auto;
            background: #0d0d0d;
            padding: 40px;
            border-radius: 8px;
            border: 1px solid #222;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        h2 {
            text-align: center;
            font-family: 'Cinzel', serif;
            color: #D4AF37;
            margin-bottom: 30px;
            letter-spacing: 2px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        td {
            padding: 12px 15px;
            border: 1px solid #222;
            font-size: 14px;
        }
        td:first-child {
            color: #888;
            width: 40%;
            font-weight: 600;
        }
        td:last-child {
            color: #fff;
        }
        .alert {
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 25px;
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .success {
            background: rgba(40, 167, 69, 0.15);
            color: #28a745;
            border: 1px solid #28a745;
        }
        .danger {
            background: rgba(220, 53, 69, 0.15);
            color: #dc3545;
            border: 1px solid #dc3545;
        }
        .btn-back {
            display: block;
            width: max-content;
            margin: 30px auto 0;
            padding: 12px 35px;
            border: 1px solid #D4AF37;
            color: #D4AF37;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 2px;
            transition: 0.4s;
            background: transparent;
        }
        .btn-back:hover {
            background: #D4AF37;
            color: #000;
        }
    </style>
</head>
<body>

<div class="container">

<?php
if ($simpan) {
    echo "<div class='alert success'>Registrasi Berhasil Disimpan Ke Sistem</div>";
} else {
    echo "<div class='alert danger'>Registrasi Gagal! Error: " . mysqli_error($conn) . "</div>";
}
?>

<h2>Data Pendaftaran</h2>

<table>
    <tr><td>Nama Lengkap</td><td><?php echo htmlspecialchars($nama); ?></td></tr>
    <tr><td>Tempat Lahir</td><td><?php echo htmlspecialchars($tempat_lahir); ?></td></tr>
    <tr><td>Tanggal Lahir</td><td><?php echo htmlspecialchars($tanggal_lahir); ?></td></tr>
    <tr><td>Jenis Kelamin</td><td><?php echo htmlspecialchars($jenis_kelamin); ?></td></tr>
    <tr><td>Alamat Rumah</td><td><?php echo htmlspecialchars($alamat_rumah); ?></td></tr>
    <tr><td>Sekolah Asal</td><td><?php echo htmlspecialchars($sekolah_asal); ?></td></tr>
    <tr><td>Nilai Matematika</td><td><?php echo htmlspecialchars($nilai_matematika); ?></td></tr>
    <tr><td>Nilai Bahasa Inggris</td><td><?php echo htmlspecialchars($nilai_bahasa_inggris); ?></td></tr>
    <tr><td>Nilai Bahasa Indonesia</td><td><?php echo htmlspecialchars($nilai_bahasa_indonesia); ?></td></tr>
    <tr><td>Jurusan Pilihan 1</td><td><?php echo htmlspecialchars($pilihan_1); ?></td></tr>
    <tr><td>Jurusan Pilihan 2</td><td><?php echo htmlspecialchars($pilihan_2); ?></td></tr>
    <tr><td>Alasan Masuk</td><td><?php echo htmlspecialchars($alasan_masuk); ?></td></tr>
</table>

<a href="index.php" class="btn-back">Kembali ke Main Hall</a>

</div>

</body>
</html>