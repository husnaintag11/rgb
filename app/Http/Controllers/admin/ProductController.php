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
    $data = $request->validate([
        'image' => 'required|image',
        'age' => 'required|integer',
        'price' => 'required|integer',
        'type' => 'required|string',
        'description' => 'required|string',
    ]);

    $data=$request->all();
    Product::create($data);

if($request->has('img')){
    $file_name = time();      //return timespan

      $picture = $request->img;
     // $file_name = rand();  // randum generate
      $file_name = sha1($file_name);  // algorithum different string generate

        $ext = $picture->etClientOriginalExtention();
        $file_name = $file_name.".".$ext;
        $picture -> move(public_path()."/uploads/",$file_name);

        $image_path = '/uploads/'.$file_name;

    }

return redirect()->route('prdct.index',);

}

public function edit($id)
{
$Category=Product::find($id);
$products= new Product;
return view('admin..product.create',compact('Category'));
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

// $validatedData = $request->validate([
//     'image' => 'required|image',
//     'age' => 'required|integer',
//     'type' => 'required|string',
//     'description' => 'required|string',
// ]);




// // Handle the image upload
// if ($request->hasFile('image')) {
//     $image = $request->file('image');
//     $imagePath = $image->store('images', 'public');
// }

// // Create a new record in the database
// YourModel::create([
//     'image' => $imagePath,
//     'age' => $validatedData['age'],
//     'type' => $validatedData['type'],
//     'description' => $validatedData['description'],
// ]);
