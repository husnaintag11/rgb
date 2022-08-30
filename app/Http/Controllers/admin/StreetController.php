<?php

namespace App\Http\Controllers\admin;
use App\Models\Street;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StreetController extends Controller
{
    public function index(Request $request )
    {
        $categories=Street::get();
        return view('admin..street.index',compact('categories'));
    }
    public function create()
    {

        return view('admin..street.create');
    }
    public function store(Request $request)
    {

        $data=$request->all();
        Street::create($data);
    return redirect()->route('st.index');

    }

    public function edit($id)
    {
    $Category=Street::find($id);
    return view('admin..street.edit',compact('Category'));
    }
    public function update(Request $request,$id){

    $Category=Street::find($id);

    $data=$request->all();
    $Category->update($data);
    return redirect()->route('st.index');



    }

    public function delete(Request $request,$id){

    $Category=Street::find($id);

    //$data=$request->all();
    $Category->delete();
    return redirect()->route('st.index');

    }
}
