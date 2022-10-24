<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Adress;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $request )
    {
        $categories=Adress::get();
        return view('admin..address.index',compact('categories'));
    }
    public function create()
    {

        return view('admin..address.create');
    }
    public function store(Request $request)
    {

        $data=$request->all();
        Adress::create($data);
    return redirect()->route('address.index');

    }

    public function edit($id)
    {
    $Category=Adress::find($id);

    return view('admin..address.create',compact('Category'));
    }
    public function update(Request $request,$id){
    $adresses=new Adress;
    $Category=Adress::find($id);

    $data=$request->all();
    $Category->update($data);
    return redirect()->route('address.index');



    }

    public function delete(Request $request,$id){

    $Category=Adress::find($id);

    //$data=$request->all();
    $Category->delete();
    return redirect()->route('address.index');

    }
}
