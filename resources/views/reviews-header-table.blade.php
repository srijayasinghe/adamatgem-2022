
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Review Header</h3>
      </div>
     
      <form action="{{route('add.reviews_header')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">

        <div class="form-group">
            <label for="exampleInputFile">Banner  Image (W:1920px,H:800px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="reviews_banner_image" class="form-control" id="1exampleInputFile" onchange="loandFile1(event)">
                
              </div>

              @error('reviews_banner_image')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <img id="output" width="100px"/>


          <div class="form-group">
            <label for="exampleInputCategory">Banner Header</label>
            <textarea type="text"  class="form-control" id="exampleInputCategory" name="reviews_header_header" placeholder="Enter Review Header"  rows="2"></textarea>
            @error('reviews_header_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Banner Description</label>
            <textarea type="text"  class="form-control" id="exampleInputCategory" name="reviews_header_text" placeholder="Enter Review Header"  rows="2"></textarea>
            @error('reviews_header_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>


        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/reviews_header" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
      </form>

</div>

    </div>
</div>

<script>

var loandFile1=function(event) {

  var output=document.getElementById('output');
  output.src=URL.createObjectURL(event.target.files[0]); 
};





</script>

</div>
@endsection