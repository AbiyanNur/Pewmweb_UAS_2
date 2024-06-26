<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model
{
    //bisa dilihat pada web codeigniter
    protected $table  = 'tbl_about';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['artikel'];


    public function getAboutId($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
