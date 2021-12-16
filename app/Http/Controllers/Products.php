<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    public function welcome(){
        $products = [
            'name'=>'ahmad',
            'brand'=>'kilani',
            'style'=>'cool',
            'price'=>'expensive'
        ];

        

        return view('welcome')->with('kilani',$products);
    }
}

