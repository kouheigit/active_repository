<?php

namespace App\Http\Controllers\Reacttest;

use App\Http\Controllers\Controller;
use http\Env\Request;

class Reacttest extends Controller
{
    public function index(Request $request)
    {
        return view('reacttest.index');
       // return view('test.index',compact('threads','order'));
    }
}
