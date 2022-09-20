
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Stone</h3>
      </div>
     
      <form action="{{route('add.stone')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputCategory">Stone Name</label>
            <input type="text" id="textarea1" autofocus maxlength="50"  class="form-control" id="exampleInputCategory" name="product_name" placeholder="Enter Name">
           
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 50</span>
             </div>
           
           
           
            @error('product_name')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Stone Description</label>
            <textarea  type="text" placeholder="Enter Description" name="product_description" id="textarea2" autofocus maxlength="400" rows="4" cols="30" class="form-control tinymce-editor"></textarea>
           
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 400</span>
             </div>


            @error('product_description')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <!-- <div class="form-group">
                    <div class="custom-control custom-switch">
                     
                      <input type="checkbox" name="solid" value="1"  class="custom-control-input" id="customSwitch2">     
                      <label class="custom-control-label" for="customSwitch2">Reserved</label>
                    </div>
          </div> -->

          <div class="form-group">
            <label for="exampleInputFile">Stone Main Image</label>
            <div class="input-group">
              <div class="custom-file">
  
                <input type="file" name="product_image" class="form-control" id="exampleInputFile" placeholder="Image" onchange="loandFile1(event)">
                
              </div>

              
                
            </div>
          </div>
          @error('product_image')
                <span class="text-danger">{{$message}}</span>           
          @enderror

          <img id="output" width="100px"/>

          <div class="form-group">
                    <div class="custom-control custom-switch">
                     
                      <input type="checkbox" name="value" value="1"  class="custom-control-input" id="customSwitch1">     
                      <label class="custom-control-label" for="customSwitch1">Link Category Slider Image</label>
                    </div>
          </div>

           <div class="row">
             <div class="col-4">

              <div class="form-group">
                <label for="document">Select Category</label>
                <select class="form-control" name="category_id">
                  <option value="" selected="" disabled="" >Select Category</option>
                @foreach($category as $category)
               
                
                  <option value="{{ $category->id}}">{{$category->category_name}}</option>
                 

                @endforeach 
          
                
                </select>
              </div>
             </div>
             <div class="col-8">

              <div class="form-group">
                <label for="document">Select Color</label>
                <select class="form-control" name="color_id">
                  <option value="" selected="" disabled="">Select Color</option>
                @foreach($color as $color)
                <option class="circle-box"  value="{{$color->id}}" style="background-color:{{$color->color_code}}">{{$color->color_name}} , {{$color->color_code}}</option>
                
                @endforeach 
        
                </select>
              </div>
             </div>
           </div>

          

           <div class="row">
            <div class="col-6">

              <div class="form-group">
                <label for="document">Select Availability</label>
                <select class="form-control" name="Available_id">
                  <option value="" selected="" disabled="" >Select Availability</option>
                @foreach($availability as $availability)
                <option value="{{$availability->id}}">{{$availability->Available_name}}</option>
                @endforeach 
        
                </select>
              </div>
            </div>
            <div class="col-6">

              <div class="form-group">
                <label for="document">Select Clarity</label>
                <select class="form-control" name="clarity_id">
                  <option value="" selected="" disabled="">Select Clarity</option>
                @foreach($clarity as $clarity)
                <option value="{{$clarity->id}}">{{$clarity->clarity_name}}</option>
                @endforeach 
        
                </select>
              </div>
    
    
            </div>
          </div>


          <div class="row">
            <div class="col-6">

              <div class="form-group">
                <label for="document">Select Enhancements</label>
                <select class="form-control" name="enhancement_id">
                <option value="" selected="" disabled="">Select Enhancements</option>
    
                @foreach($enhancement as $enhancement)
                <option value="{{$enhancement->id}}">{{$enhancement->enhancement_name}}</option>
                @endforeach 
        
                </select>
              </div>
            </div>
            <div class="col-6">

              <div class="form-group">
                <label for="document">Select Shape</label>
                <select class="form-control" name="shape_id">
                  <option value="" selected="" disabled="">Select Shape</option>
                @foreach($shape as $shape)
                <option value="{{$shape->id}}">{{$shape->shape_name}}</option>
                @endforeach 
        
                </select>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-6">
            <div class="form-group">
            <label for="document">Select Variety</label>
            <select class="form-control" name="Variety_id">
              <option value="" selected="" disabled="">Select Variety</option>
            @foreach($Variety as $Variety)
            <option value="{{$Variety->id}}">{{$Variety->variety_name}}</option>
            @endforeach 
    
            </select>
          </div>  
            </div>
            <div class="col-6">
            <div class="form-group">
            <label for="document">Select Gallery Name</label>
            <select class="form-control" name="gallery_id">
              <option value="" selected="" disabled="">Select Gallery</option>
            @foreach($gallery as $gallery)
            <option value="{{$gallery->id}}">{{$gallery->gallery_name}}</option>
            @endforeach 
    
            </select>
          </div>  
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Color Term</label>
            <input type="text" id="textarea4" placeholder="Enter Color Term" autofocus maxlength="60" class="form-control" id="exampleInputCategory" name="product_variety">
           
            <div id="count4">
            <span id="current_count4">0</span>
            <span id="maximum_count4">/ 60</span>
            </div>
           
           
            @error('product_variety')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>




         
          <div class="form-group">
                <label for="exampleInputCategory">Stone Weight</label>
                <input type="number" step="0.0001" placeholder="Enter Weight" id="textarea8"  class="form-control" id="exampleInputCategory" name="product_Weight">
                
               
                
                
                @error('product_Weight')
                <span class="text-danger">{{$message}}</span>                    
                @enderror
          </div>

          <div class="form-group">
                <label for="exampleInputCategory">Stone Weight Description</label>
                <input type="text" placeholder="Enter Weight Description"  id="textarea20" autofocus maxlength="100"  class="form-control" id="exampleInputCategory" name="Stone_Weight_Description">
                
                <div id="count20">
            <span id="current_count20">0</span>
            <span id="maximum_count20">/ 100</span>
             </div>
                
                
                @error('Stone Weight Description')
                <span class="text-danger">{{$message}}</span>                    
                @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Color</label>
            <input type="text" placeholder="Enter Color" id="textarea12" autofocus maxlength="120" class="form-control" id="exampleInputCategory" name="color">
            
            
            <div id="count12">
            <span id="current_count12">0</span>
            <span id="maximum_count12">/ 120</span>
             </div>
            
            @error('color')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Shape & Cut</label>
            <textarea type="text"  placeholder="Enter Shape & Cut" id="textarea120" autofocus maxlength="120" class="form-control" id="exampleInputCategory" name="Shape_Cut"  rows="2"></textarea>
           
            <div id="count120">
            <span id="current_count120">0</span>
            <span id="maximum_count120">/ 120</span>
            </div>
           
           
           
            @error('Shape_Cut')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

         





          
          
        

          <div class="form-group">
            <label for="exampleInputCategory">Stone Dimensions</label>
            <input type="text" id="textarea3" placeholder="Enter Dimensions" autofocus maxlength="120" class="form-control" id="exampleInputCategory" name="product_dimensions">
            
            
            <div id="count3">
            <span id="current_count3">0</span>
            <span id="maximum_count3">/ 120</span>
             </div>
            
            @error('product_dimensions')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
          
          

         

          <div class="form-group">
            <label for="exampleInputCategory">Stone Treatments</label>
            <textarea type="text" id="textarea5" placeholder="Enter Treatments" autofocus maxlength="60" class="form-control" id="exampleInputCategory" name="product_treatments" rows="2"></textarea>
           
            <div id="count5">
            <span id="current_count5">0</span>
            <span id="maximum_count5">/ 60</span>
            </div>
           
           
           
            @error('product_treatments')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          
         

          <div class="form-group">
            <label for="exampleInputCategory">Stone Lab Report</label>
            <textarea type="text" id="textarea6" placeholder="Enter Lab Report" autofocus maxlength="120" class="form-control" id="exampleInputCategory" name="product_labreport"   rows="3"></textarea>
           
            <div id="count6">
            <span id="current_count6">0</span>
            <span id="maximum_count6">/ 120</span>
            </div>
           
            @error('product_labreport')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
          
        
              <div class="form-group">
                <label for="exampleInputCategory">Stone Price</label>
                <input type="number" id="textarea7" placeholder="Enter Price"  class="form-control" id="exampleInputCategory" name="product_price">
                
                
                
                @error('product_price')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
              </div>
        
            
              
           
         

          
        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/stone" class="btn go-back">Go Back</a>
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

$('#textarea8').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count8'),
        maximum_count = $('#maximum_count8'),
        count = $('#count8');    
        current_count.text(characterCount);        
});
$('#textarea12').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count12'),
        maximum_count = $('#maximum_count12'),
        count = $('#count12');    
        current_count.text(characterCount);        
});

$('#textarea120').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count120'),
        maximum_count = $('#maximum_count120'),
        count = $('#count120');    
        current_count.text(characterCount);        
});

$('#textarea20').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count20'),
        maximum_count = $('#maximum_count20'),
        count = $('#count20');    
        current_count.text(characterCount);        
});
var loandFile11=function(event) {

var output=document.getElementById('output11');
output.src=URL.createObjectURL(event.target.files[0]); 
};

var loandFile2=function(event) {

var output=document.getElementById('output2');
output.src=URL.createObjectURL(event.target.files[0]); 
};

var loandFile3=function(event) {

var output=document.getElementById('output3');
output.src=URL.createObjectURL(event.target.files[0]); 
};

var loandFile4=function(event) {

var output=document.getElementById('output4');
output.src=URL.createObjectURL(event.target.files[0]); 
};

var loandFile5=function(event) {

var output=document.getElementById('output5');
output.src=URL.createObjectURL(event.target.files[0]); 
};




</script>

</div>
@endsection