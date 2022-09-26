<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('login.login');
    }
}
