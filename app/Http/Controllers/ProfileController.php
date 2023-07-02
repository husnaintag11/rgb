<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function profile(){
        return view('home.profile');
    }

    public function update(Request $req) {
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

    public function add_province()
    {
        return view('home.add_province');
    }
    public function add_city()
    {
        return view('home.add_city');
    }


}
