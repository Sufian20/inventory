@extends('backend.master')

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="pull-left page-title">View Supliers !</h4>
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
                <h3 class="panel-title">Suplier Ditelis</h3>
            </div>
            <div class="panel-body">


                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <p>{{$supliers->name}}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <p>{{$supliers->email}}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <p>{{$supliers->phone}}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <<p>{{$supliers->address}}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Shope</label>
                    <p>{{$supliers->shop_name}}</p>

                </div>

                <div class="form-group">
                    <label for="account_holder">Account Holder</label>
                    <p>{{$supliers->account_holder}}</p>

                </div>
                <div class="form-group">
                    <label for="account_no">Account NO.</label>
                    <p>{{$supliers->account_no}}</p>

                </div>
                <div class="form-group">
                    <label for="bank_name">Bank Name</label>
                    <p>{{$supliers->bank_name}}</p>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Branch Name</label>
                    <p>{{$supliers->bank_branch}}</p>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <p>{{$supliers->city}}</p>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Suplier Type</label>
                    <p>{{$supliers->type}}</p>
                </div>
                <div class="form-group">

                    <label for="exampleInputEmail1">Photo</label>
                    <P> <img src="{{asset('PhotoSuplir/'.$supliers->photo)}}" alt="" height="150" weight="150"></P>



                </div>




            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div>
</div>



@endsection
