<?php

namespace App\Http\Controllers\Reacttest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReacttestController extends Controller
{
    public function index(Request $request)
    {
        return view('reacttest.index');
    }
}
