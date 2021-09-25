<?php

namespace App\Http\Controllers;

use App\customer;
use App\order;
use App\orderDetail;
use App\payment;
use App\shipping;
use Illuminate\Http\Request;
use Session;
use Mail;
use Cart;

class CheakOutController extends Controller
{
    public function index(){
        return view('front-end.cart.cheak_out');
    }

    protected function registrationValidation($request){
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:customers,email',
            'mobile' => 'required|numeric|min:11',
            'password' => 'required|'
        ]);
    }

    protected function saveRegistrationInfo($request){
        $customer = new customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->mobile = $request->mobile;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->password = bcrypt($request->password);
        $customer->save();

        $customerId = $customer->id;
        Session::put('customerId',$customerId);
        Session::put('customerName',$customer->first_name.' '.$customer->last_name);

//        $data = $customer->toArray();
//        Mail::send('front-end.mail-to.confirmation-mail', $data, function($messege) use($data){
//            $messege->to($data['email']);
//            $messege->subject('Confirmation Mail');
//        });

    }

    public function CustomerRegister(Request $request){
        $this->registrationValidation($request);
        $this->saveRegistrationInfo($request);

        return redirect('/cart/shipping');
    }
    public function CustomerRegisterHome(Request $request){
        $this->registrationValidation($request);
        $this->saveRegistrationInfo($request);

        return redirect('/');
    }
    public function CustomerRegisterIndex(){
        return view('front-end.signin-out.registration');
    }

    public function ShippingCart(){

        $customerDetail = customer::find(Session::get('customerId'));

        return view('front-end.cart.shipping-cart',['customerDetail' => $customerDetail]);
    }

    public function CustomerLoginHome(){
        return view('front-end.signin-out.login');
    }

    protected function loginValidation($request){
        $this->validate($request,[
            'login_email' => 'required',
            'login_password' => 'required'
        ]);
    }

    public function CustomerLogin(Request $request){
        $this->loginValidation($request);

        $customer = customer::where('email',$request->login_email)->first();
        if (password_verify( $request->login_password, $customer->password)) {
            Session::put('customerId',$customer->id);
            Session::put('customerName',$customer->first_name.' '.$customer->last_name);
            return redirect('/cart/shipping');
        } else {
            return redirect('/cheakout')->with('messege', 'Please Fill Up a Valid Password !');
        }
    }
    public function CustomerLoginSave(Request $request){
        $this->loginValidation($request);

        $customer = customer::where('email',$request->login_email)->first();
        if (password_verify( $request->login_password, $customer->password)) {
            Session::put('customerId',$customer->id);
            Session::put('customerName',$customer->first_name.' '.$customer->last_name);
            return redirect('/');
        } else {
            return redirect('/login/customer')->with('messege', 'Please Fill Up a Valid Password !');
        }
    }

    public function CustomerLogOut(){
        Session::forget('customerId');
        Session::forget('customerName');
        Session::forget('shippingId');
        return redirect('/');
    }

    public function saveShipping(Request $request){
        $shipping = new shipping();
        $shipping->full_name = $request->full_name;
        $shipping->mobile = $request->mobile;
        $shipping->email = $request->email;
        $shipping->location = $request->location;
        $shipping->save();

        Session::put('shippingId',$shipping->id);
        return redirect('/payment');
    }

    public function paymentDetail(){
        return view('front-end.cart.payment');
    }

    public function newOrder(Request $request){
        if (Cart::total() == 0){
            return redirect('/cart/view')->with('messege','Something Wrong ! Please Cheak Your Cart !');
        }
        $paymentType = $request->payment_type;
        if ($paymentType == 'cash'){
            $order = new order();
            $order->customer_id = Session::get('customerId');
            $order->shiping_id = Session::get('shippingId');
            $order->total_cart = Cart::total();
            $order->save();

            $payment = new payment();
            $payment->order_id = $order->id;
            $payment->payment_type = $paymentType;
            $payment->save();

            $cartProducts = Cart::content();
            foreach ( $cartProducts as $cartProduct ){
                $orderDetail = new orderDetail();
                $orderDetail->order_id  = $order->id;
                $orderDetail->priduct_name  = $cartProduct->name;
                $orderDetail->priduct_id  = $cartProduct->id;
                $orderDetail->priduct_price  = $cartProduct->price;
                $orderDetail->priduct_qty  = $cartProduct->qty;
                $orderDetail->save();

                Cart::destroy();
                return redirect('/order/complete');
            }
        }elseif ($paymentType == 'paypal'){
            return redirect('/payment')->with('messege','Something Wrong ! Please Try Using Cash On Delivery !');
        }elseif ($paymentType == 'rocket'){
            return redirect('/payment')->with('messege','Something Wrong ! Please Try Using Cash On Delivery !');
        }elseif ($paymentType == 'bkash'){
            return redirect('/payment')->with('messege','Something Wrong ! Please Try Using Cash On Delivery !');
        }elseif ($paymentType == 'nagad'){
            return redirect('/payment')->with('messege','Something Wrong ! Please Try Using Cash On Delivery !');
        }else{
            return redirect('/cart/view')->with('messege','Something Wrong ! Please Cheak Your Cart Or Payment Infofmation !');
        }
    }

    public function orderComplete(){
        return view('front-end.order.new-order');
    }




}
