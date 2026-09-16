<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PasswordResetModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function prosesLogin()
{
    $userModel = new UserModel();

    // Ambil input dari form
    $email    = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    // Cari user berdasarkan email
    $user = $userModel->where('email', $email)->first();

    // Cek apakah email terdaftar
    if (!$user) {
        return redirect()->back()->withInput()->with('error', 'Email tidak terdaftar.');
    }

    // Cek password
    if (!password_verify($password, $user['password'])) {
        return redirect()->back()->withInput()->with('error', 'Password salah.');
    }

    // Simpan data user ke session
    session()->set([
        'id'    => $user['id'],
        'nama'  => $user['nama'],
        'email' => $user['email'],
        'role'  => $user['role'],
        'login' => true,
    ]);

    // Redirect sesuai role
    switch ($user['role']) {
        case 'admin':
            return redirect()->to('/dashboard');

        case 'member':
            return redirect()->to('/member');

        default:
            session()->destroy();
            return redirect()->to('/login')->with('error', 'Role tidak dikenali.');
    }
}
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
    public function register()
{
    return view('auth/register');
}

public function simpanRegister()
{
    $userModel = new \App\Models\UserModel();

    $userModel->save([
        'nama'     => $this->request->getPost('nama'),
        'email'    => $this->request->getPost('email'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        'role'     => 'member'
    ]);

    return redirect()->to('/login')->with('success', 'Register berhasil, silakan login.');
}
public function forgotPassword()
{
    return view('auth/forgot_password');
}

public function sendResetLink()
{
    $email = $this->request->getPost('email');

    $userModel = new UserModel();

    // Cari user berdasarkan email
    $user = $userModel->where('email', $email)->first();

    if (!$user) {
        return redirect()->back()
            ->withInput()
            ->with('error', 'Email tidak terdaftar.');
    }

    // Hapus token lama untuk email tersebut
    $resetModel = new PasswordResetModel();

    $resetModel
        ->where('email', $email)
        ->delete();

    // Buat token acak
    $token = bin2hex(random_bytes(32));

    // Simpan token
    $resetModel->insert([
        'email'      => $email,
        'token'      => $token,
        'created_at' => date('Y-m-d H:i:s')
    ]);

    // Buat link reset password
    $resetLink = base_url('reset-password/' . $token);

    /*
     * Untuk tahap testing localhost,
     * link ditampilkan terlebih dahulu.
     */
    return redirect()->back()
    ->with(
        'success',
        'Link reset password berhasil dibuat.<br><br>
        <a href="' . $resetLink . '" class="btn btn-success btn-sm">
            <i class="fas fa-key me-2"></i>Reset Password
        </a>'
    );
}

public function resetPassword($token)
{
    $resetModel = new PasswordResetModel();

    $reset = $resetModel
        ->where('token', $token)
        ->first();

    if (!$reset) {
        return redirect()->to('/login')
            ->with('error', 'Token reset password tidak valid atau sudah digunakan.');
    }

    return view('auth/reset_password', [
        'token' => $token
    ]);
}

public function updatePassword()
{
    $token = $this->request->getPost('token');

    $password = $this->request->getPost('password');

    $passwordConfirm = $this->request->getPost('password_confirm');

    // Cek password dan konfirmasi
    if ($password !== $passwordConfirm) {
        return redirect()->back()
            ->with('error', 'Konfirmasi password tidak sama.');
    }

    // Minimal password 6 karakter
    if (strlen($password) < 6) {
        return redirect()->back()
            ->with('error', 'Password minimal 6 karakter.');
    }

    $resetModel = new PasswordResetModel();

    // Cari token
    $reset = $resetModel
        ->where('token', $token)
        ->first();

    if (!$reset) {
        return redirect()->to('/login')
            ->with('error', 'Token reset password tidak valid atau sudah digunakan.');
    }

    // Cari user
    $userModel = new UserModel();

    $user = $userModel
        ->where('email', $reset['email'])
        ->first();

    if (!$user) {
        return redirect()->to('/login')
            ->with('error', 'User tidak ditemukan.');
    }

    // Update password
    $userModel->update($user['id'], [
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);

    // Hapus token setelah berhasil digunakan
    $resetModel
        ->where('token', $token)
        ->delete();

    return redirect()->to('/login')
        ->with('success', 'Password berhasil diubah. Silakan login.');
}
}