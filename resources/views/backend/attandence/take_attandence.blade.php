@extends('backend.master')

@section('content')
            

     <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Datatable</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Image</th>
                                                            <th>Atendness</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <?php
                                                        $count = 1;
                                                    ?>
                                             
                                                    <tbody>
                                                    @foreach($employee as $key => $emply)
                                                        
                                                    
                                                        <tr>
                                                            <td>{{ $emply->name }}</td>
                                                                <td><img src="{{ asset('photo/'.$emply->photo) }}" alt="Image" width="60" height="60"></td>
                                                                 
                                                              
                                                                
                                                                <td>
                                                                 <input type="radio" name="attendence  [{{$emply->user_id}}]" id="attendence" value="Presend"> Presend

                                                                 <input type="radio" name="attendence [{{$emply->user_id}}]" id="attendence" value="Afsend"> Afsend
                                                                   
                                                                    <input type="hidden" name="att_date" value="{{ date('d/m/y')}}">
                                                                    <input type="hidden" name="att_year" value="{{ date('Y')}}">
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