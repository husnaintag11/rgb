<?php

namespace App\Http\Controllers;
use APP\Models\Product;
use Illuminate\Http\Request;

class Multi_ImageController extends Controller
{
public function store(Request $request) {
    //multi_image
    $validatedData = $request->validate([
        'multi_image' => 'image|mimes:jpeg,png,jpg,gif',
    ]);
    $finalImagePathName = null;
    if($request->hasFile('multi_image')){
        $uploadPath = '/uploads/multi_image/';
        foreach($request->file('multi_image') as $imageFile){
         $extention = $imageFile->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $imageFile -> move($uploadPath,$filename);
         $finalImagePathName=$uploadPath.$filename;

         $product=Product::create([
         // 'product_id' => $product->id,
          'multi_image'=> $finalImagePathName,
        ]);

        $product = Product::create([

            'multi_image' => $finalImagePathName,

        ]);

        }
       }
       return redirect()->route('prdct.index', $product->id)->with('message','Product add successfully');
}
}
