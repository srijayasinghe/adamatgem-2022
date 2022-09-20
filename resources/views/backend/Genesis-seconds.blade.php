
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Company / Section 02</h3>
              @if(count($genesis_seconds)==0)
                <a href="{{route('all.genesis_seconds_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
              @endif
            </div> 
            
            <img src="/images/Web-view/Screenshot_7.jpg" style="width:auto;height:auto">  
       
            @foreach($genesis_seconds as $genesis_seconds)

            <div class="d-flex justify-content-center genesis-seconds">
<div class="col-md-8">
    
    <div class="card card-primary">
     
      <form action="{{route('update.genesis_seconds',$genesis_seconds->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        


          <div class="form-group">
            <label for="exampleInputCategory">Header</label>
            <textarea type="text" id="textarea1" autofocus maxlength="30" class="form-control" id="exampleInputCategory" name="genesis_seconds_header" placeholder="Enter Description" rows="2" value="{{$genesis_seconds->genesis_seconds_header}}">{{$genesis_seconds->genesis_seconds_header}}</textarea>
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 30</span>
             </div>

            </div>
          @error('genesis_seconds_header')
            <span class="text-danger">{{$message}}</span>
                
          @enderror

        <div class="form-group">
            <label for="exampleInputCategory">Decription</label>
            <textarea type="text" id="textarea2" autofocus maxlength="600" class="form-control" id="exampleInputCategory" name="genesis_seconds_body" placeholder="Enter Description" rows="7" value="{{$genesis_seconds->genesis_seconds_body}}">{{$genesis_seconds->genesis_seconds_body}}</textarea>
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 600</span>
             </div>
          </div>
          @error('genesis_seconds_body')
            <span class="text-danger">{{$message}}</span>    
          @enderror

        </div>

        
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>



    </div>
</div>
<script>

$('#textarea1').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count1'),
        maximum_count = $('#maximum_count1'),
        count = $('#count1');    
        current_count.text(characterCount);        
});

$('#textarea2').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count2'),
        maximum_count = $('#maximum_count2'),
        count = $('#count2');    
        current_count.text(characterCount);        
});
</script>

</div>

            @endforeach 

       
            
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->




  

 @endsection



 










