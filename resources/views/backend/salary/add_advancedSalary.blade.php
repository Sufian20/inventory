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
                <h3 class="panel-title text-white">Advanced Salary Provieder</h3>
            </div>
            <a href="{{ route('AllAdvancedsalary') }}" class="btn btn-sm btn-danger pull-right">All Advanced</a>
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
                <form role="form" action="{{route('PostAdvacedSalary')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Employee</label>
                        <select name="emp_id" id="emp_id" class="form-control @error('name') is-invalid @enderror">
                            <option>Select Oncec</option>
                            @foreach($emploeeis as $emp)
                            <option value="{{$emp->id}}"> {{ $emp->name }} </option>
                            @endforeach
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Month</label>
                <select name="month" id="month" class="form-control @error('month') is-invalid @enderror">
                    <option>Select Oncec</option>
                    <option value=" January ">January</option>
                    <option value=" February">February</option>
                    <option value=" March ">March</option>
                    <option value=" April ">April</option>
                    <option value=" May ">May</option>
                    <option value=" June ">Jun</option>
                    <option value=" July ">Julay</option>
                    <option value=" August ">August</option>
                    <option value=" September ">September</option>
                    <option value=" October ">October</option>
                    <option value=" November ">November</option>
                    <option value=" December ">December</option>

                    @error('month')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>

            </select>
        </div>

        <div class="form-group">
            <label for="advanced_salary">Advanced Salary</label>
            <input type="text" class="form-control" @error('advanced_salary') is-invalid @enderror" value="{{ old('advanced_salary') }}" name="advanced_salary" id="advanced_salary" placeholder="Enter advanced salary">
            @error('advanced_salary')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="form-group">
            <label for="year">Year</label>
            <input type="text" class="form-control" @error('year') is-invalid @enderror" value="{{ old('year') }}" name="year" id="year" placeholder="Enter year">
            @error('year')
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
