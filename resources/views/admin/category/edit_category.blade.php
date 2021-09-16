@extends('admin.master')
@section('body')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Category</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-minus-circle fa-sm text-white-50"></i> Clear Input</a>
        </div>

        <div class="row">
            <div class="col-xl-10 col-lg-10">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="m-0 font-weight-bold text-success" id="xyz">{{ Session::get('messege') }}</h5>
                        <h5 class="text-primary">Edit / Update Category</h5>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form action="{{ route('update-category') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="category_name">Catagory Name</label>
                                <input type="text" name="category_name" value="{{ $category->category_name }}" class="form-control">
                                <input type="hidden" name="category_id" value="{{ $category->id }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="category_des">Catagory Description</label>
                                <textarea type="text" name="category_description" class="form-control" rows="5">{{ $category->category_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="category_status">Catagory Status</label>
                                <select name="category_status" class="form-control">
                                    <option value="1" {{ $category->category_status==1 ? 'Selected' : '' }}>Published</option>
                                    <option value="0" {{ $category->category_status==0 ? 'Selected' : '' }} >Unpublished</option>
                                </select>
                            </div>
                            <input type="submit" name="category_btn" value="Update Catagory Info" class="btn btn-primary btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection