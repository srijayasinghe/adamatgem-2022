
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Company / Section 05</h3>
              @if(count($genesis_ends)==0)
                <a href="{{route('all.genesis_ends_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
              @endif
            </div>  
            
            <img src="/images/Web-view/Screenshot_10.jpg" style="width:auto;height:auto">
       
            @foreach($genesis_ends as $genesis_ends)

            <div class="d-flex justify-content-center genesis-ends">
<div class="col-md-8">
    
    <div class="card card-primary">
      
     
      <form action="{{route('update.genesis_ends',$genesis_ends->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
    

          <div class="form-group">
            <label for="exampleInputCategory">Description 01</label>
            <textarea type="text" id="textarea1" autofocus maxlength="350" class="form-control" id="exampleInputCategory" name="genesis_ends_text1" placeholder="Enter Text" rows="4" value="{{$genesis_ends->genesis_ends_text1}}">{{$genesis_ends->genesis_ends_text1}}</textarea>
            
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 350</span>
             </div>
           
            @error('genesis_ends_text1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Description 02 (Bold Text)</label>
            <textarea type="text" id="textarea2" autofocus maxlength="100" class="form-control" id="exampleInputCategory" name="genesis_ends_text2" placeholder="Enter Text" rows="2" value="{{$genesis_ends->genesis_ends_text2}}">{{$genesis_ends->genesis_ends_text2}}</textarea>
            
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 100</span>
             </div>
            
            
            @error('genesis_ends_text2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Header 01</label>
            <textarea type="text" id="textarea3" autofocus maxlength="250" class="form-control" id="exampleInputCategory" name="genesis_ends_text3" placeholder="Enter Text" rows="3" value="{{$genesis_ends->genesis_ends_text3}}">{{$genesis_ends->genesis_ends_text3}}</textarea>
           
            <div id="count3">
            <span id="current_count3">0</span>
            <span id="maximum_count3">/ 250</span>
             </div>
           
           
            @error('genesis_ends_text3')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>


        <div class="form-group">
            <label for="exampleInputFile">Image 01</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="genesis_ends_image1" value="{{$genesis_ends->genesis_ends_image1}}" class="form-control" id="exampleInputFile" onchange="loandFile1(event)">
                
              </div>

                
            </div>
            
            @error('genesis_ends_image1')
                <span class="text-danger">{{$message}}</span>
                    
            @enderror
        </div>

        <div class="form-group">
            
            <img id="output" src="{{ asset($genesis_ends->genesis_ends_image1)}}" style="height: 115px; width:115px;">
        
        </div>

        <div class="form-group">
            <label for="exampleInputCategory">Image 01 Header</label>
            <textarea type="text" id="textarea4" autofocus maxlength="30" class="form-control" id="exampleInputCategory" name="genesis_image1_text1" placeholder="Enter Text" rows="2" value="{{$genesis_ends->genesis_image1_text1}}">{{$genesis_ends->genesis_image1_text1}}</textarea>
            <div id="count4">
            <span id="current_count4">0</span>
            <span id="maximum_count4">/ 30</span>
             </div>

            
            
            
            @error('genesis_image1_text1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleInputCategory">Image 01 Description</label>
            <textarea type="text" id="textarea5" autofocus maxlength="180" class="form-control" id="exampleInputCategory" name="genesis_image1_text2" placeholder="Enter Text" value="{{$genesis_ends->genesis_image1_text2}}" rows="3">{{$genesis_ends->genesis_image1_text2}}</textarea>
            <div id="count5">
            <span id="current_count5">0</span>
            <span id="maximum_count5">/ 180</span>
             </div>
            
            
            @error('genesis_image1_text2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleInputFile">Image 02</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="genesis_ends_image2" value="{{$genesis_ends->genesis_ends_image2}}" class="form-control" id="exampleInputFile" onchange="loandFile2(event)">
                
              </div>

              
                
            </div>


    </div>
            @error('genesis_ends_image2')
                <span class="text-danger">{{$message}}</span>
                    
            @enderror
       
        <div class="form-group">  
            <img id="output1" src="{{ asset($genesis_ends->genesis_ends_image2)}}" style="height: 115px; width:115px">
        </div>

        <div class="form-group">
            <label for="exampleInputCategory">Image 02 Header</label>
            <textarea type="text" id="textarea6" autofocus maxlength="30" class="form-control" id="exampleInputCategory" name="genesis_image2_text1" placeholder="Enter Text" rows="2" value="{{$genesis_ends->genesis_image2_text1}}">{{$genesis_ends->genesis_image2_text1}}</textarea>
           
            <div id="count6">
            <span id="current_count6">0</span>
            <span id="maximum_count6">/ 30</span>
             </div>
           
            @error('genesis_image2_text1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleInputCategory">Image 02 Description</label>
            <textarea type="text" id="textarea7" autofocus maxlength="180" class="form-control" id="exampleInputCategory" name="genesis_image2_text2" placeholder="Enter Text" rows="3" value="{{$genesis_ends->genesis_image2_text2}}">{{$genesis_ends->genesis_image2_text2}}</textarea>
            <div id="count7">
            <span id="current_count7">0</span>
            <span id="maximum_count7">/ 180</span>
             </div>
           
           
           
            @error('genesis_image2_text2')
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



 










