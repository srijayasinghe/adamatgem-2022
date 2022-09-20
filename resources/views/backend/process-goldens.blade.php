
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Process / Color Editing</h3>
              @if(count($process_goldens)==0)
                <a href="{{route('all.process_goldens_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
                @endif
            </div>  
            <img src="/images/Web-view/Screenshot_19.jpg" style="width:auto;height:auto">  
        
            @foreach($process_goldens as $process_goldens)
            <div class="d-flex justify-content-center">
   <div class="col-md-8">
    
    <div class="card card-primary">
      
     
      <form action="{{route('update.process_goldens',$process_goldens->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
         

          <div class="form-group">
            <label for="exampleInputCategory">Editing Header</label>
            <textarea type="text" id="textarea1" autofocus maxlength="20" class="form-control" id="exampleInputCategory" name="process_golden_header" placeholder="Enter Description" rows="2" value="{{$process_goldens->process_golden_header}}">{{$process_goldens->process_golden_header}}</textarea>
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 20</span>
            </div>
            
            
            @error('process_golden_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Editing Description</label>
            <textarea type="text" id="textarea2" autofocus maxlength="400" class="form-control" id="exampleInputCategory" name="process_golden_text" placeholder="Enter Description" rows="5" value="{{$process_goldens->process_golden_text}}">{{$process_goldens->process_golden_text}}</textarea>
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 400</span>
            </div>
           
           
            @error('process_golden_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
          <label for="exampleInputFile">Editing Slider color 1</label>
          <input type="text" id="textarea2" value="{{$process_goldens->color_1}}" autofocus class="form-control colorpicker" id="exampleInputCode" name="color_1" placeholder="Enter Color Code" />

          </div>

          <div class="form-group">
            <label for="exampleInputFile">Editing Slider Image 1</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_golden_image1" class="form-control" id="1exampleInputFile" value="{{$process_goldens->process_golden_image1}}" onchange="loandFile1(event)">
                
              </div>

             
                
            </div>
          </div>
          @error('process_golden_image1')
                <span class="text-danger">{{$message}}</span>
                    
          @enderror

          <div class="form-group">
            
            <img id="output" src="{{asset($process_goldens->process_golden_image1)}}" style="height: 150px; width:200px">
        
          </div>

          <div class="form-group">
          <label for="exampleInputFile">Editing Slider color 2</label>
          <input type="text" id="textarea2" value="{{$process_goldens->color_2}}" autofocus class="form-control colorpicker" id="exampleInputCode" name="color_2" placeholder="Enter Color Code" />

          </div>

          <div class="form-group">
            <label for="exampleInputFile">Editing Slider Image 2</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_golden_image2" class="form-control" id="1exampleInputFile" value="{{$process_goldens->process_golden_image2}}" onchange="loandFile2(event)">
                
              </div>

              
                
            </div>
          </div>
          @error('process_golden_image2')
                <span class="text-danger">{{$message}}</span>
                    
          @enderror

          <div class="form-group">
            
            <img  id="output1" src="{{asset($process_goldens->process_golden_image2)}}" style="height: 150px; width:200px">
        
            </div>

            <div class="form-group">
          <label for="exampleInputFile">Editing Slider color 3</label>
          <input type="text" id="textarea2" value="{{$process_goldens->color_3}}" autofocus class="form-control colorpicker" id="exampleInputCode" name="color_3" placeholder="Enter Color Code" />

          </div>

          <div class="form-group">
            <label for="exampleInputFile">Editing Slider Image 3</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_golden_image3" class="form-control" id="1exampleInputFile" value="{{$process_goldens->process_golden_image3}}" onchange="loandFile3(event)">
                
              </div>

              
                
            </div>
          </div>
          @error('process_golden_image3')
                <span class="text-danger">{{$message}}</span>
                    
          @enderror

          <div class="form-group">
            
            <img id="output2" src="{{asset($process_goldens->process_golden_image3)}}" style="height: 150px; width:200px">
        
            </div>

            <div class="form-group">
          <label for="exampleInputFile">Editing Slider color 4</label>
          <input type="text" id="textarea2" value="{{$process_goldens->color_4}}" autofocus class="form-control colorpicker" id="exampleInputCode" name="color_4" placeholder="Enter Color Code" />

          </div>

          <div class="form-group">
            <label for="exampleInputFile">Editing Slider Image 4</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_golden_image4" class="form-control" id="1exampleInputFile" value="{{$process_goldens->process_golden_image4}}" onchange="loandFile4(event)">
                
              </div>

              
                
            </div>
          </div>
          @error('process_golden_image4')
                <span class="text-danger">{{$message}}</span>
                    
          @enderror

          <div class="form-group">
            
            <img id="output3" src="{{asset($process_goldens->process_golden_image4)}}" style="height: 150px; width:200px">
        
            </div>

            <div class="form-group">
          <label for="exampleInputFile">Editing Slider color 5</label>
          <input type="text" id="textarea2" value="{{$process_goldens->color_5}}" autofocus class="form-control colorpicker" id="exampleInputCode" name="color_5" placeholder="Enter Color Code" />

          </div>


          <div class="form-group">
            <label for="exampleInputFile">Editing Slider Image 5</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_golden_image5" class="form-control" id="1exampleInputFile" value="{{$process_goldens->process_golden_image5}}" onchange="loandFile5(event)">
                
              </div>

             
                
            </div>
          </div>
          @error('process_golden_image5')
                <span class="text-danger">{{$message}}</span>
                    
          @enderror

          <div class="form-group">
            
            <img id="output4" src="{{asset($process_goldens->process_golden_image5)}}" style="height: 150px; width:200px">
        
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

var loandFile4=function(event) {

var output=document.getElementById('output3');
output.src=URL.createObjectURL(event.target.files[0]); 
};

var loandFile5=function(event) {

var output=document.getElementById('output4');
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



 










