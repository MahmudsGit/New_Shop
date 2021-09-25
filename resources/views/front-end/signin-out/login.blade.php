@extends('front-end.master')
@section('body')
    <div class="content">
        <!--login-->
        <div class="login">
            <div class="main-agileits">
                <div class="form-w3agile">
                    <h3>Log In </h3>
                    <h5 class="m-0 font-weight-bold text-danger" >{{ Session::get('messege') }}</h5>
                    {{ Form::open(['method'=>'POST','route'=>'customer-login-home']) }}
                        <div class="key">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input  type="text" value="email" name="login_email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <span class="text-danger">{{ $errors->has('login_email') ? $errors->first('login_email') : ' ' }}</span>
                        <div class="key">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input  type="password" value="password" name="login_password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <span class="text-danger">{{ $errors->has('login_password') ? $errors->first('login_password') : ' ' }}</span>
                        <input type="submit" name="login-btn" value="Log In ">
                    {{ Form::close() }}
                </div>
                <div class="forg">
                    <a href="#" class="forg-left">Forgot Password ?</a>
                    <a href="{{ route('customer-registration') }}" class="forg-right">Register</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--login-->
    </div>
@endsection