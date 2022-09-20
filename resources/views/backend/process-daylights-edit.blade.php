



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Process Daylights</h3>
      </div>
     
      <form action="{{route('update.process_daylights',$process_daylights->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
          <div class="form-group">
            <label for="exampleInputFile">Process Daylights  Image (W:730px,H:415px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_daylights_image" class="form-control" id="1exampleInputFile" value="{{$process_daylights->process_daylights_image}}">
                
              </div>

              @error('process_daylights_image')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <div class="form-group">
            
            <img src="{{ asset($process_daylights->process_daylights_image)}}" style="height: 150px; width:200px">
        
            </div>


         


          <div class="form-group">
            <label for="exampleInputCategory">Process Daylights Header Text</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_daylights_header" placeholder="Enter Description" rows="3" value="{{$process_daylights->process_daylights_header}}">{{$process_daylights->process_daylights_header}}</textarea>
            @error('process_daylights_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Process Daylights Text 1</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_daylights_text1" placeholder="Enter Description" rows="3" value="{{$process_daylights->process_daylights_text1}}">{{$process_daylights->process_daylights_text1}}</textarea>
            @error('process_daylights_text1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Process Daylights Text 2</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_daylights_text2" placeholder="Enter Description" rows="3" value="{{$process_daylights->process_daylights_text2}}">{{$process_daylights->process_daylights_text2}}</textarea>
            @error('process_daylights_text2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

      

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/process_daylights" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>


</div>
    </div>
</div>

</div>
@endsection