@extends('backend.master')

@section('content')


<div class="row">
    <div class="col-md-12">

        <h4 style=" font-size: 30px; " class="text-aliment-center">Total: {{$sum}}</h4>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Today Expenses <a href="{{ route('AddExpenses') }}" class="btn btn-sm btn-info pull-right">Add New</a></h3>

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>

                                    <th>Details</th>
                                    <th>Amount</th>
                                    <th>Action </th>

                                </tr>
                            </thead>


                            <tbody>
                                @foreach($today as $key => $to)


                                <tr>

                                    <td>{{ $to->details }}</td>

                                    <td>{{$to->amount}}</td>


                                    <td>
                                        <a href="{{ url('edit-expenses') }}/{{ $to->id }}" class="btn btn-sm btn-info">Edit</a>

                                        <a href="{{ url('delete-expenses') }}/{{ $to->id }}" class="btn btn-sm btn-danger" id="sa-warning">Delete</a>


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
