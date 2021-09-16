@extends('admin.master')
@section('body')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-minus-circle fa-sm text-white-50"></i> Clear Input</a>
        </div>

        <div class="row">
            <div class="col-xl-10 col-lg-10">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="m-0 font-weight-bold text-success" id="xyz">{{ Session::get('messege') }}</h5>
                        <h5 class="text-primary">Create New Product</h5>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        {!! Form::open(['route'=>'new-product','method'=>'post','enctype'=>'multipart/form-data']) !!}

                            <div class="form-group">
                                <label for="category_id">Category Name</label>
                                <select name="category_id" class="form-control">
                                    <option value="abc">--- Select Category ---</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : ' ' }}</span>
                            </div>
                            <div class="form-group">
                                <label for="brand_id">Brand Name</label>
                                <select name="brand_id" class="form-control">
                                    <option value="abc">--- Select Brand ---</option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id') : ' ' }}</span>
                            </div>
                            <div class="form-group">
                                <label for="product_name">Product Name</label>
                                <input type="text" name="product_name" class="form-control">
                                <span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>
                            </div>
                            <div class="form-group">
                                <label for="short_description">Product Short Description</label>
                                <textarea type="text" name="short_description" class="form-control" rows="2"></textarea>
                                <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                            </div>
                            <div class="form-group">
                                <label for="long_description">Product Long Description</label>
                                <textarea type="text" id="editor" name="long_description" class="form-control" rows="6"></textarea>
                                <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                            </div>
                            <div class="form-group">
                                <label for="product_price">Product Price</label>
                                <input type="number" name="product_price" class="form-control">
                                <span class="text-danger">{{ $errors->has('product_price') ? $errors->first('product_price') : ' ' }}</span>
                            </div>
                            <div class="form-group">
                                <label for="product_quantity">Product Quantity</label>
                                <input type="number" name="product_quantity" class="form-control">
                                <span class="text-danger">{{ $errors->has('product_quantity') ? $errors->first('product_quantity') : ' ' }}</span>
                            </div>
                            <div class="form-group">
                                <label for="product_image">Product Image</label>
                                <input type="file" name="product_image" class="form-control" accept="image/*">
                                <span class="text-danger">{{ $errors->has('product_image') ? $errors->first('product_image') : ' ' }}</span>
                            </div>
                            <div class="form-group">
                                <label for="product_status">Product Status</label>
                                <select name="product_status" class="form-control">
                                    <option value="abc">--- None ---</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                                <span class="text-danger">{{ $errors->has('product_status') ? $errors->first('product_status') : ' ' }}</span>
                            </div>
                            <input type="submit" name="product_btn" value="Add Product Info" class="btn btn-primary btn-block">
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection