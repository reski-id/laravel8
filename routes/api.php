<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskControllerAPI;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\ProgrammingController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseCategController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//crud course
Route::get('/course', [CourseController::class, 'index']);
Route::post('/course', [CourseController::class, 'store']);
Route::get('/course/{id}', [CourseController::class, 'show']);
Route::put('/course/{id}', [CourseController::class, 'edit']);
Route::delete('/course/{id}', [CourseController::class, 'destroy']);

//crud course category
Route::get('/category', [CourseCategController::class, 'index']);
Route::post('/category', [CourseCategController::class, 'store']);
Route::get('/category/{id}', [CourseCategController::class, 'show']);
Route::put('/category/{id}', [CourseCategController::class, 'edit']);
Route::delete('/category/{id}', [CourseCategController::class, 'destroy']);

//crud programing language
Route::get('/code', [ProgrammingController::class, 'index']);
Route::post('/code', [ProgrammingController::class, 'store']);
Route::get('/code/{id}', [ProgrammingController::class, 'show']);
Route::put('/code/{id}', [ProgrammingController::class, 'edit']);
Route::delete('/code/{id}', [ProgrammingController::class, 'destroy']);

//crud sertifikat
Route::post('/sertifikat', [SertifikatController::class, 'store']);
Route::get('/sertifikat', [SertifikatController::class, 'index']);
Route::get('/sertifikat/{id}', [SertifikatController::class, 'show']);
Route::put('/sertifikat/{id}', [SertifikatController::class, 'edit']);
Route::delete('/sertifikat/{id}', [SertifikatController::class, 'destroy']);

//crud portofolio
Route::get('/projects', [PortofolioController::class, 'index']);
Route::post('/projects', [PortofolioController::class, 'store']);
Route::get('/projects/{id}', [PortofolioController::class, 'show']);
Route::put('/projects/{id}', [PortofolioController::class, 'edit']);
Route::delete('/projects/{id}', [PortofolioController::class, 'destroy']);



Route::post('/task', [TaskControllerAPI::class, 'store']);
Route::get('/task', [TaskControllerAPI::class, 'index']);
Route::get('/task/{id}', [TaskControllerAPI::class, 'show']);
Route::put('/task/{id}', [TaskControllerAPI::class, 'edit']);
Route::delete('/task/{id}', [TaskControllerAPI::class, 'destroy']);
