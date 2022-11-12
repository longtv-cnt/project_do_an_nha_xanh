<?php

namespace App\Http\Controllers;

use App\Models\Duan;
use App\Models\TypeProduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{

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
}
