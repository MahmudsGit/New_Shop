@extends('front-end.master')
@section('body')
    <div class="content">
        <div class="cart-items">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2>My Shopping Bag ({{ Cart::count() }})</h2>
                        <script>$(document).ready(function(c) {
                                $('.close1').on('click', function(c){
                                    $('.cart-header').fadeOut('slow', function(c){
                                        $('.cart-header').remove();
                                    });
                                });
                            });
                        </script>
                        @foreach($cartItems as $cartItem)
                            <div class="cart-header ">
                                <a href="{{ route('delete-cart',['rowId'=>$cartItem->rowId]) }}" class="close1"> </a>
                                <div class="cart-sec simpleCart_shelfItem">
                                    <div class="cart-item cyc">
                                        <img src="{{ asset( $cartItem->options->image ) }}" width="50" height="80" class="img-responsive" alt="">
                                    </div>
                                    <div class="cart-item-info row">
                                        <div class="col-md-8">
                                            <h3><a href="{{ route('product-details', ['id' => $cartItem->id]) }}">{{ $cartItem->name }}</a>
                                                <span>{{ $cartItem->options->short_description }}</span>
                                                {{ Form::open(['method'=>'POST','route'=>'update-quantity']) }}
                                                    <span>Quantity:
                                                    <input type="number" name="qty" value="{{ $cartItem->qty }}">
                                                    <input type="hidden" name="rowId" value="{{ $cartItem->rowId }}">
                                                    <input type="submit" name="btn" value="update Quantity">
                                                    </span>
                                                {{ Form::close() }}

                                            </h3>
                                            <ul class="qty">
                                                <li><p>Price:</p></li>
                                                <li><p>{{ $cartItem->price }} Tk.</p></li>
                                                <p>Total Price: {{ $total = $cartItem->price*$cartItem->qty }} Tk.</p>
                                            </ul>
                                        </div>
                                        <div class="delivery col-md-4">

                                            <span>Delivered in Next 72 hours</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        @endforeach
                        <h2>Bill And Shipping</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-bordered" >
                                    <tr>
                                        <th>Total Vat</th>
                                        <td><h4>{{ Cart::tax() }} tk. (15%)</h4></td>
                                    </tr>
                                    <tr>
                                        <th>Total Shiping </th>
                                        <td><h4>{{ 0 }} tk. (Free)</h4></td>
                                    </tr>
                                    <tr>
                                        <th>Grand Total</th>
                                        <td><h4>{{ Cart::total() }} tk.</h4></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h4 class="text-info">Not Log In Yet !</h4><br>
                                <a class="btn btn-lg btn-info">LOG IN NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <a href="{{ route('cheak-out') }}" class="btn btn-lg btn-primary pull-right">Cheak Out</a>
                        <a href="#" class="btn btn-lg btn-success">Continue Shopping !</a>
                    </div>
                </div>
            </div>
        </div>
@endsection