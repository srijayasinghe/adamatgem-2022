
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Process Section End</h3>
      </div>
     
      <form action="{{route('update.process_five',$process_lasts->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">

        

          <div class="form-group">
            <label for="exampleInputCategory">Process End Banner Text </label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_new_banner" placeholder="Enter Text" rows="3" value="{{$process_lasts->process_new_banner}}">{{$process_lasts->process_new_banner}}</textarea>
            @error('process_new_banner')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>


          <div class="form-group">
            <label for="exampleInputFile">Process End Body Image</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_new_body_image" class="form-control" id="1exampleInputFile" value="{{$process_lasts->process_new_body_image}}">
                
              </div>

              @error('process_new_body_image')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
        </div>

        <div class="form-group">
            
            <img src="{{ asset($process_lasts->process_new_body_image)}}" style="height: 150px; width:200px">
        
          </div>


        <div class="form-group">
            <label for="exampleInputCategory">Process End Body Text 1 </label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_new_body_text1" placeholder="Enter Text" rows="3" value="{{$process_lasts->process_new_body_text1}}">{{$process_lasts->process_new_body_text1}}</textarea>
            @error('process_new_body_text1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputCategory">Process End Body  Text 2 </label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_new_body_text2" placeholder="Enter Text" rows="3" value="{{$process_lasts->process_new_body_text2}}">{{$process_lasts->process_new_body_text2}}</textarea>
            @error('process_new_body_text2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleInputFile">Process End Body Icon 1</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_new_icon1" class="form-control" id="2exampleInputFile" value="{{$process_lasts->process_new_icon1}}">
                
              </div>

              @error('process_new_icon1')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
        </div>

        <div class="form-group">
            
            <img src="{{ asset($process_lasts->process_new_icon1)}}" style="height: auto; width:auto">
        
          </div>

        <div class="form-group">
            <label for="exampleInputFile">Process End Body Icon 2</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="process_new_icon2" class="form-control" id="3exampleInputFile" value="{{$process_lasts->process_new_icon2}}">
                
              </div>

              @error('process_new_icon2')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
        </div>

        <div class="form-group">
            
            <img src="{{ asset($process_lasts->process_new_icon2)}}" style="height: auto; width:auto">
        
          </div>



        <div class="form-group">
            <label for="exampleInputCategory">Process End Icon  Text 3 </label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="process_new_icon_text" placeholder="Enter Text" rows="3" value="{{$process_lasts->process_new_icon_text}}">{{$process_lasts->process_new_icon_text}}</textarea>
            @error('process_new_icon_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>

       

        

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/process_last" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>

      </div>

    </div>
</div>

</div>
@endsection