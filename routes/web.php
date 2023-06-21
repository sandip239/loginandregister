<?php

use App\Http\Controllers\authcontroller;
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
Route::get('register',[authcontroller::class,'registerView'])->name('registerView');
Route::post('register',[authcontroller::class,'register'])->name('register');

Route::get('login',[authcontroller::class,'loginView'])->name('loginview');
Route::post('login',[authcontroller::class,'login'])->name('login');
