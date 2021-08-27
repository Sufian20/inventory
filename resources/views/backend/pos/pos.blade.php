@extends('backend.master')

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12 bg-info">
        <h4 class="pull-left page-title text-white">POS (Point of sale)</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#" class="text-white">Ecobel</a></li>
            <li class="text-white">{{date("d/m/y")}}</li>
        </ol>
    </div>
</div>
<br>
<br>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 ">
        <div class="portfolioFilter">
            @foreach($categories as $key => $cat)
            <a href="#" data-filter="*" class="current">{{$cat->cat_name}}</a>
            @endforeach


        </div>
    </div>
</div>
<br>
<br>
<div class="row">
    <div class="col-lg-5">
        <div class="price_card text-center">
            <ul class="price-features" style="border: 1px solid grey;">
                <table class="table">
                    <thead class="bg-info">
                        <tr>
                            <th class="text-white">Name</th>
                            <th class="text-white">Qty</th>
                            <th class="text-white">Singel Price</th>
                            <th class="text-white">Sub Total</th>
                            <th class="text-white">Action</th>
                        </tr>
                    </thead>
                    @forelse($carts as $cart)
                    <tbody>

                        <tr>

                            <th>{{$cart->product->product_name}}</th>
                            <th>
                                <form role="form" action="{{route('CartUpdate')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="cart_id[]" value="{{$cart->id}}">
                                    <input type="number" name="product_quntity[]" value="{{$cart->product_quntity}}" style="width:40px;">
                                    <button type="submit" class="btn btn-sm btn-success" style="margin-top:-2px;"><i class="fas fa-check"></i></button>
                                </form>

                            </th>
                            <th>{{$cart->product->selling_price}}</th>
                            <th>{{$cart->product->selling_price * $cart->product_quntity}}</th>
                            <th><a href="{{route('SingelCartDelete', $cart->id)}}"><i class="fas fa-trash" style="color:red;"></i></a></th>
                        </tr>

                    </tbody>

                    @empty

                    <td colspan="50">Cart No Data Abaleable</td>
                    @endforelse
                </table>
            </ul>
            <div class="pricing-footer bg-primary">
                <p class="text-white" style="font-size:19px;">Quntity : {{$qty}}</p>
                <p class="text-white" style="font-size:19px;">Subtotal : ${{$subtotal}}</p>

                <p class="text-white" style="font-size:19px;">Vat : ${{$vat }}</p>

                <hr>
                <p>
                    <h2 class="text-white">Total:</h2>
                    <h1 class="text-white">${{ $total }}</h1>
                </p>
            </div>
            <form method="post" action="{{ route('CreateInvoice')}}">
                @csrf

                <div class="panel"><br> <br>

                    <h4 class="text-info">Select Coustomer <a href="" class="btn btn-info waves-effect waves-light pull-right" data-toggle="modal" data-target="#con-close-modal">Add New</a></h4>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <select name="cus_id" class="form-control">
                        <option disabled="" selected="">Select Oncec</option>
                        @foreach($coustomers as $cous)
                        <option value="{{$cous->id}}"> {{ $cous->name }} </option>
                        @endforeach

                    </select>
                </div>


                <button class="btn btn-success">Create Invoice</button>
            </form>

        </div>
    </div>

    <div class="col-lg-6">
        <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category </th>
                    <th>Product Code </th>
                    <th>Add </th>

                </tr>
            </thead>


            <tbody>
                @foreach($products as $key => $pro)


                <tr>

                    <td>

                        <img src="{{ asset('ProductPhoto/'.$pro->product_img) }}" alt="Image" width="60" height="60"></td>

                    <td>{{ $pro->product_name }}</td>

                    <td>{{ $pro->cat_name }}</td>
                    <td>{{ $pro->product_code }}</td>
                    <td><a href="{{route('SingelCart', $pro->id)}} " class="btn btn-sm btn-primary" style="font-size:20px"><i class="fas fa-plus-square"></i></a></td>


                </tr>
                @endforeach
            </tbody>
        </table>


    </div>

    {{--Model coustomer---}}
    <form role="form" action="{{route('PostCoustomer')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">


                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Add Coustomer</h4>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-4" class="control-label">Name</label>
                                    <input type="text" class="form-control" @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" id="name" placeholder="Enter Name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Email</label>
                                    <input type="email" class="form-control" @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="title" placeholder="Enter email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Phone</label>
                                    <input type="text" class="form-control" @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone" id="phone" placeholder="Enter Phone Number">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-4" class="control-label">Address</label>
                                    <input type="text" class="form-control" @error('address') is-invalid @enderror" value="{{ old('address') }}" name="address" id="address" placeholder="Enter address">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Shop Name</label>
                                    <input type="text" class="form-control" name="shop_name" @error('title') is-invalid @enderror" value="{{ old('shop_name') }}" id="shop_name" placeholder="Enter shop name">
                                    @error('shop_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Account Holder</label>
                                    <input type="text" class="form-control" name="account_holder" @error('account_holder') is-invalid @enderror" value="{{ old('account_holder') }}" id="account_holder" placeholder="Enter account holder">

                                    @error('account_holder')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-4" class="control-label">Account NO</label>
                                    <input type="text" class="form-control" name="account_no" @error('account_no') is-invalid @enderror" value="{{ old('account_no') }}" id="account_no" placeholder="Enter account no">

                                    @error('account_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Bank Name</label>
                                    <input type="text" class="form-control" name="bank_name" @error('bank_name') is-invalid @enderror" value="{{ old('bank_name') }}" id="vacation" placeholder="Enter bank name">

                                    @error('bank_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Branch Name</label>
                                    <input type="text" class="form-control" name="bank_branch" @error('bank_branch') is-invalid @enderror" value="{{ old('bank_branch') }}" id="bank_branch" placeholder="Enter branch name">

                                    @error('bank_branch')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-4" class="control-label">City</label>
                                    <input type="text" class="form-control" name="city" @error('city') is-invalid @enderror" value="{{ old('city') }}" id="city" placeholder="Enter experience">

                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Photo</label>
                                    <input type="file" class="form-control" name="photo" @error('photo') is-invalid @enderror" value="{{ old('photo') }}" id="photo" accept="image/*">

                                    @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>

                    </div>

                </div>

            </div>
        </div>
</div>
</form>






@endsection
