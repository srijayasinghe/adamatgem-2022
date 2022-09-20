
@extends('layouts.app-style') 
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Home / Adamant Logo Section</h3>
              
              @if(count($home_bodys)==0)
                <a href="{{route('all.adamant_body_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
              @endif
            </div>   
            <img src="/images/Web-view/Screenshot_2.jpg" style="width:auto;height:auto">
            <!-- /.card-header -->

            @foreach($home_bodys as $home_body) 

   <div class="d-flex justify-content-center">
    <div class="col-md-8">
    
    <div class="card card-primary">
      
     
      <form action="{{route('update.adamant_body',$home_body->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
          <div class="form-group">
            <label for="exampleInputFile">Banner Image</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="home_body_banner" class="form-control" id="1exampleInputFile" value="{{$home_body->home_body_banner}}" onchange="loandFile1(event)">
                
              </div>

             
                
            </div>
          </div>
          @error('home_body_banner')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
          <div class="form-group">
            
            <img id="output1" src="{{ asset($home_body->home_body_banner)}}" style="height: 200px; width:400px">
        
        </div>


       


          <div class="form-group">
            <label for="exampleInputCategory">Banner  Header </label>
            <textarea id="textarea" autofocus maxlength="60" type="text" class="form-control" id="exampleInputCategory" name="home_body_banner_text1" placeholder="Enter Text" rows="1" value="{{$home_body->home_body_banner_text1}}">{{$home_body->home_body_banner_text1}}</textarea>
            
            <div id="count">
            <span id="current_count">0</span>
            <span id="maximum_count">/ 60</span>
             </div>


          </div>
          @error('home_body_banner_text1')
            <span class="text-danger">{{$message}}</span>
                
            @enderror

          

          <div class="form-group">
            <label for="exampleInputCategory">Paragraph Header</label>
            <textarea id="textarea2" autofocus maxlength="25" type="text" class="form-control" id="exampleInputCategory" name="home_body_text" placeholder="Enter Text" rows="1" value="{{$home_body->home_body_text}}">{{$home_body->home_body_text}}</textarea>
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 25</span>
             </div>
            
          </div>
          @error('home_body_text')
            <span class="text-danger">{{$message}}</span>
                
            @enderror

        <div class="form-group">
            <label for="exampleInputCategory">Paragraph</label>
            <textarea id="textarea3" autofocus maxlength="700" type="text" class="form-control tinymce-editor" rows="3"  id="exampleInputCategory" name="home_body_content" placeholder="Enter Text" value="{{$home_body->home_body_content}}">{{$home_body->home_body_content}}</textarea>
           
            <div id="count3">
            <span id="current_count3">0</span>
            <span id="maximum_count3">/ 700</span>
             </div>
           
          </div>

          @error('home_body_content')
            <span class="text-danger">{{$message}}</span>
                
            @enderror



        <div class="form-group">
            <label for="exampleInputFile">Adamant Logo</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="home_body_logo" class="form-control" id="exampleInputFile" value="{{$home_body->home_body_logo}}" onchange="loandFile2(event)">
                
              </div>

             

                
         
                
            </div>
          </div>
          @error('home_body_logo')
                <span class="text-danger">{{$message}}</span>
                    
           @enderror

          <div class="form-group">
            
            <img id="output2" src="{{asset($home_body->home_body_logo)}}" style="height: 200px; width:400px">
        
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

var loandFile1=function(event) {

  var output=document.getElementById('output1');
  output.src=URL.createObjectURL(event.target.files[0]); 
};

var loandFile2=function(event) {

var output=document.getElementById('output2');
output.src=URL.createObjectURL(event.target.files[0]); 
};

$('#textarea').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count'),
        maximum_count = $('#maximum_count'),
        count = $('#count');    
        current_count.text(characterCount);        
});

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



            <!-- <div class="card-body">
              <table id="example25" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Body Image</th>
                  <th>Body Header</th>

                  
                 
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody>

                @foreach($home_bodys as $home_body)
                 <tr>
                   <td>{{$home_body->id}}</td>
                  
                   <td><a href="{{route('edit.adamant_body',$home_body->id)}}"><img src="{{asset($home_body->home_body_banner)}}" style="height: 60px; width:160px;"></a></td>
                   <td>{{$home_body->home_body_banner_text1}} {{$home_body->home_body_banner_text2}}</td>
                  
                   
                   <td>
                   <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('edit.adamant_body',$home_body->id)}}" class="btn btn-primary" title="Edit">Edit</a>
                   </div>
                   </td>
                   
                 
                 </tr>
                 @endforeach 

   
               </tbody>
            
              </table>
          

            </div> -->
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



 










