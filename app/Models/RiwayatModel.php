<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{
    protected $table = 'riwayat_rekomendasi';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'tujuan',
        'berat',
        'tinggi',
        'usia',
        'jenis_kelamin',
        'bmi',
        'kategori_bmi',
        'cedera',
        'kebugaran',
        'otot',
        'latihan_id'
    ];

    protected $useTimestamps = false;
}