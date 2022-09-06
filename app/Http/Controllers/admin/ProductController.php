<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request )
{
    $categories=Product::get();
    return view('admin..product.index',compact('categories'));
}
public function create()
{

    return view('admin..product.create');
}
public function store(Request $request)
{

    $data=$request->all();
    Product::create($data);
return redirect()->route('prdct.index');

}

public function edit($id)
{
$Category=Product::find($id);
return view('admin..product.edit',compact('Category'));
}
public function update(Request $request,$id){

$Category=Product::find($id);

$data=$request->all();
$Category->update($data);
return redirect()->route('prdct.index');



}

public function delete(Request $request,$id){

$Category=Product::find($id);

//$data=$request->all();
$Category->delete();
return redirect()->route('prdct.index');

}
}
