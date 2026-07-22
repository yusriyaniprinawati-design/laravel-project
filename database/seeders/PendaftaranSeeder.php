<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendaftaran')->insert([
            [
                'nama'                   => 'Ahmad Rizky',
                'tempat_lahir'           => 'Tuban',
                'tanggal_lahir'          => '2004-05-12',
                'jenis_kelamin'          => 'Laki-laki',
                'alamat_rumah'           => 'Jl. Sunan Kalijaga No. 12, Tuban',
                'sekolah_asal'           => 'SMA',
                'nilai_matematika'       => 88.50,
                'nilai_bahasa_inggris'   => 85.00,
                'nilai_bahasa_indonesia' => 90.00,
                'pilihan_1'              => 'TEKNIK INFORMATIKA',
                'pilihan_2'              => 'SISTEM INFORMASI',
                'alasan_masuk'           => 'Ingin mendalami pemrograman web dan UI/UX design.',
                'created_at'             => now(),
                'updated_at'             => now(),
            ],
            [
                'nama'                   => 'Siti Nurhaliza',
                'tempat_lahir'           => 'Bojonegoro',
                'tanggal_lahir'          => '2005-08-20',
                'jenis_kelamin'          => 'Perempuan',
                'alamat_rumah'           => 'Jl. Veteran No. 45, Bojonegoro',
                'sekolah_asal'           => 'SMK',
                'nilai_matematika'       => 92.00,
                'nilai_bahasa_inggris'   => 89.50,
                'nilai_bahasa_indonesia' => 87.00,
                'pilihan_1'              => 'SISTEM INFORMASI',
                'pilihan_2'              => 'TEKNIK INFORMATIKA',
                'alasan_masuk'           => 'Tertarik dengan manajemen basis data dan sistem informasi kampus.',
                'created_at'             => now(),
                'updated_at'             => now(),
            ],
        ]);
    }
}