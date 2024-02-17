<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Admin | GaleriFoto | Dashboard',
            'menu'      => 'dashboard'
        ];

        return view('admin/admin', $data);
    }

    public function detailFoto()
    {
        $data = [
            'title'     => 'Admin | GaleriFoto | Detail',
            'menu'      => ''
        ];

        return view('admin/detail_foto_admin', $data);
    }

    public function postFoto()
    {
        $data = [
            'title'     => 'Admin | GaleriFoto | Post',
            'menu'      => 'post'
        ];

        return view('admin/post_foto_admin', $data);
    }

    public function profileUser()
    {
        $data = [
            'title'     => 'Admin | GaleriFoto | Profile User',
            'menu'      => ''
        ];

        return view('admin/profile_user', $data);
    }
}
