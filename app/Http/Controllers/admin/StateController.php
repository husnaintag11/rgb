<?php

namespace App\Http\Controllers\admin;

use App\Models\State;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index(Request $request )
    {
        $categories=State::get();
        return view('admin..state.index',compact('categories'));
    }


    public function create()
    {

        return view('admin..state.create');
    }
    public function store(Request $request)
    {

        $data=$request->all();
        State::create($data);
    return redirect()->route('sa.index');

    }

    public function edit($id)
    {
    $Category=State::find($id);
    $states=new State;
    return view('admin..state.create',compact('Category'));
    }
    public function update(Request $request,$id){

    $Category=State::find($id);

    $data=$request->all();
    $Category->update($data);
    return redirect()->route('sa.index');



    }

    public function delete(Request $request,$id){

    $Category=State::find($id);

    //$data=$request->all();
    $Category->delete();
    return redirect()->route('sa.index');

    }
    public function add_state()
    {
        $categories = State::all();

        return view('home.add_state', compact('categories'));
    }
}
