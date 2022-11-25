<?php

use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealEsatateController;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\adminhomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\du_anController;
use App\Http\Controllers\khachhangController;
use App\Http\Controllers\loaikhachController;

use App\Http\Controllers\loaisp_bdsController;
use App\Http\Controllers\loaitintucController;
use App\Http\Controllers\tintucController;
use App\Http\Controllers\sanpham_bdsController;
use App\Http\Controllers\phanhoiController;
use App\Http\Controllers\phieuthuController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\bannersController;
use App\Http\Controllers\baocaoController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\sanphambannersController;
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
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/propertygrid', [HomeController::class, 'propertygrid'])->name('property-grid');
Route::get('/propertysingle', [HomeController::class, 'propertysingle'])->name('property-single');
Route::get('/agentsingle', [HomeController::class, 'agentsingle'])->name('agent-single');
Route::get('/agentsgrid', [HomeController::class, 'agentsgrid'])->name('agents-grid');
Route::get('/bloggrid', [HomeController::class, 'bloggrid'])->name('blog-grid');
Route::get('/blogsingle', [HomeController::class, 'blogsingle'])->name('blog-single');


//Không được xóa
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [HomeController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/dangki', [HomeController::class, 'dangki'])->name('dangki');
Route::post('/dangki', [HomeController::class, 'postDangki'])->name('postDangki');
//////
Route::get('/product', [RealEsatateController::class, 'create'])->name('product');
Route::get('/product/create', [RealEsatateController::class, 'create'])->name('product.create');
Route::post('/product/store', [RealEsatateController::class, 'store'])->name('product.store');


Route::get('/',[RealEsatateController::class,'index'])->name('home');
Route::post('/name',[SearchController::class,'getSearchAjax'])->name('search');
Route::get('/filter',[SearchController::class,'filter'])->name('filter');
Route::get('/loaibds{maloai}duan{maduan}',[SearchController::class,'loaibdsduan'])->name('home.loaibds.duan');
Route::get('/duan{maduan}',[SearchController::class,'duan'])->name('home.duan');
Route::get('/loaibds{maloai}',[SearchController::class,'loaibds'])->name('home.loaibds');
Route::get('/gioithieu-loaibds{maloai}',[SearchController::class,'gioithieu'])->name('gioithieu');
Route::get('/lienhe/',[SearchController::class,'lienhe'])->name('lienhe');
Route::get('/tuyendung/',[SearchController::class,'tuyendung'])->name('tuyendung');
Route::get('/chitiet{id}',[SearchController::class,'chitiet'])->name('chitiet');
Route::get('/hometintuc',[SearchController::class,'tintuc'])->name('hometintuc');
Route::get('/tintuc{id}',[SearchController::class,'tintucchitiet'])->name('tintucchitiet');
Route::get('/tatcasanpham', [sanpham_bdsController::class,'sanpham'])->name('tatcasanpham');
Route::get('/sanphambanner{id}', [sanpham_bdsController::class,'sanphambanner'])->name('sanphambanner');
Route::post('/loadcomment', [phanhoiController::class,'load_comment'])->name('load-comment');
Route::post('/loadcomment2', [phanhoiController::class,'load_comment2'])->name('load-comment2');
Route::post('/sendcomment', [phanhoiController::class,'send_comment'])->name('send-comment');
Route::post('/replycomment', [phanhoiController::class,'reply_comment'])->name('reply-comment');
Route::get('/hosocanhan/',[SearchController::class,'hosocanhan'])->name('hosocanhan');
Route::get('/hosocanhan-edit{id}', [SearchController::class, 'edit'])->name('hosocanhan.edit');
Route::PATCH('/hosocanhan-update{id}', [SearchController::class, 'update']);

Route::prefix('admin')->group(function () {
    Route::get('/', [adminhomeController::class, 'index'])->name('admin.index');

    Route::get('/adminhome', [adminhomeController::class, 'index'])->name('adminhome');


    Route::get('/duan', [du_anController::class, 'index'])->name('duan')->middleware('can:danh-sach-duan');
    Route::get('/duan/create', [du_anController::class, 'create'])->name('du_an.create');
    Route::post('/duan/store', [du_anController::class, 'store'])->name('du_an.store')->middleware('can:them-duan');
    Route::DELETE('/duan/destroy/{maduan}', [du_anController::class, 'destroy'])->middleware('can:xoa-duan');
    Route::get('/duan/edit/{maduan}', [du_anController::class, 'edit'])->name('du_an.edit')->middleware('can:sua-duan');
    Route::PATCH('/duan/update/{maduan}', [du_anController::class, 'update']);
    Route::resource('du_an', du_anController::class);


    Route::get('/khachhang', [khachhangController::class, 'index'])->name('khachhang')->middleware('can:danh-sach-khachhang');
    Route::get('/khachhang/create', [khachhangController::class, 'create'])->name('khachhang.create');
    Route::post('/khachhang/store', [khachhangController::class, 'store'])->name('khachhang.store')->middleware('can:them-khachhang');
    Route::DELETE('/khachhang/destroy/{id}', [khachhangController::class, 'destroy'])->middleware('can:xoa-khachhang');
    Route::get('/khachhang/edit/{id}', [khachhangController::class, 'edit'])->name('khachhang.edit')->middleware('can:sua-khachhang');
    Route::PATCH('/khachhang/update/{id}', [khachhangController::class, 'update']);
    // Route::resource('khachhang', khachhangController::class);

    Route::get('/loaikhach', [loaikhachController::class, 'index'])->name('loaikhach')->middleware('can:danh-sach-loaikhach');
    Route::get('/loaikhach/create', [loaikhachController::class, 'create'])->name('loaikhach.create');
    Route::post('/loaikhach/store', [loaikhachController::class, 'store'])->name('loaikhach.store')->middleware('can:them-loaikhach');
    Route::DELETE('/loaikhach/destroy/{id}', [loaikhachController::class, 'destroy'])->middleware('can:xoa-loaikhach');
    Route::get('/loaikhach/edit/{id}', [loaikhachController::class, 'edit'])->name('loaikhach.edit')->middleware('can:sua-loaikhach');
    Route::PATCH('/loaikhach/update/{id}', [loaikhachController::class, 'update']);


    // Route::get('/loaiquyenhan', [loaiquyenhanController::class, 'index'])->name('loaiquyenhan');
    // Route::get('/loaiquyenhan/create', [loaiquyenhanController::class, 'create'])->name('loaiquyenhan.create');
    // Route::post('/loaiquyenhan/store', [loaiquyenhanController::class, 'store'])->name('loaiquyenhan.store');
    // Route::DELETE('/loaiquyenhan/destroy/{id}', [loaiquyenhanController::class, 'destroy']);
    // Route::get('/loaiquyenhan/edit/{id}', [loaiquyenhanController::class, 'edit'])->name('loaiquyenhan.edit');
    // Route::PATCH('/loaiquyenhan/update/{id}', [loaiquyenhanController::class, 'update']);


    Route::get('/loaisp_bds', [loaisp_bdsController::class, 'index'])->name('loaisp_bds')->middleware('can:danh-sach-loai-san-pham');
    Route::get('/loaisp_bds/create', [loaisp_bdsController::class, 'create'])->name('loaisp_bds.create');
    Route::post('/loaisp_bds/store', [loaisp_bdsController::class, 'store'])->name('loaisp_bds.store')->middleware('can:them-loai-san-pham');
    Route::DELETE('/loaisp_bds/destroy/{id}', [loaisp_bdsController::class, 'destroy'])->middleware('can:xoa-loai-san-pham');
    Route::get('/loaisp_bds/edit/{id}', [loaisp_bdsController::class, 'edit'])->name('loaisp_bds.edit')->middleware('can:sua-loai-san-pham');
    Route::PATCH('/loaisp_bds/update/{id}', [loaisp_bdsController::class, 'update']);


    Route::get('/loaitintuc', [loaitintucController::class, 'index'])->name('loaitintuc')->middleware('can:danh-sach-loaitintuc');
    Route::get('/loaitintuc/create', [loaitintucController::class, 'create'])->name('loaitintuc.create');
    Route::post('/loaitintuc/store', [loaitintucController::class, 'store'])->name('loaitintuc.store')->middleware('can:them-loaitintuc');
    Route::DELETE('/loaitintuc/destroy/{id}', [loaitintucController::class, 'destroy'])->middleware('can:xoa-loaitintuc');
    Route::get('/loaitintuc/edit/{id}', [loaitintucController::class, 'edit'])->name('loaitintuc.edit')->middleware('can:sua-loaitintuc');
    Route::PATCH('/loaitintuc/update/{id}', [loaitintucController::class, 'update']);


    Route::get('/tintuc', [tintucController::class, 'index'])->name('tintuc')->middleware('can:danh-sach-tin-tuc');
    Route::get('/tintuc/create', [tintucController::class, 'create'])->name('tintuc.create');
    Route::post('/tintuc/store', [tintucController::class, 'store'])->name('tintuc.store')->middleware('can:them-tin-tuc');
    Route::DELETE('/tintuc/destroy/{matin}', [tintucController::class, 'destroy'])->middleware('can:xoa-tin-tuc');
    Route::get('/tintuc/edit/{matin}', [tintucController::class, 'edit'])->name('tintuc.edit')->middleware('can:sua-tin-tuc');
    Route::get('/tintuc/chitiet/{matin}', [tintucController::class, 'chitiet'])->name('tintuc.chitiet');
    Route::PATCH('/tintuc/update/{matin}', [tintucController::class, 'update']);



    Route::get('/sanpham_bds', [sanpham_bdsController::class, 'index'])->name('sanpham_bds')->middleware('can:danh-sach-san-pham');
    Route::get('/sanpham_bds/create', [sanpham_bdsController::class, 'create'])->name('sanpham_bds.create');
    Route::post('/sanpham_bds/store', [sanpham_bdsController::class, 'store'])->name('sanpham_bds.store')->middleware('can:them-san-pham');
    Route::DELETE('/sanpham_bds/destroy/{id}', [sanpham_bdsController::class, 'destroy']);//->middleware('can:xoa-san-pham');
    Route::get('/sanpham_bds/edit/{id}', [sanpham_bdsController::class, 'edit'])->name('sanpham_bds.edit')->middleware('can:sua-san-pham');
    Route::PATCH('/sanpham_bds/update/{id}', [sanpham_bdsController::class, 'update']);


    Route::get('/phanhoi', [phanhoiController::class, 'index'])->name('phanhoi')->middleware('can:danh-sach-phan-hoi');
    Route::get('/phanhoi/destroy/{id}', [phanhoiController::class, 'destroy'])->name('phanhoi.delete')->middleware('can:xoa-phan-hoi');
    Route::post('/phanhoi/replycomment', [phanhoiController::class,'reply_comment'])->name('reply-comment');
    Route::get('/phanhoi/create', [phanhoiController::class, 'create'])->name('phanhoi.create');
    Route::post('/phanhoi/store', [phanhoiController::class, 'store'])->name('phanhoi.store')->middleware('can:them-phan-hoi');
    Route::get('/phanhoi/edit/{id}', [phanhoiController::class, 'edit'])->name('phanhoi.edit');
    Route::PATCH('/phanhoi/update/{id}', [phanhoiController::class, 'update']);


    Route::get('/phieuthu', [phieuthuController::class, 'index'])->name('phieuthu');
    Route::get('/phieuthu/create', [phieuthuController::class, 'create'])->name('phieuthu.create');
    Route::post('/phieuthu/store', [phieuthuController::class, 'store'])->name('phieuthu.store');
    Route::DELETE('/phieuthu/destroy/{maphieu}', [phieuthuController::class, 'destroy']);
    Route::get('/phieuthu/edit/{maphieu}', [phieuthuController::class, 'edit'])->name('phieuthu.edit');
    Route::PATCH('/phieuthu/update/{maphieu}', [phieuthuController::class, 'update']);


    Route::get('/contact', [contactController::class, 'index'])->name('contact');
    Route::get('/contact/create', [contactController::class, 'create'])->name('contact.create');
    Route::post('/contact/store', [contactController::class, 'store'])->name('contact.store');
    Route::DELETE('/contact/destroy/{maphieu}', [contactController::class, 'destroy']);
    Route::get('/contact/edit/{maphieu}', [contactController::class, 'edit'])->name('contact.edit');
    Route::PATCH('/contact/update/{maphieu}', [contactController::class, 'update']);


    Route::get('/banners', [bannersController::class, 'index'])->name('banners')->middleware('can:danh-sach-banner');
    Route::get('/banners/create', [bannersController::class, 'create'])->name('banners.create');
    Route::post('/banners/store', [bannersController::class, 'store'])->name('banners.store')->middleware('can:them-banner');
    Route::DELETE('/banners/destroy/{maphieu}', [bannersController::class, 'destroy'])->middleware('can:xoa-banner');
    Route::get('/banners/edit/{maphieu}', [bannersController::class, 'edit'])->name('banners.edit')->middleware('can:sua-banner');
    Route::PATCH('/banners/update/{maphieu}', [bannersController::class, 'update']);

    Route::get('/sanphambanners', [sanphambannersController::class, 'index'])->name('sanphambanners')->middleware('can:danh-sach-san-pham-banner');
    Route::get('/sanphambanners/create', [sanphambannersController::class, 'create'])->name('sanphambanners.create');
    Route::post('/sanphambanners/store', [sanphambannersController::class, 'store'])->name('sanphambanners.store')->middleware('can:them-san-pham-banner');
    Route::DELETE('/sanphambanners/destroy/{maphieu}', [sanphambannersController::class, 'destroy'])->middleware('can:xoa-san-pham-banner');
    Route::get('/sanphambanners/edit/{maphieu}', [sanphambannersController::class, 'edit'])->name('sanphambanners.edit')->middleware('can:sua-san-pham-banner');
    Route::PATCH('/sanphambanners/update/{maphieu}', [sanphambannersController::class, 'update']);

    Route::get('/baocao', [baocaoController::class, 'index'])->name('baocao');
    Route::get('baocao/chart', [baocaoController::class, 'chart'])->name('baocao.chart');
    Route::post('/baocao/filter', [baocaoController::class, 'filter'])->name('baocao.filter');
    // route cho role
    // route cho role
    Route::get('/role', [RoleController::class, 'index'])->name('role.index')->middleware('can:danh-sach-role');
    Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('create/role/', [RoleController::class, 'store'])->name('role.store')->middleware('can:them-role');
    Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit')->middleware('can:sua-role');
    Route::PUT('/role/update/{id}', [RoleController::class, 'update'])->name('role.update');
    Route::DELETE('/role/destroy/{id}', [RoleController::class, 'destroy'])->name('role.destroy')->middleware('can:xoa-role');
    // end route cho role
    // route cho user
    Route::get('/user', [UserController::class, 'index'])->name('user.index')->middleware('can:danh-sach-user');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('create/user/', [UserController::class, 'store'])->name('user.store')->middleware('can:them-user');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit')->middleware('can:sua-user');
    Route::PUT('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::DELETE('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy')->middleware('can:xoa-user');
    Route::get('users/export/', [UserController::class, 'export'])->name('users.export');
    // end route cho user
    // route cho permission
    Route::get('/permission/create', [PermissionController::class, 'create'])->name('permission.create');
    Route::post('/permission/create', [PermissionController::class, 'store'])->name('permission.store');
    // end route cho permission
    Route::get('/gallery', [galleryController::class, 'index'])->name('gallery');

    Route::post('/insert-gallery', [galleryController::class, 'insert_gallery'])->name('insert_gallery');
    Route::get('/gallery/delete/{id}', [galleryController::class, 'destroy'])->name('gallery.delete');
});

