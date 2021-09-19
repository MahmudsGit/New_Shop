@extends('admin.master')
@section('body')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-3">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-primary text-uppercase mb-4">
                                    Categories
                                </div>
                                <div class="text-xs mb-2 font-weight-bold text-gray-800">
                                    <a href="{{ route('add-categories') }}">Add</a>
                                </div>
                                <div class="text-xs mb-0 font-weight-bold text-gray-800">
                                    <a href="{{ route('manage-categories') }}">Manage</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-marked fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-3">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-success text-uppercase mb-4">
                                    Brands
                                </div>
                                <div class="text-xs mb-2 font-weight-bold text-gray-800">
                                    <a href="{{ route('add-brand') }}">Add</a>
                                </div>
                                <div class="text-xs mb-0 font-weight-bold text-gray-800">
                                    <a href="{{ route('manage-brand') }}">Manage</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-marked fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-3">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-info text-uppercase mb-4">
                                    Products
                                </div>
                                <div class="text-xs mb-2 font-weight-bold text-gray-800">
                                    <a href="{{ route('add-product') }}">Add</a>
                                </div>
                                <div class="text-xs mb-0 font-weight-bold text-gray-800">
                                    <a href="{{ route('manage-product') }}">Manage</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-marked fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-3">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-danger text-uppercase mb-4">
                                    Ads
                                </div>
                                <div class="text-xs mb-2 font-weight-bold text-gray-800">
                                    <a href="{{ route('ad-image') }}">Change</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-marked fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- /.container-fluid -->
@endsection
