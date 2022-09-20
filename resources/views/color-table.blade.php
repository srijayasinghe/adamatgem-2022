@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Color</h3>
      </div>
     
      <form action="{{route('add.color')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputColor">Color Name</label>
            <input type="text" id="textarea1" autofocus maxlength="50" class="form-control" id="exampleInputColor" name="color_name" placeholder="Enter Color">
            
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 50</span>
             </div>
            @error('color_name')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCode">Color Code</label>
            
            <input type="text" id="textarea2" autofocus maxlength="50" class="form-control colorpicker" id="exampleInputCode" name="color_code" placeholder="Enter Color Code" />

            
            @error('color_code')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputColor">Color Description</label>
            <textarea id="textarea3" autofocus maxlength="500" type="text" class="form-control" id="exampleInputColor" name="color_description" placeholder="Enter Color Description" rows="3"></textarea>
            
            <div id="count3">
            <span id="current_count3">0</span>
            <span id="maximum_count3">/ 500</span>
             </div>
            
            @error('color_description')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/color" class="btn go-back">Go Back</a>
          <button type="submit" id="ordersubmitform"  class="btn btn-success">Submit</button>
        </div>
      </form>



    </div>
</div>

<script>

$('#ordersubmitform').submit(function(){
    $(this).find('input[type=submit]').prop('disabled', true);
});




$('#textarea1').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count1'),
        maximum_count = $('#maximum_count1'),
        count = $('#count1');    
        current_count.text(characterCount);        
});

// $('#textarea2').keyup(function() {    
//     var characterCount = $(this).val().length,
//         current_count = $('#current_count2'),
//         maximum_count = $('#maximum_count2'),
//         count = $('#count2');    
//         current_count.text(characterCount);        
// });

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
