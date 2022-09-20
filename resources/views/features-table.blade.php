
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Features</h3>
      </div>
     
      <form action="{{route('add.feature')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        <div class="form-group">
            <label for="document">Select Category</label>
            <select class="form-control" name="category_id">
              <option value="" selected="" disabled="">Select Category</option>
            @foreach($categorys as $category)
            <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach 
    
            </select>
          </div>



          <div class="form-group">
            <label for="document">Feature Images (W:1800px,H:1200px)</label>
            <div class="needsclick dropzone" id="document-dropzone" >
    
            </div>
            @error('feature_images')
              <span class="text-danger">{{$message}}</span>
                  
              @enderror
          </div> 

          
        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/category" class="btn go-back">Go Back</a>
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