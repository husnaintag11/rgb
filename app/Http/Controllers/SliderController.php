<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function  index()
    {
        $sliders = Slider::all();
        return view('home.slider.index',compact('sliders'));

    }
    public function create(){

        return view('home.slider.create');

    }
    public function store(Request $request){


        $data = $request->validate([

            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);


        if($request->has('image')){
            $file_name = time();      //return timespan

            $picture = $request->image;
            // $file_name = rand();  // randum generate
            $file_name = sha1($file_name);  // algorithum different string generate

                $ext = $picture->getClientOriginalExtension();
                $file_name = $file_name.".".$ext;
                $picture -> move(public_path()."/uploads/slider/",$file_name);

                $image_path = '/uploads/slider/'.$file_name;
            $data['image'] = $image_path;
            }
        Slider::create($data);



        return redirect()->route('slider.index');


    }
    public function delete(Request $request,$id){

        $sliders=Slider::find($id);

        //$data=$request->all();
        $sliders->delete();
        return redirect()->route('slider.index');

        }


}
