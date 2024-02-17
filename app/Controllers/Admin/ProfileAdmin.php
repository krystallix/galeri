<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ProfileAdmin extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Admin | GaleriFoto | My Profile',
            'menu'      => ''
        ];

        return view('admin/profileAdmin/profile_admin', $data);
    }

    public function editProfile()
    {
        $data = [
            'title'     => 'Admin | GaleriFoto | Edit Profile',
            'menu'      => ''
        ];

        return view('admin/profileAdmin/edit_profile_admin', $data);
    }

    public function edit()
    {
        $data = [
            'title'     => 'Admin | GaleriFoto | Edit',
            'menu'      => ''
        ];

        return view('admin/profileAdmin/edit_foto_admin', $data);
    }
}
