<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    //bisa dilihat pada web codeigniter
    protected $table  = 'tbl_kategori';
    protected $primaryKey = 'id_kat';
    protected $useTimestamps = true;
    protected $allowedFields = ['value'];

    public function getKategori($id_kat = false)
    {
        if ($id_kat == false) {
            return $this->findAll();
        }

        return $this->where(['id_kat' => $id_kat])->first();
    }
}
