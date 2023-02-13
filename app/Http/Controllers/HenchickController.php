<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Cartitem;

class HenchickController extends Controller
{
    public function polchick()

    {


        return view('polishchick');
    }

    public function golchick()

    {

        return view('goldenbuffchick');
    }

    public function millichick()

    {

        return view('milliflowerchick');
    }

    public function englishchick()

    {

        return view('englishgamechick');
    }

    public function shamochick()

    {

        return view('shamoaseelchick');
    }

    public function mesrichick()

    {

        return view('goldenmesrichick');
    }

    public function desichick()

    {

        return view('desihenchick');
    }

    public function car()

    {

        return view('cardview');
    }
    function add_to_cart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cartitem;
            $cart->user_id=$req->session->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save;
            return redirect('/');
        }
        else
        {
            return redirect('/');
        }
    }




}
