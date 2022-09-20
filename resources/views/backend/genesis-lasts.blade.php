
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Company / Section 04</h3>
              @if(count($genesis_lasts)==0)
                <a href="{{route('all.genesis_lasts_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
              @endif
            </div> 
            <img src="/images/Web-view/Screenshot_9.jpg" style="width:auto;height:auto">    
       

            @foreach($genesis_lasts as $genesis_lasts)
            <div class="d-flex justify-content-center genesis-lasts">
<div class="col-md-8">
    
    <div class="card card-primary">
      
     
      <form action="{{route('update.genesis_lasts',$genesis_lasts->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        


        <div class="form-group">
            <label for="exampleInputCategory">Header 01</label>
            <textarea type="text" id="textarea1" autofocus maxlength="100" class="form-control" id="exampleInputCategory" name="genesis_lasts_header" value="{{$genesis_lasts->genesis_lasts_header}}" placeholder="Enter Description" rows="3">{{$genesis_lasts->genesis_lasts_header}}</textarea>
            
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 100</span>
             </div> 

        </div>
        @error('genesis_lasts_header')
            <span class="text-danger">{{$message}}</span>
                
        @enderror

        <div class="form-group">
            <label for="exampleInputCategory">Subheader 01</label>
            <textarea type="text" id="textarea2" autofocus maxlength="130" class="form-control" id="exampleInputCategory" name="genesis_lasts_text1" value="{{$genesis_lasts->genesis_lasts_text1}}" placeholder="Enter Text" rows="3">{{$genesis_lasts->genesis_lasts_text1}}</textarea>
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 130</span>
             </div>

        </div>
        @error('genesis_lasts_text1')
            <span class="text-danger">{{$message}}</span>    
         @enderror

       

        <div class="form-group">
            <label for="exampleInputCategory">Description 01 (Purple Text)</label>
            <textarea type="text" id="textarea3" autofocus maxlength="140" class="form-control" id="exampleInputCategory" value="{{$genesis_lasts->genesis_lasts_text2}}" name="genesis_lasts_text2" placeholder="Enter Text" rows="3">{{$genesis_lasts->genesis_lasts_text2}}</textarea>
            
            <div id="count3">
            <span id="current_count3">0</span>
            <span id="maximum_count3">/ 140</span>
             </div>
        </div>
        @error('genesis_lasts_text2')
            <span class="text-danger">{{$message}}</span>    
         @enderror

       

        <div class="form-group">
            <label for="exampleInputCategory">Header 02</label>
            <textarea type="text" id="textarea4" autofocus maxlength="40" class="form-control" id="exampleInputCategory" name="genesis_lasts_text3" value="{{$genesis_lasts->genesis_lasts_text3}}" placeholder="Enter Text" rows="3">{{$genesis_lasts->genesis_lasts_text3}}</textarea>
            <div id="count4">
            <span id="current_count4">0</span>
            <span id="maximum_count4">/ 40</span>
             </div>

        </div>
        
        @error('genesis_lasts_text3')
            <span class="text-danger">{{$message}}</span>    
        @enderror

      

        <div class="form-group">
            <label for="exampleInputCategory">Description 02 (Black Text)</label>
            <textarea type="text" id="textarea5" autofocus maxlength="500" class="form-control" id="exampleInputCategory" name="genesis_lasts_text4" value="{{$genesis_lasts->genesis_lasts_text4}}" placeholder="Enter Text" rows="5">{{$genesis_lasts->genesis_lasts_text4}}</textarea>
            <div id="count5">
            <span id="current_count5">0</span>
            <span id="maximum_count5">/ 500</span>
             </div>
       </div>
       @error('genesis_lasts_text4')
            <span class="text-danger">{{$message}}</span>    
       @enderror

       <div class="form-group">
            <label for="exampleInputCategory">Description 03 (Purple Text)</label>
            <textarea type="text" id="textarea6" autofocus maxlength="220" class="form-control" id="exampleInputCategory" name="genesis_lasts_text5" value="{{$genesis_lasts->genesis_lasts_text5}}" placeholder="Enter Text" rows="3">{{$genesis_lasts->genesis_lasts_text5}}</textarea>
            <div id="count6">
            <span id="current_count6">0</span>
            <span id="maximum_count6">/ 220</span>
             </div>
       </div>
       @error('genesis_lasts_text5')
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

$('#textarea4').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count4'),
        maximum_count = $('#maximum_count4'),
        count = $('#count4');    
        current_count.text(characterCount);        
});
$('#textarea5').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count5'),
        maximum_count = $('#maximum_count5'),
        count = $('#count5');    
        current_count.text(characterCount);        
});

$('#textarea6').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count6'),
        maximum_count = $('#maximum_count6'),
        count = $('#count6');    
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



 










