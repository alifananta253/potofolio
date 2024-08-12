<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Portofolio',
            'conten' => 'index_view'
        );
        return view('layout/wrapper', $data);
    }
}
