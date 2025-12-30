<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello4Controller extends Controller
{
    //
    public function index(){
        $data = [
            'msg' => 'お名前を入力ください。',
        ];
        return view('hello3.index2',$data);
    }
    public function post(Request $request){
        $msg = $request->msg;
        $data = [
            'msg' => 'こんにちは, '.$msg.'さん!',
        ];w
        return view('hello3.index2',$data);
    }
}
