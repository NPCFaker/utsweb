<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMatkul extends Model
{
    protected $table      = 'matkul';
    protected $primaryKey = 'kode_mk';

    public function getMatkul($kode_mk = false)
    {
        if ($kode_mk == false) {
            return $this->findAll();
        }
        return $this->where(['kode_mk' => $kode_mk])->first();
    }
}
