<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkController;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', 'App\Http\Controllers\Auth\LoginController');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController');

Route::get('/profiles', [ProfileController::class,'index']);
Route::post('/profiles/create', [ProfileController::class,'store']);
Route::get('/profiles/{id}', [ProfileController::class,'show']);
Route::post('/profiles/update/{id}', [ProfileController::class,'update']);
Route::get('/profiles/delete/{id}', [ProfileController::class,'destroy']);

Route::get('/works', [WorkController::class,'index']);
Route::post('/works/create', [WorkController::class,'store']);
Route::get('/works/{id}', [WorkController::class,'show']);
Route::post('/works/update/{id}', [WorkController::class,'update']);
Route::get('/works/delete/{id}', [WorkController::class,'destroy']);

Route::get('/contacts', [ContactController::class,'index']);
Route::post('/contacts/create', [ContactController::class,'store']);
Route::get('/contacts/{id}', [ContactController::class,'show']);
Route::post('/contacts/update/{id}', [ContactController::class,'update']);
Route::get('/contacts/delete/{id}', [ContactController::class,'destroy']);

Route::get('/educations', [EducationController::class,'index']);
Route::post('/educations/create', [EducationController::class,'store']);
Route::get('/educations/{id}', [EducationController::class,'show']);
Route::post('/educations/update/{id}', [EducationController::class,'update']);
Route::get('/educations/delete/{id}', [EducationController::class,'destroy']);
