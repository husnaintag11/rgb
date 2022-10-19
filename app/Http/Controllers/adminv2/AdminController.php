<?php

namespace App\Http\Controllers\adminv2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view ('adminv2/dashboard');
    }

}
