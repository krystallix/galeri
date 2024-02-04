<?php

namespace App\Controllers\Pengguna;

use App\Controllers\BaseController;

class Pengguna extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pengguna/halaman_utama/pengguna');
        echo view('layout/footer');
    }

    public function detailFoto()
    {
        echo view('layout/header');
        echo view('pengguna/halaman_utama/detail_foto');
        echo view('layout/footer');
    }

    public function tambahFoto()
    {
        echo view('layout/header');
        echo view('pengguna/halaman_utama/tambah_foto');
        echo view('layout/footer');
    }

    public function myProfile()
    {
        echo view('layout/header');
        echo view('pengguna/profile/my_profile');
        echo view('layout/footer');
    }

    public function edit()
    {
        echo view('layout/header');
        echo view('pengguna/profile/edit_foto');
        echo view('layout/footer');
    }
}
