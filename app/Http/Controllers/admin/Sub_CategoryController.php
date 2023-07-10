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
        $sub_categories=DB::table('sub_categories')->get();


        return view('admin..sub_category.sub_index', compact('sub_categories'));
    }
    public function create()
    {
        $categories=Category::get();
        $sub_category=new SubCategory;

        return view('admin.sub_category.sub_create',compact('categories','sub_category'));
    }
    public function store(Request $request)
    {

        $data=$request->all();
        SubCategory::create($data);
    return redirect()->route('sub_cat.index');

    }

    public function edit($id)
    {
        $categories=Category::get();
    $sub_category=SubCategory::find($id);
    return view('admin.sub_category.sub_create',compact('sub_category','categories'));
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
