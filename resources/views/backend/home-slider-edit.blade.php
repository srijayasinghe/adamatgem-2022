



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-10">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Home Slider</h3>
      </div>
     
      <form action="{{route('update.adamant_slider',$home_sliders->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">        
          <div class="form-group">
            <label for="exampleInputFile">Banner Image</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="home_banner_image" class="form-control" id="1exampleInputFile" value="{{$home_sliders->home_banner_image}}" onchange="loandFile1(event)">
                
              </div>



               
                
            </div>
            
            @error('home_banner_image')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
            
          </div>

       

          <div class="form-group">
            
            <img id="output" src="{{ asset($home_sliders->home_banner_image)}}" style="height: 200px; width:400px">
        
            </div>


           <div class="form-group">
            <label for="exampleInputFile">Gem Image</label>
            <div class="input-group">
              <div class="custom-file ">
                
                <input type="file" name="home_body_image" class="form-control" id="exampleInputFile" value="{{$home_sliders->home_body_image}}" onchange="loandFile2(event)">
                
              </div>

              

                
                
            </div>
            @error('home_body_image')
                <span class="text-danger">{{$message}}</span>
                    
            @enderror
          
          </div>
          
          <div class="form-group">
            
            <img  id="output1" src="{{ asset($home_sliders->home_body_image)}}" style="height: 150px; width:195px">
      
          </div>


          <div class="form-group">
            <label for="exampleInputCategory">Banner Title</label>
            <textarea id="textarea1" autofocus maxlength="50" type="text" class="form-control" id="exampleInputCategory" name="home_banner_header" placeholder="Enter Description" rows="3" value="{{$home_sliders->home_banner_header}}">{{$home_sliders->home_banner_header}}</textarea>
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 50</span>
             </div>
          </div>
          @error('home_banner_header')
            <span class="text-danger">{{$message}}</span>
                
          @enderror

        <div class="form-group">
            <label for="exampleInputCategory">Banner Description</label>
            <textarea id="textarea2" autofocus maxlength="100" type="text" class="form-control" id="exampleInputCategory" name="home_banner_description" placeholder="Enter Description" rows="3" value="{{$home_sliders->home_banner_description}}">{{$home_sliders->home_banner_description}}</textarea>
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 100</span>
             </div>
          </div>
          @error('home_banner_description')
            <span class="text-danger">{{$message}}</span>
                
            @enderror

        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/adamant-slider" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
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

$('#textarea1').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count1'),
        maximum_count = $('#maximum_count1'),
        count = $('#count1');    
        current_count.text(characterCount);        
});

$('#textarea2').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count2'),
        maximum_count = $('#maximum_count2'),
        count = $('#count2');    
        current_count.text(characterCount);        
});



</script>

</div>
@endsection