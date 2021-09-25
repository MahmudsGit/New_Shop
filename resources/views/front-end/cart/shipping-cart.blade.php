@extends('front-end.master')
@section('body')
    <div class="content">
        <div class="cart-items">
            <div class="container">
                <div class="col-md-6 col-md-offset-3 ">
                    <h2 class="text-info">Hello {{ Session::get('customerName') }}, To Complete Your Order You need Fill Up Shipping Information...<br>If you Need get Product ind Your current Location as given Your acount info then press Shipping Now button to Complete Order ! </h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="card">
                            <div class="card-header bg-gradient-secondary">
                                <h3 class="text-success">Shipping Infrormation</h3><br>
                            </div>
                            <div class="card-body">
                                {{ Form::open(['method'=>'POST','route'=>'save-shipping']) }}

                                <div class="form-group">
                                    <label for="full_name">Full Name: </label>
                                    <input type="text" name="full_name" class="form-control"  value="{{ $customerDetail->first_name.' '.$customerDetail->last_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile Number: </label>
                                    <input type="number" name="mobile" class="form-control" value="{{ $customerDetail->mobile }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail: </label>
                                    <input type="email" name="email" class="form-control" value="{{ $customerDetail->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="location">Location: </label>
                                    <textarea name="location" class="form-control" placeholder="Product Delivery Location" rows="3">{{ $customerDetail->address }}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="shipping-btn" class="btn btn-success btn-block " value="shipping Now">
                                </div>

                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection