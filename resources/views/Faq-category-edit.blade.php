@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Faq Category</h3>
      </div>
     
      <form action="{{route('update.Faq_category',$faq_category->id)}}" method="POST"  enctype="multipart/form-data">
        
        {!! csrf_field() !!}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputColor">Category Name</label>
            <input type="text" id="textarea1" autofocus maxlength="80" class="form-control" id="exampleInputColor" name="faq_category_name" value="{{$faq_category->faq_category_name}}" placeholder="Enter Faq Category">
           
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 80</span>
             </div>
           
           
            @error('faq_category_name')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/Faq-category" class="btn go-back">Go Back</a>
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
