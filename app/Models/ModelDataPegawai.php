<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDataPegawai extends Model
{

    public function getDataPegawai()
    {
        return $this->db->table('pegawai')
            ->join('golongan', 'golongan.id_gol=pegawai.id_gol')
            ->join('gaji', 'gaji.id_gaji=pegawai.id_gaji')
            ->get()->getResultArray();
    }
}
