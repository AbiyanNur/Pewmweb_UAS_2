<?php

namespace App\Controllers;

class User extends BaseController
{
    //start public user
    public function user()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'user',
            'user' => $this->UserModel->findAll()
        ];
        return view('admin/user/user_admin', $data);
    }


    public function add_user()
    {

        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'user',
            'validation' => \Config\Services::validation(),
            'level' => $this->LevelModel->findAll()
            // 'validation' => \Config\Services::validation()
            // 'kategori' => $this->KategoriModel->findAll()
        ];
        return view('admin/user/add_user', $data);
    }


    public function save_user()
    {

        //UPLOAD FILE
        $file_img = $this->request->getFile('img');
        // dd($file_img);
        $file_img->move('file/user/');
        $nama_img = $file_img->getName();
        $pass = md5($this->request->getVar('password'));
        $this->UserModel->save([
            'username' => $this->request->getVar('username'),
            'pass' => $this->request->getVar('password'),
            'password' => $pass,
            'nama_pengguna' => $this->request->getVar('nama'),
            'img' => $nama_img,
            'id_lvuser' => $this->request->getVar('level')
        ]);
        session()->setFlashdata('warning', 'Data Berhasil Disimpan.');
        return redirect()->to('/admin/user');
    }


    public function del_user($id)
    {
        $this->UserModel->delete($id);
        session()->setFlashdata('warning', 'Data Berhasil Di Hapus.');
        return redirect()->back();
    }


    public function edit_user($id)
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'user' => $this->UserModel->getUserId($id),
            'menu' => 'user',
            'level' => $this->LevelModel->findAll()
        ];
        return view('admin/user/edit_user', $data);
    }


    public function update_user($id)
    {
        if (!($this->request->getFile('img'))) {
            $file_img = $this->request->getFile('img');
            // dd($file_img);
            $file_img->move('file/user/');
            $nama_img = $file_img->getName();
            $pass = md5($this->request->getVar('password'));
            $this->UserModel->save([
                'id_user' => $id,
                'username' => $this->request->getVar('username'),
                'pass' => $this->request->getVar('password'),
                'password' => $pass,
                'nama_pengguna' => $this->request->getVar('nama'),
                'img' => $nama_img,
                'id_lvuser' => $this->request->getVar('level')
            ]);
        }
        $pass = md5($this->request->getVar('password'));
        $this->UserModel->save([
            'id_user' => $id,
            'username' => $this->request->getVar('username'),
            'pass' => $this->request->getVar('password'),
            'password' => $pass,
            'nama_pengguna' => $this->request->getVar('nama'),
            'id_lvuser' => $this->request->getVar('level')
        ]);
        session()->setFlashdata('warning', 'Data Berhasil Di Edit.');
        return redirect()->to('/admin/user');
    }
    //end public user
}
