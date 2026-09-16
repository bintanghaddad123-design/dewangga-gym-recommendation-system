<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\LatihanModel;
use App\Models\RuleModel;
use App\Models\RiwayatModel;

class Dashboard extends BaseController
{
    public function index()
    {
        // Cek login
        if (!session()->get('login')) {
            return redirect()->to(base_url('login'));
        }

        // Dashboard Admin
        if (session()->get('role') === 'admin') {

            $userModel     = new UserModel();
            $latihanModel  = new LatihanModel();
            $ruleModel     = new RuleModel();
            $riwayatModel  = new RiwayatModel();

            $data = [

                'jumlahUser'     => $userModel->countAll(),
                'jumlahLatihan'  => $latihanModel->countAll(),
                'jumlahRule'     => $ruleModel->countAll(),
                'jumlahRiwayat'  => $riwayatModel->countAll(),

            ];

            return view('admin/dashboard/dashboard', $data);
        }

        // Dashboard Member
        if (session()->get('role') === 'member') {
            return view('member/dashboard');
        }

        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}