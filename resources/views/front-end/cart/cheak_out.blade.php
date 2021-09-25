@extends('front-end.master')
@section('body')
    <div class="content">
        <div class="cart-items">
            <div class="container">
                <div class="col-md-8 col-md-offset-1 ">
                    <h2 class="text-info">To Complete Your Order You need Register our website...<br>If you are a Existing User Then Please LogIn to Complete Order ! </h2>
                </div>
                <div class="row">
                    <div class="col-md-5 col-md-offset-1">
                        <div class="card">
                            <div class="card-header bg-gradient-secondary">
                                <h3 class="text-success">Not Register Yet ? Registration Now !</h3><br>
                            </div>
                            <div class="card-body">
                                {{ Form::open(['method'=>'POST','route'=>'customer-register']) }}
                                <div class="form-group">
                                    <label for="first_name">First Name: </label>
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                    <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name: </label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                    <span class="text-danger">{{ $errors->has('last_name') ? $errors->first('last_name') : ' ' }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile Number: </label>
                                    <input type="number" name="mobile" class="form-control" placeholder="Mobile Number">
                                    <span class="text-danger">{{ $errors->has('mobile') ? $errors->first('mobile') : ' ' }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail: </label>
                                    <input type="email" name="email" class="form-control" placeholder="E-Mail">
                                    <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address: </label>
                                    <textarea name="address" class="form-control" placeholder="Address" rows="3"></textarea>
                                    <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : ' ' }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password: </label>
                                    <input type="password" name="password" class="form-control" placeholder="Type Password ">
                                    <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="register-btn" class="btn btn-primary btn-block " value="Register Now">
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pull-right">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0 font-weight-bold text-danger" >{{ Session::get('messege') }}</h5>
                                <h3 class="text-success">Already Register? LogIn Now!</h3><br>
                            </div>
                            <div class="card-body">
                                {{ Form::open(['method'=>'POST','route'=>'customer-login']) }}
                                <div class="form-group">
                                    <label for="email">E-Mail: </label>
                                    <input type="email" name="login_email" class="form-control" placeholder="E-Mail">
                                    <span class="text-danger">{{ $errors->has('login_email') ? $errors->first('login_email') : ' ' }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password: </label>
                                    <input type="password" name="login_password" class="form-control" placeholder="Type Password ">
                                    <span class="text-danger">{{ $errors->has('login_password') ? $errors->first('login_password') : ' ' }}</span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="login-btn" class="btn btn-success btn-block " value="Log In Now">
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection