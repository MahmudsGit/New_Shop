@extends('admin.master')
@section('body')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ads</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-minus-circle fa-sm text-white-50"></i> Clear Input</a>
        </div>

        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="m-0 font-weight-bold text-success" id="xyz">{{ Session::get('messege') }}</h5>
                        <h5 class="text-primary">Image Ads</h5>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        {!! Form::open(['route'=>'save-ad-image','method'=>'post','enctype'=>'multipart/form-data']) !!}
                        @foreach($adImages as $adImage)
                        <div class="form-group">
                            <label for="main_ad">Main Ad Name</label>
                            <input type="hidden" name="id" value="{{ $adImage->id }}" >
                            <input type="Text" name="main_ad" class="form-control" value="{{ $adImage->main_ad }}">
                            <span class="text-danger">{{ $errors->has('main_ad') ? $errors->first('main_ad') : ' ' }}</span>
                        </div>
                        <div class="form-group">
                            <label for="off_percent">Off for Main Ad</label>
                            <input type="number" name="off_percent" class="form-control" value="{{ $adImage->off_percent }}">
                            <span class="text-danger">{{ $errors->has('off_percent') ? $errors->first('off_percent') : ' ' }}</span>
                        </div>
                        <div class="form-group">
                            <label for="main_image">Main Image</label>
                            <input type="file" name="main_image" class="form-control" accept="image/*">
                            <span class="text-danger">{{ $errors->has('main_image') ? $errors->first('main_image') : ' ' }}</span>
                        </div>
                        <div class="form-group">
                            <label for="seceondary_ad">Seceondary Ad Name</label>
                            <input type="Text" name="seceondary_ad" class="form-control" value="{{ $adImage->seceondary_ad }}">
                            <span class="text-danger">{{ $errors->has('seceondary_ad') ? $errors->first('seceondary_ad') : ' ' }}</span>
                        </div>
                        <div class="form-group">
                            <label for="secondary_image">Seceondary Image</label>
                            <input type="file" name="secondary_image" class="form-control" accept="image/*">
                            <span class="text-danger">{{ $errors->has('secondary_image') ? $errors->first('secondary_image') : ' ' }}</span>
                        </div>
                        <div class="form-group">
                            <label for="third_ad">Third Ad Name</label>
                            <input type="Text" name="third_ad" class="form-control" value="{{ $adImage->third_ad }}">
                            <span class="text-danger">{{ $errors->has('third_ad') ? $errors->first('third_ad') : ' ' }}</span>
                        </div>
                        <div class="form-group">
                            <label for="third_image">Third Image</label>
                            <input type="file" name="third_image" class="form-control" accept="image/*">
                            <span class="text-danger">{{ $errors->has('third_image') ? $errors->first('third_image') : ' ' }}</span>
                        </div>
                        <div class="form-group">
                            <label for="fourth_ad">Fourth Ad Name</label>
                            <input type="Text" name="fourth_ad" class="form-control" value="{{ $adImage->fourth_ad }}">
                            <span class="text-danger">{{ $errors->has('fourth_ad') ? $errors->first('fourth_ad') : ' ' }}</span>
                        </div>
                        <div class="form-group">
                            <label for="fourth_image">Fourth Image</label>
                            <input type="file" name="fourth_image" class="form-control" accept="image/*">
                            <span class="text-danger">{{ $errors->has('fourth_image') ? $errors->first('fourth_image') : ' ' }}</span>
                        </div>
                        <input type="submit" name="product_btn" value="Save Ads Info" class="btn btn-primary btn-block">
                        @endforeach
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                @foreach($adImages as $adImage)
                <div class="form-group">
                    <label for="fourth_image">Main Image: <strong class="text-primary">{{ $adImage->main_ad }}</strong></label><br>
                    <img src="{{ asset($adImage->main_image) }}" alt="" height="200px" width="300px">
                </div>
                <div class="form-group">
                    <label for="fourth_image">Seceondary Image: <strong class="text-primary">{{ $adImage->seceondary_ad }}</strong></label><br>
                    <img src="{{ asset($adImage->secondary_image) }}" alt="" height="200px" width="300px">
                </div>
                <div class="form-group">
                    <label for="fourth_image">Third Image: <strong class="text-primary">{{ $adImage->third_ad }}</strong></label><br>
                    <img src="{{ asset($adImage->third_image) }}" alt="" height="200px" width="300px">
                </div>
                <div class="form-group">
                    <label for="fourth_image">Fourth Image: <strong class="text-primary">{{ $adImage->fourth_ad }}</strong></label><br>
                    <img src="{{ asset($adImage->fourth_image) }}" alt="" height="200px" width="300px">
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection