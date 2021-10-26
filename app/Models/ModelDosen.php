<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDosen extends Model
{
    protected $table      = 'dosen';
    protected $primaryKey = 'nidn';

    public function getDosen($nidn = false)
    {
        if ($nidn == false) {
            return $this->findAll();
        }
        return $this->where(['nidn' => $nidn])->first();
    }
}
