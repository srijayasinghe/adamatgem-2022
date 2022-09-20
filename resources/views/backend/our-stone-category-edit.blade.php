
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Stones Category</h3>
      </div>
     
      <form action="{{route('update.our_category',$our_categorys->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
        

          <div class="form-group">
            <label for="exampleInputCategory">Category Main Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="our_category_header" placeholder="Enter Description" rows="3" value="{{$our_categorys->our_category_header}}">{{$our_categorys->our_category_header}}</textarea>
            @error('our_category_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputCategory">Category Description</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="our_category_body" placeholder="Enter Description" rows="3" value="{{$our_categorys->our_category_body}}">{{$our_categorys->our_category_body}}</textarea>
            @error('our_category_body')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/our_category" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>


</div>
    </div>
</div>

</div>
@endsection