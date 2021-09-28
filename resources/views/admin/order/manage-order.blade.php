@extends('admin.master')
@section('body')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Orders</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-success " id="xyz">{{ Session::get('messege') }}</h5>
                <h5 class="text-primary">Orders Table</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Customer Name</th>
                            <th>Order Total</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Payment Type</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Customer Name</th>
                            <th>Order Total</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Payment Type</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                            @php( $i = 1 );
                            @foreach($orders as $order)
                            <tr class="text-center">
                                <td>{{ $i++ }}</td>
                                <td>{{ $order->first_name.' '.$order->last_name }}</td>
                                <td>{{ $order->total_cart }} Tk.</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->order_status }}</td>
                                <td>{{ $order->payment_type }}</td>
                                <td>{{ $order->payment_status }}</td>

                                <td>
                                    <a href="{{ route('order-view',['id' => $order->id]) }}" title="View Detail" class="btn btn-outline-success btn-xs"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('order-invoice',['id' => $order->id]) }}" title="Invoice" class="btn btn-outline-secondary btn-xs"><i class="fa fa-info"></i></a>
                                    <a href="{{ route('download-invoice',['id' => $order->id]) }}" class="btn btn-outline-info btn-xs"><i class="fa fa-download"></i></a>
                                    <a href="" class="btn btn-outline-danger btn-xs"><i class="fa fa-trash"></i></a>
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