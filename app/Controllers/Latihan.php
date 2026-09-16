<?php

namespace App\Controllers;

use App\Models\LatihanModel;

class Latihan extends BaseController
{
    protected $latihan;

    public function __construct()
    {
        $this->latihan = new LatihanModel();
    }

    public function index()
    {
        $data['latihan'] = $this->latihan->findAll();
        return view('admin/latihan/index', $data);
    }

    public function tambah()
    {
        return view('admin/latihan/tambah');
    }

    public function simpan()
    {
        $this->latihan->save([
            'nama_latihan' => $this->request->getPost('nama_latihan'),
            'otot' => $this->request->getPost('otot'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'video' => $this->request->getPost('video'),
            'frekuensi' => $this->request->getPost('frekuensi'),
            'set_repetisi' => $this->request->getPost('set_repetisi'),
            'istirahat' => $this->request->getPost('istirahat')
        ]);

        return redirect()->to('/latihan');
    }

    public function edit($id)
    {
        $data['latihan'] = $this->latihan->find($id);
        return view('admin/latihan/edit', $data);
    }

    public function update($id)
    {
        $this->latihan->update($id,[
            'nama_latihan'=>$this->request->getPost('nama_latihan'),
            'otot'=>$this->request->getPost('otot'),
            'deskripsi'=>$this->request->getPost('deskripsi'),
            'video'=>$this->request->getPost('video'),
            'frekuensi'=>$this->request->getPost('frekuensi'),
            'set_repetisi'=>$this->request->getPost('set_repetisi'),
            'istirahat'=>$this->request->getPost('istirahat')
        ]);

        return redirect()->to('/latihan');
    }

    public function hapus($id)
    {
        $this->latihan->delete($id);
        return redirect()->to('/latihan');
    }
}