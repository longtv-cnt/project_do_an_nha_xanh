<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealEsatateController;
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

Route::get('/',[RealEsatateController::class,'index'])->name('home');
Route::get('/product/create',[RealEsatateController::class,'create'])->name('product.create');
Route::get('/login', function () {
    return view('login.login');
});
