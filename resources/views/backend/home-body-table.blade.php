



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Body Section</h3>
      </div>
     
      <form action="{{route('add.adamant_body')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
          <div class="form-group">
            <label for="exampleInputFile">Body Image (W:1920px H:481px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="home_body_banner" class="form-control" id="1exampleInputFile" onchange="loandFile1(event)">
                
              </div>

              @error('home_body_banner')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>


          <img id="output1" width="100px"/>


          <div class="form-group">
            <label for="exampleInputCategory">Body  Header 1</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="home_body_banner_text1" placeholder="Enter Text" rows="3"></textarea>
            @error('home_body_banner_text1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Body Header 2</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="home_body_banner_text2" placeholder="Enter Text" rows="3"></textarea>
            @error('home_body_banner_text2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Body Header 3</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="home_body_text" placeholder="Enter Text" rows="3"></textarea>
            @error('home_body_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Body Paragraph 1</label>
            <textarea type="text" class="form-control tinymce-editor" rows="5" cols="40" id="exampleInputCategory" name="home_body_content" placeholder="Enter Text"></textarea>
            @error('home_body_content')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        



        <div class="form-group">
            <label for="exampleInputFile">Body Logo (W:588px H:500px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="home_body_logo" class="form-control" id="exampleInputFile" onchange="loandFile2(event)">
                
              </div>

              @error('home_body_logo')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>
          <img id="output2" width="100px"/>
        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/adamant-body" class="btn go-back">Go Back</a>
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

var loandFile2=function(event) {

var output=document.getElementById('output2');
output.src=URL.createObjectURL(event.target.files[0]); 
};



</script>

</div>
@endsection