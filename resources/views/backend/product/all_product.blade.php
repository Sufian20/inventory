@extends('backend.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">All Product <span> <a href="{{ route('AddProduct') }}" class="btn btn-sm btn-info pull-right">Add Prodcut</a></span></h3>

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Selling Price</th>
                                    <th>Image</th>
                                    <th>Garage</th>
                                    <th>Route</th>
                                    <th>Action </th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($products as $key => $pro)


                                <tr>
                                    <td>{{ $pro->product_name }}</td>
                                    <td>{{ $pro->product_code }}</td>
                                    <td>{{ $pro->selling_price }}</td>

                                    <td><img src="{{ asset('ProductPhoto/'.$pro->product_img) }}" alt="Image" width="60" height="60"></td>
                                    <td>{{ $pro->product_garage }}</td>
                                    <td>{{ $pro->product_route }}</td>
                                    <td>

                                        <a href="{{ url('edit-product') }}/{{ $pro->id }}" class="btn btn-sm btn-info">Edit</a>

                                        <a href="{{ url('delete-product') }}/{{ $pro->id }}" class="btn btn-sm btn-danger">Delete</a>

                                        <a href="{{ url('view-product') }}/{{ $pro->id }}" class="btn btn-sm btn-primary">View</a>
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
