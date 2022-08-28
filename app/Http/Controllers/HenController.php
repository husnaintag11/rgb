<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HenController extends Controller
{
    public function ben()
    {
        return view('bentom');
    }

    public function golden()
    {
        return view('goldenbuff');
    }

    public function pol()
    {
        return view('polish');
    }


    public function milli()
    {
        return view('milliflower');
    }

}
