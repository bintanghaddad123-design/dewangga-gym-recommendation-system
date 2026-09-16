<?php

namespace App\Controllers;

use App\Models\RiwayatModel;

class Riwayat extends BaseController
{
    protected $riwayatModel;

    public function __construct()
    {
        $this->riwayatModel = new RiwayatModel();
    }

    public function index()
    {
        $data = [

            'title' => 'Kelola Riwayat',

            'riwayat' => $this->riwayatModel
                ->select('riwayat_rekomendasi.*, users.nama, latihan.nama_latihan')
                ->join('users', 'users.id = riwayat_rekomendasi.user_id')
                ->join('latihan', 'latihan.id = riwayat_rekomendasi.latihan_id')
                ->orderBy('riwayat_rekomendasi.id', 'DESC')
                ->findAll()

        ];

        return view('admin/riwayat/index', $data);
    }

    public function detail($id)
{
    $data['riwayat'] = $this->riwayatModel
        ->select('
            riwayat_rekomendasi.*,
            users.nama,
            latihan.nama_latihan,
            latihan.deskripsi,
            latihan.video,
            latihan.frekuensi,
            latihan.set_repetisi,
            latihan.istirahat
        ')
        ->join('users', 'users.id = riwayat_rekomendasi.user_id')
        ->join('latihan', 'latihan.id = riwayat_rekomendasi.latihan_id')
        ->where('riwayat_rekomendasi.id', $id)
        ->first();

    return view('admin/riwayat/detail', $data);
}

    public function hapus($id)
    {
        $this->riwayatModel->delete($id);

        return redirect()->to('/riwayat')
            ->with('success', 'Riwayat berhasil dihapus');
    }
}