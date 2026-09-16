<?php

namespace App\Models;

use CodeIgniter\Model;

class RekomendasiModel extends Model
{
    protected $table = 'rule';
    protected $primaryKey = 'id';

    public function cariLatihan($kategori_bmi, $cedera, $kebugaran, $otot)
    {
        return $this->db->table('rule')
            ->where('kategori_bmi', $kategori_bmi)
            ->where('cedera', $cedera)
            ->where('kebugaran', $kebugaran)
            ->where('otot', $otot)
            ->get()
            ->getRowArray();
    }
}