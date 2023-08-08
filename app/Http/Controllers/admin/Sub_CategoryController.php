<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use App\Models\SubCategory;
use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sub_CategoryController extends Controller
{
    public function index(Request $request )
    {
        //return $request;
        $sub_categories=DB::table('sub_categories')
        ->leftJoin('categories', 'sub_categories.category_id', '=', 'categories.id')
        ->select('sub_categories.*','categories.name as category_name')
        ->get();
       // return $sub_categories;



        return view('admin..sub_category.sub_index', compact('sub_categories',));
    }


  public function GetSubCatAgainstMainCatEdit($id){
        echo json_encode(DB::table('sub_categories')->where('category_id', $id)->get());
    }

    public function create()
    {

        $category=Category::get();
        $sub_categories=new SubCategory;
       //$sub_categories=DB::table('sub_categories')->get();

        return view('admin.sub_category.sub_create',compact('category','sub_categories'));
    }
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);


        if($request->has('image')){
            $file_name = time();      //return timespan

              $picture = $request->image;
             // $file_name = rand();  // randum generate
              $file_name = sha1($file_name);  // algorithum different string generate

                $ext = $picture->getClientOriginalExtension();
                $file_name = $file_name.".".$ext;
                $picture -> move(public_path()."/uploads/subcategory/",$file_name);

                $image_path = '/uploads/subcategory/'.$file_name;
               $data['image'] = $image_path;
            }
        SubCategory::create($data);


        // $data=$request->all();
        //  SubCategory::create($data);

      // return $request;
    return redirect()->route('sub_cat.index');

    }

    public function edit($id)
    {
        $category=Category::get();
       $sub_category=SubCategory::find($id);
    return view('admin.sub_category.sub_create',compact('sub_category','category'));
    }
    public function update(Request  $request,$id){

    $Category=SubCategory::find($id);

    $data=$request->all();
    $Category->update($data);
    return redirect()->route('sub_cat.index',compact('Category'));



    }

    public function delete(Request $request,$id){

    $Category=SubCategory::find($id);

    //$data=$request->all();
    $Category->delete();
    return redirect()->route('sub_cat.index');

    }
}
