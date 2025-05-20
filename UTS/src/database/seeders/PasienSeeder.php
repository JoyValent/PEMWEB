<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::create ([
            'Nama_Pasien' => 'Sample',
            'NIK' => '2023',
            'Tanggal_Lahir' => '2000',
            'Alamat' => 'Citra',
            'Jenis_Kelamin' => 'Pria',
            'Golongan_Darah' => 'O',
            'Gejala_Penyakit' => 'Batuk',
            'image' => '',
        ]);
    }
}
