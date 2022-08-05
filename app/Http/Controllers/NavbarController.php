<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class NavbarController extends Controller
{
     public function nav()
    {
        return view('rgbnavbar');
    }

}
