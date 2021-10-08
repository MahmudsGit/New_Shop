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
                            <div class="card-body" >
                                <i class="fa fa-check text-center text-success size_3 fa-5x" ></i>
                                <hr>
                                <div class="">

                                </div>
                                <a href="https://mail.google.com" class="">We'll Sent You a Invoice to your Email.<i class="fa fa-download text-center text-success ">Download Invoice Now</i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection