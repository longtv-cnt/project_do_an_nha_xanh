<?php

namespace App\Http\Controllers;

use App\Models\Duan;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        return view('home.home');
    }
    public function about(){
        return view('home.about');
    }public function contact(){
        return view('home.contact');
    }
    public function propertygrid(){
        return view('home.property-grid');
    }
    public function propertysingle(){
        return view('home.property-single');
    }
    public function agentsingle(){
        return view('home.agent-single');
    }
    public function agentsgrid(){
        return view('home.agents-grid');
    }
    public function bloggrid(){
        return view('home.blog-grid');
    }
    public function blogsingle(){
        return view('home.blog-single');
    }
    public function login(){
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        return view('login.login', compact('duans', 'typeproducts'));
    }
    public function dangki(){
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        return view('dangki.dangki', compact('duans', 'typeproducts'));
    }
    public function postLogin(Request $request){
    if( Auth::attempt(['email' => $request->email, 'password' => $request->password])){;

         return redirect()->route('home');}
    else{
        return redirect()->route('login')->with('thongbao','Đăng nhập không thành công');
    }
    }
}
