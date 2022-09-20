
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Contact Details</h3>
      </div>
     
      <form action="{{route('add.contact_details')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        

        <div class="form-group">
            <label for="exampleInputCategory">Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_header" placeholder="Enter Description" rows="3"></textarea>
            @error('conatct_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
        
         

          <div class="form-group">
            <label for="exampleInputCategory">Header Description</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_header_text" placeholder="Enter Description" rows="3"></textarea>
            @error('conatct_header_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Number </label>
            <input type="number" class="form-control" id="exampleInputCategory" name="conatct_number" placeholder="Enter Description" rows="3">
            @error('conatct_number')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Contact Icon (W:150px,H:150px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="conatct_number_image" class="form-control" id="1exampleInputFile">
                
              </div>

              @error('conatct_number_image')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Email </label>
            <input type="text" class="form-control" id="exampleInputCategory" name="conatct_email" placeholder="Enter Description" rows="3">
            @error('conatct_email')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Contact Email Icon (W:150px,H:150px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="conatct_email_image" class="form-control" id="1exampleInputFile">
                
              </div>

              @error('conatct_email_image')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Instagram </label>
            <input type="link" class="form-control" id="exampleInputCategory" name="conatct_insta" placeholder="Enter Description" rows="3">
            @error('conatct_insta')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Contact Instagram Icon (W:150px,H:150px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="conatct_insta_image" class="form-control" id="1exampleInputFile">
                
              </div>

              @error('conatct_insta_image')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          

          <div class="form-group">
            <label for="exampleInputCategory">Contact Register Name</label>
            <input type="text" class="form-control" id="exampleInputCategory" name="conatct_register_office" placeholder="Enter Description" rows="3">
            @error('conatct_register_office')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Address Line 1</label>
            <input type="text" class="form-control" id="exampleInputCategory" name="conatct_register_adress1" placeholder="Enter Description" rows="3">
            @error('conatct_register_adress1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputCategory">Contact Address Line 2</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_register_adress2" placeholder="Enter Description" rows="3"></textarea>
            @error('conatct_register_adress2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputCategory">Contact Address Line 3</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_register_adress3" placeholder="Enter Description" rows="3"></textarea>
            @error('conatct_register_adress3')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>


          <div class="form-group">
            <label for="exampleInputCategory">Contact Our List Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_ourlist" placeholder="Enter Description" rows="3"></textarea>
            @error('conatct_ourlist')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Our List Description</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_ourlist_text" placeholder="Enter Description" rows="3"></textarea>
            @error('conatct_ourlist_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>


      

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/contact_details" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
      </form>


</div>
    </div>
</div>

</div>
@endsection