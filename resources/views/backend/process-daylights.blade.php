
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Process / Process Daylights</h3>
              @if(count($process_daylights)==0)
                <a href="{{route('all.process_daylights_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
                @endif
            </div>  
            <img src="/images/Web-view/Screenshot_18.jpg" style="width:auto;height:auto">  
        
       

            @foreach($process_daylights as $process_daylights)

            <div class="d-flex justify-content-center process-daylight">
<div class="col-md-8">
    
    <div class="card card-primary">
     
     
      <form action="{{route('update.process_daylights',$process_daylights->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
          <div class="form-group">
            <label for="exampleInputFile">Daylights  Image</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_daylights_image" class="form-control" id="1exampleInputFile" value="{{$process_daylights->process_daylights_image}}" onchange="loandFile1(event)">
                
              </div>

              
                
            </div>
          </div>

          @error('process_daylights_image')
                <span class="text-danger">{{$message}}</span>
                    
          @enderror

          <div class="form-group">
            
            <img id="output" src="{{ asset($process_daylights->process_daylights_image)}}" style="height: 150px; width:200px">
        
            </div>


         


          <div class="form-group">
            <label for="exampleInputCategory">Daylights Header </label>
            <textarea type="text" id="textarea1" autofocus maxlength="20" class="form-control" id="exampleInputCategory" name="process_daylights_header" placeholder="Enter Description" rows="2" value="{{$process_daylights->process_daylights_header}}">{{$process_daylights->process_daylights_header}}</textarea>
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 20</span>
             </div>
            
            @error('process_daylights_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Daylights Description</label>
            <textarea type="text" id="textarea2" autofocus maxlength="250" class="form-control tinymce-editor" id="exampleInputCategory" name="process_daylights_text1" placeholder="Enter Description" rows="3" value="{{$process_daylights->process_daylights_text1}}">{{$process_daylights->process_daylights_text1}}</textarea>
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 250</span>
             </div>
            
            @error('process_daylights_text1')
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
$('#textarea3').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count3'),
        maximum_count = $('#maximum_count3'),
        count = $('#count3');    
        current_count.text(characterCount);        
});



</script>

</div>

            @endforeach 
            
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



 










