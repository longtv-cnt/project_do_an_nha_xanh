<?php

namespace App\Http\Controllers;

use App\Models\Duan;
use App\Models\TypeProduct;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function login(){
        $duans = Duan::all();
        $typeproducts = TypeProduct::all();
        $banners = DB::table('banners')->select('*');
        $banners = $banners->get();
        return view('login.login', compact('duans', 'typeproducts', 'banners'));
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
        $banners = DB::table('banners')->select('*');
        $banners = $banners->get();
        return view('dangki.dangki', compact('duans', 'typeproducts', 'banners'));
    }

    public function postDangki(Request $request)
    {
        //dd($request->all()) ;
        //
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'roles' => 'required',
            'date_of_birth' => 'required',

        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'email.unique' => 'Email is already taken',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters',
            'roles.required' => 'Roles is required',
            'date_of_birth.required' => 'Date of birth is required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'ngaysinh' => $request->date_of_birth,
        ]);
        $roles = ($request->roles);
        $user->roles()->attach($roles);


        return redirect()->route('dangki')->with('success', 'User created successfully');
        // return redirect()->route('user.index');
    }
}
