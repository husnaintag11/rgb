<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    public function german()
    {
        return view('germanshaphereddog');
    }

    public function lab ()
    {
        return view('labradordog');
    }

    public function pist ()
    {
        return view('pistadog');
    }
}
