<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function paket1(){
        return view('paket1');
    }

    public function paket2(){
        return view('paket2');
    }
    public function paket3(){
        return view('paket3');
    }
}
