



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Our Company</h3>
      </div>
     
      <form action="{{route('update.genesis_header',$genesis_headers->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        


          <div class="form-group">
            <label for="exampleInputCategory">Our Company Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_header" placeholder="Enter Description" rows="3" value="{{$genesis_headers->genesis_header}}">{{$genesis_headers->genesis_header}}</textarea>
            @error('genesis_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Our Company Description</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_body" placeholder="Enter Description" rows="3" value="{{$genesis_headers->genesis_body}}">{{$genesis_headers->genesis_body}}</textarea>
            @error('genesis_body')
            <span class="text-danger">{{$message}}</span>    
            @enderror
          </div>

        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/genesis_header" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>



    </div>
</div>

</div>
@endsection