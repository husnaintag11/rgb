<?php

namespace App\Http\Controllers\admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller {



    public function index(Request $request) {
        $categories = Category::get();
        return view('admin..category.index', compact('categories'));
    }
    public function create() {

        return view('admin..category.create');
    }
    public function store(Request $request) {

        $data = $request ->all();
        Category::create($data);
        return redirect() -> route('cat.index');
        // image



        // if($request->has('img')){
        //     $file_name = time();      //return timespan

        //       $picture = $request->img;
        //      // $file_name = rand();  // randum generate
        //       $file_name = sha1($file_name);  // algorithum different string generate

        //         $ext = $picture->getClientOriginalExtention();
        //         $file_name = $file_name.".".$ext;
        //         $picture -> move(public_path()."/uploads/", $file_name);

        //         $image_path = '/uploads/'.$file_name;

        //     }
        //     $data['image']=$image_path;
        //     return "<img src='".$image_path."'>";
        //     Category::create($data);
    }

    public function edit($id) {
        $Category = Category::find($id);
        $category = new Category;
        return view('admin..category.create', compact('Category'));
    }
    public function update(Request $request, $id) {

        $Category = Category::find($id);

        $data = $request -> all();
        $Category -> update($data);
        return redirect() -> route('cat.index');



    }
    public function delete(Request $request,$id){

        $Category=Category::find($id);

        //$data=$request->all();
        $Category->delete();
        return redirect()->route('cat.index');

    }





}
