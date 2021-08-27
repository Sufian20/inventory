@extends('backend.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Datatable</h3>
                <a href="{{ route('AllEmployee') }}" class="btn btn-sm btn-info pull-right">Add New</a>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Salary</th>
                                    <th>Month</th>
                                    <th>Advanced</th>
                                    <th>Action </th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($advanced as $key => $ad)


                                <tr>

                                    <td>{{ $ad->employee->name }}</td>
                                    <td><img src="{{ asset('photo/'.$ad->employee->photo) }}" alt="Image" width="60" height="60"></td>
                                    <td>{{$ad->employee->salary}}</td>
                                    <td>{{$ad->month}}</td>
                                    <td>{{$ad->advanced_salary}}</td>

                                    <td>
                                        <a href="{{ url('edit_advancedsalary') }}/{{ $ad->id }}" class="btn btn-sm btn-info">Edit</a>

                                        <a href="{{ url('delete_advancedsalary') }}/{{ $ad->id }}" class="btn btn-sm btn-danger" id="sa-warning">Delete</a>

                                        <a href="{{ url('view_advancedsalary') }}/{{ $ad->id }}" class="btn btn-sm btn-primary">View</a>
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
