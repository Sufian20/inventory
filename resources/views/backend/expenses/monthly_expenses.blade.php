@extends('backend.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div align="center">
            <a href="{{route('JanuaryExpenses')}}" class="btn btn-sm btn-info">January</a>
            <a href="{{route('FebruaryExpenses')}}" class="btn btn-sm btn-danger">February</a>
            <a href="{{route('MarchExpenses')}}" class="btn btn-sm btn-success">March</a>
            <a href="{{route('AprilExpenses')}}" class="btn btn-sm btn-primary">April</a>
            <a href="{{route('MayExpenses')}}" class="btn btn-sm btn-warning">May</a>
            <a href="{{route('JunExpenses')}}" class="btn btn-sm btn-info">June</a>
            <a href="{{route('JulyExpenses')}}" class="btn btn-sm btn-danger">July</a>
            <a href="{{route('AugustExpenses')}}" class="btn btn-sm btn-success">August</a>
            <a href="{{route('SeptemberExpenses')}}" class="btn btn-sm btn-primary">September</a>
            <a href="{{route('OctoberExpenses')}}" class="btn btn-sm btn-warning">October</a>
            <a href="{{route('NovemberExpenses')}}" class="btn btn-sm btn-defult">November</a>
            <a href="{{route('DecemberExpenses')}}" class="btn btn-sm btn-info">December</a>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" style="color:red;"> Monthly All Expenses <a href="{{ route('AddExpenses') }}" class="btn btn-sm btn-info pull-right">Add New</a></h3>

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
                                @foreach($thismonth as $key => $to)


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
