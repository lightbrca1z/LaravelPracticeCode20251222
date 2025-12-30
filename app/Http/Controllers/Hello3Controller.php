<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello3Controller extends Controller
{
    //
    public function index(){
        $data = ['msg' => 'これは、Bladeを利用したサンプルです。'];
        return view('hello3.index',$data);
    }
}
