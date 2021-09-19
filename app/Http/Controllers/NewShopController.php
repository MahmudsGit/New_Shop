<?php

namespace App\Http\Controllers;

use App\ad;
use App\brand;
use App\category;
use App\product;
use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index(){
        $newProducts = product::where('product_status', 1)
            ->orderBy('id', 'DESC')
            ->skip(33)
            ->take(8)
            ->get();

        $ads = ad::all();

        return view('front-end.home.index',[
            'newProducts'=> $newProducts,
            'ads'=> $ads
        ]);
    }
    public function category($id){
        $categoryProducts = product::where('category_id', $id)
            ->where('product_status', 1)
            ->get();
        return view('front-end.category.category_product',[
            'categoryProducts' => $categoryProducts
        ]);
    }
    public function brand($id){
        $brandProducts = product::where('brand_id', $id)
            ->where('product_status', 1)
            ->get();
        return view('front-end.brand.brand_product',[
            'brandProducts' => $brandProducts
        ]);
    }

    public function mail(){
        return view('front-end.mail.mail');
    }
    public function ProductDetails($id){

        $productDetails = product::where('id', $id)
            ->where('product_status', 1)
            ->get();

        return view('front-end.product.product_details',[
            'productDetails'=>$productDetails
        ]);
    }
}
