



@extends('layouts.app-style') 
@section('content')

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Gemstones Request</h3>
      </div>
     
      <form action="{{route('add.genesis_lasts')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        


        <div class="form-group">
            <label for="exampleInputCategory">Gemstones Request Header</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_lasts_header" placeholder="Enter Description" rows="3"></textarea>
            @error('genesis_lasts_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputCategory">Gemstones Request Text 1</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_lasts_text1" placeholder="Enter Text" rows="3"></textarea>
            @error('genesis_lasts_text1')
            <span class="text-danger">{{$message}}</span>    
            @enderror
        </div>

       

        <div class="form-group">
            <label for="exampleInputCategory">Gemstones Request Text 2</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_lasts_text2" placeholder="Enter Text" rows="3"></textarea>
            @error('genesis_lasts_text2')
            <span class="text-danger">{{$message}}</span>    
            @enderror
        </div>

       

        <div class="form-group">
            <label for="exampleInputCategory">Gemstones Request Text 3</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_lasts_text3" placeholder="Enter Text" rows="3"></textarea>
            @error('genesis_lasts_text3')
            <span class="text-danger">{{$message}}</span>    
            @enderror
        </div>

      

        <div class="form-group">
            <label for="exampleInputCategory">Gemstones Request Text 4</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_lasts_text4" placeholder="Enter Text" rows="3"></textarea>
            @error('genesis_lasts_text4')
            <span class="text-danger">{{$message}}</span>    
            @enderror
       </div>

       <div class="form-group">
            <label for="exampleInputCategory">Gemstones Request Text 5</label>
            <textarea type="text" class="form-control" id="exampleInputCategory" name="genesis_lasts_text5" placeholder="Enter Text" rows="3"></textarea>
            @error('genesis_lasts_text5')
            <span class="text-danger">{{$message}}</span>    
            @enderror
       </div>

        

        
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/genesis_lasts" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
      </form>

</div>

    </div>
</div>

</div>
@endsection