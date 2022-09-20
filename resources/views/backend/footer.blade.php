
@extends('layouts.app-style') 
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
          <div class="card-header">
              <h3 class="card-title">Footer / Footer</h3>
              @if(count($footers)==0)
                <a href="{{route('all.footer_description_new')}}" class="btn btn-info" style="float: right;"><i class="fas fa-edit"></i></a>
                @endif
            </div> 
            <img src="/images/Web-view/Screenshot_27.jpg" style="width:auto;height:auto">  
            
       
            @foreach($footers as $footers)

            <div class="d-flex justify-content-center footer-new">
<div class="col-md-8">
    
    <div class="card card-primary">
     
     
      <form action="{{route('update.footer_description',$footers->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">

        <div class="form-group">
            <label for="exampleInputFile">Footer Logo 1</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="footer_logo1" class="form-control" id="1exampleInputFile" value="{{$footers->footer_logo1}}" onchange="loandFile1(event)">
                
              </div>

              
                
            </div>
          </div>
          @error('footer_logo1')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror

          <div class="form-group">
            
            <img id="output1" src="{{ asset($footers->footer_logo1)}}" style="height: 40px; width:100px">
        
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Footer Logo 2</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="footer_logo2" class="form-control" id="1exampleInputFile" value="{{$footers->footer_logo2}}" onchange="loandFile2(event)">
                
              </div>

             
                
            </div>
          </div>
          @error('footer_logo2')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror


          <div class="form-group">
            
            <img id="output2" src="{{ asset($footers->footer_logo2)}}" style="height: 40px; width:100px">
        
            </div>

          <div class="form-group">
            <label for="exampleInputFile">Footer Logo 3</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="footer_logo3" class="form-control" id="1exampleInputFile" value="{{$footers->footer_logo3}}" onchange="loandFile3(event)">
                
              </div>

             
                
            </div>
          </div>
          @error('footer_logo3')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror

          <div class="form-group">
            
            <img id="output3" src="{{ asset($footers->footer_logo3)}}" style="height: 40px; width:100px;">
        
            </div>
        
         

          <div class="form-group">
            <label for="exampleInputCategory">Footer Description</label>
            <textarea type="text" id="textarea1" autofocus maxlength="500" class="form-control" id="exampleInputCategory" name="footer_description" placeholder="Enter Description" rows="6" value="{{$footers->footer_description}}">{{$footers->footer_description}}</textarea>
            
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 500</span>
             </div>
            
            
            @error('footer_description')
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

$('#textarea1').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count1'),
        maximum_count = $('#maximum_count1'),
        count = $('#count1');    
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



 










