@extends('backend.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Datatable</h3>
                <a href="{{ route('AddEmployee') }}" class="btn btn-sm btn-info pull-right">Add New</a>
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
                                    <th>Salary</th>
                                    <th>Action </th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($employees as $key => $emply)


                                <tr>
                                    <td>{{ $emply->name }}</td>
                                    <td>{{$emply->phone}}</td>
                                    <td>{{$emply->address}}</td>
                                    <td><img src="{{ asset('photo/'.$emply->photo) }}" alt="Image" width="60" height="60"></td>
                                    <td>{{$emply->salary}}</td>
                                    <td>
                                        <a href="{{ url('edit-employee') }}/{{ $emply->id }}" class="btn btn-sm btn-info">Edit</a>

                                        <a href="{{ url('delete-employee') }}/{{ $emply->id }}" class="btn btn-sm btn-danger" id="sa-warning">Delete</a>

                                        <a href="{{ url('view-employee') }}/{{ $emply->id }}" class="btn btn-sm btn-primary">View</a>
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
