<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/portofolio', [HomeController::class, 'portofolio']);
Route::get('/sertifikat', [HomeController::class, 'sertifikat']);


Route::post('/task', [TaskController::class, 'store']);
Route::get('/task', [TaskController::class, 'index']);
Route::get('/task/{param}', [TaskController::class, 'show']);
Route::put('/task/{param}', [TaskController::class, 'edit']);
Route::delete('/task/{param}', [TaskController::class, 'delete']);
