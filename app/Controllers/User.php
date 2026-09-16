<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Kelola User',
            'users' => $this->userModel->findAll()
        ];

        return view('admin/user/index', $data);
    }

    public function tambah()
    {
        return view('admin/user/tambah');
    }

    public function simpan()
{
    $rules = [
        'nama'     => 'required',
        'email'    => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[6]',
        'role'     => 'required'
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $this->userModel->save([
        'nama'     => $this->request->getPost('nama'),
        'email'    => $this->request->getPost('email'),
        'password' => password_hash(
            $this->request->getPost('password'),
            PASSWORD_DEFAULT
        ),
        'role'     => $this->request->getPost('role')
    ]);

    return redirect()->to('/user')
        ->with('success', 'User berhasil ditambahkan.');
}

    public function edit($id)
    {
        $data = [
            'user' => $this->userModel->find($id)
        ];

        return view('admin/user/edit', $data);
    }

   public function update($id)
{
    $user = $this->userModel->find($id);

    $rules = [
        'nama' => 'required',
        'role' => 'required'
    ];

    if ($this->request->getPost('email') != $user['email']) {
        $rules['email'] = 'required|valid_email|is_unique[users.email]';
    } else {
        $rules['email'] = 'required|valid_email';
    }

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput();
    }

    $data = [
        'nama'  => $this->request->getPost('nama'),
        'email' => $this->request->getPost('email'),
        'role'  => $this->request->getPost('role')
    ];

    if (!empty($this->request->getPost('password'))) {

        $data['password'] = password_hash(
            $this->request->getPost('password'),
            PASSWORD_DEFAULT
        );

    }

    $this->userModel->update($id, $data);

    return redirect()->to('/user')
        ->with('success', 'User berhasil diperbarui.');
}

    public function hapus($id)
{
    // Cek apakah user ada
    $user = $this->userModel->find($id);

    if (!$user) {
        return redirect()->to('/user')
            ->with('error', 'User tidak ditemukan.');
    }

    // Admin tidak boleh menghapus akun yang sedang login
    if ($id == session()->get('id')) {
        return redirect()->to('/user')
            ->with('error', 'Anda tidak dapat menghapus akun yang sedang digunakan.');
    }

    $this->userModel->delete($id);

    return redirect()->to('/user')
        ->with('success', 'User berhasil dihapus.');
}
}