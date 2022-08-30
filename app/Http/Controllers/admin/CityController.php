<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request )
{
    $categories=City::get();
    return view('admin..city.index',compact('categories'));
}
public function create()
{

    return view('admin..city.create');
}
public function store(Request $request)
{

    $data=$request->all();
    City::create($data);
return redirect()->route('sta.index');

}

public function edit($id)
{
$Category=City::find($id);
return view('admin..city.edit',compact('Category'));
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
}
