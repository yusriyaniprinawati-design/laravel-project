<?php
include 'koneksi.php';

if (isset($_POST['update']) || $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id                      = $_POST['id'];
    $nama                    = $_POST['nama'];
    $tempat_lahir            = $_POST['tempat_lahir'];
    $tanggal_lahir           = $_POST['tanggal_lahir'];
    $jenis_kelamin           = $_POST['jenis_kelamin'];
    $alamat_rumah            = $_POST['alamat_rumah'];
    $sekolah_asal            = $_POST['sekolah_asal'];
    $nilai_matematika        = $_POST['nilai_matematika'];
    $nilai_bahasa_inggris    = $_POST['nilai_bahasa_inggris'];
    $nilai_bahasa_indonesia  = $_POST['nilai_bahasa_indonesia'];
    $pilihan_1               = $_POST['pilihan_1'];
    $pilihan_2               = $_POST['pilihan_2'];
    $alasan_masuk            = $_POST['alasan_masuk'];

    // Update query lengkap sesuai dengan seluruh kolom tabel pendaftaran
    $query = "UPDATE pendaftaran SET 
                nama                    = '$nama', 
                tempat_lahir            = '$tempat_lahir', 
                tanggal_lahir           = '$tanggal_lahir',
                jenis_kelamin           = '$jenis_kelamin',
                alamat_rumah            = '$alamat_rumah',
                sekolah_asal            = '$sekolah_asal',
                nilai_matematika        = '$nilai_matematika',
                nilai_bahasa_inggris    = '$nilai_bahasa_inggris',
                nilai_bahasa_indonesia  = '$nilai_bahasa_indonesia',
                pilihan_1               = '$pilihan_1',
                pilihan_2               = '$pilihan_2',
                alasan_masuk            = '$alasan_masuk'
              WHERE id = '$id'";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php"); // Redirect kembali setelah sukses
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>