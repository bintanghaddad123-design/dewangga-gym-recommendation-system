<?php

namespace App\Controllers;

use App\Models\RekomendasiModel;
use App\Models\LatihanModel;

class Rekomendasi extends BaseController
{
    protected $rekomendasiModel;
    protected $latihanModel;

    public function __construct()
    {
        $this->rekomendasiModel = new RekomendasiModel();
        $this->latihanModel     = new LatihanModel();
    }

    // Menampilkan halaman form konsultasi
    public function index()
    {
        $data = [
            'title' => 'Rekomendasi Latihan Fitness',
        ];

        return view('rekomendasi/form', $data);
    }

    // Menampilkan hasil rekomendasi
    public function hasil()
    {
        $bb = $this->request->getPost('berat_badan');
        $tb = $this->request->getPost('tinggi_badan') / 100;

        // Hitung BMI
        $bmi = $bb / ($tb * $tb);

        // Menentukan kategori BMI
        if ($bmi < 18.5) {
            $kategori_bmi = 'Kurus';
        } elseif ($bmi < 25) {
            $kategori_bmi = 'Normal';
        } elseif ($bmi < 30) {
            $kategori_bmi = 'Gemuk';
        } else {
            $kategori_bmi = 'Obesitas';
        }

        // Ambil input dari form
        $cedera    = $this->request->getPost('cedera');
        $kebugaran = $this->request->getPost('kebugaran');
        $otot      = $this->request->getPost('otot');

        // Cari rule yang sesuai
        $rule = $this->rekomendasiModel->cariLatihan(
            $kategori_bmi,
            $cedera,
            $kebugaran,
            $otot
        );

        // Jika rule tidak ditemukan
        if (!$rule) {
            return redirect()->back()->with('error', 'Tidak ada rekomendasi latihan yang sesuai.');
        }

        // Ambil data latihan berdasarkan latihan_id
        $latihan = $this->latihanModel->find($rule['latihan_id']);

        $data = [
            'title'         => 'Hasil Rekomendasi',
            'bmi'           => round($bmi, 2),
            'kategori_bmi'  => $kategori_bmi,
            'latihan'       => $latihan,
        ];

        return view('rekomendasi/hasil', $data);
    }
}