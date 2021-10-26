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
        // $dosen = $this->ModelDosen->findAll();

        $data = [
            'tittle' => 'Daftar Dosen',
            'dosen' => $this->ModelDosen->getDosen()
        ];

        return view('dosen/index', $data);
    }

    public function detail($nidn)
    {
        $data = [
            'tittle' => 'Detail Dosen',
            'dosen' => $this->ModelDosen->getDosen($nidn)
        ];

        return view('dosen/detail', $data);
    }
}
