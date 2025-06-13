<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about_us(){
        return view('about_us');
    }
    public function shop(){
        return view('shop');
    }
    public function blog(){
        return view('blog');
    }
    public function contact(){
        return view('contact_us');
    }
    public function faq(){
        return view('faq');
    }
    public function signup(){
        return view('signup');
    }
    public function wishlist(){
        return view('wishlist');
    }
    public function cart(){
        return view('cart');
    }
    public function checkout(){
        return view('checkout');
    }
    
   
}
