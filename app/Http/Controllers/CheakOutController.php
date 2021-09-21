<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheakOutController extends Controller
{
    public function index(){
        return view('front-end.cart.cheak_out');
    }
}
