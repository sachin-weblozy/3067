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

    public function duralam(){
        return view('frontend.product.duralam');
    }
    public function opulum(){
        return view('frontend.product.opulum');
    }
    public function textura(){
        return view('frontend.product.textura');
    }
    public function velvetmatte(){
        return view('frontend.product.velvetmatte');
    }
    public function velvetgloss(){
        return view('frontend.product.velvetgloss');
    }
    public function lucentacrylic(){
        return view('frontend.product.lucentacrylic');
    }
    public function cuttingedge(){
        return view('frontend.product.cuttingedge');
    }

    public function disclaimer(){
        return view('frontend.disclaimer');
    }
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
