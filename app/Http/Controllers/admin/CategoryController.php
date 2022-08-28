<?php

namespace App\Http\Controllers\admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request )
{
    $categories=Category::get();
    return view('admin..category.index',compact('categories'));
}
public function create()
{

    return view('admin..category.create');
}
public function store(Request $request)
{

    $data=$request->all();
    Category::create($data);
return redirect()->route('cat.index');

}

public function edit($id)
{
$Category=Category::find($id);
return view('admin..category.edit',compact('Category'));
}
public function update(Request $request,$id){

$Category=Category::find($id);

$data=$request->all();
$Category->update($data);
return redirect()->route('cat.index');



}

public function delete(Request $request,$id){

$Category=Category::find($id);

//$data=$request->all();
$Category->delete();
return redirect()->route('cat.index');

}


}
