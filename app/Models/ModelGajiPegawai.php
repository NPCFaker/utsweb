<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelGajiPegawai extends Model
{

    public function getGajiPegawai()
    {
        return $this->db->table('pegawai')
            ->join('golongan', 'golongan.id_gol=pegawai.id_gol')
            ->join('gaji', 'gaji.id_gaji=pegawai.id_gaji')
            ->get()->getResultArray();
    }
}
