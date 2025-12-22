<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\Hello2Controller;

Route::get('hello/{id?}/{pass?}', [HelloController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello2/', [Hello2Controller::class, 'index']);
Route::get('hello2/other', [Hello2Controller::class, 'other']);


Route::get('hello/{msg}', function($msg){
    $html = <<<EOF
    <html>
    <head>
    <title>Hello</title>
    <style>
    body{font-size:16px; color:#999;}
    h1{font-size:100px; text-align:right; color:#eee;
    margin:-40px 0px -50px 0px;}
    </style>
    </head>
    <body>
    <h1>Hello {$msg}!</h1>
    </body>
    </html>
EOF;
    return $html;
});