
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Footer</h3>
      </div>
     
      <form action="{{route('update.footer_description',$footers->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">

        <div class="form-group">
            <label for="exampleInputFile">Update Footer Logo 1 (W:133px,H:44px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="footer_logo1" class="form-control" id="1exampleInputFile" value="{{$footers->footer_logo1}}" onchange="loandFile1(event)">
                
              </div>

              @error('footer_logo1')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <div class="form-group">
            
            <img id="output1" src="{{ asset($footers->footer_logo1)}}" style="height: auto; width:auto">
        
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Update Footer Logo 2 (W:133px,H:44px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="footer_logo2" class="form-control" id="1exampleInputFile" value="{{$footers->footer_logo2}}" onchange="loandFile2(event)">
                
              </div>

              @error('footer_logo2')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>


          <div class="form-group">
            
            <img id="output2" src="{{ asset($footers->footer_logo2)}}" style="height: auto; width:auto">
        
            </div>

          <div class="form-group">
            <label for="exampleInputFile">Update Footer Logo 3 (W:133px,H:44px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="footer_logo3" class="form-control" id="1exampleInputFile" value="{{$footers->footer_logo3}}" onchange="loandFile3(event)">
                
              </div>

              @error('footer_logo3')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <div class="form-group">
            
            <img id="output3" src="{{ asset($footers->footer_logo3)}}" style="height: auto; width:auto;">
        
            </div>
        
         

          <div class="form-group">
            <label for="exampleInputCategory">Update footer Description</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="footer_description" placeholder="Enter Description" rows="3" value="{{$footers->footer_description}}">{{$footers->footer_description}}</textarea>
            @error('footer_description')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          

          

          


      

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/footer_description" class="btn go-back">Go Back</a>
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





</script>

</div>
@endsection