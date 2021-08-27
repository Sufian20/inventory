@extends('backend.master')

@section('content')


<div class="row">

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">All Supliers</h3>
                <a href="{{ route('AddSuplier') }}" class="btn btn-sm btn-info pull-right">Add New</a>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Image</th>
                                    <th>Action </th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($supliers as $key => $cous)


                                <tr>
                                    <td>{{ $cous->name }}</td>
                                    <td>{{$cous->phone}}</td>
                                    <td>{{$cous->address}}</td>
                                    <td><img src="{{ asset('PhotoSuplir/'.$cous->photo) }}" alt="Image" width="60" height="60"></td>
                                    <td>
                                        <a href="{{ url('edit_suplier') }}/{{ $cous->id }}" class="btn btn-sm btn-info">Edit</a>

                                        <a href="{{ url('delete_suplier') }}/{{ $cous->id }}" class="btn btn-sm btn-danger" id="sa-warning">Delete</a>




                                        <a href="{{ url('view_suplier') }}/{{ $cous->id }}" class="btn btn-sm btn-primary">View</a>
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
