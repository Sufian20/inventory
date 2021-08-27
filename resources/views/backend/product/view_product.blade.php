@extends('backend.master')

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="pull-left page-title">Add Prduct !</h4>
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
                <h3 class="panel-title">View Singel Prodcut <span> <a href="{{ route('AllProduct') }}" class="btn btn-sm btn-info pull-right">All Prodcut</a></span></h3>
            </div>

            <div class="panel-body">
                {{-- Success message --}}
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="form-group row">

                    <div class="col-9">
                        <img src="{{asset('ProductPhoto/'.$products->product_img)}}" alt="" height="300" weight="400">
                    </div>
                </div>
                <div class="form-group">
                    <label for="product_garage">Prodcut Name</label>
                    <p>{{$products->product_name }}</p>
                </div>
                <div class="form-group">
                    <label for="product_code">Prodcut Code</label>
                    <p>{{ $products->product_code }}</p>
                </div>
                <div class="form-group">
                    <label for="cat_id">Category</label>
                    <p>{{ $products->category->cat_name }}</p>
                </div>
                <div class="form-group">
                    <label for="sup_id">Supplier</label>
                    {{--<p>{{ $products->supplier->name  }}</p>--}}
                </div>


                <div class="form-group">
                    <label for="product_garage">Godaun</label>
                    <p>{{$products->product_garage}}</p>

                </div>
                <div class="form-group">
                    <label for="product_route">Prodcut Route</label>
                    <p>{{$products->product_route}}</p>
                </div>

                <div class="form-group">
                    <label for="buy_date">Buyzing Date</label>
                    <p>{{ $products->buy_date }}</p>
                </div>
                <div class="form-group">
                    <label for="expire_date">Expire Date</label>
                    <p> {{$products->expire_date}}</p>
                </div>
                <div class="form-group">
                    <label for="buying_price">Buying Price</label>
                    <p>{{ $products->buying_price }}</p>
                </div>
                <div class="form-group">
                    <label for="selling_price">Selling Price</label>
                    <p>{{ $products->selling_price }}</p>
                </div>






            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div>
</div>



@endsection
