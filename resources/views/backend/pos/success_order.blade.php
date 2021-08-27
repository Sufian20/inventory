@extends('backend.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Pending Order </h3>

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Quantity</th>
                                    <th>Total Amount</th>
                                    <th>Payment</th>
                                    <th>Order Status</th>
                                    <th>Action </th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($orders as $key => $or)


                                <tr>
                                    <td>{{ $or->coustomer->name }}</td>
                                    <td>{{$or->order_date}}</td>
                                    <td>{{$or->total_products}}</td>
                                    <td>{{$or->total}}</td>
                                    <td>{{$or->payment_status}}</td>
                                    <td><span class="badge badge-success">{{$or->order_status}}</span> </td>
                                    <td>


                                        <a href="{{ url('view-order')}}/{{$or->id}}" class="btn btn-sm btn-primary">View</a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- End Row -->



@endsection
