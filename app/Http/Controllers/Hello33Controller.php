<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello33Controller extends Controller
{
    //
    public function index(){
        $data = ['msg' => 'This is a sample page with php-template.'];
        return view('hello3.index',$data);
    }
}
