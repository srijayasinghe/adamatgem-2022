



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Process Studio Slider</h3>
      </div>
     
      <form action="{{route('add.process_studioslider')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
          <div class="form-group">
            <label for="exampleInputFile">Studio Image</label>
            <div class="input-group">
              <div class="custom-file"> 
                <input type="file" name="process_studios_slider_image" class="form-control" id="1exampleInputFile" onchange="loandFile1(event)">  
              </div>

              
                
            </div>
          </div>

          @error('process_studios_slider_image')
                <span class="text-danger">{{$message}}</span>     
          @enderror

          <img id="output" width="100px"/>
         


          <div class="form-group">
            <label for="exampleInputCategory">Studio Description</label>
            <textarea type="text" id="textarea1" autofocus maxlength="40" class="form-control" id="exampleInputCategory" name="process_studios_slider_endtext" placeholder="Enter Description" rows="3"></textarea>
            
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 40</span>
            </div>

            @error('process_studios_slider_endtext')
            <span class="text-danger">{{$message}}</span>    
            @enderror
          </div>

      

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/process-studioslider" class="btn go-back">Go Back</a>
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


$('#textarea1').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count1'),
        maximum_count = $('#maximum_count1'),
        count = $('#count1');    
        current_count.text(characterCount);        
});






</script>

</div>
@endsection