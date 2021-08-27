@extends('backend.master')

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="pull-left page-title">Edit Coustomer !</h4>
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
                <h3 class="panel-title">Eidt Coustomer</h3>
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
                <form role="form" action="{{route('UpdateCoustomer')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$coustomers->id}}">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" @error('name') is-invalid @enderror" value="{{ $coustomers->name ?? old('name') }}" name="name" id="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" @error('email') is-invalid @enderror" value="{{  $coustomers->email ?? old('email') }}" name="email" id="title" placeholder="Enter email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" @error('phone') is-invalid @enderror" value="{{ $coustomers->phone ?? old('phone') }}" name="phone" id="phone" placeholder="Enter Phone Number">

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" @error('address') is-invalid @enderror" value="{{ $coustomers->address ?? old('address') }}" name="address" id="address" placeholder="Enter address">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="shop_name">Shope Name</label>
                        <input type="text" class="form-control" name="shop_name" @error('shop_name') is-invalid @enderror" value="{{ $coustomers->shop_name ?? old('shop_name') }}" id="shop_name" placeholder="Enter shop name">
                        @error('shop_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="account_holder">Account Holder</label>
                        <input type="text" class="form-control" name="account_holder" @error('account_holder') is-invalid @enderror" value="{{ $coustomers->account_holer ?? old('account_holder') }}" id="account_holder" placeholder="Enter account holder">

                        @error('account_holder')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="account_no">Account NO.</label>
                        <input type="text" class="form-control" name="account_no" @error('account_no') is-invalid @enderror" value="{{ $coustomers->account_no ?? old('account_no') }}" id="account_no" placeholder="Enter account no">

                        @error('account_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="bank_name">Bank Name</label>
                        <input type="text" class="form-control" name="bank_name" @error('bank_name') is-invalid @enderror" value="{{ $coustomers->bank_name ?? old('bank_name') }}" id="vacation" placeholder="Enter bank name">

                        @error('bank_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="bank_branch">Branch Name</label>
                        <input type="text" class="form-control" name="bank_branch" @error('bank_branch') is-invalid @enderror" value="{{ $coustomers->bank_branch ?? old('bank_branch') }}" id="bank_branch" placeholder="Enter branch name">

                        @error('bank_branch')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" @error('city') is-invalid @enderror" value="{{ $coustomers->city ?? old('city') }}" id="city" placeholder="Enter experience">

                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">

                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" name="photo" @error('photo') is-invalid @enderror" value="{{ $coustomers->photo ?? old('photo') }}" id="photo" accept="image/*">

                        @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="photo" class="col-3 col-form-label">Preview</label>
                        <div class="col-9">
                            <img src="{{asset('photo/'.$coustomers->photo)}}" alt="" height="150" weight="150">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                </form>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div>
</div>



@endsection
