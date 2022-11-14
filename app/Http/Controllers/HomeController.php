<?php

namespace App\Http\Controllers;

use App\Models\Duan;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{

    public function login(){
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        return view('login.login', compact('duans', 'typeproducts'));
    }
    public function postLogin(Request $request){
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('error', 'Đăng nhập không thành công');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
    public function dangki(){
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        return view('dangki.dangki', compact('duans', 'typeproducts'));
    }
}
