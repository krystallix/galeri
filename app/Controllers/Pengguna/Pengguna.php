<?php

namespace App\Controllers\Pengguna;

use App\Controllers\BaseController;

use App\Models\GaleriModel;

class Pengguna extends BaseController
{
    protected $galeriModel;

    public function __construct()
    {
        $this->galeriModel = new GaleriModel();
    }

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
            'title'         => 'GaleriFoto | Post Foto',
            'validation'    => \Config\Services::validation()
        ];

        return view('pengguna/halaman_utama/tambah_foto', $data);
    }

    public function postFoto()
    {
        //validasi input
        if (!$this->validate([
            // 'foto' => [
            //     'rules'     => 'required',
            //     'errors'    => [
            //         'required'      => 'Pilih foto yang akan dipost!'
            //     ]
            // ],

            'judul_foto' => [
                'rules'     => 'required|max_length[50]',
                'errors'    => [
                    'required'      => 'Judul foto harus diisi!',
                    'max_length'    => 'Judul foto terlalu panjang!'
                ]
            ],

            'deskripsi' => [
                'rules'     => 'required|max_length[300]',
                'errors'    => [
                    'required'      => 'Deskripsi foto harus diisi!',
                    'max_length'    => 'Deskripsi foto terlalu panjang!'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('/create')->withInput()->with('validation', $validation);
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        //1. ambil file gambar foto profile
        $file_foto = $this->request->getFile('foto');

        //2. pindahkan file gambar sampul ke folder img
        $file_foto->move('assets/img/gallery');

        //3. ambil nama file gambar sampul
        $nama_fileFoto = $file_foto->getName();

        $user_id = userLogin()->user_id;

        $this->galeriModel->save([
            'photo' => $nama_fileFoto,
            'judul_foto'   => $this->request->getVar('judul_foto'),
            'describe_photo' => $this->request->getVar('deskripsi'),
            'user_id'       => $user_id
        ]);

        session()->setFlashdata('pesan_insert', 'Berhasil post foto!');

        return redirect()->to('/detail');
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
