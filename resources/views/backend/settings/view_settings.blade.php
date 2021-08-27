@extends('backend.master')

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="pull-left page-title">Settings !</h4>
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
                <h3 class="panel-title">Settings</h3>
            </div>
            {{-- Success message --}}
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="panel-body">

                <form role="form" action="{{route('UpdateSettings')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$settings->id}}">
                    <div class="form-group">
                        <label for="company_name">Company Name</label>
                        <input type="text" class="form-control" @error('company_name') is-invalid @enderror" value="{{$settings->company_name ?? old('company_name') }}" name="company_name" id="company_name">
                        @error('company_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="company_address">Company Address</label>
                        <input type="text" class="form-control" @error('company_address') is-invalid @enderror" value="{{$settings->company_address ?? old('company_address') }}" name="company_address" id="company_address">
                        @error('company_address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="company_email">Email address</label>
                        <input type="company_email" class="form-control" @error('company_email') is-invalid @enderror" value="{{$settings->company_email  ?? old('company_email') }}" name="company_email" id="company_email">
                        @error('company_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="company_phone">Company Phone</label>
                        <input type="text" class="form-control" @error('company_phone') is-invalid @enderror" value="{{ $settings->company_phone ?? old('company_phone') }}" name="company_phone" id="company_phone">

                        @error('company_phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="company_mobile">Company Mobile</label>
                        <input type="text" class="form-control" @error('company_mobile') is-invalid @enderror" value="{{ $settings->company_mobile ?? old('company_mobile') }}" name="company_mobile" id="address">
                        @error('company_mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="company_city">Company City</label>
                        <input type="text" class="form-control" name="company_city" @error('company_city') is-invalid @enderror" value="{{ $settings->company_city ?? old('company_city') }}" id="company_city">
                        @error('company_city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="company_country">Company Country</label>
                        <input type="text" class="form-control" name="company_country" @error('company_country') is-invalid @enderror" value="{{ $settings->company_country ??  old('company_country') }}" id="company_country">

                        @error('company_country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="company_zipecode">Company Zip-Code</label>
                        <input type="text" class="form-control" name="company_zipecode" @error('company_zipecode') is-invalid @enderror" value="{{ $settings->company_zipecode ??  old('company_zipecode') }}" id="company_zipecode">

                        @error('company_zipecode')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">

                        <label for="exampleInputEmail1">Photo</label>
                        <input type="file" class="form-control" name="company_logo" @error('company_logo') is-invalid @enderror" id="company_logo" accept="image/*">

                        @error('company_logo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="feature_image" class="col-3 col-form-label">Preview</label>
                        <div class="col-9">
                            <img src="{{asset('SettingsPhoto/'.$settings->company_logo)}}" alt="" height="150" weight="150">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
                </form>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div>
</div>



@endsection
