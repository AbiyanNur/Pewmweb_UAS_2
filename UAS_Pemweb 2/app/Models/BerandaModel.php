<?php

namespace App\Models;

use CodeIgniter\Model;

class BerandaModel extends Model
{

    //bisa dilihat pada web codeigniter
    protected $table  = 'tbl_posts';
    protected $primaryKey = 'id_post';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'kategori', 'author', 'artikel', 'img'];

    public function order()
    {
        return $this->orderBy('id_post', 'DESC');
    }

    public function getBeranda($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getBerita($kategori, $limit, $offset)
    {
        if ($kategori == false) {
            return $this->findAll();
        }
        return $this->getWhere(['kategori' => $kategori], $limit, $offset);
    }

    public function getBerandaId($id)
    {
        return $this->where(['id_post' => $id])->first();
    }

    public function getPost()
    {
        return $this->getNumRows()->first();
    }

    public function hitungJumlahAsset()
    {
        $query = $this->query('SELECT * FROM tbl_posts');
        return $query->getNumRows();
    }
}
