@extends('backend.master')

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="pull-left page-title">View Coustomer !</h4>
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
                <h3 class="panel-title">View Coustomer</h3>
            </div>
            <div class="panel-body">


                <div class="form-group">
                    <label for="name">Full Name</label>
                    <p>{{$singel->name}}</p>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <p>{{$singel->email}}</p>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <p>{{$singel->phone}}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <p>{{$singel->address}}</p>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Shop Name</label>
                    @if($singel->shop_name != NULL)
                    None

                    @else
                    <p>{{$singel->shop_name}}</p>
                    @endif


                </div>

                <div class="form-group">
                    <label for="account_holder">Account Holder</label>
                    <p>{{$singel->account_holder}}</p>
                </div>
                <div class="form-group">
                    <label for="account_no">Aaccount NO</label>
                    <p>{{$singel->account_no}}</p>
                </div>
                <div class="form-group">
                    <label for="bank_name">Bank Name</label>
                    <p>{{$singel->bank_name}}</p>
                </div>
                <div class="form-group">
                    <label for=" bank_branch ">Branch Name</label>
                    <p>{{$singel-> bank_branch }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <p>{{$singel->city}}</p>
                </div>
                <div class="form-group">

                    <label for="exampleInputEmail1">Photo</label>
                    <p><img src="{{ asset('photo/'.$singel->photo) }}" alt="Image" width="160" height="160"></p>
                </div>

            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div>
</div>



@endsection
