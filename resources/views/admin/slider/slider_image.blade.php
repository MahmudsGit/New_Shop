@extends('admin.master')
@section('body')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Slider</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-minus-circle fa-sm text-white-50"></i> Clear Input</a>
        </div>

        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="m-0 font-weight-bold text-success" id="xyz">{{ Session::get('messege') }}</h5>
                        <h5 class="text-primary">Image Slider</h5>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        {!! Form::open(['route'=>'save-slider-image','method'=>'post','enctype'=>'multipart/form-data']) !!}

                        <div class="form-group">
                            <label for="first_image">First Image</label>
                            <input type="file" name="first_image" class="form-control" accept="image/*">
                            <span class="text-danger">{{ $errors->has('first_image') ? $errors->first('first_image') : ' ' }}</span>
                        </div>
                        <div class="form-group">
                            <label for="second_image">Seceond Image</label>
                            <input type="file" name="second_image" class="form-control" accept="image/*">
                            <span class="text-danger">{{ $errors->has('second_image') ? $errors->first('second_image') : ' ' }}</span>
                        </div>
                        <div class="form-group">
                            <label for="third_image">Third Image</label>
                            <input type="file" name="third_image" class="form-control" accept="image/*">
                            <span class="text-danger">{{ $errors->has('third_image') ? $errors->first('third_image') : ' ' }}</span>
                        </div>
                        <div class="form-group">
                            <label for="fourth_image">Fourth Image</label>
                            <input type="file" name="fourth_image" class="form-control" accept="image/*">
                            <span class="text-danger">{{ $errors->has('fourth_image') ? $errors->first('fourth_image') : ' ' }}</span>
                        </div>
                        <input type="submit" name="product_btn" value="Save Slider Info" class="btn btn-primary btn-block">
                        @foreach($sliderImages as $sliderImage)
                        <input type="hidden" name="id" value="{{ $sliderImage->id }}">
                        @endforeach
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                @foreach($sliderImages as $sliderImage)
                <div class="form-group">
                    <label for="first_image">First Image: <strong class="text-primary"></strong></label><br>
                    <img src="{{ asset($sliderImage->first_image) }}" alt="" height="80px" width="300px">
                </div>
                <div class="form-group">
                    <label for="second_image">Seceond Image: <strong class="text-primary"></strong></label><br>
                    <img src="{{ asset($sliderImage->second_image) }}" alt="" height="80px" width="300px">
                </div>
                <div class="form-group">
                    <label for="third_image">Third Image: <strong class="text-primary"></strong></label><br>
                    <img src="{{ asset($sliderImage->third_image) }}" alt="" height="80px" width="300px">
                </div>
                <div class="form-group">
                    <label for="fourth_image">Fourth Image: <strong class="text-primary"></strong></label><br>
                    <img src="{{ asset($sliderImage->fourth_image) }}" alt="" height="80px" width="300px">
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection