@extends('admin.master')
@section('body')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View Product</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-minus-circle fa-sm text-white-50"></i> Clear Input</a>
        </div>

        <div class="row">
            <div class="col-xl-10 col-lg-10">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="m-0 font-weight-bold text-success" id="xyz">{{ Session::get('messege') }}</h5>
                        <h5 class="text-primary">
                            <a href="{{ route('edit-product',['id'=>$products->id]) }}" class="btn btn-outline-info btn-xs"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('delete-product',['id'=>$products->id]) }}" class="btn btn-outline-danger btn-xs"><i class="fa fa-trash"></i></a>
                        </h5>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category_id" class="text-primary font-weight-bold">Category Name: </label><br>
                            @foreach($categories as $category)
                            {{ $category->id == $products->category_id ? $category->category_name  : '' }}
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="brand_id" class="text-primary font-weight-bold">Brand Name: </label><br>
                            @foreach($brands as $brand)
                            {{ $brand->id == $products->brand_id ? $brand->brand_name  : '' }}
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="product_name" class="text-primary font-weight-bold">Product Name: </label><br>
                            {{ $products->product_name }}
                        </div>
                        <div class="form-group">
                            <label for="product_image" class="text-primary font-weight-bold">Product Image: </label><br>
                            <img src="{{ asset($products->product_image) }}" height="350px" width="350px" alt="">
                        </div>
                        <div class="form-group">
                            <label for="short_description" class="text-primary font-weight-bold">Product Short Description:</label><br>
                            {{ $products->short_description }}
                        </div>
                        <div class="form-group">
                            <label for="long_description" class="text-primary font-weight-bold">Product Long Description:</label><br>
                            {!! $products->long_description !!}
                        </div>
                        <div class="form-group">
                            <label for="product_price" class="text-primary font-weight-bold">Product Price: </label><br>
                            {{ $products->product_price }} Tk.
                        </div>
                        <div class="form-group">
                            <label for="product_quantity" class="text-primary font-weight-bold">Product Quantity: </label><br>
                            {{ $products->product_quantity }}
                        </div>
                        <div class="form-group">
                            <label for="product_status" class="text-primary font-weight-bold">Product Status: </label><br>
                            {{ $products->product_status ==1 ? 'Published' : '' }}
                            {{ $products->product_status ==0 ? 'Unpublished' : '' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection