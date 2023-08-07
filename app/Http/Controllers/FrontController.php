<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use App\Models\{Product,Country};
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
    //     $country=DB::table('countries')->get();
    //     $state=DB::table('states')->get();
    //     $city=DB::table('cities')->get();
    //     $category=DB::table('categories')->get();
    //     $sub_categories=DB::table('sub_categories')->get();
    //     $data['country']=Country::get(['name','id']);


    //  $products = Product::select('products.*', 'users.name as user_name','countries.name as country_name', 'states.name as state_name', 'cities.name as city_name', 'streets.name as street_name','categories.name as category_name')
    //  ->leftJoin('countries', 'products.country_id', '=', 'countries.id')
    //  ->leftJoin('states', 'products.state_id', '=', 'states.id')
    //  ->leftJoin('cities', 'products.city_id', '=', 'cities.id')
    //  ->leftJoin('streets', 'products.street_id', '=', 'streets.id')
    //  ->leftJoin('users', 'products.user_id', '=', 'users.id')
    //  ->leftJoin('categories','products.cat_id','=','categories.id')
    //  ->leftJoin('sub_categories','products.subcat_id','=','sub_categories.id')
    //  ->get();

    //      return view('home.home',compact('products','data','category','country','state','city','category','sub_categories'));
       // $products=DB::table('products')->get();

       $products = Product::join('countries', 'products.country_id', '=', 'countries.id')
       ->join('states', 'products.state_id', '=', 'states.id')
       ->join('cities', 'products.city_id', '=', 'cities.id')
       ->join('streets', 'products.street_id', '=', 'streets.id')
       ->join('users','products.user_id','=','users.id')
       ->join('categories','products.cat_id','=','categories.id')
       ->leftjoin('sub_categories as sub','products.subcat_id','=','sub.id')
       ->select('products.*', 'countries.name as country_name', 'states.name as state_name', 'cities.name as city_name', 'streets.name as street_name','users.name as user_name'
       ,'categories.name as category_name',
       'sub.name as sub_category_name')
       ->get();
      // $products=DB::table('products')->get();
       return view('home.home',compact('products'));


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
