@extends('backend.master')

@section('content')


<div class="row">
    <div class="col-md-12">
       <div align="center">
            <a href="{{route('JanuarySales')}}" class="btn btn-sm btn-info">January</a>
            <a href="{{route('FebruarySales')}}" class="btn btn-sm btn-danger">February</a>
            <a href="{{route('MarchSales')}}" class="btn btn-sm btn-success">March</a>
            <a href="{{route('AprilSales')}}" class="btn btn-sm btn-primary">April</a>
            <a href="{{route('MaySales')}}" class="btn btn-sm btn-warning">May</a>
            <a href="{{route('JunSales')}}" class="btn btn-sm btn-info">June</a>
            <a href="{{route('JulySales')}}" class="btn btn-sm btn-danger">July</a>
            <a href="{{route('AugustSales')}}" class="btn btn-sm btn-success">August</a>
            <a href="{{route('SeptemberSales')}}" class="btn btn-sm btn-primary">September</a>
            <a href="{{route('OctoberSales')}}" class="btn btn-sm btn-warning">October</a>
            <a href="{{route('NovemberSales')}}" class="btn btn-sm btn-defult">November</a>
            <a href="{{route('DecemberSales')}}" class="btn btn-sm btn-info">December</a>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" style="color:red;"> Monthly All Sales </h3>

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>

                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Coustomer</th>
                                    <th>Amount</th>
                                    <th>Due</th>
                                    


                                </tr>
                            </thead>
                            @php
                                $sl=1;
                            @endphp


                            <tbody>
                                @foreach($thismonth as $key => $to)


                                <tr>
                                    <td>{{ $sl++}}</td>
                                    <td>{{ $to->order_date }}</td>
                                    <td>{{ $to->coustomer->name }}</td>
                                    <td>{{$to->total}}</td>
                                    <td>{{$to->due}}</td>




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
