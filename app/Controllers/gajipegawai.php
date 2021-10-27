<?php

namespace App\Controllers;

use App\Models\ModelgajiPegawai;

class gajiPegawai extends BaseController
{
    public function index()
    {
        $pegawai = new ModelgajiPegawai();
        $gaji['pegawai'] = $pegawai->getgajiPegawai();
        return view('gajipegawai/index', $gaji);
    }
}
