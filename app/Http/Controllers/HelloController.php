<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\View;

class HelloController extends Controller
{
    public function hello(){
        return View::make('hello', ['name' => 'Akbar']);
    }
}
