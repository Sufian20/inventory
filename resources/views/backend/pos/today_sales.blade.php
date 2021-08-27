@extends('backend.master')

@section('content')


<div class="row">
    <div class="col-md-12">

        <h4 style=" font-size: 30px; " class="text-aliment-center">Total: {{$sum}}</h4>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Today Sales</h3>

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Coustomer Name</th>
                                    <th>Amount</th>
                                    <th>Due</th>
                                    <th>Action </th>

                                </tr>
                            </thead>
                            @php
                                $sl = 1;
                            @endphp

                            <tbody>
                                @foreach($today as $key => $to)


                                <tr>
                                    <td>{{$sl++}}</td>
                                    <td>{{ $to->coustomer->name }}</td>
                                    <td>{{$to->total}}</td>
                                    <td>{{$to->due}}</td>


                                    <td>
                                        <a href="{{ url('view-order')}}/{{$to->id}}" class="btn btn-sm btn-info">View</a>

                                      


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
