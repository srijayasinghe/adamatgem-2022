
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Our Stone</h3>
      </div>
     
      <form action="{{route('add.our_stone')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
          <div class="form-group">
            <label for="exampleInputFile">Banner Image</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="our_stone_banner" class="form-control" id="1exampleInputFile" onchange="loandFile1(event)">
                
              </div>

              @error('our_stone_banner')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>


          <img id="output1" width="100px"/>


          <div class="form-group">
            <label for="exampleInputCategory">Banner Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="our_stone_header" placeholder="Enter Text" rows="3"></textarea>
            @error('our_stone_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Banner Description</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="our_stone_body" placeholder="Enter Description" rows="3"></textarea>
            @error('our_stone_body')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
        
        
        
        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/our_stone" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
      </form>

</div>

    </div>
</div>
<script>

var loandFile1=function(event) {

  var output=document.getElementById('output1');
  output.src=URL.createObjectURL(event.target.files[0]); 
};





</script>

</div>
@endsection