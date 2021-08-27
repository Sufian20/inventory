@extends('backend.master')

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="pull-left page-title">Welcome !</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Ecobel</a></li>
            <li class="active">IT</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title ">View Advanced</h3>
            </div>
            <a href="{{ route('AllAdvancedsalary') }}" class="btn btn-sm btn-info pull-right">All Advanced</a>
            <div class="panel-body">



                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <p>{{ $ad->employee->name }}</p>
                </div>




                <div class="form-group">
                    <label for="salary">Salary</label>
                    <p>{{$ad->employee->salary}}</p>

                </div>
                <div class="form-group">
                    <label for="advanced_salary">Advanced Salary</label>
                    <p>{{$ad->advanced_salary}}</p>

                </div>
                <div class="form-group">
                    <label for="month">Month</label>
                    <p>{{ $ad->month }}</p>

                </div>
                <div class="form-group">
                    <label for="year">Year</label>
                    <p>{{ $ad->year }}</p>

                </div>
                <div class="form-group">
                    <label for="year">Photo</label>
                    <p><img src="{{ asset('photo/'.$ad->employee->photo) }}" alt="Image" width="160" height="160"></p>

                </div>





            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div>
</div>



@endsection
