



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Clarity</h3>
      </div>
     
      <form action="{{route('update.clarity',$clarity->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputCategory">Clarity Name</label>
            <input type="text" id="textarea1" autofocus maxlength="50" class="form-control" id="exampleInputCategory" name="clarity_name" placeholder="Enter Clarity" value="{{$clarity->clarity_name}}">
           
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 50</span>
             </div>
           
            @error('clarity_name')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Clarity Description</label>
            <textarea type="text" id="textarea2" autofocus maxlength="500" class="form-control" id="exampleInputCategory" name="clarity_description" placeholder="Enter Description" rows="3" value="{{$clarity->clarity_description}}">{{$clarity->clarity_description}}</textarea>
           
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 500</span>
             </div>
           
           
           
           
            @error('clarity_description')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/clarity" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>



    </div>
</div>

<script>



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