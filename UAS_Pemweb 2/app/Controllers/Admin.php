<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'DashboardKu',
            'Jum_post' => $this->BerandaModel->hitungJumlahAsset(),
            'Jum_user' => $this->UserModel->hitung_user(),
            'Jum_gal' => $this->GaleriModel->hitung_galeri()
        ];

        return view('admin/index', $data);
    }


    public function login()
    {
        $session = session();
        if ($session->get('user_id')) {
            return redirect()->to('admin/dashboard');
        }
        $data = [
            'title' => 'Halaman Login Admin',
            'JuHal' => 'Login',
        ];

        return view('login/login', $data);
    }


    public function auth()
    {
        $session = session();
        // $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = md5($this->request->getVar('password'));
        // dd($password);
        $data = $this->UserModel->where('username', $email)->first();
        if ($data) {
            if ($data['id_lvuser'] == 1) {
                $lvuser = 'Admin';
            } else {
                $lvuser = 'User';
            }
            $pass = $data['password'];
            // $verify_pass = password_verify($password, $pass);
            $verify_pass = ($password == $pass);
            if ($verify_pass) {
                $ses_data = [
                    'user_id'       => $data['id_user'],
                    'user_name'     => $data['nama_pengguna'],
                    'user_email'    => $data['username'],
                    'user_img'      => $data['img'],
                    'user_level'      => $lvuser,
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/admin/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/admin');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/admin');
        }
    }


    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/admin');
    }


    public function profil($id)
    {
        $session = session();
        // $lvuser = $this->UserModel->where(['id_user' => $id])
        //     ->join('tbl_lvuser', 'tbl_lvuser.id_lvuser=tbl_users.id_lvuser', 'left')->get()->getResultArray();
        //dd($lvuser);
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'Profile',
            'beranda' => $this->UserModel->getUserId($id)
        ];
        return view('admin/profile/profil_admin', $data);
    }
}
