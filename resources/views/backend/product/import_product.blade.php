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
                <h3 class="panel-title text-white">Product Import <a href="{{ route('ImportProduct') }}" class="btn btn-sm btn-danger pull-right">Download Xlxs</a>
                </h3>
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
                <form role="form" action="{{route('PostCategory')}}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group">
                        <label for="cat_name">Xlxs File Import</label>
                        <input type="file" name="import_file" required>


                    </div>



                    <button type="submit" class="btn btn-success waves-effect waves-light">Upload</button>
                </form>
                <br>
                <div class="container text-danger">
                    <strong>Please download the Xlxs file and clear it | Now you wirte your all products by listing and import it agein | Thank You</strong>
                </div>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div>
</div>



@endsection
