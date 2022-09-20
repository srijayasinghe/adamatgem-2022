
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Gallery Image</h3>
      </div>
     
      <form action="{{route('update.gallery_image',$editData->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}       
        
       

        <div class="card-body">

          <div class="form-group">
            <label for="document">Gallery Name</label>
            <select class="form-control" name="gallery_id">
              <option value="" selected="" disabled="">Select Gallery</option>
            @foreach($gallery as $gallery)
            <option value="{{$gallery->id}}" {{($editData->gallery_id==$gallery->id)? 'selected':''}}>{{$gallery->gallery_name}}</option>
            @endforeach 

    
            </select>
          </div>



          <img id="output" src="{{url('images/stone-gallery/'.$editData->gallery_image)}}"  style="height:auto; width:500px;"/>
        <div class="form-group">
          <div class="input-group">

            <div class="custom-file">
              
            <input type="file" name="gallery_image" class="form-control" id="exampleInputFile" value="{{$editData->gallery_image}}" onchange="loandFile1(event)">
              
              
            </div>
              
          </div>
        </div>
            @error('gallery_image')
              <span class="text-danger">{{$message}}</span>
                  
              @enderror
          </div> 




          
        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/gallery" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>



    </div>
</div>

<script>

var loandFile1=function(event) {

  var output=document.getElementById('output');
  output.src=URL.createObjectURL(event.target.files[0]); 
};





</script>

</div>
@endsection