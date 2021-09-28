@extends('front-end.master')
@section('body')
    <div class="content">
        <div class="cart-items">
            <div class="container">
                <div class="col-md-6 col-md-offset-3 ">
                    <h2 class="text-info">Hello, {{ Session::get('customerName') }} You have Successfully Complete New Order.</h2>
                </div><br>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="card">
                            <div class="card-header bg-gradient-secondary">
                                <h3 class="text-success">Order Complete</h3><br>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection