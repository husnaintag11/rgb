<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

//     public function redirect(){
// $usertype=Auth::user()->usertype;
// if(usertype=='1')
// {
//     return view ('home.profile');

// }
// else{
//     return view('home.home');
// }
//     }



    public function index()
    {


      return view('home.home');

    }
}
