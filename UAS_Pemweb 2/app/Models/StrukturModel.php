<?php

namespace App\Models;

use CodeIgniter\Model;

class StrukturModel extends Model
{
    //bisa dilihat pada web codeigniter
    protected $table  = 'tbl_organisasi';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['pdf'];

    public function getStrukturId($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
