<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index(){
        return view('front-end.home.index');
    }
    public function category(){
        return view('front-end.category.category-product');
    }
    public function mail(){
        return view('front-end.mail.mail');
    }
}
