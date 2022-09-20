



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Our Values</h3>
      </div>
     
      <form action="{{route('update.adamant_select',$home_selects->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
          <div class="form-group">
            <label for="exampleInputFile">Logo</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="home_selectus_logo" class="form-control" id="1exampleInputFile" value="{{$home_selects->home_selectus_logo}}" onchange="loandFile1(event)">
                
              </div>

              
                
            </div>
          </div>
          @error('home_selectus_logo')
           <span class="text-danger">{{$message}}</span>
                    
          @enderror

          <div class="form-group">
            
            <img id="output1" src="{{ asset($home_selects->home_selectus_logo)}}" style="height: 150px; width:200px">
        
            </div>


  


          <div class="form-group">
            <label for="exampleInputCategory">Header</label>
            <textarea id="textarea1" autofocus maxlength="40" type="text" class="form-control" id="exampleInputCategory" name="home_selectus_header" placeholder="Enter Description" rows="3" value="{{$home_selects->home_selectus_header}}">{{$home_selects->home_selectus_header}}</textarea>
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 40</span>
             </div>


          </div>
          @error('home_selectus_header')
            <span class="text-danger">{{$message}}</span>
                
          @enderror

        <div class="form-group">
            <label for="exampleInputCategory">Description</label>
            <textarea id="textarea2" autofocus maxlength="180" type="text" class="form-control" id="exampleInputCategory" name="home_selectus_body" placeholder="Enter Description" rows="3" value="{{$home_selects->home_selectus_body}}">{{$home_selects->home_selectus_body}}</textarea>
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 180</span>
             </div>
          </div>
          @error('home_selectus_body')
            <span class="text-danger">{{$message}}</span>
                
            @enderror

        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/adamant-select" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>



    </div>
</div>


<script>

var loandFile1=function(event) {

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