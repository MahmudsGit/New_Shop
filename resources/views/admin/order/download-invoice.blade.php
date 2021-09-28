<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>invoice order receipt - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('/') }}/admin/invoice/jquery-1.10.2.min.js"></script>
    <link href="{{ asset('/') }}/admin/invoice/bootstrap.min.css" rel="stylesheet">
    <script src="{{ asset('/') }}/admin/invoice/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <!-- BEGIN INVOICE -->
        <div class="grid invoice">
            <div class="grid-body">
                    <table class="table">
                        <tr>
                            <td><img src="{{ asset('/') }}/admin/img/newShop.png" alt="" height="40" ></td>
                            <td><h2 class="text-primary ">invoice<br></h2></td>
                            <td>order <span class="small mark">#0011{{ $order->id }}</span></td>
                        </tr>
                    </table>
                        <hr>
                    <table class="table">
                        <tr>
                            <td>
                                <span class="m-0 font-weight-lighter"><u>Billed To:</u></span><br>
                                <span class="font-weight-bold">{{ $customer->first_name.' '.$customer->last_name }}</span><br>
                                <i class="fa fa-phone"> {{ $customer->mobile }}</i><br>
                                <i class="fa fa-mail-bulk"> {{ $customer->email }}</i><br>
                                <i class="fa fa-address-card"> {{ $customer->address }}</i><br>
                            </td>
                            <td class="text-right">
                                <span class="m-0"><u>Shipped To:</u></span><br>
                                <span class="font-weight-bold"> {{ $shipping->full_name }}</span><br>
                                <i class="fa fa-phone"> {{ $shipping->mobile}}</i><br>
                                <i class="fa fa-mail-bulk"> {{ $shipping->email}}</i><br>
                                <i class="fa fa-address-card"> {{ $shipping->location}}</i><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="m-0"><u>Payment Method:</u></span><br>
                                <span class="font-weight-bold">Payment Type: {{ $payment->payment_type }}</span><br>
                                <span class="font-weight-bold">Payment Status: {{ $payment->payment_status }}</span><br>
                            </td>
                            <td class="text-right">
                                <span class="m-0"><u>Order Date:</u></span><br>
                                <span class="font-weight-bold">Order Time: {{ $order->created_at }}</span><br>
                                <span class="font-weight-bold">Order Status: {{ $order->order_status }}</span><br>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-primary">ORDER SUMMARY</h3><hr>
                        <table class="table table-striped">
                            <thead>
                            <tr class="line">
                                <td><strong>#SL</strong></td>
                                <td><strong>PRODUCT NAME</strong></td>
                                <td><strong>PRODUCT ID</strong></td>
                                <td><strong>RATE</strong></td>
                                <td><strong>QUANTITY</strong></td>
                                <td><strong>TOTAL PRICE</strong></td>
                                <td><strong>TAX (15%)</strong></td>
                                <td><strong>SUBTOTAL</strong></td>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i = 1)
                            @php($sum = 0)
                            @foreach($orderDetails as $orderDetail)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $orderDetail->priduct_name }}</td>
                                    <td><span class="mark">#0011{{ $orderDetail->priduct_id }}</span></td>
                                    <td>{{ $orderDetail->priduct_price }}</td>
                                    <td>{{ $orderDetail->priduct_qty }}</td>
                                    <td>{{ $totalPrice=$orderDetail->priduct_qty*$orderDetail->priduct_price }}</td>
                                    <td>{{ ($orderDetail->priduct_price*15/100)*$orderDetail->priduct_qty }}</td>
                                    <td>{{ ($totalPrice=$orderDetail->priduct_qty*$orderDetail->priduct_price)+(($orderDetail->priduct_price*15/100)*$orderDetail->priduct_qty) }}</td>
                                </tr>
                                <?php $sum = $sum+$totalPrice ?>
                            @endforeach
                            <?php $totalTax = $sum*15/100 ?>
                            <tr>
                                <td colspan="3"></td>
                                <td colspan="3"><h5>TOTAL TAXES</h5></td>
                                <td colspan="2"><h5>{{ $totalTax }} Tk.</h5></td>
                            </tr>
                            <tr>
                                <td colspan="4"></td>
                                <td colspan="3"><h4>GRAND TOTAL</h4></td>
                                <td><h4>{{ $order->total_cart }} Tk.</h4></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div><br>
                <table class="table">
                    <tr>
                        <td><p>____________<br>Manager Signature</p></td>
                        <td><p>____________<br>Sales Excutive Signature</p></td>
                        <td><p>____________<br>Customer Signature</p></td>
                    </tr>
                </table>
        </div>
    <!-- END INVOICE -->
    </div>

    <style type="text/css">
        body{margin-top:20px;
            background:#eee;
        }

        .invoice {
            padding: 30px;
        }

        .invoice h2 {
            margin-top: 0px;
            line-height: 0.8em;
        }

        .invoice .small {
            font-weight: 300;
        }

        .invoice hr {
            margin-top: 10px;
            border-color: #ddd;
        }

        .invoice .table tr.line {
            border-bottom: 1px solid #ccc;
        }

        .invoice .table td {
            border: none;
        }

        .invoice .identity {
            margin-top: 10px;
            font-size: 1.1em;
            font-weight: 300;
        }

        .invoice .identity strong {
            font-weight: 600;
        }


        .grid {
            position: relative;
            width: 100%;
            background: #fff;
            color: #666666;
            border-radius: 2px;
            margin-bottom: 25px;
            box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
        }

    </style>

    <script type="text/javascript">

    </script>
    </body>
    </html>