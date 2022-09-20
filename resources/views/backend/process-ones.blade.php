
@extends('layouts.app-style') 
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Process / Section 01</h3>
              @if(count($process_ones)==0) 
                <a href="{{route('all.process_one_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
                @endif
            </div> 
             
            <img src="/images/Web-view/Screenshot_11.jpg" style="width:auto;height:auto">
           

            @foreach($process_ones as $process_ones)

            <div class="d-flex justify-content-center process-one">
 <div class="col-md-8">
    
    <div class="card card-primary">
      
     
      <form action="{{route('update.process_one',$process_ones->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        

          <div class="form-group">
            <label for="exampleInputCategory">Header </label>
            <textarea type="text" id="textarea1" autofocus maxlength="40" class="form-control" id="exampleInputCategory" name="process_header_text" placeholder="Enter Text" rows="2" value="{{$process_ones->process_header_text}}">{{$process_ones->process_header_text}}</textarea>
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 40</span>
             </div>
           
            @error('process_header_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

        <div class="form-group">
            <label for="exampleInputCategory">Description</label>
            <textarea type="text" id="textarea2" autofocus maxlength="400" class="form-control" id="exampleInputCategory" name="process_header_body" placeholder="Enter Text" rows="4" value="{{$process_ones->process_header_body}}">{{$process_ones->process_header_body}}</textarea>
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 400</span>
             </div>
           
            @error('process_header_body')
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



 










