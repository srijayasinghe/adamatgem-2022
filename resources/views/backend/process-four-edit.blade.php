
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Process Section Four</h3>
      </div>
     
      <form action="{{route('update.process_four',$process_fours->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">


        <div class="form-group">
            <label for="exampleInputFile">Process Center Banner Image (W:1920px,H:481px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_center_banner" class="form-control" id="1exampleInputFile" value="{{$process_fours->process_center_banner}}" >
                
              </div>

              @error('process_center_banner')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <div class="form-group">
            
            <img src="{{ asset($process_fours->process_center_banner)}}" style="height: 150px; width:200px">
        
          </div>

        

          <div class="form-group">
            <label for="exampleInputCategory">Process Center Banner Text </label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_center_banner_text" placeholder="Enter Text" rows="3" value="{{$process_fours->process_center_banner_text}}">{{$process_fours->process_center_banner_text}}</textarea>
            @error('process_center_banner_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Process Center  Text 1 </label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_center_text1" placeholder="Enter Text" rows="3" value="{{$process_fours->process_center_text1}}">{{$process_fours->process_center_text1}}</textarea>
            @error('process_center_text1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputCategory">Process Center  Text 2 </label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_center_text2" placeholder="Enter Text" rows="3" value="{{$process_fours->process_center_text2}}">{{$process_fours->process_center_text2}}</textarea>
            @error('process_center_text2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputCategory">Update Process Center  Text 3 </label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_center_text3" placeholder="Enter Text" rows="3" value="{{$process_fours->process_center_text3}}">{{$process_fours->process_center_text3}}</textarea>
            @error('process_center_text3')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>

       

        

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/process_four" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>

      </div>

    </div>
</div>

</div>
@endsection