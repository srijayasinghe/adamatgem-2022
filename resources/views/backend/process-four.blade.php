
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Process / Process Lab Reports</h3>
              @if(count($process_fours)==0)
                <a href="{{route('all.process_four_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
              @endif
            </div> 
            
            <img src="/images/Web-view/Screenshot_14.jpg" style="width:auto;height:auto">
       

            @foreach($process_fours as $process_fours)

            <div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
     
     
      <form action="{{route('update.process_four',$process_fours->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">


        <div class="form-group">
            <label for="exampleInputFile">Lab Report Image</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" onchange="loandFile2(event)" name="process_center_banner" class="form-control" id="1exampleInputFile" value="{{$process_fours->process_center_banner}}" >
                
              </div>

              
                
            </div>
          </div>
          @error('process_center_banner')
                <span class="text-danger error">{{$message}}</span>
                    
          @enderror

          <div class="form-group">
            
            <img id="output1" src="{{ asset($process_fours->process_center_banner)}}" style="height: 150px; width:200px">
        
          </div>

        

          <div class="form-group">
            <label for="exampleInputCategory">Lab Report Header</label>
            <textarea type="text" id="textarea1" autofocus maxlength="20" class="form-control" id="exampleInputCategory" name="process_center_banner_text" placeholder="Enter Text" rows="1" value="{{$process_fours->process_center_banner_text}}">{{$process_fours->process_center_banner_text}}</textarea>
            
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 20</span>
             </div>
            
            
            @error('process_center_banner_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Lab Report Description 1</label>
            <textarea type="text" id="textarea2" autofocus maxlength="380" class="form-control" id="exampleInputCategory" name="process_center_text1" placeholder="Enter Text" rows="4" value="{{$process_fours->process_center_text1}}">{{$process_fours->process_center_text1}}</textarea>
            
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 380</span>
             </div>
            
            
            @error('process_center_text1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputCategory">Lab Report Description 2</label>
            <textarea type="text" id="textarea3" autofocus maxlength="700" class="form-control" id="exampleInputCategory" name="process_center_text2" placeholder="Enter Text" rows="6" value="{{$process_fours->process_center_text2}}">{{$process_fours->process_center_text2}}</textarea>
            
            <div id="count3">
            <span id="current_count3">0</span>
            <span id="maximum_count3">/ 700</span>
             </div>
            
            @error('process_center_text2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputCategory">Lab Report Description 3 </label>
            <textarea type="text" id="textarea4" autofocus maxlength="250" class="form-control" id="exampleInputCategory" name="process_center_text3" placeholder="Enter Text" rows="3" value="{{$process_fours->process_center_text3}}">{{$process_fours->process_center_text3}}</textarea>
            <div id="count4">
            <span id="current_count4">0</span>
            <span id="maximum_count4">/ 250</span>
             </div>
            
            
            @error('process_center_text3')
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



var loandFile2=function(event) {

var output=document.getElementById('output1');
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
$('#textarea4').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count4'),
        maximum_count = $('#maximum_count4'),
        count = $('#count4');    
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



 










