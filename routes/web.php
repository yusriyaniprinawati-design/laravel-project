<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uts', function () {
    return view('uts.index');
});

Route::post('/proses', function (Request $request) {
    // 1. Simpan data ke database tabel 'pendaftaran'
    DB::table('pendaftaran')->insert([
        'nama'                     => $request->nama,
        'tempat_lahir'             => $request->tempat_lahir,
        'tanggal_lahir'            => $request->tanggal_lahir,
        'jenis_kelamin'            => $request->jenis_kelamin,
        'alamat_rumah'             => $request->alamat_rumah,
        'sekolah_asal'             => $request->sekolah_asal,
        'nilai_matematika'         => $request->nilai_matematika,
        'nilai_bahasa_inggris'     => $request->nilai_bahasa_inggris,
        'nilai_bahasa_indonesia'   => $request->nilai_bahasa_indonesia,
        'pilihan_1'                => $request->pilihan_1,
        'pilihan_2'                => $request->pilihan_2,
        'alasan_masuk'             => $request->alasan_masuk,
    ]);

    // 2. Siapkan data untuk dikirim ke tampilan hasil
    $validated = $request->all();
    
    // 3. Tanggal daftar otomatis hari ini
    $tanggal_daftar = date('d F Y');

    // 4. Tampilkan halaman hasil UTS lengkap dengan notifikasi hijau
    return view('uts.hasil', compact('validated', 'tanggal_daftar'));
});

Route::get('/uas', function () {

    $data = DB::table('pendaftaran')
        ->orderBy('id', 'desc')
        ->get();

    return view('uas.index', compact('data'));
});

Route::get('/create', function () {
    return view('uas.create');
});

Route::get('/data', function () {
    return view('uas.data');
});

Route::post('/simpan', function (Request $request) {
    DB::table('pendaftaran')->insert([
        'nama'                   => $request->nama,
        'tempat_lahir'           => $request->tempat_lahir,
        'tanggal_lahir'          => $request->tanggal_lahir,
        'jenis_kelamin'          => $request->jenis_kelamin,
        'alamat_rumah'           => $request->alamat_rumah,
        'sekolah_asal'           => $request->sekolah_asal,
        'nilai_matematika'       => $request->nilai_matematika,
        'nilai_bahasa_inggris'   => $request->nilai_bahasa_inggris,
        'nilai_bahasa_indonesia' => $request->nilai_bahasa_indonesia,
        'pilihan_1'              => $request->pilihan_1,
        'pilihan_2'              => $request->pilihan_2,
        'alasan_masuk'           => $request->alasan_masuk,
    ]);

    return redirect('/uas');
});

Route::get('/edit', function () {
    $id = request('id');

    $d = DB::table('pendaftaran')
        ->where('id', $id)
        ->first();

    if (!$d) {
        abort(404);
    }

    return view('uas.edit', compact('d'));
});

Route::post('/update', function (Request $request) {

    DB::table('pendaftaran')
        ->where('id', $request->id)
        ->update([
            'nama'                   => $request->nama,
            'tempat_lahir'           => $request->tempat_lahir,
            'tanggal_lahir'          => $request->tanggal_lahir,
            'jenis_kelamin'          => $request->jenis_kelamin,
            'alamat_rumah'           => $request->alamat_rumah,
            'sekolah_asal'           => $request->sekolah_asal,
            'nilai_matematika'       => $request->nilai_matematika,
            'nilai_bahasa_inggris'   => $request->nilai_bahasa_inggris,
            'nilai_bahasa_indonesia' => $request->nilai_bahasa_indonesia,
            'pilihan_1'              => $request->pilihan_1,
            'pilihan_2'              => $request->pilihan_2,
            'alasan_masuk'           => $request->alasan_masuk,
        ]);

    return redirect('/uas');
});

Route::get('/hapus', function () {
    $id = request('id');

    if ($id) {
        DB::table('pendaftaran')
            ->where('id', $id)
            ->delete();
    }

    return redirect('/uas');
});