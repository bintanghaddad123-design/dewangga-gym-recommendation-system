<?php

namespace App\Controllers;

use App\Models\LatihanModel;

class Home extends BaseController
{
    protected $latihanModel;

    public function __construct()
    {
        $this->latihanModel = new LatihanModel();
    }

    /**
     * Halaman Home
     */
    public function index()
    {
        $data = [
            'title'    => 'Home',
            'latihan'  => $this->latihanModel->findAll()
        ];

        return view('frontend/home', $data);
    }

    /**
     * Halaman Tentang
     */
    public function about()
    {
        $data = [
            'title' => 'Tentang Kami'
        ];

        return view('frontend/about', $data);
    }

    /**
     * Halaman Kontak
     */
    public function contact()
    {
        $data = [
            'title' => 'Kontak'
        ];

        return view('frontend/contact', $data);
    }
}