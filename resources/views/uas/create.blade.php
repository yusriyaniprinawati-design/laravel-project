<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa - UNIROW</title>
</head>
<body style="background:#000; color:#fff; font-family:sans-serif; padding:40px;">

<h2>Tambah Mahasiswa Baru</h2>

<form action="{{ url('/simpan') }}" method="POST">
    @csrf

    <h3>Data Diri</h3>
    <label>Nama Lengkap</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Tempat Lahir</label><br>
    <input type="text" name="tempat_lahir" required><br><br>

    <label>Tanggal Lahir</label><br>
    <input type="date" name="tanggal_lahir" required><br><br>

    <label>Jenis Kelamin</label><br>
    <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br><br>

    <label>Alamat Rumah</label><br>
    <textarea name="alamat_rumah" rows="3" required></textarea><br><br>

    <label>Sekolah Asal</label><br>
    <input type="radio" name="sekolah_asal" value="SMA" required> SMA
    <input type="radio" name="sekolah_asal" value="MA"> MA
    <input type="radio" name="sekolah_asal" value="SMK"> SMK<br><br>

    <h3>Nilai UAN</h3>
    <label>Matematika</label><br>
    <input type="number" step="0.01" name="nilai_matematika" required><br><br>

    <label>Bahasa Inggris</label><br>
    <input type="number" step="0.01" name="nilai_bahasa_inggris" required><br><br>

    <label>Bahasa Indonesia</label><br>
    <input type="number" step="0.01" name="nilai_bahasa_indonesia" required><br><br>

    <h3>Jurusan Dipilih</h3>
    <label>Pilihan 1</label><br>
    <select name="pilihan_1" required>
        <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
        <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
    </select><br><br>

    <label>Pilihan 2</label><br>
    <select name="pilihan_2" required>
        <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
        <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
    </select><br><br>

    <label>Alasan Masuk</label><br>
    <textarea name="alasan_masuk" rows="4" required></textarea><br><br>

    <button type="submit">Simpan Data</button>
    <a href="{{ url('/uas') }}" style="color:#fff; margin-left:10px;">Kembali</a>

</form>

</body>
</html>