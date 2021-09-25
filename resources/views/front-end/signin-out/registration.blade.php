@extends('front-end.master')
@section('body')
    <div class="content">
        <!--login-->
        <div class="login">
            <div class="main-agileits">
                <div class="form-w3agile form1">
                    <h3>Register</h3>
                    {{ Form::open(['method'=>'POST','route'=>'registration-save']) }}
                        <div class="key">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input  type="text" value="First Name" name="first_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>
                        <div class="key">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input  type="text" value="Last Name" name="last_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <span class="text-danger">{{ $errors->has('last_name') ? $errors->first('last_name') : ' ' }}</span>
                        <div class="key">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input  type="text" value="Mobile" name="mobile" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <span class="text-danger">{{ $errors->has('mobile') ? $errors->first('mobile') : ' ' }}</span>
                        <div class="key">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input  type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                        <div class="key">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input  type="text" value="Address" name="address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : ' ' }}</span>
                        <div class="key">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input  type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>
                        <input type="submit" name="register-btn"  value="Submit">
                    {{ Form::close() }}
                </div>

            </div>
        </div>
        <!--login-->
    </div>
@endsection