
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Gallery Update</h3>
      </div>
     
      <form action="{{route('update.gallery',$gallery->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputCategory">Gallery Name</label>
            <input type="text"  class="form-control" id="exampleInputCategory" name="gallery_name" placeholder="Enter gallery name" value="{{$gallery->gallery_name}}">
            @error('gallery_name')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

           {{-- <div class="form-group">
            <label for="document">Stone Gallery Upload</label>
            <div class="needsclick dropzone" id="document-dropzone" >
    
            </div>
          </div> --}}


          <div class="form-group">
            <label for="exampleInputCategory">Gallery Description</label>
            <textarea name="gallery_description" rows="5" cols="40" class="form-control" value="{{$gallery->gallery_description}}">{{$gallery->gallery_description}}</textarea>
            @error('gallery_description')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

         

    
          

        

     

        


      
          
     
         

          
        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/gallery" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
      </form>



    </div>
</div>

</div>
@endsection