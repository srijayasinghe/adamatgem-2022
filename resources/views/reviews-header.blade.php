
@extends('layouts.app-style') 
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Reviews / Reviews Header</h3>
              @if(count($reviews) == 0)
                <a href="{{route('all.reviews_header_new')}}" class="btn btn-info" style="float: right;"><i class="fas fa-edit"></i></a>
                @endif
            </div>   
            <img src="/images/Web-view/Screenshot_22.jpg" style="width:auto;height:auto">  
        
       

            @foreach($reviews as $reviews)

            <div class="d-flex justify-content-center reviews-header">
<div class="col-md-8">
    
    <div class="card card-primary">
     
     
      <form action="{{route('update.reviews_header',$reviews->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">

        <div class="form-group">
            <label for="exampleInputFile">Banner  Image</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="reviews_banner_image" class="form-control" id="1exampleInputFile" value="{{$reviews->reviews_banner_image}}" onchange="loandFile1(event)">
                
              </div>

             
                
            </div>
          </div>

          @error('reviews_banner_image')
                <span class="text-danger">{{$message}}</span>
                    
          @enderror


          <div class="form-group">
            
            <img id="output" src="{{ asset($reviews->reviews_banner_image)}}" style="height: 200px; width:400px">
           
          </div>
        


          <div class="form-group">
            <label for="exampleInputCategory">Banner Header</label>
            <textarea type="text" id="textarea1" autofocus maxlength="20" class="form-control" id="exampleInputCategory" name="reviews_header_header" placeholder="Enter Review Header"  rows="2" value="{{$reviews->reviews_header_header}}">{{$reviews->reviews_header_header}}</textarea>
           
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 20</span>
             </div>
           
            @error('reviews_header_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Banner Description</label>
            <textarea type="text" id="textarea2" autofocus maxlength="250"  class="form-control" id="exampleInputCategory" name="reviews_header_text" placeholder="Enter Review Header"  rows="4" value="{{$reviews->reviews_header_text}}">{{$reviews->reviews_header_text}}</textarea>
            

            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 250</span>

            </div>
            
            @error('reviews_header_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>








         


        
        <!-- /.card-body -->

        <div class="card-footer">
         
          <button type="submit"  class="btn btn-success">Update</button>
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

$('#textarea2').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count2'),
        maximum_count = $('#maximum_count2'),
        count = $('#count2');    
        current_count.text(characterCount);        
});



</script>

</div>

            @endforeach


           
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->




  

 @endsection



 










