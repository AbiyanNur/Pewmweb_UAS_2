<?php

namespace App\Controllers;

class About extends BaseController
{
    // start public about
    public function about()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'about',
            'about' => $this->AboutModel->findAll()
        ];
        return view('admin/about/about_admin', $data);
    }


    public function edit_about($id)
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'about',
            'about' => $this->AboutModel->getAboutId($id)
        ];
        return view('admin/about/edit_about', $data);
    }


    public function update_about($id)
    {
        $this->AboutModel->save([
            'id' => $id,
            'artikel' => $this->request->getVar('artikel')
        ]);
        session()->setFlashdata('warning', 'Data Berhasil Di Edit.');
        return redirect()->to('/admin/about');
    }
    //end public about
}
