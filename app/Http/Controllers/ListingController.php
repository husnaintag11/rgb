<?php

namespace App\Http\Controllers;

use App\Models\{Country,State,City};



use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function add_listing()
    {
       $country=DB::table('countries')->get();
       $state=DB::table('states')->get();
       $city=DB::table('cities')->get();
       $category=DB::table('categories')->get();
       $sub_category=DB::table('sub_categories')->get();
       $data['country']=Country::get(['name','id']);

        return view('home.listing',compact('data','country','city','state','category','sub_category'));
    }



// work


public function index(){
    $countries = DB::table('countries')->orderBy('name','ASC')->get();
    $data['countries'] = $countries;
    return view('home.listing',$data);
}

public function fetchStates($country_id = null) {
    $states = DB::table('states')->where('country_id',$country_id)->get();

    return response()->json([
        'status' => 1,
        'states' => $states
    ]);
}

public function fetchCities($state_id = null) {
    $cities = DB::table('cities')->where('state_id',$state_id)->get();

    return response()->json([
        'status' => 1,
        'cities' => $cities
    ]);
}

public function fetchStreets($city_id = null) {
    $streets = DB::table('streets')->where('city_id',$city_id)->get();

    return response()->json([
        'status' => 1,
        'streets' => $streets
    ]);
}


}
