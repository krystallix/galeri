<?php

namespace App\Controllers\Pengguna;

use App\Controllers\BaseController;

class Pengguna extends BaseController
{
    public function index()
    {
        echo view('layout/pengguna/header');
        echo view('pengguna/halaman_utama/pengguna');
        echo view('layout/pengguna/footer');
    }

    public function detailFoto()
    {
        echo view('layout/pengguna/header');
        echo view('pengguna/halaman_utama/detail_foto');
        echo view('layout/pengguna/footer');
    }

    public function tambahFoto()
    {
        echo view('layout/pengguna/header');
        echo view('pengguna/halaman_utama/tambah_foto');
        echo view('layout/pengguna/footer');
    }

    public function myProfile()
    {
        echo view('layout/pengguna/header');
        echo view('pengguna/profile/my_profile');
        echo view('layout/pengguna/footer');
    }

    public function edit()
    {
        echo view('layout/pengguna/header');
        echo view('pengguna/profile/edit_foto');
        echo view('layout/pengguna/footer');
    }

    public function editProfile()
    {
        echo view('layout/pengguna/header');
        echo view('pengguna/profile/edit_profile');
        echo view('layout/pengguna/footer');
    }

    public function userProfile()
    {
        echo view('layout/pengguna/header');
        echo view('pengguna/halaman_utama/profile_user');
        echo view('layout/pengguna/footer');
    }
}
