<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Registrasi | The Prestige</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Montserrat:wght@300;400;600&display=swap');

        body{
            font-family:'Montserrat',sans-serif;
            background:#000;
            color:#fff;
            padding:40px 20px;
        }

        .container{
            max-width:700px;
            margin:40px auto;
            background:#0d0d0d;
            padding:40px;
            border-radius:8px;
            border:1px solid #222;
            box-shadow:0 10px 30px rgba(0,0,0,.5);
        }

        h2{
            text-align:center;
            font-family:'Cinzel',serif;
            color:#D4AF37;
            margin-bottom:30px;
            letter-spacing:2px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        td{
            padding:12px 15px;
            border:1px solid #222;
        }

        td:first-child{
            width:40%;
            color:#999;
            font-weight:bold;
        }

        .alert{
            padding:15px;
            text-align:center;
            margin-bottom:25px;
            border-radius:5px;
            background:rgba(40,167,69,.15);
            color:#28a745;
            border:1px solid #28a745;
            text-transform:uppercase;
            font-weight:bold;
        }

        .btn-back{
            display:block;
            width:max-content;
            margin:30px auto 0;
            padding:12px 35px;
            border:1px solid #D4AF37;
            color:#D4AF37;
            text-decoration:none;
            transition:.3s;
        }

        .btn-back:hover{
            background:#D4AF37;
            color:#000;
        }
    </style>
</head>
<body>

<div class="container">

@if(request()->isMethod('post'))
<div class="alert">
    Registrasi Berhasil Disimpan Ke Sistem
</div>
@endif

<h2>Data Pendaftaran</h2>

<table>

<tr>
<td>Nama Lengkap</td>
<td>{{ request('nama') }}</td>
</tr>

<tr>
<td>Tempat Lahir</td>
<td>{{ request('tempat_lahir') }}</td>
</tr>

<tr>
<td>Tanggal Lahir</td>
<td>{{ request('tanggal_lahir') }}</td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>{{ request('jk') }}</td>
</tr>

<tr>
<td>Alamat Rumah</td>
<td>{{ request('alamat') }}</td>
</tr>

<tr>
<td>Sekolah Asal</td>
<td>{{ request('sekolah') }}</td>
</tr>

<tr>
<td>Nilai Matematika</td>
<td>{{ request('mtk') }}</td>
</tr>

<tr>
<td>Nilai Bahasa Inggris</td>
<td>{{ request('bing') }}</td>
</tr>

<tr>
<td>Nilai Bahasa Indonesia</td>
<td>{{ request('bindo') }}</td>
</tr>

<tr>
<td>Jurusan Pilihan 1</td>
<td>{{ request('jur1') }}</td>
</tr>

<tr>
<td>Jurusan Pilihan 2</td>
<td>{{ request('jur2') }}</td>
</tr>

<tr>
<td>Alasan Masuk</td>
<td>{{ request('alasan') }}</td>
</tr>

</table>

<a href="/uts#contact" class="btn-back">
    Kembali ke Main Hall
</a>

</div>

</body>
</html>