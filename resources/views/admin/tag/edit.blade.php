@extends('layouts.backend.app')
@section('title','Tag')
@push('css')
 
    <link href="{{asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

@endpush

@section('content')

        <div class="container-fluid">
            <div class="block-header">
               
            </div>
            
         
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                             
                              Add New Tag
                            </h2>
                            
                        </div>
                        <div class="body">
                        <form action="{{ route('admin.tag.update',$tags->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="name" class="form-control" name="name" value="{{$tags->name}}">
                                  
                                </div>
                            </div>

                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.tag.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">submit</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
           
          
        
        </div>
   

@endsection
@push('js')

@endpush