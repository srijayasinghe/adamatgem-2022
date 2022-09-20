
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Our Stones / Stone Category</h3>
              @if(count($our_categorys)==0)
                <a href="{{route('all.our_category_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
              @endif
            </div>   
            <img src="/images/Web-view/Screenshot_36.jpg" style="width:auto;height:auto">
       
            @foreach($our_categorys as $our_category)

            <div class="d-flex justify-content-center our-stone-category">
<div class="col-md-8">
    
    <div class="card card-primary">
     
     
      <form action="{{route('update.our_category',$our_category->id)}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card-body">
        
        

          <div class="form-group">
            <label for="exampleInputCategory">Category Main Header</label>
            <textarea type="text" id="textarea1" autofocus maxlength="20" class="form-control" id="exampleInputCategory" name="our_category_header" placeholder="Enter Description" rows="1" value="{{$our_category->our_category_header}}">{{$our_category->our_category_header}}</textarea>
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 20</span>
             </div>
            
            
            @error('our_category_header')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputCategory">Category Description</label>
            <textarea type="text" id="textarea2" autofocus maxlength="200" class="form-control" id="exampleInputCategory" name="our_category_body" placeholder="Enter Description" rows="5" value="{{$our_category->our_category_body}}">{{$our_category->our_category_body}}</textarea>
            
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 200</span>
             </div>
            
            
            @error('our_category_body')
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



 










