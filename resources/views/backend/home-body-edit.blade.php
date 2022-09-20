



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Update Body Section</h3>
      </div>
     
      <form action="{{route('update.adamant_body',$home_body->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
          <div class="form-group">
            <label for="exampleInputFile">Body Image (W:1920px H:481px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="home_body_banner" class="form-control" id="1exampleInputFile" value="{{$home_body->home_body_banner}}" onchange="loandFile1(event)">
                
              </div>

             
                
            </div>
          </div>
          @error('home_body_banner')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
          <div class="form-group">
            
            <img id="output1" src="{{ asset($home_body->home_body_banner)}}" style="height: 200px; width:400px">
        
        </div>


         


          <div class="form-group">
            <label for="exampleInputCategory">Body  Header 1</label>
            <textarea id="textarea" autofocus maxlength="300" type="text" class="form-control" id="exampleInputCategory" name="home_body_banner_text1" placeholder="Enter Text" rows="3" value="{{$home_body->home_body_banner_text1}}">{{$home_body->home_body_banner_text1}}</textarea>
            
            <div id="count">
            <span id="current_count">0</span>
            <span id="maximum_count">/ 300</span>
             </div>


          </div>
          @error('home_body_banner_text1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror

          <div class="form-group">
            <label for="exampleInputCategory">Body Header 2</label>
            <textarea id="textarea1" autofocus maxlength="300" type="text" class="form-control" id="exampleInputCategory" name="home_body_banner_text2" placeholder="Enter Text" rows="3" value="{{$home_body->home_body_banner_text2}}">{{$home_body->home_body_banner_text2}}</textarea>
            
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 300</span>
             </div> 

          </div>
          @error('home_body_banner_text2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror

          <div class="form-group">
            <label for="exampleInputCategory">Body Header 3</label>
            <textarea id="textarea2" autofocus maxlength="300" type="text" class="form-control" id="exampleInputCategory" name="home_body_text" placeholder="Enter Text" rows="3" value="{{$home_body->home_body_text}}">{{$home_body->home_body_text}}</textarea>
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 300</span>
             </div>
            
          </div>
          @error('home_body_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror

        <div class="form-group">
            <label for="exampleInputCategory">Body Paragraph 1</label>
            <textarea id="textarea3" autofocus maxlength="900" type="text" class="form-control tinymce-editor" rows="5" cols="40" id="exampleInputCategory" name="home_body_content" placeholder="Enter Text" value="{{$home_body->home_body_content}}">{{$home_body->home_body_content}}</textarea>
           
            <div id="count3">
            <span id="current_count3">0</span>
            <span id="maximum_count3">/ 900</span>
             </div>
           
          </div>

          @error('home_body_content')
            <span class="text-danger">{{$message}}</span>
                
            @enderror



        <div class="form-group">
            <label for="exampleInputFile">Body Logo (W:588px H:500px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="home_body_logo" class="form-control" id="exampleInputFile" value="{{$home_body->home_body_logo}}" onchange="loandFile2(event)">
                
              </div>

             

                
         
                
            </div>
          </div>
          @error('home_body_logo')
                <span class="text-danger">{{$message}}</span>
                    
           @enderror

          <div class="form-group">
            
            <img id="output2" src="{{asset($home_body->home_body_logo)}}" style="height: 200px; width:400px">
        
         </div>

 
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/adamant-body" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
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

$('#textarea').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count'),
        maximum_count = $('#maximum_count'),
        count = $('#count');    
        current_count.text(characterCount);        
});

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
$('#textarea3').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count3'),
        maximum_count = $('#maximum_count3'),
        count = $('#count3');    
        current_count.text(characterCount);        
});


</script>

</div>
@endsection