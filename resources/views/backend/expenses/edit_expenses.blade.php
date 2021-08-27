@extends('backend.master')

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="pull-left page-title">Add Supliers !</h4>
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
                <h3 class="panel-title">Edit Expenses <span>
                        <a href="" class=" btn btn-sm btn-danger pull-right">This Month</a>
                        <a href="{{route('TodayExpenses')}}" class=" btn btn-sm btn-info pull-right">Today</a>
                    </span></h3>
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
                <form role="form" action="{{route('PostExpenses')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="details">Expenses Details </label>
                        <textarea type="text" class="form-control" name="details" id="details" @error('details') is-invalid @enderror" value="{{ old( 'details') }}">
                        {{$expenses->details}}
                        </textarea>

                        @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="amount" row="4" class="form-control" @error('amount') is-invalid @enderror" value="{{ $expenses->amount ?? old( 'amount') }}" name="amount" id="amount" placeholder="Enter Amount">
                        @error('amount')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">

                        <input type="hidden" class="form-control" value="{{date("d/m/y")}}" name="date" id="date">


                    </div>
                    <div class="form-group">

                        <input type="hidden" class="form-control" value="{{ date("F") }}" name="month" id="month">
                        <input type="hidden" class="form-control" value="{{ date("Y") }}" name="month" id="month">


                    </div>

                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>


                </form>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div>
</div>



@endsection
