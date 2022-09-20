
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Process Header Section</h3>
      </div>
     
      <form action="{{route('add.process_one')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        

          <div class="form-group">
            <label for="exampleInputCategory">Process Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_header_text" placeholder="Enter Text" rows="3"></textarea>
            @error('process_header_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Process Header Body</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_header_body" placeholder="Enter Text" rows="3"></textarea>
            @error('process_header_body')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

       

          

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/process_one" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
      </form>
</div>


    </div>
</div>

</div>
@endsection