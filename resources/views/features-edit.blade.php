
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Feature</h3>
      </div>
     
      <form action="{{route('update.feature',$features->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}       
        
       

        <div class="card-body">

          <div class="form-group">
            <label for="document">Category Name</label>
            <select class="form-control" name="category_id">
              <option value="" selected="" disabled="">Select category</option>
            @foreach($categorys as $category)
            <option value="{{$category->id}}" {{($features->category_id==$category->id)? 'selected':''}}>{{$category->category_name}}</option>
            @endforeach 

    
            </select>
          </div>



         
        <div class="form-group">
          <label for="exampleInputFile">Feature Images (W:1800px,H:1200px)</label>
          <div class="input-group">

            <div class="custom-file">
              
            <input type="file" name="feature_images" class="form-control" id="exampleInputFile" value="{{$features->feature_images}}" onchange="loandFile1(event)">
              
              
            </div>
              
          </div>
          <img id="output" src="{{url('images/features-images/'.$features->feature_images)}}"  style="height:auto; width:500px;"/>
          </div>


            @error('feature_images')
              <span class="text-danger">{{$message}}</span>
                  
              @enderror
          </div> 




          
        </div>

        

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/category" class="btn go-back">Go Back</a>
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