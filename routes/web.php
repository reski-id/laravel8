<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/hello', function () {
    $dataarray=[
        'ID'=>1,
        'user'=>'batman',
        'gender'=>'male',
        'message'=>'hello',

    ];

    return response()->json($dataarray,200);
});

Route::get('/debug', function () {
    $dataarray=[
        'ID'=>1,
        'user'=>'batman',
        'gender'=>'male',
        'message'=>'hello',

    ];

    dd($dataarray);
});
