<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DataPengguna extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Admin | GaleriFoto | Data Pengguna',
            'menu'      => 'pengguna'
        ];

        return view('admin/dataPengguna/data_pengguna', $data);
    }

    public function detail()
    {
        $data = [
            'title'     => 'Admin | GaleriFoto | Data Pengguna | Detail',
            'menu'      => 'pengguna'
        ];

        return view('admin/dataPengguna/detail_pengguna', $data);
    }

    public function tambahPengguna()
    {
        $data = [
            'title'     => 'Admin | GaleriFoto | Data Pengguna | Tambah Pengguna',
            'menu'      => 'pengguna'
        ];

        return view('admin/dataPengguna/add_pengguna', $data);
    }

    public function editPengguna()
    {
        $data = [
            'title'     => 'Admin | GaleriFoto | Data Pengguna | Edit Pengguna',
            'menu'      => 'pengguna'
        ];

        return view('admin/dataPengguna/edit_pengguna', $data);
    }
}
