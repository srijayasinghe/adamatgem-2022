



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Map Section</h3>
      </div>
     
      <form action="{{route('add.adamant_map')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        


          <div class="form-group">
            <label for="exampleInputCategory">Map Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="home_map_text" placeholder="Enter Description" rows="3"></textarea>
            @error('home_map_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Map Description</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="home_map_body" placeholder="Enter Description" rows="3"></textarea>
            @error('home_map_body')
            <span class="text-danger">{{$message}}</span>    
            @enderror
          </div>

        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/adamant_map" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
      </form>



    </div>
</div>

</div>
@endsection