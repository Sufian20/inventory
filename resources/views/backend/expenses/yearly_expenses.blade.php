@extends('backend.master')

@section('content')


<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" style="color:red;"> {{date("Y")}} All Expenses <a href="{{ route('AddExpenses') }}" class="btn btn-sm btn-info pull-right">Add New</a></h3>

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>

                                    <th>Date</th>
                                    <th>Details</th>
                                    <th>Amount</th>


                                </tr>
                            </thead>


                            <tbody>
                                @foreach($yearly as $key => $to)


                                <tr>

                                    <td>{{ $to->date }}</td>
                                    <td>{{ $to->details }}</td>

                                    <td>{{$to->amount}}</td>




                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <h4 align="center" style="font-size: 30px;">Total: {{$sum}}</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- End Row -->



@endsection
