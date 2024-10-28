<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function about(){
        return view('frontend.about');
    }
    public function products(){
        return view('frontend.products');
    }
    public function faq(){
        return view('frontend.faq');
    }

    public function plb(){
        return view('frontend.product.plb');
    }
    public function tl(){
        return view('frontend.product.tl');
    }
    public function uv(){
        return view('frontend.product.uv');
    }
    public function pet(){
        return view('frontend.product.pet');
    }
    public function as(){
        return view('frontend.product.as');
    }

    // public function about(){
    //     return view('frontend.about');
    // }
    public function contact(){
        return view('frontend.contact');
    }
    public function terms(){
        return view('frontend.terms');
    }
    public function privacy(){
        return view('frontend.privacy');
    }
}
