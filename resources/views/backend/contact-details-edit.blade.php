
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Contact Details</h3>
      </div>
     
      <form action="{{route('update.contact_details',$contact_details->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        

        <div class="form-group">
            <label for="exampleInputCategory">Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_header" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_header}}">{{$contact_details->conatct_header}}</textarea>
            @error('conatct_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
        
         

          <div class="form-group">
            <label for="exampleInputCategory">Header Description</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_header_text" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_header_text}}">{{$contact_details->conatct_header_text}}</textarea>
            @error('conatct_header_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Number </label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_number" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_number}}">{{$contact_details->conatct_number}}</textarea>
            @error('conatct_number')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Contact Icon (W:150px,H:150px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="conatct_number_image" class="form-control" id="1exampleInputFile" value="{{$contact_details->conatct_number_image}}">
                
              </div>

              @error('conatct_number_image')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <div class="form-group">
            
            <img src="{{asset($contact_details->conatct_number_image)}}" style="height: 150px; width:200px">
        
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Email</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_email" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_header}}">{{$contact_details->conatct_header}}</textarea>
            @error('conatct_email')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Contact Email Icon (W:150px,H:150px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="conatct_email_image" class="form-control" id="1exampleInputFile" value="{{$contact_details->conatct_email_image}}">
                
              </div>

              @error('conatct_email_image')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <div class="form-group">
            
            <img src="{{asset($contact_details->conatct_email_image)}}" style="height: 150px; width:200px">
        
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Instagram </label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_insta" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_insta}}">{{$contact_details->conatct_insta}}</textarea>
            @error('conatct_insta')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Contact Instagram Icon (W:150px,H:150px)</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="conatct_insta_image" class="form-control" id="1exampleInputFile" value="{{$contact_details->conatct_insta_image}}">
                
              </div>

              @error('conatct_insta_image')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
                
            </div>
          </div>

          <div class="form-group">
            
            <img src="{{asset($contact_details->conatct_insta_image)}}" style="height: 150px; width:200px">
        
          </div>

          

          <div class="form-group">
            <label for="exampleInputCategory">Contact Register Name</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_register_office" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_register_office}}">{{$contact_details->conatct_register_office}}</textarea>
            @error('conatct_register_office')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Address Line 1</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_register_adress1" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_register_adress1}}">{{$contact_details->conatct_register_adress1}}</textarea>
            @error('conatct_register_adress1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputCategory">Contact Address Line 2</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_register_adress2" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_register_adress2}}">{{$contact_details->conatct_register_adress2}}</textarea>
            @error('conatct_register_adress2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Address Line 3</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_register_adress3" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_register_adress3}}">{{$contact_details->conatct_register_adress3}}</textarea>
            @error('conatct_register_adress3')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>


          <div class="form-group">
            <label for="exampleInputCategory">Contact Our List Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_ourlist" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_ourlist}}">{{$contact_details->conatct_ourlist}}</textarea>
            @error('conatct_ourlist')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputCategory">Contact Our List Description</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="conatct_ourlist_text" placeholder="Enter Description" rows="3" value="{{$contact_details->conatct_ourlist_text}}">{{$contact_details->conatct_ourlist_text}}</textarea>
            @error('conatct_ourlist_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>


      

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/contact_details" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>


</div>
    </div>
</div>

</div>
@endsection