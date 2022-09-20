
@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Stone Category</h3>
      </div>
     
      <form action="{{route('add.our_category')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
             
          <div class="form-group">
            <label for="exampleInputCategory">Category Main Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="our_category_header" placeholder="Enter Description" rows="3"></textarea>
            @error('our_category_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputCategory">Category Description</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="our_category_body" placeholder="Enter Description" rows="3"></textarea>
            @error('our_category_body')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
        

        
        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/our_category" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
      </form>

</div>

    </div>
</div>

</div>
@endsection