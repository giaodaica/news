<?php
namespace App\Controllers;

class HomeController {
    public function index(){
        return view('home');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function blog(){
        return view('blog');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function single(){
        return view('detail');
    }
    public function admin(){
        header("location: /admin");
    }
}