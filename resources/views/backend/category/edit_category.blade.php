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
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title text-white">Update Category</h3>
            </div>
            <a href="{{ route('AllCategory') }}" class="btn btn-sm btn-danger pull-right">All Category</a>
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
                <form role="form" action="{{route('UpdateCategory')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{$categoris->id}}">
                    <div class="form-group">
                        <label for="cat_name">Category Name</label>
                        <input type="text" class="form-control" @error('cat_name') is-invalid @enderror" value="{{ $categoris->cat_name ??  old('advanced_salary') }}" name="cat_name" id="cat_name">
                        @error('cat_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>



                    <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                </form>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div>
</div>



@endsection
