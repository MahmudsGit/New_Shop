<?php

namespace App\Http\Controllers;

use App\customer;
use App\order;
use App\orderDetail;
use App\payment;
use App\shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class OrderController extends Controller
{
    public function orderIndex(){

        $orders = DB::table('orders')
            ->join('customers','orders.customer_id','=','customers.id')
            ->join('payments','orders.id','=','payments.order_id')
            ->select('orders.*','customers.first_name','customers.last_name','payments.payment_type','payments.payment_status')
            ->get();

        return view('admin.order.manage-order',[
            'orders'=>$orders
        ]);
    }

    public function orderView($id){
        $order = order::find($id);
        $customer = customer::find($order->customer_id);
        $shipping = shipping::find($order->shiping_id);
        $payment = payment::where('order_id','=',$order->id)->first();
        $orderDetails = orderDetail::where('order_id','=',$order->id)->get();

        return view('admin.order.view-order',[
            'order'=>$order,
            'shipping'=>$shipping,
            'customer'=>$customer,
            'payment'=>$payment,
            'orderDetails'=>$orderDetails
        ]);
    }
    public function orderInvoice($id){
        $order = order::find($id);
        $customer = customer::find($order->customer_id);
        $shipping = shipping::find($order->shiping_id);
        $payment = payment::where('order_id','=',$order->id)->first();
        $orderDetails = orderDetail::where('order_id','=',$order->id)->get();

        return view('admin.order.order-invoice',[
            'order'=>$order,
            'shipping'=>$shipping,
            'customer'=>$customer,
            'payment'=>$payment,
            'orderDetails'=>$orderDetails
        ]);
    }
    public function downloadOrderInvoice($id){
        $order = order::find($id);
        $customer = customer::find($order->customer_id);
        $shipping = shipping::find($order->shiping_id);
        $payment = payment::where('order_id','=',$order->id)->first();
        $orderDetails = orderDetail::where('order_id','=',$order->id)->get();

        $pdf = PDF::loadView('admin.order.download-invoice',[
            'order'=>$order,
            'shipping'=>$shipping,
            'customer'=>$customer,
            'payment'=>$payment,
            'orderDetails'=>$orderDetails
        ]);
        return $pdf->stream('0011$orderDetails->id.invoice.pdf');

//        return $pdf->download('invoice.pdf');

    }

}
