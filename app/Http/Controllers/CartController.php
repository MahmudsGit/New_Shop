<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function adToCart(Request $request) {
        $productId = $request->id;
        $cartItem = product::find($productId);

        Cart::add([
            'id'=>$productId,
            'name'=>$cartItem->product_name,
            'price'=>$cartItem->product_price,
            'qty' =>$request->qty,
            'options' => [
                'short_description' => $cartItem->short_description,
                'image' => $cartItem->product_image
            ]
        ]);
        return redirect('/cart/view');
    }
    public function adToCartHome($id) {

        $cartItem = product::find($id);

        Cart::add([
            'id'=>$id,
            'name'=>$cartItem->product_name,
            'price'=>$cartItem->product_price,
            'qty' =>1,
            'options' => [
                'short_description' => $cartItem->short_description,
                'image' => $cartItem->product_image
            ]
        ]);
        return redirect('/cart/view');
    }

    public function viewCart() {
        $cartItems = Cart::content();
       return view('front-end.cart.view_cart',[
           'cartItems'=>$cartItems
       ]);
    }
    public function deleteCart($rowId) {
        Cart::remove($rowId);
        return redirect('/cart/view');
    }
    public function emptyCart() {
        Cart::destroy();
        return redirect('/');
    }
    public function updateQuantityCart(Request $request) {
        Cart::update($request->rowId, $request->qty);
        return redirect('/cart/view');
    }
}
