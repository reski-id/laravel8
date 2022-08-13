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

$tasklist =[
    1 => 'eat',
    2 => 'study',
    3 => 'work'
];
//get all tasklist
Route::get('/task', function () use($tasklist) {
    return $tasklist;
});

//get tasklist with parameter
Route::get('/task/{param}', function ($param) use($tasklist) {
    return $tasklist[$param];
});

//searching by id
Route::get('/task', function () use($tasklist) {
    if (request()->search) {
        return $tasklist[request()->search];
    }
    return $tasklist;
});


$tasklist =[
    1 => 'eat',
    2 => 'study',
    3 => 'work'
];
Route::post('/task',  function () use($tasklist) {
    //add csrf token di file Http\Middleware\VerifyCsrfToken
    /*protected $except = [
        '/task'
    ];*/
    $tasklist[request()->label]=request()->task;
    return $tasklist;
});

Route::put('/task/{key}', function ($key) use($tasklist) {
    $tasklist[$key]=request()->task;
    return $tasklist;
});
