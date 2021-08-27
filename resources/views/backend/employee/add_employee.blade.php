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
                <h3 class="panel-title">Add Employees</h3>
            </div>
            <a href="{{ route('AllEmployee') }}" class="btn btn-sm btn-info pull-right">All Employees</a>
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
                <form role="form" action="{{route('PostEmployee')}}" method="post" enctype="multipart/form-data">
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
                        <label for="exampleInputEmail1">Experience</label>
                        <input type="text" class="form-control" name="experience" @error('title') is-invalid @enderror" value="{{ old('experience') }}" id="experience" placeholder="Enter experience">
                        @error('experience')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">NID Number</label>
                        <input type="text" class="form-control" name="nid_no" @error('nid_no') is-invalid @enderror" value="{{ old('nid_no') }}" id="nid_no" placeholder="Enter NID NO">

                        @error('nid_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Selary</label>
                        <input type="text" class="form-control" name="salary" @error('salary') is-invalid @enderror" value="{{ old('salary') }}" id="title" placeholder="Enter salary">

                        @error('salary')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Vacation</label>
                        <input type="text" class="form-control" name="vacation" @error('vacation') is-invalid @enderror" value="{{ old('vacation') }}" id="vacation" placeholder="Enter vacation">

                        @error('vacation')
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
