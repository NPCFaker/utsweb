<?php

namespace App\Controllers;

use App\Models\ModelDataPegawai;

class DataPegawai extends BaseController
{
    public function index()
    {
        $pegawai = new ModelDataPegawai();
        $data['pegawai'] = $pegawai->getDataPegawai();
        return view('datapegawai/index', $data);
    }
}
