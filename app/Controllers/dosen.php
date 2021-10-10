<?php

namespace App\Controllers;

use App\Models\ModelDosen;

class Dosen extends BaseController
{
    protected $ModelDosen;
    public function __construct()
    {
        $this->ModelDosen = new ModelDosen();
    }
    public function index()
    {
        $dosen = $this->ModelDosen->findAll();

        $data = [
            'tittle' => 'Daftar Dosen',
            'dosen' => $dosen
        ];

        return view('dosen/index', $data);
    }
}
