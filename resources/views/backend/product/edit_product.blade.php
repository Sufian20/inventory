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
                <h3 class="panel-title">Edit Prodcut</h3> </span>
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
                <form role="form" action="{{route('UpdateProduct')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ $products->id }}">
                    <div class="form-group">
                        <label for="product_garage">Prodcut Name</label>
                        <input type="text" class="form-control" @error('product_name') is-invalid @enderror" value="{{ $products->product_name ?? old('product_name') }}" name="product_name" id="product_name">
                        @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="product_code">Prodcut Code</label>
                        <input type="text" class="form-control" @error('product_code') is-invalid @enderror" value="{{ $products->product_code ?? old('product_code') }}" name="product_code" id="product_code" placeholder="Enter product code">
                        @error('product_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cat_id">Category</label>
                        <select name="cat_id" id="cat_id" class="form-control @error('name') is-invalid @enderror">

                            @foreach($categoris as $cat)
                            <option <?php if($products->cat_id == $cat->id) {{ echo "selected";}}   ?> value="{{$cat->id}}"> {{ $cat->cat_name }} </option>
                            @endforeach
                            @error('cat_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    </select>
            </div>
            <div class="form-group">
                <label for="sup_id">Supplier</label>
                <select name="sup_id" id="sup_id" class="form-control @error('sup_id') is-invalid @enderror">

                    @foreach($supplires as $sup)
                    <option @if($products->sup_id == $sup->id ) selected @endif value="{{$sup->id}}"> {{ $sup->name }} </option>
                    @endforeach
                    @error('sup_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>

            </select>
        </div>
        <div class="form-group">
            <label for="product_garage">Godaun</label>
            <input type="text" class="form-control" @error('product_garage') is-invalid @enderror" value="{{ $products->product_garage ?? old('product_garage') }}" name="product_garage" id="product_garage">
            @error('product_garage')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
        <div class="form-group">
            <label for="product_route">Prodcut Route</label>
            <input type="text" class="form-control" name="product_route" @error('product_route') is-invalid @enderror" value="{{ $products->product_route ?? old('product_route') }}" id="product_route">
            @error('product_route')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="buy_date">Buyzing Date</label>
            <input type="date" class="form-control" name="buy_date" @error('buy_date') is-invalid @enderror" value="{{ $products->buy_date ?? old('buy_date') }}" id="buy_date" placeholder="Enter Buying Date">

            @error('buy_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="expire_date">Expire Date</label>
            <input type="date" class="form-control" name="expire_date" @error('expire_date') is-invalid @enderror" value="{{ $products->expire_date ?? old('expire_date') }}" id="expire_date" placeholder="Enter Expire Date">

            @error('expire_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="buying_price">Buying Price</label>
            <input type="text" class="form-control" name="buying_price" @error('buying_price') is-invalid @enderror" value="{{ $products->buying_price ?? old('buying_price') }}" id="buying_price" placeholder="Enter Buying Price">

            @error('buying_price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="selling_price">Selling Price</label>
            <input type="text" class="form-control" name="selling_price" @error('selling_price') is-invalid @enderror" value="{{ $products->selling_price ?? old('selling_price') }}" id="selling_price" placeholder="Enter Selling Price">

            @error('selling_price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">

            <label for="exampleInputEmail1">Photo</label>
            <input type="file" class="form-control" name="product_img" @error('product_img') is-invalid @enderror" value="{{ $products->product_img ?? old('product_img') }}" id="product_img" accept="image/*">

            @error('product_img')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group row">
            <label for="feature_image" class="col-3 col-form-label">Preview</label>
            <div class="col-9">
                <img src="{{asset('ProductPhoto/'.$products->product_img)}}" alt="" height="150" weight="150">
            </div>
        </div>

        <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
        </form>
    </div><!-- panel-body -->
</div> <!-- panel -->
</div>
</div>



@endsection
