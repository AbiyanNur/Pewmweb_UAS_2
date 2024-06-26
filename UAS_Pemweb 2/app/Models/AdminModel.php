<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    //bisa dilihat pada web codeigniter
    protected $table  = 'tbl_users';
    protected $primaryKey = 'id_user';
    protected $useTimestamps = true;


}
