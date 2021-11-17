<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
    return view('add_user');
});

//Route::get('/home', 'App\Http\Controllers\User@home');

Route::post('store',[PostController::class,'store']);
Route::get('show_user',[PostController::class,'show']);
Route::get('delete/{id}',[PostController::class,'destroy']);
Route::get('edit/{id}',[PostController::class,'edit']);
Route::post('update/{id}',[PostController::class,'update']); 