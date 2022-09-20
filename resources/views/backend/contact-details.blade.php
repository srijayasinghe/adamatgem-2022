
@extends('layouts.app-style') 
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Contact Details / Details </h3>

              @if(count($contact_details)==0)
                <a href="{{route('all.contact_details_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
              @endif

            </div>  
            <img src="/images/Web-view/Screenshot_26.jpg" style="width:auto;height:auto">  
          

            @foreach($contact_details as $contact_details)

            <div class="d-flex justify-content-center contact-details">
<div class="col-md-8">
    
    <div class="card card-primary">
     
     
      <form action="{{route('update.contact_details',$contact_details->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        

        <div class="form-group">
            <label for="exampleInputCategory">Header</label>
            <textarea type="text" id="textarea" autofocus maxlength="40" class="form-control" id="exampleInputCategory" name="conatct_header" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_header}}">{{$contact_details->conatct_header}}</textarea>
           
            <div id="count">
            <span id="current_count">0</span>
            <span id="maximum_count">/ 40</span>
             </div>

            @error('conatct_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
        
         

          <div class="form-group">
            <label for="exampleInputCategory">Header Description</label>
            <textarea type="text" id="textarea1" autofocus maxlength="130" class="form-control" id="exampleInputCategory" name="conatct_header_text" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_header_text}}">{{$contact_details->conatct_header_text}}</textarea>
            
            
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 130</span>
             </div>
            
             @error('conatct_header_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Number </label>
            <textarea type="text" id="textarea2" autofocus maxlength="40" class="form-control" id="exampleInputCategory" name="conatct_number" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_number}}">{{$contact_details->conatct_number}}</textarea>
           
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 40</span>
             </div>
           
           
           
            @error('conatct_number')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

         
      

          <div class="form-group">
            <label for="exampleInputCategory">Contact Email</label>
            <textarea type="text" id="textarea3" autofocus maxlength="40" class="form-control" id="exampleInputCategory" name="conatct_email" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_email}}">{{$contact_details->conatct_email}}</textarea>
            
            <div id="count3">
            <span id="current_count3">0</span>
            <span id="maximum_count3">/ 40</span>
             </div>
            
            
            @error('conatct_email')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        

          <div class="form-group">
            <label for="exampleInputCategory">Contact Instagram Link </label>
            <textarea type="url" id="textarea4" autofocus maxlength="40" class="form-control" id="exampleInputCategory" name="conatct_insta" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_insta}}">{{$contact_details->conatct_insta}}</textarea>
           
            <div id="count4">
            <span id="current_count4">0</span>
            <span id="maximum_count4">/ 40</span>
             </div>
           
           
            @error('conatct_insta')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

         
    
          

          <div class="form-group">
            <label for="exampleInputCategory">Contact Register Name</label>
            <textarea type="text" id="textarea5" autofocus maxlength="20" class="form-control" id="exampleInputCategory" name="conatct_register_office" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_register_office}}">{{$contact_details->conatct_register_office}}</textarea>
            
            <div id="count5">
            <span id="current_count5">0</span>
            <span id="maximum_count5">/ 20</span>
             </div>
            
            
            @error('conatct_register_office')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Address Line 1</label>
            <textarea type="text" id="textarea6" autofocus maxlength="40" class="form-control" id="exampleInputCategory" name="conatct_register_adress1" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_register_adress1}}">{{$contact_details->conatct_register_adress1}}</textarea>
            
            
            <div id="count6">
            <span id="current_count6">0</span>
            <span id="maximum_count6">/ 40</span>
             </div>
            
            
            
            @error('conatct_register_adress1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputCategory">Contact Address Line 2</label>
            <textarea type="text" id="textarea7" autofocus maxlength="40" class="form-control" id="exampleInputCategory" name="conatct_register_adress2" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_register_adress2}}">{{$contact_details->conatct_register_adress2}}</textarea>
            
            <div id="count7">
            <span id="current_count7">0</span>
            <span id="maximum_count7">/ 40</span>
             </div>
            
            
            
            @error('conatct_register_adress2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Address Line 3</label>
            <textarea type="text" id="textarea8" autofocus maxlength="40" class="form-control" id="exampleInputCategory" name="conatct_register_adress3" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_register_adress3}}">{{$contact_details->conatct_register_adress3}}</textarea>
            
            <div id="count8">
            <span id="current_count8">0</span>
            <span id="maximum_count8">/ 40</span>
             </div>
            
            
            
            @error('conatct_register_adress3')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>


          <div class="form-group">
            <label for="exampleInputCategory">Contact Our List Header</label>
            <textarea type="text" id="textarea9" autofocus maxlength="30" class="form-control" id="exampleInputCategory" name="conatct_ourlist" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_ourlist}}">{{$contact_details->conatct_ourlist}}</textarea>
            
            <div id="count9">
            <span id="current_count9">0</span>
            <span id="maximum_count9">/ 30</span>
             </div>
            
            
            
            @error('conatct_ourlist')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Our List Description</label>
            <textarea type="text" id="textarea10" autofocus maxlength="150" class="form-control" id="exampleInputCategory" name="conatct_ourlist_text" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_ourlist_text}}">{{$contact_details->conatct_ourlist_text}}</textarea>
            
            <div id="count10">
            <span id="current_count10">0</span>
            <span id="maximum_count10">/ 150</span>
             </div>
            
            
            
            
            @error('conatct_ourlist_text')
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

  var output=document.getElementById('output1');
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

$('#textarea').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count'),
        maximum_count = $('#maximum_count'),
        count = $('#count');    
        current_count.text(characterCount);        
});

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
$('#textarea9').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count9'),
        maximum_count = $('#maximum_count9'),
        count = $('#count9');    
        current_count.text(characterCount);        
});
$('#textarea10').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count10'),
        maximum_count = $('#maximum_count10'),
        count = $('#count10');    
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



 










