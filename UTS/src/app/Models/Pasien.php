<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';

    protected $fillable = [
        'Nama_Pasien',
        'NIK',
        'Tanggal_Lahir',
        'Alamat',
        'Jenis_Kelamin',
        'Golongan_Darah',
	    'Gejala_Penyakit',
	    'image',
    ];
}