<?php

namespace App\Models;

use CodeIgniter\Model;

class LevelModel extends Model
{
    //bisa dilihat pada web codeigniter
    protected $table  = 'tbl_lvuser';
    protected $primaryKey = 'id_lvuser';
    protected $useTimestamps = true;
    protected $allowedFields = ['leveluser'];
}
