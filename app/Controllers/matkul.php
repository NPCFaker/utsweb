<?php

namespace App\Controllers;

use App\Models\ModelMatkul;

class Matkul extends BaseController
{
    protected $ModelMatkul;
    public function __construct()
    {
        $this->ModelMatkul = new ModelMatkul();
    }
    public function index()
    {
        // $matkul = $this->ModelMatkul->findAll();

        $data = [
            'tittle' => 'Daftar Matkul',
            'matkul' => $this->ModelMatkul->getMatkul()
        ];

        return view('matkul/index', $data);
    }

    public function detail($kode_mk)
    {
        $matkul = $this->ModelMatkul->getMatkul($kode_mk);
        dd($matkul);
    }
}
