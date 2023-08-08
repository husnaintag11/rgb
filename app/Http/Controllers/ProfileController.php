<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Dotenv\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
class ProfileController extends Controller
{
   public function profile(){

      $products = Product::join('countries', 'products.country_id', '=', 'countries.id')
        ->join('states', 'products.state_id', '=', 'states.id')
        ->join('cities', 'products.city_id', '=', 'cities.id')
        ->join('streets', 'products.street_id', '=', 'streets.id')
        ->join('users','products.user_id','=','users.id')
        //where used then data based login in user id
        ->where('products.user_id',Auth::id())
        ->join('categories','products.cat_id','=','categories.id')
        ->leftjoin('sub_categories as sub','products.subcat_id','=','sub.id')
        ->select('products.*', 'countries.name as country_name', 'states.name as state_name', 'cities.name as city_name', 'streets.name as street_name','users.name as user_name'
        ,'categories.name as category_name',
        'sub.name as sub_category_name')
        ->get();
       // $products=DB::table('products')->get();
        return view('home.profile',compact('products'));



  }



  //profile user data

    public function update(Request $req)
     {
      $user_id = Auth::user()->id;
      $user = User ::find($user_id);
      $user ->name = $req->input('name');
      $user ->last_name = $req->input('last_name');
      $user ->gender = $req->input('gender');
      $user ->phone = $req->input('phone');
      $user ->address = $req->input('address');
      $user ->date_of_birth = $req->input('date_of_birth');


      if($req->hasFile('profile_image'))
      {
        $destination = 'uploads/profile'.$user->profile_image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $file = time();
        $file = $req->file('profile_image');
        $extention=$file->getClientOriginalExtension();
        $filename = time() . '.' .$extention;
        $file->move('uploads/profile/', $filename);
        $user->profile_image = $filename;
      }
      $user->update();

      return redirect()->back()->with('success', 'Profile updated successfully.');
    }



}
