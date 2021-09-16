@extends('admin.master')
@section('body')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Products</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                                                                       href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-success " id="xyz">{{ Session::get('messege') }}</h5>
                <h5 class="text-primary">Products Table</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Product Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Product Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php( $i = 1 );
                        @foreach($products as $product)
                            <tr class="text-center">
                                <td>{{ $i++ }}</td>
                                <td>{{ $product->category_name }}</td>
                                <td>{{ $product->brand_name }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_price }}</td>
                                <td>{{ $product->product_quantity }}</td>
                                <td>
                                    <img src="{{ asset($product->product_image) }}" width="100px" height="100px" alt="">
                                </td>
                                <td>
                                    {{ $product->product_status ==1 ? 'Published' : 'Unpublished' }}
                                    @if( $product->product_status == 1)
                                        <a href="{{ route('publish-product',['id'=>$product->id]) }}" class="btn btn-outline-primary btn-xs"><i class="fa fa-arrow-up"></i></a>
                                    @else
                                        <a href="{{ route('unpublish-product',['id'=>$product->id]) }}" class="btn btn-outline-secondary btn-xs"><i class="fa fa-arrow-down"></i></a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('view-product',['id'=>$product->id]) }}" class="btn btn-outline-success btn-xs"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('edit-product',['id'=>$product->id]) }}" class="btn btn-outline-info btn-xs"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('delete-product',['id'=>$product->id]) }}" class="btn btn-outline-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection