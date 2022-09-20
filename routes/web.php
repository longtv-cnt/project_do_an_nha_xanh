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
//Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/propertygrid', [HomeController::class,'propertygrid'])->name('property-grid');
Route::get('/propertysingle', [HomeController::class,'propertysingle'])->name('property-single');
Route::get('/agentsingle', [HomeController::class,'agentsingle'])->name('agent-single');
Route::get('/agentsgrid', [HomeController::class,'agentsgrid'])->name('agents-grid');
Route::get('/bloggrid', [HomeController::class,'bloggrid'])->name('blog-grid');
Route::get('/blogsingle', [HomeController::class,'blogsingle'])->name('blog-single');
Route::get('/login', [HomeController::class,'login'])->name('login');
Route::get('/',[RealEsatateController::class,'index'])->name('home');
Route::get('/product/create',[RealEsatateController::class,'create'])->name('product.create');
Route::post('/product/store',[RealEsatateController::class,'store'])->name('product.store');
Route::get('/login', function () {
    return view('login.login');
});
//Route::prefix('search')->group(function(){
//    Route::get('/',[SearchController::class,'showFormSearch'])->name('show-form-search');
//    Route::post('/name',[SearchController::class,'getSearchAjax'])->name('search');
//});
Route::get('/aa',[SearchController::class,'showFormSearch'])->name('home');
Route::post('/name',[SearchController::class,'getSearchAjax'])->name('search');

Route::get('/home',function(){
    return view('admin.home');
})->name('admin');


Route::get('/duan', [du_anController::class,'index'])->name('duan');
Route::get('/duan/create', [du_anController::class,'create'])->name('create.duan');
Route::post('/duan/store', [du_anController::class,'store'])->name('store.duan');
Route::DELETE('/duan/destroy/{maduan}', [du_anController::class,'destroy']);
Route::get('/duan/edit/{maduan}', [du_anController::class,'edit'])->name('duanedit');
Route::PATCH('/duan/edit/{maduan}', [du_anController::class,'update']);
Route::resource('du_an', du_anController::class);


Route::get('/khachhang', [khachhangController::class,'index'])->name('khachhang');
Route::get('/khachhang/create', [khachhangController::class,'create'])->name('khachhang.create');
Route::post('/khachhang/store', [khachhangController::class,'store'])->name('khachhang.store');
Route::DELETE('/khachhang/destroy/{makhach}', [khachhangController::class,'destroy']);
