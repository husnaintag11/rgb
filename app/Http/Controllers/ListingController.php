<?php

namespace App\Http\Controllers;

use App\Models\{Country,Product,ProductImage};



use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function add_listing()
    {
       $country=DB::table('countries')->get();
       $state=DB::table('states')->get();
       $city=DB::table('cities')->get();
    // $category=DB::table('categories')->get();
    //  $sub_categories=DB::table('sub_categories')->get();
       $data['country']=Country::get(['name','id']);

        return view('home.listing',compact('data','country','city','state'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'price' => 'required|integer',
            'type' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
            // single image on product
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/thumbimage/'), $imageName);
            $imagePath = '/uploads/thumbimage/' . $imageName;
        }

        $product = Product::create([
            'name' => $validatedData['name'],
            'age' => $validatedData['age'],
            'type' => $validatedData['type'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'image' => $imagePath,

        ]);


       // return $product->id;
   // dd($request->all());
foreach ($request->file('images') as $image) {
        $path = $image->store('/uploads/multi_image/');

        ProductImage::create([
            'product_id' => $product->id,
            'image_path' => $path,
        ]);
    }
 return redirect()->route('profile')->with('message','Product add successfully');
}



// work


public function country(){
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
