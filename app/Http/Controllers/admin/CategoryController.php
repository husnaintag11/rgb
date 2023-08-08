<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller {

    public function index(Request $request,Category $category) {

        // $subcategories = SubCategory::where('category_id', $category->id)->get();

        // return response()->json(['subcategories' => $subcategories]);

        $category = DB::table('categories')->get();


        return view('admin..category.index', compact('category'));
    }
    public function create() {

        return view('admin..category.create');
    }
    public function store(Request $request) {

        $data = $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);


        if($request->has('image')){
            $file_name = time();      //return timespan

              $picture = $request->image;
             // $file_name = rand();  // randum generate
              $file_name = sha1($file_name);  // algorithum different string generate

                $ext = $picture->getClientOriginalExtension();
                $file_name = $file_name.".".$ext;
                $picture -> move(public_path()."/uploads/category/",$file_name);

                $image_path = '/uploads/category/'.$file_name;
               $data['image'] = $image_path;
            }
        Category::create($data);

        // $data = $request ->all();
        // Category::create($data);
        return redirect() -> route('cat.index');
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
