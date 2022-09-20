
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Shape</h3>
      </div>
     
      <form action="{{route('update.shape',$shape->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}

        <input type="hidden" name="old_image" value="{{$shape->shape_image}}">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputCategory">Shape Name</label>
            <input type="text" id="textarea1" autofocus maxlength="50" class="form-control border-1" id="exampleInputCategory" name="shape_name" placeholder="Enter Shape" value="{{$shape->shape_name}}">
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 50</span>
             </div>
           
            @error('shape_name')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Shape Image</label>
            <div class="input-group">
              <div class="custom-file">
                {{-- <label  for="exampleInputFile">{{$shape->shape_image}}</label> --}}
                <input type="file" name="shape_image" class="form-control" id="exampleInputFile" value="{{$shape->shape_image}}" onchange="loandFile1(event)">
                
              </div>

              
                
            </div>
          </div>
          @error('shape_image')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror

          <div class="form-group">
            
            <img id="output" src="{{ asset($shape->shape_image)}}" style="height: auto; width:auto">
           
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Shape Description</label>
            <textarea type="text" id="textarea2" autofocus maxlength="500"  class="form-control border-1" id="exampleInputCategory" name="shape_description" placeholder="Enter Description" rows="3">{{$shape->shape_description}}</textarea>
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 500</span>
             </div>
           
           
           
           
            @error('shape_description')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>





        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/shape" class="btn go-back">Go Back</a>
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