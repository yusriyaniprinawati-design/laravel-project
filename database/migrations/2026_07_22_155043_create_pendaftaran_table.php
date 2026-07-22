<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            
            // Biodata Diri
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->text('alamat_rumah');
            $table->enum('sekolah_asal', ['SMA', 'MA', 'SMK']);

            // Nilai UAN (Menggunakan decimal untuk nilai berkoma, misal 85.50)
            $table->decimal('nilai_matematika', 5, 2);
            $table->decimal('nilai_bahasa_inggris', 5, 2);
            $table->decimal('nilai_bahasa_indonesia', 5, 2);

            // Jurusan Dipilih
            $table->string('pilihan_1');
            $table->string('pilihan_2');

            // Alasan
            $table->text('alasan_masuk');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
