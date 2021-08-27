@extends('backend.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">All Category <a href="{{ route('AddCategory') }}" class="btn btn-sm btn-info pull-right">Add New</a></h3>

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category Name</th>
                                    <th>Action </th>

                                </tr>
                            </thead>


                            <tbody>
                                @foreach($categoris as $key => $cat)


                                <tr>

                                    <td>{{ $cat->id }}</td>

                                    <td>{{$cat->cat_name}}</td>


                                    <td>
                                        <a href="{{ url('edit-categroy') }}/{{ $cat->id }}" class="btn btn-sm btn-info">Edit</a>

                                        <a href="{{ url('delete-categroy') }}/{{ $cat->id }}" class="btn btn-sm btn-danger" id="sa-warning">Delete</a>


                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- End Row -->



@endsection
