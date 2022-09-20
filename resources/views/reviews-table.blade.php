
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Reviews</h3>
      </div>
     
      <form action="{{route('add.reviews')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">


          <div class="form-group">
            <label for="exampleInputCategory">Header</label>
            <textarea type="text" id="textarea1" autofocus maxlength="120"  class="form-control" id="exampleInputCategory" name="reviews_header" placeholder="Enter Review Header"  rows="2"></textarea>
           
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 120</span>
             </div>
           
            @error('reviews_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Content</label>
            <textarea name="reviews_body" id="textarea2" autofocus maxlength="1000" rows="5" cols="40" class="form-control tinymce-editor"></textarea>
           
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 1000</span>
             </div>

            
            @error('reviews_body')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Client</label>
            <textarea type="text" id="textarea3" autofocus maxlength="50" class="form-control" id="exampleInputCategory" name="reviews_client" placeholder="Enter Review client"  rows="2"></textarea>
            
            <div id="count3">
            <span id="current_count3">0</span>
            <span id="maximum_count3">/ 50</span>
             </div>
            
            
            @error('reviews_client')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">City</label>
            <textarea type="text" id="textarea4" autofocus maxlength="50" class="form-control" id="exampleInputCategory" name="reviews_city" placeholder="Enter Review City"  rows="2"></textarea>
            
            <div id="count4">
            <span id="current_count4">0</span>
            <span id="maximum_count4">/ 50</span>
             </div>
            
            
            @error('reviews_city')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
         
          
          
           
          </div>
         

          
        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/reviews-fq" class="btn go-back">Go Back</a>
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

$('#textarea3').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count3'),
        maximum_count = $('#maximum_count3'),
        count = $('#count3');    
        current_count.text(characterCount);        
});

$('#textarea4').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count4'),
        maximum_count = $('#maximum_count4'),
        count = $('#count4');    
        current_count.text(characterCount);        
});



</script>

</div>
@endsection