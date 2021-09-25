@extends('admin.master')
@section('body')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Manage Categories</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-success " id="xyz">{{ Session::get('messege') }}</h5>
                <h5 class="text-primary">Manage Category Table</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Status</th>
                            <th>Edit Status</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Status</th>
                            <th>Edit Status</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($i = 1)
                        @foreach($categories as $category)
                        <tr class="text-center">
                            <td>{{ $i++ }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->category_description }}</td>
                            <td>{{ $category->category_status == 1 ? "Published" : "Unpublished" }}</td>
                            <td>
                                @if($category->category_status == 1)
                                    <a href="{{ route('unpublished-category',['id' => $category->id]) }}" class="btn btn-info btn-xs">
                                        <i class="fa fa-arrow-up"></i>
                                    </a>
                                @else
                                     <a href="{{ route('published-category',['id' => $category->id]) }}" class="btn btn-secondary btn-xs">
                                        <i class="fa fa-arrow-down"></i>
                                     </a>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('edit-category',['id' => $category->id]) }}" class="btn btn-outline-primary btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('delete-category',['id' => $category->id]) }}" class="btn btn-danger btn-xs">
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