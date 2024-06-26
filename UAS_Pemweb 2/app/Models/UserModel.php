<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    //bisa dilihat pada web codeigniter
    protected $table  = 'tbl_users';
    protected $primaryKey = 'id_user';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'pass', 'password', 'nama_pengguna', 'img', 'id_lvuser'];


    public function hitung_user()
    {
        return $this->query('SELECT * FROM tbl_users')->getNumRows();
    }
    public function getUserId($id)
    {
        return $this->where(['id_user' => $id])->first();
    }
}
