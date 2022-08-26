<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{

    public function persi()
    {
        return view('persiancat');
    }


    public function sia()
    {
        return view('siamesecat');
    }

    public function khao()
    {
        return view('khaomaneecat');
    }

    public function catk()
    {
        return view('catkitten');
    }
}
