
@extends('layouts.app-style') 
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Process / Process Studio Body</h3>
              @if(count($process_studiobodys)==0)
                <a href="{{route('all.process_studiobody_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
              @endif
            </div> 
            <img src="/images/Web-view/Screenshot_16.jpg" style="width:auto;height:auto">  
            
            @foreach($process_studiobodys as $process_studiobodys)


            <div class="d-flex justify-content-center process-studiobody">
<div class="col-md-8">
    
    <div class="card card-primary">
     
     
      <form action="{{route('update.process_studiobody',$process_studiobodys->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        

          <div class="form-group">
            <label for="exampleInputCategory">Studio Description 1</label>
            <textarea type="text" id="textarea1" autofocus maxlength="180" class="form-control" id="exampleInputCategory" name="process_studios_slider_headertext1" placeholder="Enter Text" rows="3" value="{{$process_studiobodys->process_studios_slider_headertext1}}">{{$process_studiobodys->process_studios_slider_headertext1}}</textarea>
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 180</span>
             </div>
            
            
            @error('process_studios_slider_headertext1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Studio Description 2</label>
            <textarea type="text" id="textarea2" autofocus maxlength="80" class="form-control" id="exampleInputCategory" name="process_studios_slider_headertext2" placeholder="Enter Text" rows="3" value="{{$process_studiobodys->process_studios_slider_headertext2}}">{{$process_studiobodys->process_studios_slider_headertext2}}</textarea>
            
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 80</span>
             </div>
            
            
            @error('process_studios_slider_headertext2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

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



 










