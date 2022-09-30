<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealEsatateController;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\du_anController;
use App\Http\Controllers\khachhangController;
use App\Http\Controllers\loaikhachController;
use App\Http\Controllers\loaiquyenhanController;
use App\Http\Controllers\loaisp_bdsController;
use App\Http\Controllers\loaitintucController;
use App\Http\Controllers\tintucController;
use App\Http\Controllers\sanpham_bdsController;
use App\Http\Controllers\phanhoiController;

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
Route::get('/product', [RealEsatateController::class,'create'])->name('product');
Route::get('/product/create',[RealEsatateController::class,'create'])->name('product.create');
Route::post('/product/store',[RealEsatateController::class,'store'])->name('product.store');
Route::get('/login', function () {
    return view('login.login');
})->name('login');

Route::get('/',[RealEsatateController::class,'index'])->name('home');
Route::post('/name',[SearchController::class,'getSearchAjax'])->name('search');
Route::post('/',[RealEsatateController::class,'filter'])->name('filter');

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
Route::get('/khachhang/edit/{makhach}', [khachhangController::class,'edit'])->name('khachhang.edit');
Route::PATCH('/khachhang/update/{makhach}', [khachhangController::class,'update']);
// Route::resource('khachhang', khachhangController::class);

Route::get('/loaikhach', [loaikhachController::class,'index'])->name('loaikhach');
Route::get('/loaikhach/create', [loaikhachController::class,'create'])->name('loaikhach.create');
Route::post('/loaikhach/store', [loaikhachController::class,'store'])->name('loaikhach.store');
Route::DELETE('/loaikhach/destroy/{maloai}', [loaikhachController::class,'destroy']);
Route::get('/loaikhach/edit/{maloai}', [loaikhachController::class,'edit'])->name('loaikhach.edit');
Route::PATCH('/loaikhach/update/{maloai}', [loaikhachController::class,'update']);


Route::get('/loaiquyenhan', [loaiquyenhanController::class,'index'])->name('loaiquyenhan');
Route::get('/loaiquyenhan/create', [loaiquyenhanController::class,'create'])->name('loaiquyenhan.create');
Route::post('/loaiquyenhan/store', [loaiquyenhanController::class,'store'])->name('loaiquyenhan.store');
Route::DELETE('/loaiquyenhan/destroy/{maloai}', [loaiquyenhanController::class,'destroy']);
Route::get('/loaiquyenhan/edit/{maloai}', [loaiquyenhanController::class,'edit'])->name('loaiquyenhan.edit');
Route::PATCH('/loaiquyenhan/update/{maloai}', [loaiquyenhanController::class,'update']);


Route::get('/loaisp_bds', [loaisp_bdsController::class,'index'])->name('loaisp_bds');
Route::get('/loaisp_bds/create', [loaisp_bdsController::class,'create'])->name('loaisp_bds.create');
Route::post('/loaisp_bds/store', [loaisp_bdsController::class,'store'])->name('loaisp_bds.store');
Route::DELETE('/loaisp_bds/destroy/{id}', [loaisp_bdsController::class,'destroy']);
Route::get('/loaisp_bds/edit/{id}', [loaisp_bdsController::class,'edit'])->name('loaisp_bds.edit');
Route::PATCH('/loaisp_bds/update/{id}', [loaisp_bdsController::class,'update']);


Route::get('/loaitintuc', [loaitintucController::class,'index'])->name('loaitintuc');
Route::get('/loaitintuc/create', [loaitintucController::class,'create'])->name('loaitintuc.create');
Route::post('/loaitintuc/store', [loaitintucController::class,'store'])->name('loaitintuc.store');
Route::DELETE('/loaitintuc/destroy/{maloaitin}', [loaitintucController::class,'destroy']);
Route::get('/loaitintuc/edit/{maloaitin}', [loaitintucController::class,'edit'])->name('loaitintuc.edit');
Route::PATCH('/loaitintuc/update/{maloaitin}', [loaitintucController::class,'update']);


Route::get('/tintuc', [tintucController::class,'index'])->name('tintuc');
Route::get('/tintuc/create', [tintucController::class,'create'])->name('tintuc.create');
Route::post('/tintuc/store', [tintucController::class,'store'])->name('tintuc.store');
Route::DELETE('/tintuc/destroy/{matin}', [tintucController::class,'destroy']);
Route::get('/tintuc/edit/{matin}', [tintucController::class,'edit'])->name('tintuc.edit');
Route::PATCH('/tintuc/update/{matin}', [tintucController::class,'update']);


Route::get('/sanpham_bds', [sanpham_bdsController::class,'index'])->name('sanpham_bds');
Route::get('/sanpham_bds/create', [sanpham_bdsController::class,'create'])->name('sanpham_bds.create');
Route::post('/sanpham_bds/store', [sanpham_bdsController::class,'store'])->name('sanpham_bds.store');
Route::DELETE('/sanpham_bds/destroy/{masanpham}', [sanpham_bdsController::class,'destroy']);
Route::get('/sanpham_bds/edit/{masanpham}', [sanpham_bdsController::class,'edit'])->name('sanpham_bds.edit');
Route::PATCH('/sanpham_bds/update/{masanpham}', [sanpham_bdsController::class,'update']);


Route::get('/phanhoi', [phanhoiController::class,'index'])->name('phanhoi');
Route::get('/phanhoi/create', [phanhoiController::class,'create'])->name('phanhoi.create');
Route::post('/phanhoi/store', [phanhoiController::class,'store'])->name('phanhoi.store');
Route::DELETE('/phanhoi/destroy/{id}', [phanhoiController::class,'destroy']);
Route::get('/phanhoi/edit/{id}', [phanhoiController::class,'edit'])->name('phanhoi.edit');
Route::PATCH('/phanhoi/update/{id}', [phanhoiController::class,'update']);

