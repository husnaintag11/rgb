<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
       $category=DB::table('categories')->get();
       $sub_categories=DB::table('sub_categories')->get();
       $data['country']=Country::get(['name','id']);
//

    $products = Product::select('products.*', 'users.name as user_name','countries.name as country_name', 'states.name as state_name', 'cities.name as city_name', 'streets.name as street_name')
    ->leftJoin('countries', 'products.country_id', '=', 'countries.id')
    ->leftJoin('states', 'products.state_id', '=', 'states.id')
    ->leftJoin('cities', 'products.city_id', '=', 'cities.id')
    ->leftJoin('streets', 'products.street_id', '=', 'streets.id')
    ->leftJoin('users', 'products.user_id', '=', 'users.id')
//    ->leftJoin('categories','products.cat_id','=','cat_id')
//    ->leftJoin('sub_categories','products.sub_cat_id','=','sub_cat.id')
    ->get();

    //   $jsonData = $products->toJson();
    //      return "$jsonData";
        return view ('home.listing',compact('data','country','city','state','category','sub_categories'));
    }



    public function store(Request $request)
    {
      // return $request;

        $imagePath = null;
            // single image on product
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/thumbimage/'), $imageName);
            $imagePath = '/uploads/thumbimage/' . $imageName;
        }

        $product = Product::create([
            'name' => $request->name,
            'age' => $request->age,
            'type' => $request->type,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imagePath,
            'country_id'=> $request->country,
            'state_id'=> $request->state,
            'city_id'=> $request->city,
            'street_id'=> $request->street,
            //'cat_id'=>$request->category,
            // user id import in auth
            'user_id' => Auth::id(),
        ]);

         //multi_images
        // return $product->id;
       //  dd($request->all());
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
