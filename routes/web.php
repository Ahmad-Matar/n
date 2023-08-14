<?php

use App\Http\Controllers\UserController;
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

Route::get('/users/index',[UserController::class,'index']);
Route::get('/users/show/{id}',[UserController::class,'show']);

Route::get("/users/create",[UserController::class,'create']);
Route::post("/users",[UserController::class,'insert']);

Route::get("/users/{id}/edit",[UserController::class,'edit']);
Route::put("/users",[UserController::class,'update']);

Route::delete("/users",[UserController::class,'destroy']);

