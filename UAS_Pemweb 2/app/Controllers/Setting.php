<?php

namespace App\Controllers;

class Setting extends BaseController
{
    public function seting()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'setting',
            'seting' => $this->SettingModel->findAll()
        ];

        return view('admin/setting/seting_admin', $data);
    }


    public function edit_seting($id)
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'setting',
            'seting' => $this->SettingModel->getSettingId($id)
        ];
        return view('admin/setting/edit_setting', $data);
    }


    public function update_seting($id)
    {
        $this->SettingModel->save([
            'id_set' => $id,
            'alamat' => $this->request->getVar('alamat'),
            'tlp' => $this->request->getVar('tlp'),
            'email' => $this->request->getVar('email'),
            'kisikisi' => $this->request->getVar('kisikisi')
        ]);
        session()->setFlashdata('warning', 'Data Berhasil Di Edit.');
        // return view('/admin');
        return redirect()->to('/admin/setting');
        // $this->request->getVar();
        // return view('admin/beranda_admin');
    }
    //end public setting
}
