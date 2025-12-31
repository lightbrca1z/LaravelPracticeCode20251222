<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello5Controller extends Controller
{
    //
    public function index()
    {
        return view('hello2.index2', ['msg' => '']);
    }
    public function post(Request $request)
    {
        $msg = $request->msg;
        return view('hello2.index2', ['msg' => $msg]);
    }
}
