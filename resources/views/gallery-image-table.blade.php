
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Stone / Gallery Image</h3>
      </div>
     
      <form action="{{route('add.gallery_image')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}       
        
       

        <div class="card-body">

          <div class="form-group">
            <label for="document">Select Gallery Name</label>
            <select class="form-control" name="gallery_id">
              <option value="" selected="" disabled="">Select Gallery</option>
            @foreach($gallery as $gallery)
            <option value="{{$gallery->id}}">{{$gallery->gallery_name}}</option>
            @endforeach 
    
            </select>

            @error('gallery_id')
              <span class="text-danger">{{$message}}</span>
                  
              @enderror


          </div>


           <div class="form-group">
            <label for="document">Gallery Upload</label>
            <div class="needsclick dropzone" id="document-dropzone" >
    
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

</div>
@endsection