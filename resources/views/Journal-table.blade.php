



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Journal</h3>
      </div>
     
      <form action="{{route('add.journal')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputCategory">Journal Header</label>
            <input type="text" id="textarea1" autofocus maxlength="100" class="form-control" id="exampleInputCategory" name="post_text" placeholder="Enter journal">
            
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 100</span>
             </div>
            
            
            @error('post_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Journal Image</label>
            <div class="input-group">
              <div class="custom-file">
               
                <input type="file" name="post_main_image" class="form-control" id="exampleInputFile" onchange="loandFile1(event)">
                
              </div>

             
                
            </div>
          </div>
          @error('post_main_image')
                <span class="text-danger">{{$message}}</span>
                    
          @enderror

          <img id="output" width="100px"/>

          <div class="form-group">
            <label for="exampleInputCategory">Journal body</label>
            <textarea type="text" rows="80" cols="40" class="form-control ckeditor" name="post_body"></textarea>
            @error('post_body')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/journal-fq" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
      </form>



    </div>
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



</script>


<!-- <script src="//cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script> -->
<script src="https://cdn.ckeditor.com/4.13.0/full-all/ckeditor.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });


    CKEDITOR.replace('post_body', {
        filebrowserUploadUrl: "{{route('journal.image', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',
        height: "500px"
        
    });

    
</script>
@endsection