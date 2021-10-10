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
        $matkul = $this->ModelMatkul->findAll();

        $data = [
            'tittle' => 'Daftar Matkul',
            'matkul' => $matkul
        ];

        return view('matkul/index', $data);
    }
}
