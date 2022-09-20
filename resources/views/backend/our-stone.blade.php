
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Our Stones/ Banner</h3>
              @if(count($our_stones)==0)
                <a href="{{route('all.our_stone_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
                @endif
            </div>   
            <img src="/images/Web-view/Screenshot_5.jpg" style="width:auto;height:auto">
       
            @foreach($our_stones as $our_stone)

            <div class="d-flex justify-content-center our-stones">
     <div class="col-md-8">
    
    <div class="card card-primary">
     
     
      <form action="{{route('update.our_stone',$our_stone->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
          <div class="form-group">
            <label for="exampleInputFile">Banner Image</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="our_stone_banner" class="form-control" id="1exampleInputFile" value="{{$our_stone->our_stone_banner}}" onchange="loandFile1(event)">
                
              </div>

             
                
            </div>
            @error('our_stone_banner')
                <span class="text-danger">{{$message}}</span>
                    
            @enderror
          </div>

          <div class="form-group">
            
            <img id="output1" src="{{ asset($our_stone->our_stone_banner)}}" style="height: 150px; width:200px">
        
            </div>


  


          <div class="form-group">
            <label for="exampleInputCategory">Banner Header</label>
            <textarea id="textarea1" autofocus maxlength="60" type="text" class="form-control" id="exampleInputCategory" name="our_stone_header" placeholder="Enter Text" rows="2" value="{{$our_stone->our_stone_header}}">{{$our_stone->our_stone_header}}</textarea>
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 60</span>
             </div>
          </div>
          @error('our_stone_header')
            <span class="text-danger">{{$message}}</span>
                
          @enderror

        <div class="form-group">
            <label for="exampleInputCategory">Banner Description</label>
            <textarea id="textarea2" autofocus maxlength="500" type="text" class="form-control" id="exampleInputCategory" name="our_stone_body" placeholder="Enter Description" rows="7" value="{{$our_stone->our_stone_body}}">{{$our_stone->our_stone_body}}</textarea>
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 500</span>
             </div>
          </div>
          @error('our_stone_body')
            <span class="text-danger">{{$message}}</span>
                
          @enderror
          

        
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>


</div>
    </div>
</div>

<script>

var loandFile1=function(event) {

  var output=document.getElementById('output1');
  output.src=URL.createObjectURL(event.target.files[0]); 
};


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



 










