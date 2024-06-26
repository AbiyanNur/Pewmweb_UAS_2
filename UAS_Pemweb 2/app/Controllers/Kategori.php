<?php

namespace App\Controllers;

class Kategori extends BaseController
{
    //start public kategori
    public function kategori()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'kategori',
            'kategori' => $this->KategoriModel->findAll()
        ];

        return view('admin/kategori/kategori_admin', $data);
    }
    public function add_kategori()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'kategori'
        ];
        return view('admin/kategori/add_kategori', $data);
    }
    public function save_kategori()
    {
        $this->KategoriModel->save([
            'value' => $this->request->getVar('kategori'),
        ]);
        session()->setFlashdata('warning', 'Data Berhasil Disimpan.');
        return redirect()->to('/admin/kategori');
    }
    public function del_kategori($id)
    {
        $this->KategoriModel->delete($id);
        session()->setFlashdata('warning', 'Data Berhasil Di Hapus.');
        return  redirect()->back();
    }
}
