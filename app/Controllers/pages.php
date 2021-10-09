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

        return view('pages/home' , $data);
    }

    public function about()
    {
        $data = [
            'tittle' => 'About Me | Derry Davinci'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data =[
            'tittle' => 'Contact Me | Derry Davinci'
        ];

        return view ('pages/contact', $data);
    }
}
