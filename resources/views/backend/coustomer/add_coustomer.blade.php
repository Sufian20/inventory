@extends('backend.master')

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="pull-left page-title">Add Coustomer !</h4>
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
                <h3 class="panel-title">Add Coustomer</h3>
            </div>
            <div class="panel-body">
                {{-- Success message --}}
                <div class="alert alert-warning alert-dismissible fade show bg-info" role="alert">
                    <strong>Hey</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form role="form" action="{{route('PostCoustomer')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" class="form-control" @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" id="name" placeholder="Enter Name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="title" placeholder="Enter email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="text" class="form-control" @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone" id="phone" placeholder="Enter Phone Number">

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" @error('address') is-invalid @enderror" value="{{ old('address') }}" name="address" id="address" placeholder="Enter address">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Shope Name</label>
                        <input type="text" class="form-control" name="shop_name" @error('title') is-invalid @enderror" value="{{ old('shop_name') }}" id="shop_name" placeholder="Enter shop name">
                        @error('shop_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="account_holder">Account Holder</label>
                        <input type="text" class="form-control" name="account_holder" @error('account_holder') is-invalid @enderror" value="{{ old('account_holder') }}" id="account_holder" placeholder="Enter account holder">

                        @error('account_holder')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="account_no">Account NO.</label>
                        <input type="text" class="form-control" name="account_no" @error('account_no') is-invalid @enderror" value="{{ old('account_no') }}" id="account_no" placeholder="Enter account no">

                        @error('account_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="bank_name">Bank Name</label>
                        <input type="text" class="form-control" name="bank_name" @error('bank_name') is-invalid @enderror" value="{{ old('bank_name') }}" id="vacation" placeholder="Enter bank name">

                        @error('bank_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Branch Name</label>
                        <input type="text" class="form-control" name="bank_branch" @error('bank_branch') is-invalid @enderror" value="{{ old('bank_branch') }}" id="bank_branch" placeholder="Enter branch name">

                        @error('bank_branch')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">City</label>
                        <input type="text" class="form-control" name="city" @error('city') is-invalid @enderror" value="{{ old('city') }}" id="city" placeholder="Enter experience">

                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">

                        <label for="exampleInputEmail1">Photo</label>
                        <input type="file" class="form-control" name="photo" @error('photo') is-invalid @enderror" value="{{ old('photo') }}" id="photo" accept="image/*">

                        @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                </form>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div>
</div>



@endsection
