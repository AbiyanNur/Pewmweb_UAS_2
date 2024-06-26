<?php

namespace App\Models;

use CodeIgniter\Model;

class Home_M extends Model
{

    //bisa dilihat pada web codeigniter
    protected $table  = 'tbl_posts';
    protected $primaryKey = 'id_post';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'kategori', 'artikel'];

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
}
