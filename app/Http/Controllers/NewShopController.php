<?php

namespace App\Http\Controllers;

use App\ad;
use App\brand;
use App\category;
use App\product;
use App\slider;
use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index(){
        $newProducts = product::where('product_status', 1)
            ->orderBy('id', 'DESC')
            ->skip(33)
            ->take(8)
            ->get();
        $arrivalsProductsOne = product::where('product_status', 1)
            ->orderBy('id', 'DESC')
            ->take(4)
            ->get();
        $arrivalsProductsTwo = product::where('product_status', 1)
            ->orderBy('id', 'DESC')
            ->skip(4)
            ->take(4)
            ->get();
        $bestSellers = product::where('product_status', 1)
            ->orderBy('id', 'ASC')
            ->take(4)
            ->get();

        $ads = ad::all();
        $sliderImages = slider::all();

        return view('front-end.home.index',[
            'newProducts'=> $newProducts,
            'arrivalsProductsOne'=> $arrivalsProductsOne,
            'arrivalsProductsTwo'=> $arrivalsProductsTwo,
            'bestSellers'=> $bestSellers,
            'ads'=> $ads,
            'sliderImages'=> $sliderImages
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
        $recentProducts = product::where('product_status', 1)
            ->orderBy('id', 'DESC')
            ->skip(4)
            ->take(4)
            ->get();
        $bestSellers = product::where('product_status', 1)
            ->orderBy('id', 'ASC')
            ->take(4)
            ->get();


        return view('front-end.product.product_details',[
            'productDetails'=>$productDetails,
            'recentProducts'=>$recentProducts,
            'bestSellers'=>$bestSellers
        ]);
    }
}
