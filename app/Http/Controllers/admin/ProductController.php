<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request )
{

    $products=DB::table('products')->get();
    return view('admin..product.index',compact('products'));
}
public function create()
{

    return view('admin..product.create');
}

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'price' => 'required|integer',
            'type' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/thumbimage/'), $imageName);
            $imagePath = '/uploads/thumbimage/' . $imageName;
        }

        $product = Product::create([
            'name' => $validatedData['name'],
            'age' => $validatedData['age'],
            'type' => $validatedData['type'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'image' => $imagePath,
        ]);

        return redirect()->route('prdct.index', $product->id);
    }





public function edit($id)
{
$product=Product::find($id);
$products= new Product;
return view('admin..product.create',compact('product'));
}
public function update(Request $request,$id){

$product=Product::find($id);

$data=$request->all();
$product->update($data);
return redirect()->route('prdct.index');
}

public function delete(Request $request,$id){

$product=Product::find($id);

//$data=$request->all();
$product->delete();
return redirect()->route('prdct.index');

}
}
