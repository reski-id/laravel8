<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\HomeControllerAPI;
use App\Http\Controllers\api\TaskControllerAPI;
use App\Http\Controllers\api\SertifikatControllerAPI;
use App\Http\Controllers\api\ProgrammingControllerAPI;
use App\Http\Controllers\api\PortofolioControllerAPI;
use App\Http\Controllers\api\CourseControllerAPI;
use App\Http\Controllers\api\CourseCategControllerAPI;

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
Route::get('/course', [CourseControllerAPI::class, 'index']);
Route::post('/course', [CourseControllerAPI::class, 'store']);
Route::get('/course/{id}', [CourseControllerAPI::class, 'show']);
Route::put('/course/{id}', [CourseControllerAPI::class, 'edit']);
Route::delete('/course/{id}', [CourseControllerAPI::class, 'destroy']);

//crud course category
Route::get('/category', [CourseCategControllerAPI::class, 'index']);
Route::post('/category', [CourseCategControllerAPI::class, 'store']);
Route::get('/category/{id}', [CourseCategControllerAPI::class, 'show']);
Route::put('/category/{id}', [CourseCategControllerAPI::class, 'edit']);
Route::delete('/category/{id}', [CourseCategControllerAPI::class, 'destroy']);

//crud programing language
Route::get('/code', [ProgrammingControllerAPI::class, 'index']);
Route::post('/code', [ProgrammingControllerAPI::class, 'store']);
Route::get('/code/{id}', [ProgrammingControllerAPI::class, 'show']);
Route::put('/code/{id}', [ProgrammingControllerAPI::class, 'edit']);
Route::delete('/code/{id}', [ProgrammingControllerAPI::class, 'destroy']);

//crud sertifikat
Route::post('/sertifikat', [SertifikatControllerAPI::class, 'store']);
Route::get('/sertifikat', [SertifikatControllerAPI::class, 'index']);
Route::get('/sertifikat/{id}', [SertifikatControllerAPI::class, 'show']);
Route::put('/sertifikat/{id}', [SertifikatControllerAPI::class, 'edit']);
Route::delete('/sertifikat/{id}', [SertifikatControllerAPI::class, 'destroy']);

//crud portofolio
Route::get('/projects', [PortofolioControllerAPI::class, 'index']);
Route::post('/projects', [PortofolioControllerAPI::class, 'store']);
Route::get('/projects/{id}', [PortofolioControllerAPI::class, 'show']);
Route::put('/projects/{id}', [PortofolioControllerAPI::class, 'edit']);
Route::delete('/projects/{id}', [PortofolioControllerAPI::class, 'destroy']);

Route::post('/task', [TaskControllerAPI::class, 'store']);
Route::get('/task', [TaskControllerAPI::class, 'index']);
Route::get('/task/{id}', [TaskControllerAPI::class, 'show']);
Route::put('/task/{id}', [TaskControllerAPI::class, 'edit']);
Route::delete('/task/{id}', [TaskControllerAPI::class, 'destroy']);
