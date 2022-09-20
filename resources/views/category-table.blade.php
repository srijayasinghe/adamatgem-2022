



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Category</h3>
      </div>
     
      <form action="{{route('add.category')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputCategory">Category Name</label>
            <input type="text" id="textarea1" autofocus maxlength="50" class="form-control" id="Categoryname" name="category_name" placeholder="Enter Category">
           
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 50</span>
             </div>
          </div>

          @error('category_name')
            <span class="text-danger">{{$message}}</span>
                
          @enderror

          <div class="form-group">
                    <div class="custom-control custom-switch">
                     
                      <input type="checkbox" name="name_value" value="1"  class="custom-control-input" id="customSwitch1">
                     
                      <label class="custom-control-label" for="customSwitch1">Hide the Category Name</label>
                    </div>
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Category Image</label>
            <div class="input-group">
              <div class="custom-file">
               
                <input type="file" name="category_image" class="form-control" id="exampleInputFile" onchange="loandFile1(event)">
                
              </div>

              
                
            </div>
          </div>
          @error('category_image')
                <span class="text-danger">{{$message}}</span>          
          @enderror

          <img id="output" width="100px"/>


          

           


          <div class="form-group">
            <label for="exampleInputCategory">Category description</label>
            <textarea type="text" id="textarea2" autofocus maxlength="350" class="form-control"  rows="10" cols="40"  id="exampleInputCategory" name="category_description" placeholder="Enter category description"></textarea>
            
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 350</span>
             </div>
            
            
            
            @error('category_description')
            <span class="text-danger">{{$message}}</span>
                
            @enderror

            <div class="form-group">
                    <div class="custom-control custom-switch">
                     
                      <input type="checkbox" name="description_value" value="1"  class="custom-control-input" id="customSwitch2">
                     
                      <label class="custom-control-label" for="customSwitch2">Hide the Category Description</label>
                    </div>
          </div>

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