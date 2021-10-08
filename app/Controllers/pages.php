<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data=[
            'tittle' => 'HOME | Derry Davinci' ,
            'tes' => ['satu', 'dua', 'tiga']
        ];

        echo view('layout/header' , $data);
        echo view('pages/home');
        echo view('layout/footer');
    }
    public function about()
    {
        $data = [
            'tittle' => 'About Me | Derry Davinci'
        ];

        echo view('layout/header' , $data);
        echo view('pages/about');
        echo view('layout/footer');
    }
}
