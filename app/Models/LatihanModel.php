<?php

namespace App\Models;

use CodeIgniter\Model;

class LatihanModel extends Model
{
    protected $table = 'latihan';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama_latihan',
        'otot',
        'deskripsi',
        'video',
        'frekuensi',
        'set_repetisi',
        'istirahat'
    ];
}