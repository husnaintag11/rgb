<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BirdController extends Controller
{
    public function aust()
    {
        return view('australianparrot');
    }

    public function ra()
    {
        return view('rawparrot');
    }

    public function dov()
    {
        return view('dove');
    }

    public function fancy()
    {
        return view('fancypigeon');
    }
}
