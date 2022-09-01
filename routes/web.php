<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealEsatateController;
use App\Http\Controllers\SearchController;
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

Route::get('/',[RealEsatateController::class,'index']);
Route::get('/login', function () {
    return view('login.login');
});
//Route::prefix('search')->group(function(){
//    Route::get('/',[SearchController::class,'showFormSearch'])->name('show-form-search');
//    Route::post('/name',[SearchController::class,'getSearchAjax'])->name('search');
//});
Route::get('/',[SearchController::class,'showFormSearch'])->name('show-form-search');
Route::post('/name',[SearchController::class,'getSearchAjax'])->name('search');

