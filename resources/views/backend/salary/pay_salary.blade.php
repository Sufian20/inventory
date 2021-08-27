@extends('backend.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Pay Salary <span class="pull-right text-danger"> {{ date("F Y")}} </span> </h3>

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
                                @foreach($paysalary as $key => $ad)


                                <tr>

                                    <td>{{ $ad->employee->name }}</td>
                                    <td><img src="{{ asset('photo/'.$ad->employee->photo) }}" alt="Image" width="60" height="60"></td>
                                    <td>{{$ad->employee->salary}}</td>
                                    <td>
                                        <sapn class="badge badge-success"> {{ date("F", strtotime('-1 months'))}} </sapn>
                                    </td>
                                    --<td></td>--

                                    <td>


                                        <a href="#" class="btn btn-sm btn-primary">Pay Now</a>
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
