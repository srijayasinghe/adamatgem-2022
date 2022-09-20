
@extends('layouts.app-style') 
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Process / Section 03</h3>

              @if(count($process_threes)==0)
                <a href="{{route('all.process_three_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
              @endif
            </div>   
            <img src="/images/Web-view/Screenshot_13.jpg" style="width:auto;height:auto">
       


            @foreach($process_threes as $process_threes)

            <div class="d-flex justify-content-center process-recuting">
<div class="col-md-8">
    
    <div class="card card-primary">
     
      <form action="{{route('update.process_three',$process_threes->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        

          <div class="form-group">
            <label for="exampleInputCategory">Header</label>
            <textarea type="text" id="textarea1" autofocus maxlength="30" class="form-control" id="exampleInputCategory" name="process_center_header1" placeholder="Enter Text" rows="1" value="{{$process_threes->process_center_header1}}">{{$process_threes->process_center_header1}}</textarea>
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 30</span>
             </div>
           
           
            @error('process_center_header1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Subheader</label>
            <textarea type="text" id="textarea2" autofocus maxlength="180" class="form-control" id="exampleInputCategory" name="process_center_header2" placeholder="Enter Text" rows="3" value="{{$process_threes->process_center_header2}}">{{$process_threes->process_center_header2}}</textarea>
            
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 180</span>
             </div>
            
            @error('process_center_header2')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>


          
        <div class="form-group">
            <label for="exampleInputCategory">Description</label>
            <textarea type="text" id="textarea3" autofocus maxlength="350" class="form-control" id="exampleInputCategory" name="process_center_header3" placeholder="Enter Text" rows="4" value="{{$process_threes->process_center_header3}}">{{$process_threes->process_center_header3}}</textarea>
            <div id="count3">
            <span id="current_count3">0</span>
            <span id="maximum_count3">/ 350</span>
             </div>
            
            
            @error('process_center_header3')
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

$('#textarea3').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count3'),
        maximum_count = $('#maximum_count3'),
        count = $('#count3');    
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



 










