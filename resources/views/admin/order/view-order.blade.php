@extends('admin.master')
@section('body')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 text-center mb-2 text-gray-800">Order Details</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="text-primary ">Customer Details</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <tr class="text-center">
                            <th>Customer Name</th>
                            <td>{{ $customer->first_name.' '.$customer->last_name }}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Mobile</th>
                            <td>{{ $customer->mobile }}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Customer Email</th>
                            <td>{{ $customer->email }}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Order Id</th>
                            <td>{{ $order->id }}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Order Status</th>
                            <td>{{ $order->order_status }}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Order Date</th>
                            <td>{{ $order->created_at }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="text-primary ">Shipping Details</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <tr class="text-center">
                            <th>Full Name</th>
                            <td>{{ $shipping->full_name}}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Mobile</th>
                            <td>{{ $shipping->mobile}}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Email</th>
                            <td>{{ $shipping->email}}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Location</th>
                            <td>{{ $shipping->location}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="text-primary ">Payment Details</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <tr class="text-center">
                            <th>Payment Type</th>
                            <td>{{ $payment->payment_type }}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Payment Status</th>
                            <td>{{ $payment->payment_status }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- DataTales Example -->
        @php($i = 1)
        @foreach($orderDetails as $orderDetail)
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="text-primary ">Order Product <span class="text-info font-weight-bolder">1</span></h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <tr class="text-center">
                            <th>Product Name</th>
                            <td>{{ $orderDetail->priduct_name }}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Product Price</th>
                            <td>{{ $orderDetail->priduct_price }}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Product Quantity</th>
                            <td>{{ $orderDetail->priduct_qty }}</td>
                        </tr>
                        <tr class="text-center">
                            <th>Product Image</th>
                            <td>{{ $orderDetail->id }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        @endforeach

    </div>
@endsection