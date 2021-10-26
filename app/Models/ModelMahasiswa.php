<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    protected $table      = 'mhs';
    protected $primaryKey = 'nim';

    public function getMahasiswa($nim = false)
    {
        if($nim == false) {
            return $this->findAll();
        }
        return $this->where(['nim' => $nim])->first();
    }
}
