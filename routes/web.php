<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use resource\views\home\home;
use App\Http\Controllers\du_anController;

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

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/propertygrid', [HomeController::class,'propertygrid'])->name('property-grid');
Route::get('/propertysingle', [HomeController::class,'propertysingle'])->name('property-single');
Route::get('/agentsingle', [HomeController::class,'agentsingle'])->name('agent-single');
Route::get('/agentsgrid', [HomeController::class,'agentsgrid'])->name('agents-grid');
Route::get('/bloggrid', [HomeController::class,'bloggrid'])->name('blog-grid');
Route::get('/blogsingle', [HomeController::class,'blogsingle'])->name('blog-single');
Route::get('/login', [HomeController::class,'login'])->name('login');



Route::get('/home',function(){
    return view('admin.home');
})->name('admin');


Route::get('/duan', [du_anController::class,'index'])->name('duan');
// Route::get('/duan/create', [du_anController::class,'create'])->name('create.duan');
// Route::post('/duan/store', [du_anController::class,'store'])->name('store.duan');
// Route::DELETE('/duan/destroy/{id}', [du_anController::class,'destroy'])->name('destroy');
Route::get('/duan/edit{$maduan}', [du_anController::class,'edit'])->name('editduan');
Route::PATCH('/duan/edit{$maduan}', [du_anController::class,'update']);
Route::resource('du_an', du_anController::class);

