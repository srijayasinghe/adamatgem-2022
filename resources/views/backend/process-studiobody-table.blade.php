
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Process Studio Body </h3>
      </div>
     
      <form action="{{route('add.process_studiobody')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        

          <div class="form-group">
            <label for="exampleInputCategory">Process Studio Description 1</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_studios_slider_headertext1" placeholder="Enter Text" rows="3"></textarea>
            @error('process_studios_slider_headertext1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Process Studio Description 2</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_studios_slider_headertext2" placeholder="Enter Text" rows="3"></textarea>
            @error('process_studios_slider_headertext2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/process_studiobody" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
      </form>



    </div>
</div>

</div>
@endsection