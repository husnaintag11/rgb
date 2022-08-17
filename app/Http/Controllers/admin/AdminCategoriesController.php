<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
    public function view(){
        return view('admin.admincategories');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
    public function billing(){
        return view('admin.billing');
    }
    public function icon(){
        return view('admin.icons');
    }
    public function map(){
        return view('admin.map');
    }
    public function notification(){
        return view('admin.notifications');
    }
    public function profile(){
        return view('admin.profile');
    }
    public function rtl(){
        return view('admin.rtl');
    }
    public function sign_in(){
        return view('admin.sign-in');
    }
    public function sign_up(){
        return view('admin.sign-up');
    }
    public function tables(){
        return view('admin.tables');
    }
    public function template(){
        return view('admin.template');
    }
    public function tpy(){
        return view('admin.typography');
    }
    public function v_r(){
        return view('admin.virtual-reality');
    }

}
