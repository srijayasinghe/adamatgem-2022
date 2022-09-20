



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Home Slider</h3>
      </div>
     
      <form action="{{route('add.adamant_slider')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
          <div class="form-group">   
          <label for="exampleInputFile">Banner Image</label>

            <div class="input-group">

              <div class="custom-file">

               
                
                <input type="file" name="home_banner_image" class="form-control" id="1exampleInputFile" onchange="loandFile1(event)">
               
              </div>
              
             
                
            </div>

            @error('home_banner_image')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
            
          </div>

          <img id="output" width="100px"/>
          
            


           <div class="form-group">
            <label for="exampleInputFile">Gem Image</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="home_body_image" class="form-control" id="exampleInputFile" onchange="loandFile2(event)">
                
              </div>

            
                
            </div>
            @error('home_body_image')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
          </div>

          <img id="output1" width="100px"/>

          <div class="form-group">
            <label for="exampleInputCategory">Banner Title</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="home_banner_header" placeholder="Enter Description" rows="3"></textarea>
            
          </div>
          @error('home_banner_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror

        <div class="form-group">
            <label for="exampleInputCategory">Banner Description</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="home_banner_description" placeholder="Enter Description" rows="3"></textarea>
           
          </div>
          @error('home_banner_description')
            <span class="text-danger">{{$message}}</span>
                
            @enderror

        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/adamant-slider" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
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