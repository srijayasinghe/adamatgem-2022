
@extends('layouts.app-style') 
@section('content')


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Home / Adamant Locations</h3>
  
              @if(count($home_maps)==0)
                <a href="{{route('all.adamant_map_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
              @endif
              </div>  
            <img src="/images/Web-view/Screenshot_3.jpg" style="width:auto;height:auto"> 
            @foreach($home_maps as $home_maps)

 <div class="d-flex justify-content-center map-section">
     <div class="col-md-8">
    
    <div class="card card-primary">
     
      <form action="{{route('update.adamant_map',$home_maps->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        


          <div class="form-group">
            <label for="exampleInputCategory">Map Header </label>
            <textarea id="textarea1" autofocus maxlength="50" type="text" class="form-control" id="exampleInputCategory" name="home_map_text" placeholder="Enter Description" rows="3" value="{{$home_maps->home_map_text}}">{{$home_maps->home_map_text}}</textarea>
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 50</span>
             </div>
          </div>
           @error('home_map_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror

        <div class="form-group">
            <label for="exampleInputCategory">Map Description</label>
            <textarea id="textarea2" autofocus maxlength="100" type="text" class="form-control" id="exampleInputCategory" name="home_map_body" placeholder="Enter Description" rows="3" value="{{$home_maps->home_map_body}}">{{$home_maps->home_map_body}}</textarea>
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 100</span>
             </div>
          </div>
          @error('home_map_body')
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
            <!-- /.card-header -->
          
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



 










