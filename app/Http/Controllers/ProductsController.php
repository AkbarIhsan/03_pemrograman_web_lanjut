<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function tea(){
        return view('tea');
    }

    public function freshMilk(){
        return view('freshMilk');
    }
    public function coffee(){
        return view('coffee');
    }
    
    public function snack(){
        return view('snack');
    }
}
