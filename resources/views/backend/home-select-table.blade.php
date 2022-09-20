



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Our Values</h3>
      </div>
     
      <form action="{{route('add.adamant_select')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
          <div class="form-group">
            <label for="exampleInputFile">Logo</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="home_selectus_logo" class="form-control" id="1exampleInputFile" onchange="loandFile1(event)">
                
              </div>

              @error('home_selectus_logo')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <img id="output1" width="100px"/>
  


          <div class="form-group">
            <label for="exampleInputCategory">Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="home_selectus_header" placeholder="Enter Description" rows="3"></textarea>
            @error('home_selectus_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Description</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="home_selectus_body" placeholder="Enter Description" rows="3"></textarea>
            @error('home_selectus_body')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/adamant-select" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
      </form>



    </div>
</div>


<script>

var loandFile1=function(event) {

  var output=document.getElementById('output1');
  output.src=URL.createObjectURL(event.target.files[0]); 
};





</script>

</div>
@endsection