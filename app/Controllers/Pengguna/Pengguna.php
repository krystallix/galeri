<?php

namespace App\Controllers\Pengguna;

use App\Controllers\BaseController;

class Pengguna extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'GaleriFoto | Home'
        ];

        return view('pengguna/halaman_utama/pengguna', $data);
    }

    public function detailFoto()
    {
        $data = [
            'title'     => 'GaleriFoto | Detail'
        ];

        return view('pengguna/halaman_utama/detail_foto', $data);
    }

    public function tambahFoto()
    {
        $data = [
            'title'     => 'GaleriFoto | Post Foto'
        ];

        return view('pengguna/halaman_utama/tambah_foto', $data);
    }

    public function myProfile()
    {
        $data = [
            'title'     => 'GaleriFoto | My Profile'
        ];

        return view('pengguna/profile/my_profile', $data);
    }

    public function edit()
    {
        $data = [
            'title'     => 'GaleriFoto | Edit Foto'
        ];

        return view('pengguna/profile/edit_foto', $data);
    }

    public function editProfile()
    {
        $data = [
            'title'     => 'GaleriFoto | Edit Profile'
        ];

        return view('pengguna/profile/edit_profile', $data);
    }

    public function userProfile()
    {
        $data = [
            'title'     => 'GaleriFoto | User'
        ];

        return view('pengguna/halaman_utama/profile_user', $data);
    }
}
