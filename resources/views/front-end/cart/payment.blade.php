@extends('front-end.master')
@section('body')
    <div class="content">
        <div class="cart-items">
            <div class="container">
                <div class="col-md-6 col-md-offset-3 ">
                    <h2 class="text-info">Hello {{ Session::get('customerName') }}, To Complete Your Order You need Fill Up Payment Information...</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="card">
                            <div class="card-header bg-gradient-secondary">
                                <h5 class="text-center font-weight-bold text-danger" >{{ Session::get('messege') }}</h5>
                                <h3 class="text-success">Payment Infrormation</h3><br>
                            </div>
                            <div class="card-body">
                                {{ Form::open(['method'=>'POST','route'=>'new-order']) }}
                                    <table class="table">
                                        <tr>
                                            <th><i class="fa fa-lg fa-usd"></i></th>
                                            <td><input type="radio" name="payment_type" value="cash"> Cash On Delivery</td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-lg fa-paypal"></i></th>
                                            <td><input type="radio" name="payment_type" value="paypal"> Paypal</td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-lg fa-rocket"></i></th>
                                            <td><input type="radio" name="payment_type" value="rocket"> Rocket</td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-lg fa-home"></i></th>
                                            <td><input type="radio" name="payment_type" value="bkash"> Bkash</td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-lg fa-home"></i></th>
                                            <td><input type="radio" name="payment_type" value="nagad"> Nagad</td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td><input type="submit" name="pay-btn" value="Order Now" class="btn btn-lg btn-success"></td>
                                        </tr>
                                    </table>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection