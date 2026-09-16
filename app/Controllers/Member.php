<?php

namespace App\Controllers;

use App\Models\RuleModel;
use App\Models\LatihanModel;
use App\Models\RiwayatModel;

class Member extends BaseController
{
    protected $ruleModel;
    protected $latihanModel;
    protected $riwayatModel;

    public function __construct()
    {
        // Cek Login
        if (!session()->get('login')) {
            return redirect()->to(base_url('login'))->send();
        }

        // Cek Role
        if (session()->get('role') !== 'member') {
            return redirect()->to(base_url('dashboard'))->send();
        }

        $this->ruleModel     = new RuleModel();
        $this->latihanModel  = new LatihanModel();
        $this->riwayatModel  = new RiwayatModel();
    }

    /*
    |--------------------------------------------------------------------------
    | Home Member
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $data = [
            'title' => 'Home Member'
        ];

        return view('frontend/member/home', $data);
    }

    /*
    |--------------------------------------------------------------------------
    | Form Rekomendasi
    |--------------------------------------------------------------------------
    */
    public function rekomendasi()
    {
        $data = [
            'title' => 'Rekomendasi Latihan'
        ];

        return view('frontend/member/rekomendasi', $data);
    }

    /*
    |--------------------------------------------------------------------------
    | Proses Rekomendasi
    |--------------------------------------------------------------------------
    */
    public function proses()
    {
        // Ambil Data Form
        $tujuan         = $this->request->getPost('tujuan');
        $berat          = $this->request->getPost('berat');
        $tinggi         = $this->request->getPost('tinggi');
        $usia           = $this->request->getPost('usia');
        $jenisKelamin   = $this->request->getPost('jenis_kelamin');
        $cedera         = $this->request->getPost('cedera');
        $kebugaran      = $this->request->getPost('kebugaran');
        $otot           = $this->request->getPost('otot');
        // Hitung BMI
        $tinggiMeter = $tinggi / 100;
        $bmi = $berat / ($tinggiMeter * $tinggiMeter);

        // Tentukan Kategori BMI
        if ($bmi < 18.5) {
            $kategori = 'Kurus';
        } elseif ($bmi < 25) {
            $kategori = 'Normal';
        } elseif ($bmi < 30) {
            $kategori = 'Gemuk';
        } else {
            $kategori = 'Obesitas';
        }

        // Cari Rule
        $rule = $this->ruleModel
            ->where('tujuan', $tujuan)
            ->where('kategori_bmi', $kategori)
            ->where('cedera', $cedera)
            ->where('kebugaran', $kebugaran)
            ->where('jenis_kelamin', $jenisKelamin)
            ->where('otot', $otot)
            ->first();

        if (!$rule) {
            return redirect()->back()->withInput()->with('error', 'Rule tidak ditemukan.');
        }

        // Ambil Latihan
        $latihan = $this->latihanModel->find($rule['latihan_id']);

        if (!$latihan) {
            return redirect()->back()->withInput()->with('error', 'Data latihan tidak ditemukan.');
        }

        // Simpan Riwayat
        $this->riwayatModel->save([
    'user_id'         => session()->get('id'),
    'tujuan'          => $tujuan,
    'berat'           => $berat,
    'tinggi'          => $tinggi,
    'usia'            => $usia,
    'jenis_kelamin'   => $jenisKelamin,
    'bmi'             => round($bmi, 2),
    'kategori_bmi'    => $kategori,
    'cedera'          => $cedera,
    'kebugaran'       => $kebugaran,
    'otot'            => $otot,
    'latihan_id'      => $latihan['id']
]);

       // Tampilkan Hasil
$data = [
    'title'            => 'Hasil Rekomendasi',
    'bmi'              => round($bmi, 2),
    'kategori'         => $kategori,
    'usia'             => $usia,
    'jenis_kelamin'    => $jenisKelamin,
    'latihan'          => $latihan
];

        return view('frontend/member/hasil', $data);
    }

    /*
    |--------------------------------------------------------------------------
    | Riwayat Rekomendasi
    |--------------------------------------------------------------------------
    */
    public function riwayat()
    {
        $data = [
            'title' => 'Riwayat Rekomendasi',
            'riwayat' => $this->riwayatModel
                ->select('riwayat_rekomendasi.*, latihan.nama_latihan')
                ->join('latihan', 'latihan.id = riwayat_rekomendasi.latihan_id')
                ->where('user_id', session()->get('id'))
                ->orderBy('id', 'DESC')
                ->findAll()
        ];

        return view('frontend/member/riwayat', $data);
    }
    public function detail($id)
    {
    $model = new \App\Models\RiwayatModel();

    $data['riwayat'] = $model

        ->select('
            riwayat_rekomendasi.*,
            latihan.*
        ')

        ->join('latihan','latihan.id=riwayat_rekomendasi.latihan_id')

        ->where('riwayat_rekomendasi.id',$id)

        ->where('user_id',session()->get('id'))

        ->first();

    return view('frontend/member/detail',$data);
    }
    public function hapus($id)
    {
    $model = new \App\Models\RiwayatModel();

    $model

        ->where('id',$id)

        ->where('user_id',session()->get('id'))

        ->delete();

    return redirect()->to('/member/riwayat')
                     ->with('success','Riwayat berhasil dihapus.');
    }
}