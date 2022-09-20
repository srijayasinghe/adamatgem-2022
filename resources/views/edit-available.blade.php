@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Availability</h3>
      </div>
     
      <form action="{{route('update.available',$availability->id)}}" method="POST"  enctype="multipart/form-data">
        
        {!! csrf_field() !!}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputColor">Availability Name</label>
            <input type="text" id="textarea1" autofocus maxlength="50" class="form-control" id="exampleInputColor" name="Available_name" value="{{$availability->Available_name}}" placeholder="Enter Availability">
            
            
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 50</span>
             </div>
            
            
            @error('Available_name')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/available" class="btn go-back">Go Back</a>
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


</script>

</div>

 @endsection
