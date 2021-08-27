@extends('backend.master')

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="pull-left page-title">View Employees !</h4>
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
                <h3 class="panel-title">View Employees</h3>
            </div>
            <div class="panel-body">


                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <p>{{$singel_data->name}}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <p>{{$singel_data->email}}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <p>{{$singel_data->phone}}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <p>{{$singel_data->address}}</p>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Experience</label>
                    <p>{{$singel_data->experience}}</p>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">NID Number</label>
                    <p>{{$singel_data->nid_no}}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Selary</label>
                    <p>{{$singel_data->salary}}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Vacation</label>
                    <p>{{$singel_data->vacation}}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <p>{{$singel_data->city}}</p>
                </div>
                <div class="form-group">

                    <label for="exampleInputEmail1">Photo</label>
                    <p><img src="{{ asset('photo/'.$singel_data->photo) }}" alt="Image" width="160" height="160"></p>
                </div>

            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div>
</div>



@endsection
