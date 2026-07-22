<?php

include 'koneksi.php';

// Menangkap seluruh input POST dari formulir pendaftaran UNIROW
$nama                   = $_POST['nama'];
$tempat_lahir           = $_POST['tempat_lahir'];
$tanggal_lahir          = $_POST['tanggal_lahir'];
$jenis_kelamin          = $_POST['jenis_kelamin'];
$alamat_rumah           = $_POST['alamat_rumah'];
$sekolah_asal           = $_POST['sekolah_asal'];
$nilai_matematika       = $_POST['nilai_matematika'];
$nilai_bahasa_inggris   = $_POST['nilai_bahasa_inggris'];
$nilai_bahasa_indonesia = $_POST['nilai_bahasa_indonesia'];
$pilihan_1              = $_POST['pilihan_1'];
$pilihan_2              = $_POST['pilihan_2'];
$alasan_masuk           = $_POST['alasan_masuk'];

// Query disesuaikan dengan nama tabel 'pendaftaran' dan kolom terbarunya
$query = mysqli_query($conn, 
"INSERT INTO pendaftaran (
    nama, 
    tempat_lahir, 
    tanggal_lahir, 
    jenis_kelamin, 
    alamat_rumah, 
    sekolah_asal, 
    nilai_matematika, 
    nilai_bahasa_inggris, 
    nilai_bahasa_indonesia, 
    pilihan_1, 
    pilihan_2, 
    alasan_masuk
) VALUES (
    '$nama', 
    '$tempat_lahir', 
    '$tanggal_lahir', 
    '$jenis_kelamin', 
    '$alamat_rumah', 
    '$sekolah_asal', 
    '$nilai_matematika', 
    '$nilai_bahasa_inggris', 
    '$nilai_bahasa_indonesia', 
    '$pilihan_1', 
    '$pilihan_2', 
    '$alasan_masuk'
)");

if ($query) {
    header("Location: index.php"); // atau ganti ke data.php sesuai halaman tujuanmu
    exit();
} else {
    echo "Data gagal disimpan: " . mysqli_error($conn);
}

?>