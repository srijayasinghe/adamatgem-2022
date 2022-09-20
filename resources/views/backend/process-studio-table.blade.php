
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Process Studio </h3>
      </div>
     
      <form action="{{route('add.process_studio')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        

          <div class="form-group">
            <label for="exampleInputCategory">Process Studio Header Text</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_studios_header_text" placeholder="Enter Text" rows="3"></textarea>
            @error('process_studios_header_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Process Studio Header Text2 </label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_studios_header_text2" placeholder="Enter Text" rows="3"></textarea>
            @error('process_studios_header_text2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/process_studio" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
      </form>



    </div>
</div>

</div>
@endsection