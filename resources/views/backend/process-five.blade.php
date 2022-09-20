
@extends('layouts.app-style') 
@section('content')


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Process / Process Final</h3>
              @if(count($process_lasts)==0)
                <a href="{{route('all.process_five_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
                @endif
            </div>  
            <img src="/images/Web-view/Screenshot_20.jpg" style="width:auto;height:auto">  
            
            @foreach($process_lasts as $process_lasts)

            <div class="d-flex justify-content-center process-last">
<div class="col-md-8">
    
    <div class="card card-primary">
     
     
      <form action="{{route('update.process_five',$process_lasts->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">

        

          <div class="form-group">
            <label for="exampleInputCategory">Process Final Header</label>
            <textarea type="text" id="textarea1" autofocus maxlength="180" class="form-control tinymce-editor" id="exampleInputCategory" name="process_new_banner" placeholder="Enter Text" rows="3" value="{{$process_lasts->process_new_banner}}">{{$process_lasts->process_new_banner}}</textarea>
          
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 180</span>
             </div>
          
            @error('process_new_banner')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>



          <div class="form-group">
            <label for="exampleInputFile">Process Final Banner Image</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_new_body_image" class="form-control" id="1exampleInputFile" value="{{$process_lasts->process_new_body_image}}" onchange="loandFile1(event)">
                
              </div>

              
                
            </div>
        </div>
        @error('process_new_body_image')
                <span class="text-danger">{{$message}}</span>
                    
        @enderror

        <div class="form-group">
            
            <img id="output" src="{{ asset($process_lasts->process_new_body_image)}}" style="height: 150px; width:200px">
        
          </div>


        <div class="form-group">
            <label for="exampleInputCategory">Process Final Sub Header</label>
            <textarea type="text" id="textarea2" autofocus maxlength="150" class="form-control" id="exampleInputCategory" name="process_new_body_text1" placeholder="Enter Text" rows="3" value="{{$process_lasts->process_new_body_text1}}">{{$process_lasts->process_new_body_text1}}</textarea>
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 150</span>
             </div>
            
            @error('process_new_body_text1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputCategory">Process Final Sub Description</label>
            <textarea type="text" id="textarea3" autofocus maxlength="350" class="form-control" id="exampleInputCategory" name="process_new_body_text2" placeholder="Enter Text" rows="5" value="{{$process_lasts->process_new_body_text2}}">{{$process_lasts->process_new_body_text2}}</textarea>
            
            <div id="count3">
            <span id="current_count3">0</span>
            <span id="maximum_count3">/ 350</span>
             </div>
            @error('process_new_body_text2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleInputFile">Process Final Icon 1</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_new_icon1" class="form-control" id="2exampleInputFile" value="{{$process_lasts->process_new_icon1}}" onchange="loandFile2(event)">
                
              </div>

             
                
            </div>
        </div>
        @error('process_new_icon1')
                <span class="text-danger">{{$message}}</span>
                    
        @enderror

        <div class="form-group">
            
            <img id="output1" src="{{ asset($process_lasts->process_new_icon1)}}" style="height: 130px; width:130px">
        
          </div>

        <div class="form-group">
            <label for="exampleInputFile">Process Final Icon 2</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_new_icon2" class="form-control" id="3exampleInputFile" value="{{$process_lasts->process_new_icon2}}" onchange="loandFile3(event)">
                
              </div>

              
                
            </div>
        </div>
        @error('process_new_icon2')
                <span class="text-danger">{{$message}}</span>
                    
       @enderror

        <div class="form-group">
            
            <img id="output2" src="{{ asset($process_lasts->process_new_icon2)}}" style="height: 130px; width:130px">
        
          </div>



        <div class="form-group">
            <label for="exampleInputCategory">Process Final Icons Description</label>
            <textarea type="text" id="textarea4" autofocus maxlength="230" class="form-control" id="exampleInputCategory" name="process_new_icon_text" placeholder="Enter Text" rows="3" value="{{$process_lasts->process_new_icon_text}}">{{$process_lasts->process_new_icon_text}}</textarea>
            

            <div id="count4">
            <span id="current_count4">0</span>
            <span id="maximum_count4">/ 230</span>
             </div>
            
            @error('process_new_icon_text')
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

var loandFile2=function(event) {

var output=document.getElementById('output1');
output.src=URL.createObjectURL(event.target.files[0]); 
};

var loandFile3=function(event) {

var output=document.getElementById('output2');
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

$('#textarea8').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count8'),
        maximum_count = $('#maximum_count8'),
        count = $('#count8');    
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



 










