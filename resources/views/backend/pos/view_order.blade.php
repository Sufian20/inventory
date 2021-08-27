@extends('backend.master')


@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<!-- Start content -->
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Invoice</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Moltran</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Invoice</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                    <div class="panel-body">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h4 class="text-right"><img src="images/logo_dark.png" alt="velonic"></h4>

                            </div>
                            <div class="pull-right">
                                <h4>Invoice # <br>
                                    <strong>{{date('d/M/Y')}}</strong>
                                </h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="pull-left m-t-30">
                                    <address>
                                        <strong>Name: {{$coustomers->name}}</strong><br>
                                        <strong>Shop Name: {{$coustomers->shop_name}}</strong><br>
                                        Address: {{$coustomers->address}}<br>
                                        City: {{$coustomers->city}}<br>
                                        Phone: {{$coustomers->phone}}
                                    </address>
                                </div>
                                <div class="pull-right m-t-30">
                                    <p><strong>Order Date: </strong>{{date("M/d/Y")}}</p>
                                    @if($orders->order_status == 'success')
                                        <p class="m-t-10 "><strong>Order Status: </strong> <span class="label label-pink badge badge-success">{{$orders->order_status }}</span></p>
                                    @else
                                        <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-pink">{{$orders->order_status }}</span></p>
                                    @endif
                                    <p class="m-t-10"><strong>Order ID: </strong> #{{$orders->id }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="m-h-50"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    @php
                                    $sl = 1;
                                    @endphp
                                    <table class="table m-t-30">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product Name</th>
                                                <th>Product Code</th>
                                                <th>Quantity</th>
                                                <th>Unit Cost</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($contents as $key => $con)
                                            <tr>
                                                <td>{{ $sl++ }}</td>
                                                <td>{{$con->product->product_name}}</td>
                                                <td>{{$con->product->product_code}}</td>
                                                <td>{{$con->product_quntity}}</td>
                                                <td>{{$con->product->selling_price}}</td>
                                                <td>{{$con->product->selling_price * $con->product_quntity}}</td>

                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @php
                        $subtotal = 0;
                        $va = 15;
                        $total = 0;
                        $total =0;
                        $qty = 0;



                        foreach($contents as $key => $con){
                        $subtotal += $con->product->selling_price * $con->product_quntity;
                        }


                        foreach($contents as $con){
                        $vat = 15 / $subtotal ;

                        }
                        foreach($contents as $con){
                        $qty += $con->product_quntity;

                        }



                        $vat = $subtotal * $va / 100;

                        $total = $subtotal + $vat;


                        @endphp


                        <div class="row" style="border-radius: 0px;">

                            <div class="col-md-9">
                                <h3>Order By: {{$orders->payment_status}}</h3>
                                <h5>Pay: {{$orders->pay}}</h5>
                                <h5>Due: {{$orders->due}}</h5>
                            </div>
                            <div class="col-md-3">
                                <p class="text-right"><b>Sub-total:</b> ${{$subtotal}}</p>

                                <p class="text-right">VAT: ${{$vat}}</p>
                                <hr>
                                <h3 class="text-right">Total: ${{$subtotal + $vat}}</h3>

                            </div>

                        </div>
                        <hr>

                        @if($orders->order_status == 'success')

                        @else
                        <div class="hidden-print">
                            <div class="pull-right">
                                <a href="#" onclick="window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                <a href="{{ url('pos-done')}}/{{$orders->id}}}" class="btn btn-primary waves-effect waves-light pull-right">Done</a>
                            </div>
                        </div>


                        @endif

                    </div>
                </div>

            </div>

        </div>



    </div> <!-- container -->

    {{--Model coustomer---}}
    <form role=" form" action="{{route('FinalInvoice')}}" method="post">
        @csrf
        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">


                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title text-info">Invoice of {{$coustomers->name}} <span class="text-info pull-right" style="margin-right: 49px;">${{$subtotal + $vat}}</span></h4>

                    </div>
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <div class="modal-body">

                        <div class="row">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="col-md-4">

                                <div class="form-group">

                                    <label for="field-4" class="control-label">Payment</label>
                                    <select class="form-control" name="payment_status">
                                        <option value={{" Cash "}}>Cash</option>
                                        <option value={{" Cheque "}}>Cheque</option>
                                        <option value={{" Due "}}>Due</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Pay</label>
                                    <input type="pay" class="form-control" @error('pay') is-invalid @enderror" value="{{ old('pay') }}" name="pay" id="pay">
                                    @error('pay')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Due</label>
                                    <input type="text" class="form-control" @error('due') is-invalid @enderror" value="{{ old('due') }}" name="due" id="due">

                                    @error('due')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <input type="hidden" name="coustomer_id" value="{{$coustomers->id}}">
                            <input type="hidden" name="product_id" value="{{ $products->id }}">
                            <input type="hidden" name="order_date" value="{{date('d/m/y')}}">
                            <input type="hidden" name="order_status" value="pending">
                            <input type="hidden" name="total_products" value="{{$qty}}">
                            <input type="hidden" name="sub_total" value="{{$subtotal}}">
                            <input type="hidden" name="vat" value="{{$vat}}">
                            <input type="hidden" name="total" value="{{ $total}}">



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>

                        </div>


                    </div>



                    <!-- ============================================================== -->
                    <!-- End Right content here -->
                    <!-- ============================================================== -->

                    @endsection
