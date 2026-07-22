<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data - The Prestige</title>
</head>
<body style="background:#000; color:#fff; font-family:Montserrat,sans-serif; padding:50px;">

<h2 style="color:#D4AF37;">Modify Record</h2>

<form action="/update" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $d->id }}">

    <table cellpadding="8">
        <tr>
            <td>Nama Lengkap</td>
            <td>
                <input type="text" name="nama" value="{{ $d->nama }}" required>
            </td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td>
                <input type="text" name="tempat_lahir" value="{{ $d->tempat_lahir }}" required>
            </td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>
                <input type="date" name="tanggal_lahir" value="{{ $d->tanggal_lahir }}" required>
            </td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" {{ $d->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }} required> Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan" {{ $d->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}> Perempuan
            </td>
        </tr>

        <tr>
            <td>Alamat Rumah</td>
            <td>
                <textarea name="alamat_rumah" rows="3" required>{{ $d->alamat_rumah }}</textarea>
            </td>
        </tr>

        <tr>
            <td>Sekolah Asal</td>
            <td>
                <input type="radio" name="sekolah_asal" value="SMA" {{ $d->sekolah_asal == 'SMA' ? 'checked' : '' }} required> SMA
                <input type="radio" name="sekolah_asal" value="MA" {{ $d->sekolah_asal == 'MA' ? 'checked' : '' }}> MA
                <input type="radio" name="sekolah_asal" value="SMK" {{ $d->sekolah_asal == 'SMK' ? 'checked' : '' }}> SMK
            </td>
        </tr>

        <tr>
            <td colspan="2" style="padding-top: 15px;"><b style="color:#D4AF37;">Nilai UAN</b></td>
        </tr>

        <tr>
            <td>Matematika</td>
            <td>
                <input type="number" step="0.01" name="nilai_matematika" value="{{ $d->nilai_matematika }}" required>
            </td>
        </tr>

        <tr>
            <td>Bahasa Inggris</td>
            <td>
                <input type="number" step="0.01" name="nilai_bahasa_inggris" value="{{ $d->nilai_bahasa_inggris }}" required>
            </td>
        </tr>

        <tr>
            <td>Bahasa Indonesia</td>
            <td>
                <input type="number" step="0.01" name="nilai_bahasa_indonesia" value="{{ $d->nilai_bahasa_indonesia }}" required>
            </td>
        </tr>

        <tr>
            <td colspan="2" style="padding-top: 15px;"><b style="color:#D4AF37;">Jurusan Dipilih</b></td>
        </tr>

        <tr>
            <td>Pilihan 1</td>
            <td>
                <select name="pilihan_1" required>
                    <option value="TEKNIK INFORMATIKA" {{ $d->pilihan_1 == 'TEKNIK INFORMATIKA' ? 'selected' : '' }}>TEKNIK INFORMATIKA</option>
                    <option value="SISTEM INFORMASI" {{ $d->pilihan_1 == 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Pilihan 2</td>
            <td>
                <select name="pilihan_2" required>
                    <option value="TEKNIK INFORMATIKA" {{ $d->pilihan_2 == 'TEKNIK INFORMATIKA' ? 'selected' : '' }}>TEKNIK INFORMATIKA</option>
                    <option value="SISTEM INFORMASI" {{ $d->pilihan_2 == 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Alasan Masuk</td>
            <td>
                <textarea name="alasan_masuk" rows="5" required>{{ $d->alasan_masuk }}</textarea>
            </td>
        </tr>

        <tr>
            <td colspan="2" style="padding-top: 20px;">
                <button type="submit" style="background:#D4AF37; color:#000; border:none; padding:10px 20px; font-weight:bold; cursor:pointer;">Simpan Perubahan</button>
            </td>
        </tr>
    </table>

</form>

</body>
</html>