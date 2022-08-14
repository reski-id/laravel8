<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\ProgrammingController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseCategController;

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
Route::get('/task/{id}', [TaskController::class, 'show']);
Route::put('/task/{id}', [TaskController::class, 'edit']);
Route::delete('/task/{id}', [TaskController::class, 'destroy']);

Route::post('/program', [ProgrammingController::class, 'store']);
Route::get('/program', [ProgrammingController::class, 'index']);
Route::get('/program/{param}', [ProgrammingController::class, 'show']);
Route::put('/program/{param}', [ProgrammingController::class, 'edit']);
Route::delete('/program/{param}', [ProgrammingController::class, 'delete']);

Route::post('/sertifikat', [SertifikatController::class, 'store']);
Route::get('/sertifikat', [SertifikatController::class, 'index']);
Route::get('/sertifikat/{id}', [SertifikatController::class, 'show']);
Route::put('/sertifikat/{id}', [SertifikatController::class, 'edit']);
Route::delete('/sertifikat/{id}', [SertifikatController::class, 'destroy']);
