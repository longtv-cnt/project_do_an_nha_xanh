<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealEsatateController;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\adminhomeController;
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
use App\Http\Controllers\phieuthuController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\bannersController;
use App\Http\Controllers\baocaoController;

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
Route::post('/',[SearchController::class,'filter'])->name('filter');
Route::get('/loaibds{maloai}',[SearchController::class,'loaibds'])->name('home.loaibds');
Route::get('/duan{maduan}',[SearchController::class,'duan'])->name('home.duan');
// Route::get('/home',function(){
//     return view('admin.home');
// })->name('admin');

Route::get('/adminhome', [adminhomeController::class,'index'])->name('adminhome');

Route::get('/duan', [du_anController::class,'index'])->name('duan');
Route::get('/duan/create', [du_anController::class,'create'])->name('du_an.create');
Route::post('/duan/store', [du_anController::class,'store'])->name('du_an.store');
Route::DELETE('/duan/destroy/{maduan}', [du_anController::class,'destroy']);
Route::get('/duan/edit/{maduan}', [du_anController::class,'edit'])->name('du_an.edit');
Route::PATCH('/duan/update/{maduan}', [du_anController::class,'update']);
Route::resource('du_an', du_anController::class);


Route::get('/khachhang', [khachhangController::class,'index'])->name('khachhang');
Route::get('/khachhang/create', [khachhangController::class,'create'])->name('khachhang.create');
Route::post('/khachhang/store', [khachhangController::class,'store'])->name('khachhang.store');
Route::DELETE('/khachhang/destroy/{id}', [khachhangController::class,'destroy']);
Route::get('/khachhang/edit/{id}', [khachhangController::class,'edit'])->name('khachhang.edit');
Route::PATCH('/khachhang/update/{id}', [khachhangController::class,'update']);
// Route::resource('khachhang', khachhangController::class);

Route::get('/loaikhach', [loaikhachController::class,'index'])->name('loaikhach');
Route::get('/loaikhach/create', [loaikhachController::class,'create'])->name('loaikhach.create');
Route::post('/loaikhach/store', [loaikhachController::class,'store'])->name('loaikhach.store');
Route::DELETE('/loaikhach/destroy/{id}', [loaikhachController::class,'destroy']);
Route::get('/loaikhach/edit/{id}', [loaikhachController::class,'edit'])->name('loaikhach.edit');
Route::PATCH('/loaikhach/update/{id}', [loaikhachController::class,'update']);


Route::get('/loaiquyenhan', [loaiquyenhanController::class,'index'])->name('loaiquyenhan');
Route::get('/loaiquyenhan/create', [loaiquyenhanController::class,'create'])->name('loaiquyenhan.create');
Route::post('/loaiquyenhan/store', [loaiquyenhanController::class,'store'])->name('loaiquyenhan.store');
Route::DELETE('/loaiquyenhan/destroy/{id}', [loaiquyenhanController::class,'destroy']);
Route::get('/loaiquyenhan/edit/{id}', [loaiquyenhanController::class,'edit'])->name('loaiquyenhan.edit');
Route::PATCH('/loaiquyenhan/update/{id}', [loaiquyenhanController::class,'update']);


Route::get('/loaisp_bds', [loaisp_bdsController::class,'index'])->name('loaisp_bds');
Route::get('/loaisp_bds/create', [loaisp_bdsController::class,'create'])->name('loaisp_bds.create');
Route::post('/loaisp_bds/store', [loaisp_bdsController::class,'store'])->name('loaisp_bds.store');
Route::DELETE('/loaisp_bds/destroy/{id}', [loaisp_bdsController::class,'destroy']);
Route::get('/loaisp_bds/edit/{id}', [loaisp_bdsController::class,'edit'])->name('loaisp_bds.edit');
Route::PATCH('/loaisp_bds/update/{id}', [loaisp_bdsController::class,'update']);


Route::get('/loaitintuc', [loaitintucController::class,'index'])->name('loaitintuc');
Route::get('/loaitintuc/create', [loaitintucController::class,'create'])->name('loaitintuc.create');
Route::post('/loaitintuc/store', [loaitintucController::class,'store'])->name('loaitintuc.store');
Route::DELETE('/loaitintuc/destroy/{id}', [loaitintucController::class,'destroy']);
Route::get('/loaitintuc/edit/{id}', [loaitintucController::class,'edit'])->name('loaitintuc.edit');
Route::PATCH('/loaitintuc/update/{id}', [loaitintucController::class,'update']);


Route::get('/tintuc', [tintucController::class,'index'])->name('tintuc');
Route::get('/tintuc/create', [tintucController::class,'create'])->name('tintuc.create');
Route::post('/tintuc/store', [tintucController::class,'store'])->name('tintuc.store');
Route::DELETE('/tintuc/destroy/{matin}', [tintucController::class,'destroy']);
Route::get('/tintuc/edit/{matin}', [tintucController::class,'edit'])->name('tintuc.edit');
Route::PATCH('/tintuc/update/{matin}', [tintucController::class,'update']);


Route::get('/sanpham_bds', [sanpham_bdsController::class,'index'])->name('sanpham_bds');
Route::get('/sanpham_bds/create', [sanpham_bdsController::class,'create'])->name('sanpham_bds.create');
Route::post('/sanpham_bds/store', [sanpham_bdsController::class,'store'])->name('sanpham_bds.store');
Route::DELETE('/sanpham_bds/destroy/{id}', [sanpham_bdsController::class,'destroy']);
Route::get('/sanpham_bds/edit/{id}', [sanpham_bdsController::class,'edit'])->name('sanpham_bds.edit');
Route::PATCH('/sanpham_bds/update/{id}', [sanpham_bdsController::class,'update']);


Route::get('/phanhoi', [phanhoiController::class,'index'])->name('phanhoi');
Route::get('/phanhoi/create', [phanhoiController::class,'create'])->name('phanhoi.create');
Route::post('/phanhoi/store', [phanhoiController::class,'store'])->name('phanhoi.store');
Route::DELETE('/phanhoi/destroy/{id}', [phanhoiController::class,'destroy']);
Route::get('/phanhoi/edit/{id}', [phanhoiController::class,'edit'])->name('phanhoi.edit');
Route::PATCH('/phanhoi/update/{id}', [phanhoiController::class,'update']);


Route::get('/phieuthu', [phieuthuController::class,'index'])->name('phieuthu');
Route::get('/phieuthu/create', [phieuthuController::class,'create'])->name('phieuthu.create');
Route::post('/phieuthu/store', [phieuthuController::class,'store'])->name('phieuthu.store');
Route::DELETE('/phieuthu/destroy/{maphieu}', [phieuthuController::class,'destroy']);
Route::get('/phieuthu/edit/{maphieu}', [phieuthuController::class,'edit'])->name('phieuthu.edit');
Route::PATCH('/phieuthu/update/{maphieu}', [phieuthuController::class,'update']);


Route::get('/contact', [contactController::class,'index'])->name('contact');
Route::get('/contact/create', [contactController::class,'create'])->name('contact.create');
Route::post('/contact/store', [contactController::class,'store'])->name('contact.store');
Route::DELETE('/contact/destroy/{maphieu}', [contactController::class,'destroy']);
Route::get('/contact/edit/{maphieu}', [contactController::class,'edit'])->name('contact.edit');
Route::PATCH('/contact/update/{maphieu}', [contactController::class,'update']);


Route::get('/banners', [bannersController::class,'index'])->name('banners');
Route::get('/banners/create', [bannersController::class,'create'])->name('banners.create');
Route::post('/banners/store', [bannersController::class,'store'])->name('banners.store');
Route::DELETE('/banners/destroy/{maphieu}', [bannersController::class,'destroy']);
Route::get('/banners/edit/{maphieu}', [bannersController::class,'edit'])->name('banners.edit');
Route::PATCH('/banners/update/{maphieu}', [bannersController::class,'update']);


Route::get('/baocao', [baocaoController::class,'index'])->name('baocao');
