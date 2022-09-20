



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Company Body</h3>
      </div>
     
      <form action="{{route('update.genesis_body',$genesis_bodys->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
         

          <div class="form-group">
            <label for="exampleInputCategory">Genesis Body Header Purple</label>
            <input type="text" class="form-control" id="exampleInputCategory" name="genesis_body_header1" placeholder="Enter Text" rows="3" value="{{$genesis_bodys->genesis_body_header1}}"/>
            @error('genesis_body_header1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Genesis Body Header Black</label>
            <input type="text" class="form-control" id="exampleInputCategory" name="genesis_body_header2" placeholder="Enter Text" rows="3" value="{{$genesis_bodys->genesis_body_header2}}">
            @error('genesis_body_header2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>


          
          <div class="form-group">
            <label for="exampleInputCategory">Genesis Body</label>
            <input type="text" value="{{$genesis_bodys->genesis_body_text}}" class="form-control" id="exampleInputCategory" name="genesis_body_text" placeholder="Enter Text" rows="3">
            @error('genesis_body_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>



        <div class="form-group">
            <label for="exampleInputFile">Genesis Body Image 1 (W:161px H:140px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="genesis_body_image1" class="form-control" id="1exampleInputFile" value="{{$genesis_bodys->genesis_body_image1}}" onchange="loandFile1(event)">
                
              </div>

              @error('genesis_body_image1')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
        </div>

        <div class="form-group">
            
            <img id="output" src="{{asset($genesis_bodys->genesis_body_image1)}}" style="height: auto; width:auto">
        
         </div>

        <div class="form-group">
            <label for="exampleInputCategory">Genesis Image1 Header</label>
            <input type="text" class="form-control" id="exampleInputCategory" name="genesis_image1_header" placeholder="Enter Text" rows="3" value="{{$genesis_bodys->genesis_image1_header}}">
            @error('genesis_image1_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Genesis Image1 Description</label>
            <input type="text" class="form-control" id="exampleInputCategory" name="genesis_image1_body" placeholder="Enter Text" rows="3" value="{{$genesis_bodys->genesis_image1_body}}">
            @error('genesis_image1_body')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>


          <div class="form-group">
            <label for="exampleInputFile">Genesis Body Image 2 (W:161px H:155px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file"value="{{$genesis_bodys->genesis_body_image2}}" name="genesis_body_image2" class="form-control" id="1exampleInputFile" onchange="loandFile2(event)">
                
              </div>

              @error('genesis_body_image2')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
        </div>

        <div class="form-group">
            
            <img id="output1" src="{{asset($genesis_bodys->genesis_body_image2)}}" style="height: auto; width:auto">
        
         </div>


        <div class="form-group">
            <label for="exampleInputCategory">Genesis Image 2 Header </label>
            <input type="text" class="form-control" id="exampleInputCategory" name="genesis_image2_header" placeholder="Enter Text" rows="3" value="{{$genesis_bodys->genesis_image2_header}}">
            @error('genesis_image2_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>

          <div class="form-group">
            <label for="exampleInputCategory">Genesis Image 2 Description</label>
            <input type="text" class="form-control" id="exampleInputCategory" name="genesis_image2_body" placeholder="Enter Text" rows="3" value="{{$genesis_bodys->genesis_image2_body}}">
            @error('genesis_image2_body')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>




        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/genesis_body" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
        </div>


   </div>
      </form>



    </div>
</div>

<script>

var loandFile1=function(event) {

  var output=document.getElementById('output');
  output.src=URL.createObjectURL(event.target.files[0]); 
};

var loandFile2=function(event) {

var output=document.getElementById('output1');
output.src=URL.createObjectURL(event.target.files[0]); 
};



</script>

</div>
@endsection