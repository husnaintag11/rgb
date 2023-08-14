<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\City;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request )
{
    $city=DB::table('cities')->get();
    $country=DB::table('countries')->get();
    $state=DB::table('states')->get();
    return view('admin..city.index',compact('city','country','state'));
}
public function create()
{

    return view('admin..city.create');
}
public function store(Request $request)
{

    $data = $request->validate([
        'name' => 'required',
        'state_id' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
    ]);


    if($request->has('image')){
        $file_name = time();      //return timespan

          $picture = $request->image;
         // $file_name = rand();  // randum generate
          $file_name = sha1($file_name);  // algorithum different string generate

            $ext = $picture->getClientOriginalExtension();
            $file_name = $file_name.".".$ext;
            $picture -> move(public_path()."/uploads/city/",$file_name);

            $image_path = '/uploads/city/'.$file_name;
           $data['image'] = $image_path;
        }
    City::create($data);


    // $data=$request->all();
    //  SubCategory::create($data);

  // return $request;
    // $data=$request->all();

return redirect()->route('sta.index');

}

public function edit($id)
{
$Category=City::find($id);
$cities=new City;
return view('admin..city.create',compact('Category'));
}
public function update(Request $request,$id){

$Category=City::find($id);

$data=$request->all();
$Category->update($data);
return redirect()->route('sta.index');



}

public function delete(Request $request,$id){

$Category=City::find($id);

//$data=$request->all();
$Category->delete();
return redirect()->route('sta.index');

}
public function add_city(Request $request )
{
    $categories=City::get();
    return view('home.add_city',compact('categories'));
}

public function listing()  {
return view('home.listing');

}

}
