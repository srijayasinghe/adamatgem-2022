



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Being Sri Lanka</h3>
      </div>
     
      <form action="{{route('update.genesis_seconds',$genesis_seconds->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        


          <div class="form-group">
            <label for="exampleInputCategory">Being Sri Lanka Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_seconds_header" placeholder="Enter Description" rows="3" value="{{$genesis_seconds->genesis_seconds_header}}">{{$genesis_seconds->genesis_seconds_header}}</textarea>
            @error('genesis_seconds_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Being Sri Lanka Decription</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_seconds_body" placeholder="Enter Description" rows="3" value="{{$genesis_seconds->genesis_seconds_body}}">{{$genesis_seconds->genesis_seconds_body}}</textarea>
            @error('genesis_seconds_body')
            <span class="text-danger">{{$message}}</span>    
            @enderror
          </div>

        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/genesis_seconds" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>



    </div>
</div>

</div>
@endsection