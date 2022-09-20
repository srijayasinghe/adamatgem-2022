
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Process Section Three</h3>
      </div>
     
      <form action="{{route('add.process_three')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        

          <div class="form-group">
            <label for="exampleInputCategory">Process Center Header Text 1</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_center_header1" placeholder="Enter Text" rows="3"></textarea>
            @error('process_center_header1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Process Center Header Text 2 </label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_center_header2" placeholder="Enter Text" rows="3"></textarea>
            @error('process_center_header2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputCategory">Process Center Body </label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_center_header3" placeholder="Enter Text" rows="3"></textarea>
            @error('process_center_header3')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>

        

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/process_three" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
      </form>

      </div>

    </div>
</div>

</div>
@endsection