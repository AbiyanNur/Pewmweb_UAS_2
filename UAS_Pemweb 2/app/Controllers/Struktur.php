<?php

namespace App\Controllers;

class Struktur extends BaseController
{
    //start public struktur
    public function struktur()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'struktur',
            'struktur' => $this->StrukturModel->findAll()
        ];

        return view('admin/struktur/struktur_admin', $data);
    }
    public function edit_struktur($id)
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'struktur',
            'struktur' => $this->StrukturModel->getStrukturId($id)
        ];
        return view('admin/struktur/edit_struktur', $data);
    }


    public function update_struktur($id)
    {
        if (!$this->validate([
            'file' => [
                'rules' => 'uploaded[file]|max_size[file,2024]|mime_in[file,application/pdf]',
                'errors' => [
                    'uploaded' => 'Jangan Lupa Upload File',
                    'max_size' => 'File Terlalu besar',
                    'mime_in' => 'Harus File PDF',
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            // $validation = \Config\Services::validation();
            return redirect()->back()->withInput();
        }
        //jika proses validasi berhasil lanjut upload dan save 
        $file = $this->request->getFile('file');
        //dd($file);
        $file->move('file/pdf/struktur');
        $nama_file = $file->getName();
        //dd($nama_file);
        $this->StrukturModel->save([
            'id' => $id,
            'pdf' => $nama_file,
        ]);
        session()->setFlashdata('warning', 'Data Berhasil Di Edit.');
        return redirect()->to('/admin/struktur');
    }
}
