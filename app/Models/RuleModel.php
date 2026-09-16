<?php

namespace App\Models;

use CodeIgniter\Model;

class RuleModel extends Model
{
    protected $table = 'rule';

    protected $primaryKey = 'id';

    protected $allowedFields = [

        'tujuan',

        'kategori_bmi',

        'cedera',

        'kebugaran',

        'otot',

        'latihan_id'

    ];
}