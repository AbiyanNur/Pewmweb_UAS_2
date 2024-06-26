<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    //start public beranda
    public function beranda()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'beranda',
            'beranda' => $this->BerandaModel->findAll(),
        ];
        return view('admin/beranda/beranda_admin', $data);
    }
    public function add_beranda()
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'beranda',
            // 'validation' => \Config\Services::validation()
            'kategori' => $this->KategoriModel->findAll()
        ];
        return view('admin/beranda/add_beranda', $data);
    }
    public function save_beranda()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Panjang Minimal 10 karakter',
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
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
            'artikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            // $validation = \Config\Services::validation();
            return redirect()->back()->withInput();
        }
        //jika proses validasi berhasil lanjut upload dan save 
        //UPLOAD FILE
        $file_img = $this->request->getFile('img');
        // dd($file_img);
        $file_img->move('file/post/');
        $nama_img = $file_img->getName();
        $slug = url_title($this->request->getVar('judul'), '-', true);
        // $author->get('user_name');
        // $author = get('user_name');
        $this->BerandaModel->save([
            'img' => $nama_img,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'kategori' => $this->request->getVar('kategori'),
            'author' => $this->request->getVar('author'),
            'artikel' => $this->request->getVar('artikel')
        ]);
        session()->setFlashdata('warning', 'Data Berhasil Disimpan.');
        return redirect()->to('/admin/beranda');
    }


    public function del_beranda($id)
    {
        $this->BerandaModel->delete($id);
        session()->setFlashdata('warning', 'Data Berhasil Di Hapus.');
        return  redirect()->back();
    }


    public function edit_beranda($id)
    {
        $session = session();
        $data = [
            'session' => $session,
            'title' => 'Selamat Admin | Halaman Admin',
            'menu' => 'beranda',
            'beranda' => $this->BerandaModel->getBerandaId($id)
        ];
        return view('admin/beranda/edit_beranda', $data);
    }


    public function update_beranda($id)
    {
        if ($this->request->getFile('img') == "") {
            $slug = url_title($this->request->getVar('judul'), '-', true);
            $this->BerandaModel->save([
                'id_post' => $id,
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'kategori' => $this->request->getVar('kategori'),
                'author' => $this->request->getVar('author'),
                'artikel' => $this->request->getVar('artikel')
            ]);
            session()->setFlashdata('warning', 'Data Berhasil Di Edit.');
            return redirect()->to('/admin/beranda');
        }

        $file_img = $this->request->getFile('img');
        // dd($file_img);
        $file_img->move('file/post/');
        $nama_img = $file_img->getName();
        // dd($nama_img);
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->BerandaModel->save([
            'id_post' => $id,
            'img' => $nama_img,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'kategori' => $this->request->getVar('kategori'),
            'author' => $this->request->getVar('author'),
            'artikel' => $this->request->getVar('artikel')
        ]);
        session()->setFlashdata('warning', 'Data Berhasil Di Edit.');
        return redirect()->to('/admin/beranda');
    }
    // end public beranda
}
