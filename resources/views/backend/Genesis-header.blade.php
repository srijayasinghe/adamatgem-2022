
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Company / Section 01</h3>

              @if(count($genesis_headers)==0)

                <a href="{{route('all.genesis_header_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-plus"></i> New</a>
              @endif
            </div> 
            <img src="/images/Web-view/Screenshot_6.jpg" style="width:auto;height:auto">  
       
            @foreach($genesis_headers as $genesis_header)

            <div class="d-flex justify-content-center genesis-header">
  <div class="col-md-8">
    
    <div class="card card-primary">
     
     
      <form action="{{route('update.genesis_header',$genesis_header->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        


          <div class="form-group">
            <label for="exampleInputCategory">Header</label>
            <textarea type="text" id="textarea1" autofocus maxlength="20" class="form-control" id="exampleInputCategory" name="genesis_header" placeholder="Enter Description" rows="3" value="{{$genesis_header->genesis_header}}">{{$genesis_header->genesis_header}}</textarea>
            
          </div>

          <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 20</span>
          </div>

          @error('genesis_header')
            <span class="text-danger">{{$message}}</span>
                
          @enderror

        <div class="form-group">
            <label for="exampleInputCategory">Description</label>
            <textarea type="text" id="textarea2" autofocus maxlength="300" class="form-control" id="exampleInputCategory" name="genesis_body" placeholder="Enter Description" rows="5" value="{{$genesis_header->genesis_body}}">{{$genesis_header->genesis_body}}</textarea>
            
          </div>

          <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 300</span>
             </div>
          @error('genesis_body')
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



 










