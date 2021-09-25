@extends('admin.master')
@section('body')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 text-center mb-2 text-gray-800">Order Information</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="text-primary ">Customer Details</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <tr class="text-center">
                            <th class="table-secondary">Customer Name</th>
                            <td>{{ $customer->first_name.' '.$customer->last_name }}</td>
                        </tr>
                        <tr class="text-center">
                            <th class="table-secondary">Mobile</th>
                            <td>{{ $customer->mobile }}</td>
                        </tr>
                        <tr class="text-center">
                            <th class="table-secondary">Customer Email</th>
                            <td>{{ $customer->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="text-primary ">Shipping Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                <tr class="text-center">
                                    <th class="table-secondary">Full Name</th>
                                    <td>{{ $shipping->full_name}}</td>
                                </tr>
                                <tr class="text-center">
                                    <th class="table-secondary">Mobile</th>
                                    <td>{{ $shipping->mobile}}</td>
                                </tr>
                                <tr class="text-center">
                                    <th class="table-secondary">Email</th>
                                    <td>{{ $shipping->email}}</td>
                                </tr>
                                <tr class="text-center">
                                    <th class="table-secondary">Location</th>
                                    <td>{{ $shipping->location}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="text-primary ">Order Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                <tr class="text-center">
                                    <th class="table-secondary">Order Id</th>
                                    <td>{{ $order->id }}</td>
                                </tr>
                                <tr class="text-center">
                                    <th class="table-secondary">Order Status</th>
                                    <td>{{ $order->order_status }}</td>
                                </tr>
                                <tr class="text-center">
                                    <th class="table-secondary">Order Date</th>
                                    <td>{{ $order->created_at }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="text-primary ">Order Products <span class="text-info font-weight-bolder"></span></h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                <tr class="text-center table-secondary">
                                    <th>S.L.</th>
                                    <th>Product Name</th>
                                    <th>Product Quantity</th>
                                    <th>Product Details</th>
                                    <th>Product Price</th>
                                </tr>
                                @php($i = 1)
                                @foreach($orderDetails as $orderDetail)
                                    <tr class="text-center">
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $orderDetail->priduct_name }}</td>
                                        <td>{{ $orderDetail->priduct_qty }}</td>
                                        <td><a href="{{ route('view-product',['id'=>$orderDetail->priduct_id]) }}">View</a></td>
                                        <td>{{ $orderDetail->priduct_price }} Tk.</td>
                                    </tr>
                                @endforeach
                                <tr class="text-center">
                                    <th colspan="4">Total Price<span class="font-weight-lighter">(including Tax)</span></th>
                                    <td class="table-secondary">= {{ $order->total_cart }}  Tk.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="text-primary ">Payment Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                <tr class="text-center">
                                    <th class="table-secondary">Payment Type</th>
                                    <td>{{ $payment->payment_type }}</td>
                                </tr>
                                <tr class="text-center">
                                    <th class="table-secondary">Payment Status</th>
                                    <td>{{ $payment->payment_status }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection