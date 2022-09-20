
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Faq</h3>
      </div>
     
      <form action="{{route('update.faq',$faq_data->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
            <div class="form-group">
                <label for="document">Select Category Name </label>
                <select class="form-control" name="faq_category_id">
                  <option value="" selected="" disabled="">Update Faq Category Name</option>
                @foreach($faq_category as $faq_category)
                <option value="{{$faq_category->id}}" {{($faq_data->faq_category_id==$faq_category->id)? 'selected':''}}>{{$faq_category->faq_category_name}}</option>
                @endforeach 
        
                </select>
              </div>

          <div class="form-group">
            <label for="exampleInputCategory">Header</label>
            <textarea type="text" id="textarea1" autofocus maxlength="120" class="form-control" id="exampleInputCategory" name="faq_question" placeholder="Enter Faq Question" value={{$faq_data->faq_question}}>{{$faq_data->faq_question}}</textarea>
           
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 120</span>
             </div>
           
            @error('faq_question')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Header Description</label>
            <textarea type="text" id="textarea2" autofocus maxlength="1000" class="form-control tinymce-editor" rows="5" cols="40" id="exampleInputCategory" name="faq_answer" placeholder="Enter Faq Answer"value={{$faq_data->faq_answer}} >{{$faq_data->faq_answer}}</textarea>
            
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 1000</span>
             </div>
            
            @error('faq_answer')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
        </div>


        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/faq-fq" class="btn go-back">Go Back</a>
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