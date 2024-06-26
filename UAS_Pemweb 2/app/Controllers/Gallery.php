<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    // start public galeri
    public function galeri()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'Gallery',
            'galeri' => $this->GaleriModel->findAll()
        ];
        return view('admin/galeri/galeri_admin', $data);
    }


    public function add_galeri()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'Gallery',
            // 'validation' => \Config\Services::validation()
            // 'kategori' => $this->KategoriModel->findAll()
        ];
        return view('admin/galeri/add_galeri', $data);
    }


    public function save_galeri()
    {
        // form validai
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|min_length[10]|is_unique[tbl_gallery.slug_img]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Panjang Minimal 10 karakter',
                    'is_unique' => '{field} Sudah Ada..!!',
                ]
            ],
            'img' => [
                'rules' => 'uploaded[img]|max_size[img,1024]|mime_in[img,image/png,image/jpeg,image/webp],image/png|is_image[img]',
                'errors' => [
                    'uploaded' => 'Jangan Lupa Upload Gambar',
                    'max_size' => 'File Terlalu besar',
                    'mime_in' => 'Type file (Jpg, Jpeg & PNG )',
                    'is_image' => 'Maaf Type file Harus Gambar'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        //jika proses validasi berhasil lanjut upload dan save 

        //UPLOAD FILE
        $file_img = $this->request->getFile('img');
        // dd($file_img);
        $file_img->move('file/img/');
        $nama_img = $file_img->getName();
        $slug_img = $this->request->getVar('nama');
        $this->GaleriModel->save([
            'img' => $nama_img,
            'slug_img' => $slug_img,
            'nama' => $this->request->getVar('nama'),
        ]);
        session()->setFlashdata('warning', 'Data Berhasil Disimpan.');
        return redirect()->to('/admin/galeri');
    }


    public function del_galeri($id)
    {
        $this->GaleriModel->delete($id);
        session()->setFlashdata('warning', 'Data Berhasil Di Hapus.');
        return  redirect()->back();
    }
    //end public galeri
}
