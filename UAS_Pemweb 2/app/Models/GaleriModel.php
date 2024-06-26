<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    //bisa dilihat pada web codeigniter
    protected $table  = 'tbl_gallery';
    protected $primaryKey = 'id_img';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'slug_img', 'img'];

    public function orderGaleri()
    {
        return $this->orderBy('id_img', 'DESC');
    }
    public function hitung_galeri()
    {
        return $this->query('SELECT * FROM tbl_gallery')->getNumRows();
    }
}
