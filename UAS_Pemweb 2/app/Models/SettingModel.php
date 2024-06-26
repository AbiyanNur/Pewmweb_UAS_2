<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingModel extends Model
{
    //bisa dilihat pada web codeigniter
    protected $table  = 'tbl_seting';
    protected $primaryKey = 'id_set';
    protected $useTimestamps = true;
    protected $allowedFields = ['alamat', 'tlp', 'email', 'kisikisi'];


    public function cari($id)
    {
        return $this->where(['id_set' => $id])->first();
    }
    public function getSettingId($id)
    {
        return $this->where(['id_set' => $id])->first();
    }
}
