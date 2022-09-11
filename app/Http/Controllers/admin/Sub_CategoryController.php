<?php

namespace App\Http\Controllers\admin;
use App\Models\SubCategory;
use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sub_CategoryController extends Controller
{
    public function index(Request $request )
    {
        $categories=SubCategory::get();


        return view('admin..sub_category.sub_index', compact('categories'));
    }
    public function create()
    {
        $categories=Category::get();
        return view('admin..sub_category.sub_create',compact('categories'));
    }
    public function store(Request $request)
    {

        $data=$request->all();
        SubCategory::create($data);
    return redirect()->route('sub_cat.index');

    }

    public function edit($id)
    {
    $Category=SubCategory::find($id);
    return view('admin..sub_category.sub_edit',compact('Category'));
    }
    public function update(Request $request,$id){

    $Category=SubCategory::find($id);

    $data=$request->all();
    $Category->update($data);
    return redirect()->route('sub_cat.index');



    }

    public function delete(Request $request,$id){

    $Category=SubCategory::find($id);

    //$data=$request->all();
    $Category->delete();
    return redirect()->route('sub_cat.index');

    }
}
