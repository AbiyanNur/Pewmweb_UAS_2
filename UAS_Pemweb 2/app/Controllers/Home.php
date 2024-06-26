<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $page = 1;

        if ($this->request->getGet()) {
            $page = $this->request->getGet('page');
        }

        $perPage = 10;

        $limit = $perPage;
        $offset = ($page - 1) * $perPage;
        // $total = $this->BerandaModel->countAllResults();
        $data = [
            'title' => 'Selamat Datang | Unipdu Press',
            'beranda' => $this->BerandaModel->order()->findAll($limit, $offset),
            'page' => $page,
            'perPage' => $perPage,
            'total' => $this->BerandaModel->countAllResults(),
            'offset' => $offset,
            'seting' => $this->SettingModel->findAll(),
            'kategori' => $this->KategoriModel->findAll()
        ];

        return view('beranda/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Selamat Datang | Unipdu Press',
            'about' => $this->AboutModel->findAll(),
            'seting' => $this->SettingModel->findAll(),
            'kategori' => $this->KategoriModel->findAll()
        ];
        return view('pages/about', $data);
    }

    public function galeri()
    {
        $page = 1;

        if ($this->request->getGet()) {
            $page = $this->request->getGet('page');
        }

        $perPage = 10;

        $limit = $perPage;
        $offset = ($page - 1) * $perPage;
        $data = [
            'title' => 'Selamat Datang | Unipdu Press',
            'galeri' => $this->GaleriModel->orderGaleri()->findAll($limit, $offset),
            'page' => $page,
            'perPage' => $perPage,
            'total' => $this->GaleriModel->countAllResults(),
            'offset' => $offset,
            'seting' => $this->SettingModel->findAll(),
            'kategori' => $this->KategoriModel->findAll()
        ];
        return view('pages/galeri', $data);
    }

    public function struktur()
    {
        $data = [
            'title' => 'Selamat Datang | Unipdu Press',
            'struktur' => $this->StrukturModel->findAll(),
            'seting' => $this->SettingModel->findAll(),
            'kategori' => $this->KategoriModel->findAll()
        ];
        return view('pages/struktur', $data);
    }

    public function detail($slug)
    {
        // $id_kat = $this->BerandaModel->getBeranda($slug);
        $data = [
            'title' => 'Selamat Datang | Unipdu Press',
            'beranda' => $this->BerandaModel->getBeranda($slug),
            'seting' => $this->SettingModel->findAll(),
            'kategori' => $this->KategoriModel->findAll()
            //  etKategori('$id_kat')
        ];

        return view('beranda/detail', $data);
    }
    // public function berita()
    // {
    //     // $id_kat = $this->BerandaModel->getBeranda($slug);
    //     $kategori = "Informasi Umum";
    //     $data = [
    //         'title' => 'Selamat Datang | Unipdu Press',
    //         'berita' => $this->BerandaModel->getBerita($kategori),
    //         'seting' => $this->SettingModel->findAll(),
    //         'kategori' => $this->KategoriModel->findAll()
    //         //  etKategori('$id_kat')
    //     ];
    //     // dd($data['berita']);
    //     return view('berita/index', $data);
    // }
}
