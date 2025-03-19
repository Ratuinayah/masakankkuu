<?php

namespace App\Models;

use CodeIgniter\Model;

class MasakankuModel extends Model
{
    protected $table = 'masakanku'; 

    public function getMasakanku($id = false){
        if ($id == false){
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}