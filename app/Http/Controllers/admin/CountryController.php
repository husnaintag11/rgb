<?php

namespace App\Http\Controllers\admin;
use App\Models\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(Request $request )
    {
        $categories=Country::get();
        return view('admin..country.index',compact('categories'));
    }
    public function create()
    {

        return view('admin..country.create');
    }
    public function store(Request $request)
    {

        $data=$request->all();
        Country::create($data);
    return redirect()->route('cout.index');

    }

    public function edit($id)
    {
    $Category=Country::find($id);
    $countries= new Country;
    return view('admin..country.create',compact('Category'));
    }
    public function update(Request $request,$id){

    $Category=Country::find($id);

    $data=$request->all();
    $Category->update($data);
    return redirect()->route('cout.index');



    }

    public function delete(Request $request,$id){

    $Category=Country::find($id);

    //$data=$request->all();
    $Category->delete();
    return redirect()->route('cout.index');

    }
}
