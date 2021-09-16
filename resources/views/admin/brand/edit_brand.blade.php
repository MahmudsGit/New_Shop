@extends('admin.master')
@section('body')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Brand</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-minus-circle fa-sm text-white-50"></i> Clear Input</a>
        </div>

        <div class="row">
            <div class="col-xl-10 col-lg-10">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="m-0 font-weight-bold text-success" id="xyz">{{ Session::get('messege') }}</h5>
                        <h5 class="text-primary">Edit / Update Brand</h5>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form action="{{ route('update-brand') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="brand_name">Brand Name</label>
                                <input type="text" name="brand_name" value="{{ $brand->brand_name }}" class="form-control">
                                <input type="hidden" name="brand_id" value="{{ $brand->id }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="brand_des">Brand Description</label>
                                <textarea type="text" name="brand_description" class="form-control" rows="5">{{ $brand->brand_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="brand_status">Brand Status</label>
                                <select name="brand_status" class="form-control">
                                    <option value="1" {{ $brand->brand_status==1 ? 'Selected' : '' }}>Published</option>
                                    <option value="0" {{ $brand->brand_status==0 ? 'Selected' : '' }} >Unpublished</option>
                                </select>
                            </div>
                            <input type="submit" name="brand_btn" value="Update Brand Info" class="btn btn-primary btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection