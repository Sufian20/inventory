@extends('backend.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Datatable</h3>
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
                                @foreach($coustomers as $key => $cous)


                                <tr>
                                    <td>{{ $cous->name }}</td>
                                    <td>{{$cous->phone}}</td>
                                    <td>{{$cous->address}}</td>
                                    <td><img src="{{ asset('photo/'.$cous->photo) }}" alt="Image" width="60" height="60"></td>
                                    <td>
                                        <a href="{{ url('edit-coustomer') }}/{{ $cous->id }}" class="btn btn-sm btn-info">Edit</a>

                                        <a href="{{ url('delete-coustomer') }}/{{ $cous->id }}" class="btn btn-sm btn-danger">Delete</a>

                                        <a href="{{ url('view-coustomer') }}/{{ $cous->id }}" class="btn btn-sm btn-primary">View</a>
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
