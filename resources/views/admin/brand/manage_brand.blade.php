@extends('admin.master')
@section('body')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Brand</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-success " id="xyz">{{ Session::get('messege') }}</h5>
                <h5 class="text-primary">Brand Table</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Status</th>
                            <th>Edit Status</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Status</th>
                            <th>Edit Status</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($i = 1)
                        @foreach($brands as $brand)
                        <tr class="text-center">
                            <td>{{ $i++ }}</td>
                            <td>{{ $brand->brand_name }}</td>
                            <td>{{ $brand->brand_description }}</td>
                            <td>{{ $brand->brand_status == 1 ? "Published" : "Unpublished" }}</td>
                            <td>
                                @if($brand->brand_status == 1)
                                    <a href="{{ route('unpublished-brand',['id' => $brand->id]) }}" class="btn btn-info btn-xs">
                                        <i class="fa fa-arrow-up"></i>
                                    </a>
                                @else
                                     <a href="{{ route('published-brand',['id' => $brand->id]) }}" class="btn btn-secondary btn-xs">
                                        <i class="fa fa-arrow-down"></i>
                                     </a>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('edit-brand',['id' => $brand->id]) }}" class="btn btn-outline-primary btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('delete-brand',['id' => $brand->id]) }}" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>
                                </a>
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