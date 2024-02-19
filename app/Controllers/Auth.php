<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Auth extends BaseController
{
    protected $loginModel;

    public function __construct()
    {
        $this->loginModel = new LoginModel();
    }

    public function login()
    {
        $data = [
            'title'         => 'Geleri Foto | Login',
            'validation'    => \Config\Services::validation()
        ];

        if (session('user_id')) {
            return redirect()->to('/');
        }

        return view('auth/login', $data);
    }

    public function loginProses()
    {
        //validasi input
        if (!$this->validate([
            'email' => [
                'rules'     => 'required|valid_email',
                'errors'    => [
                    'required'      => 'Email harus diisi!',
                    'valid_email'   => 'Email tidak valid!'
                ]
            ],

            'password' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'      => 'Password harus diisi!'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('/create')->withInput()->with('validation', $validation);
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $post = $this->request->getPost();
        $db      = \Config\Database::connect();
        $query = $db->table('user')->getWhere(['email' => $post['email']]);
        $user = $query->getRow();
        if ($user) {
            if (password_verify($post['password'], $user->password)) {
                $params = ['user_id' => $user->user_id];
                session()->set($params);
                return redirect()->to('/');
            } else {
                return redirect()->back()->withInput()->with('error', 'Password tidak sesuai!');
            }
        } else {
            return redirect()->back()->withInput()->with('error', 'Email tidak ditemukan!');
        }
    }

    public function registrasi()
    {
        $data = [
            'title'         => 'GaleriFoto | Registrasi',
            'validation'    => \Config\Services::validation()
        ];

        return view('auth/registrasi', $data);
    }

    public function registrasiProses()
    {
        //validasi input
        if (!$this->validate([
            'username' => [
                'rules'     => 'required|max_length[20]|is_unique[user.username]',
                'errors'    => [
                    'required'    => 'Username harus diisi!',
                    'max_length'  => 'Username maksimal 20 karakter!',
                    'is_unique'   => 'Username sudah terdaftar!'
                ]
            ],

            'nama_lengkap' => [
                'rules'     => 'required|max_length[50]',
                'errors'    => [
                    'required'      => 'Nama lengkap harus diisi!',
                    'max_length'    => 'Nama Lengkap terlalu panjang!'
                ]
            ],

            'desc_profile' => [
                'rules'     => 'required|max_length[100]',
                'errors'    => [
                    'required'      => 'Deskripsi harus diisi!',
                    'max_length'    => 'Deskripsi terlalu panjang!'
                ]
            ],

            'email' => [
                'rules'     => 'required|valid_email|is_unique[user.email]',
                'errors'    => [
                    'required'      => 'Email harus diisi!',
                    'valid_email'   => 'Email tidak valid!',
                    'is_unique'     => 'Email sudah terdaftar!'
                ]
            ],

            'password' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'      => 'Password harus diisi!'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('/create')->withInput()->with('validation', $validation);
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $options = [
            'cost' => 10,
        ];

        $getPassword = $this->request->getVar('password');
        $password_hash = password_hash($getPassword, PASSWORD_DEFAULT, $options);

        $getNamaLengkap = $this->request->getVar('nama_lengkap');
        $nama_lengkap = ucwords($getNamaLengkap);

        $user = new LoginModel();
        $data_insert = [
            'username'     => $this->request->getVar('username'),
            'password'     => $password_hash,
            'email'        => $this->request->getVar('email'),
            'nama_lengkap' => $nama_lengkap,
            'level'        => $this->request->getVar('level')
        ];

        $user->insert($data_insert);
        $user_id = $user->getInsertID();

        //1. ambil file gambar foto profile
        $file_foto = $this->request->getFile('foto');

        //apakah tidak ada gambar yang diupload
        if ($file_foto->getError() == 4) {
            $nama_fileFoto = 'defaultProfile.jpg';
        } else {
            //2. pindahkan file gambar sampul ke folder img
            $file_foto->move('assets/img/profile');

            //3. ambil nama file gambar sampul
            $nama_fileFoto = $file_foto->getName();
        }

        $data_insertProfile = [
            'user_id' => $user_id,
            'describe_profile' => $this->request->getVar('desc_profile'),
            'photo_profile' => $nama_fileFoto
        ];

        $db      = \Config\Database::connect();
        $profile = $db->table('profile');
        $profile->insert($data_insertProfile);

        session()->setFlashdata('pesan_insert', 'Registrasi berhasil, silakan login!');

        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->remove('user_id');

        return redirect()->to('/login');
    }
}
