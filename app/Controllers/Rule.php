<?php

namespace App\Controllers;

use App\Models\RuleModel;
use App\Models\LatihanModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Rule extends BaseController
{
    protected $ruleModel;
    protected $latihanModel;

    public function __construct()
    {
        $this->ruleModel     = new RuleModel();
        $this->latihanModel  = new LatihanModel();
    }

    // Menampilkan daftar rule
    public function index()
    {
        $data = [
            'title' => 'Data Rule',
            'rule'  => $this->ruleModel
                ->select('rule.*, latihan.nama_latihan')
                ->join('latihan', 'latihan.id = rule.latihan_id', 'left')
                ->orderBy('rule.id', 'DESC')
                ->findAll(),
        ];

        return view('admin/rule/index', $data);
    }

    // Form tambah
    public function create()
    {
        $data = [
            'title'    => 'Tambah Rule',
            'latihan'  => $this->latihanModel->findAll(),
        ];

        return view('admin/rule/create', $data);
    }

    // Simpan data
    public function store()
    {
        $this->ruleModel->save([
            'tujuan'       => $this->request->getPost('tujuan'),
            'kategori_bmi' => $this->request->getPost('kategori_bmi'),
            'cedera'       => $this->request->getPost('cedera'),
            'kebugaran'    => $this->request->getPost('kebugaran'),
            'otot'         => $this->request->getPost('otot'),
            'latihan_id'   => $this->request->getPost('latihan_id'),
        ]);

        return redirect()->to('/rule')->with('success', 'Data rule berhasil ditambahkan.');
    }

    // Form edit
    public function edit($id)
    {
        $rule = $this->ruleModel->find($id);

        if (!$rule) {
            throw PageNotFoundException::forPageNotFound('Data rule tidak ditemukan.');
        }

        $data = [
            'title'    => 'Edit Rule',
            'rule'     => $rule,
            'latihan'  => $this->latihanModel->findAll(),
        ];

        return view('admin/rule/edit', $data);
    }

    // Update data
    public function update($id)
    {
        $this->ruleModel->update($id, [
            'tujuan'       => $this->request->getPost('tujuan'),
            'kategori_bmi' => $this->request->getPost('kategori_bmi'),
            'cedera'       => $this->request->getPost('cedera'),
            'kebugaran'    => $this->request->getPost('kebugaran'),
            'otot'         => $this->request->getPost('otot'),
            'latihan_id'   => $this->request->getPost('latihan_id'),
        ]);

        return redirect()->to('/rule')->with('success', 'Data rule berhasil diperbarui.');
    }

    // Hapus data
    public function delete($id)
    {
        $rule = $this->ruleModel->find($id);

        if (!$rule) {
            throw PageNotFoundException::forPageNotFound('Data rule tidak ditemukan.');
        }

        $this->ruleModel->delete($id);

        return redirect()->to('/rule')->with('success', 'Data rule berhasil dihapus.');
    }
}