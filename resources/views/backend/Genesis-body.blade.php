
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Company / Section 03</h3>
              @if(count($genesis_bodys)==0)
                <a href="{{route('all.genesis_body_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
              @endif
            </div>  
            <img src="/images/Web-view/Screenshot_8.jpg" style="width:auto;height:auto">  
        
            @foreach($genesis_bodys as $genesis_bodys)

            <div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      
     
      <form action="{{route('update.genesis_body',$genesis_bodys->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
         

          <div class="form-group">
            <label for="exampleInputCategory"> Header 01 (Purple Text)</label>
            <input type="text" id="textarea1" autofocus maxlength="35" class="form-control" id="exampleInputCategory" name="genesis_body_header1" placeholder="Enter Text" rows="3" value="{{$genesis_bodys->genesis_body_header1}}"/>
            
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 35</span>
             </div>

          </div>
          @error('genesis_body_header1')
            <span class="text-danger">{{$message}}</span>
                
          @enderror

          <div class="form-group">
            <label for="exampleInputCategory">Header 02 (Black Text)</label>
            <input type="text" id="textarea2" autofocus maxlength="50" class="form-control" id="exampleInputCategory" name="genesis_body_header2" placeholder="Enter Text" rows="3" value="{{$genesis_bodys->genesis_body_header2}}">
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 50</span>
             </div>

          </div>
          @error('genesis_body_header2')
            <span class="text-danger">{{$message}}</span>
                
          @enderror


          
          <div class="form-group">
            <label for="exampleInputCategory">Description 01</label>
            <textarea type="text" id="textarea3" autofocus maxlength="350" value="{{$genesis_bodys->genesis_body_text}}" class="form-control" id="exampleInputCategory" name="genesis_body_text" placeholder="Enter Text" rows="4">{{$genesis_bodys->genesis_body_text}}</textarea>
            
            <div id="count3">
            <span id="current_count3">0</span>
            <span id="maximum_count3">/ 350</span>
             </div>
          </div>
          @error('genesis_body_text')
            <span class="text-danger">{{$message}}</span>
                
          @enderror



        <div class="form-group">
            <label for="exampleInputFile">Image 01</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="genesis_body_image1" class="form-control" id="1exampleInputFile" value="{{$genesis_bodys->genesis_body_image1}}" onchange="loandFile1(event)">
                
              </div>

              
                
            </div>
            @error('genesis_body_image1')
                <span class="text-danger">{{$message}}</span>
                    
            @enderror
        </div>

        <div class="form-group">
            
            <img id="output" src="{{asset($genesis_bodys->genesis_body_image1)}}" style="height: 100px; width:115px">
        
         </div>

        <div class="form-group">
            <label for="exampleInputCategory">Image 01 Header</label>
            <input type="text" id="textarea4" autofocus maxlength="15" class="form-control" id="exampleInputCategory" name="genesis_image1_header" placeholder="Enter Text" rows="3" value="{{$genesis_bodys->genesis_image1_header}}">
            <div id="count4">
            <span id="current_count4">0</span>
            <span id="maximum_count4">/ 15</span>
             </div>


          </div>
          @error('genesis_image1_header')
            <span class="text-danger">{{$message}}</span>
                
          @enderror

          <div class="form-group">
            <label for="exampleInputCategory">Image 01 Description</label>
            <textarea type="text" id="textarea5" autofocus maxlength="250" class="form-control" id="exampleInputCategory" name="genesis_image1_body" placeholder="Enter Text" rows="3" value="{{$genesis_bodys->genesis_image1_body}}">{{$genesis_bodys->genesis_image1_body}}</textarea>
            

            <div id="count5">
            <span id="current_count5">0</span>
            <span id="maximum_count5">/ 250</span>
             </div>

          </div>
          @error('genesis_image1_body')
            <span class="text-danger">{{$message}}</span>
                
          @enderror


          <div class="form-group">
            <label for="exampleInputFile">Image 02</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file"value="{{$genesis_bodys->genesis_body_image2}}" name="genesis_body_image2" class="form-control" id="1exampleInputFile" onchange="loandFile2(event)">
                
              </div>

              
                
            </div>
        </div>
        @error('genesis_body_image2')
                <span class="text-danger">{{$message}}</span>
                    
         @enderror

        <div class="form-group">
            
            <img id="output1" src="{{asset($genesis_bodys->genesis_body_image2)}}" style="height: 95px; width:100px">
        
         </div>


        <div class="form-group">
            <label for="exampleInputCategory">Image 02 Header </label>
            <input type="text" id="textarea6" autofocus maxlength="15" class="form-control" id="exampleInputCategory" name="genesis_image2_header" placeholder="Enter Text" rows="3" value="{{$genesis_bodys->genesis_image2_header}}">
            
            <div id="count6">
            <span id="current_count6">0</span>
            <span id="maximum_count6">/ 15</span>
            </div>

        </div>
        @error('genesis_image2_header')
            <span class="text-danger">{{$message}}</span>
                
        @enderror

          <div class="form-group">
            <label for="exampleInputCategory">Image 02 Description</label>
            <textarea type="text" id="textarea7" autofocus maxlength="250" class="form-control" id="exampleInputCategory" name="genesis_image2_body" placeholder="Enter Text" rows="3" value="{{$genesis_bodys->genesis_image2_body}}">{{$genesis_bodys->genesis_image2_body}}</textarea>
          
            <div id="count7">
            <span id="current_count7">0</span>
            <span id="maximum_count7">/ 250</span>
            </div>
          
          
          </div>
          @error('genesis_image2_body')
            <span class="text-danger">{{$message}}</span>
                
          @enderror




        
        <!-- /.card-body -->

        <div class="card-footer">
          
          <button type="submit"  class="btn btn-success">Update</button>
        </div>


   </div>
      </form>



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
$('#textarea5').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count5'),
        maximum_count = $('#maximum_count5'),
        count = $('#count5');    
        current_count.text(characterCount);        
});

$('#textarea6').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count6'),
        maximum_count = $('#maximum_count6'),
        count = $('#count6');    
        current_count.text(characterCount);        
});
$('#textarea7').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count7'),
        maximum_count = $('#maximum_count7'),
        count = $('#count7');    
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



 










