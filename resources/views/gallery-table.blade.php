
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Gallery</h3>
      </div>
     
      <form action="{{route('add.gallery')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputCategory">Gallery Name</label>
            <input type="text" id="textarea1" autofocus maxlength="50"  class="form-control" id="exampleInputCategory" name="gallery_name" placeholder="Enter gallery name">
            
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 50</span>
             </div>
            
            
            
            
            @error('gallery_name')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>



          <div class="form-group">
            <label for="exampleInputCategory">Stone Description</label>
            <textarea name="gallery_description" id="textarea2" autofocus maxlength="400" rows="5" cols="40" class="form-control"></textarea>
            
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 400</span>
             </div>
            
            @error('gallery_description')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

         

    
          

        

     

        


      
          
     
         

          
        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/gallery" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
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