
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Section 02</h3>
      </div>
     
      <form action="{{route('update.process_two',$process_twos->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        

          <div class="form-group">
            <label for="exampleInputCategory">Header</label>
            <textarea type="text" id="textarea1" autofocus maxlength="30" class="form-control" id="exampleInputCategory" name="process_sub_header" placeholder="Enter Text" rows="3" value="{{$process_twos->process_sub_header}}">{{$process_twos->process_sub_header}}</textarea>
            
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 30</span>
             </div>
            
            
            @error('process_sub_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Subheader</label>
            <textarea type="text" id="textarea2" autofocus maxlength="100" class="form-control" id="exampleInputCategory" name="process_sub_header2" placeholder="Enter Text" rows="3" value="{{$process_twos->process_sub_header2}}">{{$process_twos->process_sub_header2}}</textarea>
           
           
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 100</span>
             </div>
           
           
           
           
           
           
           
            @error('process_sub_header2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>


          
        <div class="form-group">
            <label for="exampleInputCategory">Description</label>
            <textarea type="text" id="textarea3" autofocus maxlength="300" class="form-control" id="exampleInputCategory" name="process_sub_body" placeholder="Enter Text" rows="3" value="{{$process_twos->process_sub_body}}">{{$process_twos->process_sub_body}}</textarea>
            
            
            <div id="count3">
            <span id="current_count3">0</span>
            <span id="maximum_count3">/ 300</span>
             </div>
            
            
            
            @error('process_sub_body')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>


          <div class="form-group">
            <label for="exampleInputFile">Process Sub Body Image</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_sub_image1" class="form-control" id="1exampleInputFile" value="{{$process_twos->process_sub_image1}}" onchange="loandFile2(event)">
                
              </div>     
            </div>
          </div>
          @error('process_sub_image1')
                <span class="text-danger">{{$message}}</span>
                    
          @enderror

          <div class="form-group">
            
            <img id="output1" src="{{asset($process_twos->process_sub_image1)}}" style="height: 150px; width:200px">
        
           </div>


          

        
      

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/process-two" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>

      </div>

    </div>
</div>

<script>

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