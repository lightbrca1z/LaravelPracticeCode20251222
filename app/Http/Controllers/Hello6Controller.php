<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello6Controller extends Controller
{
    //
    function index(){
    $data = [
        [ 'name' => '山田たろう', 'mail' => 'taro@example.com'],
        [ 'name' => '田中はなこ', 'mail' => 'hanako@flower.com'],
        [ 'name' => '鈴木さちこ', 'mail' => 'sachico@happy.com'],
    ];
    return view('layouts.index', ['data' => $data]);
    }
}
