<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function add_listing()
    {
       $country=DB::table('countries')->get();
       $state=DB::table('states')->get();
       $city=DB::table('cities')->get();
       $categories=DB::table('categories')->get();
       $sub_categories=DB::table('sub_categories')->get();

        return view('home.listing',compact('country','city','state','categories','sub_categories'));
    }

}
