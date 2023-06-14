<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('home.home');
    }
    public function contant()
    {
        return view('home.contant');
    }
    public function about()
    {
        return view('home.about');
    }
    // public function profile()
    // {
    //     return view('home.profile');
    // }




//task colour

public function task()
{
    $cards = Session::get('cards');

    // Generate new card colors if they don't exist in session
    $colors = ['bg-primary', 'bg-secondary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info', 'bg-light', 'bg-dark'];
    $countingWords = ['One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Part I', 'Part II'];
    $cards = [];

    for ($i = 0; $i < 12; $i++) {
        $randomColor = Arr::random($colors);
        $cards[$countingWords[$i]] = $randomColor;
    }

}
}
