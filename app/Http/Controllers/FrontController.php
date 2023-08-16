<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class FrontController extends Controller
{


    public function index()
    {

      $sub_category=DB::table('sub_categories')
      ->select('sub_categories.name as name','sub_categories.image as image')
      ->get();
      $sliders=DB::table('sliders')
      ->select('sliders.image as image')
      ->get();
     //   $products=DB::table('products')
     //   ->select('products.*')->get();
      $products = Product::join('countries', 'products.country_id', '=', 'countries.id')
      ->join('states', 'products.state_id', '=', 'states.id')
      ->join('cities', 'products.city_id', '=', 'cities.id')

      ->join('streets', 'products.street_id', '=', 'streets.id')
      ->join('users','products.user_id','=','users.id')
      //where used then data based login in user id
      //->where('products.user_id',Auth::id())
      ->join('categories','products.cat_id','=','categories.id')
      ->leftjoin('sub_categories as sub','products.subcat_id','=','sub.id')
      ->select('products.*', 'countries.name as country_name', 'states.name as state_name', 'cities.name as city_name', 'streets.name as street_name'
      ,'categories.name as category_name',
      'sub.name as sub_category_name')
      ->get();
      $city=DB::table('cities')
      ->select('cities.image as city_image','cities.name as city_name')->get();

      return view('home.home',compact('sub_category','sliders','products','city'));

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

// public function task()
// {
//     $cards = Session::get('cards');

//     // Generate new card colors if they don't exist in session
//     $colors = ['bg-primary', 'bg-secondary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info', 'bg-light', 'bg-dark'];
//     $countingWords = ['One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Part I', 'Part II'];
//     $cards = [];

//     for ($i = 0; $i < 12; $i++) {
//         $randomColor = Arr::random($colors);
//         $cards[$countingWords[$i]] = $randomColor;
//     }

// }
}
