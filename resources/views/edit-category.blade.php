@extends('layouts.app-style') 
@section('content')


<style>
  .modal-content {
    width: 120% !important;
}
</style>

<div class="d-flex justify-content-center">
<div class="col-md-8">
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Category</h3>
      </div>
     
      <form action="{{route('update.category',$category->id)}}" method="POST"  enctype="multipart/form-data">
        
        {!! csrf_field() !!}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputColor">Category Name</label>
            <input type="text" id="textarea1" autofocus maxlength="50" class="form-control" id="exampleInputColor" name="category_name" value="{{$category->category_name}}" placeholder="Enter Availability">
           
            <div id="count1">
            <span id="current_count1">0</span>
            <span id="maximum_count1">/ 50</span>
             </div>
           
            @error('category_name')
            <span class="text-danger">{{$message}}</span>
                
            @enderror
          </div>

          <div class="form-group">
                    <div class="custom-control custom-switch">
                     
                      <input type="checkbox" name="name_value"  value="1" {{($category->name_value==1)? 'checked ':''}}   class="custom-control-input" id="customSwitch1">
                     
                      <label class="custom-control-label" for="customSwitch1">Hide the Category Name</label>
                    </div>
          </div>


          <div class="form-group">
            <label for="exampleInputFile">Category Image</label>
            <div class="input-group">
              <div class="custom-file">
               
                <input type="file" name="category_image" class="form-control" id="exampleInputFile" value="{{$category->category_image}}" onchange="loandFile1(event)">
                
              </div>

              
                
            </div>
          </div>
          @error('category_image')
                <span class="text-danger">{{$message}}</span>
                    
          @enderror

          <div class="form-group">
            
            <img id="output" src="{{ asset($category->category_image)}}" style="height: 200px; width:400px">
           
          </div>
          <div class="form-group">
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
           Change The Category Slider Images
          </button>
          </div>

         
          <div class="form-group">
            <label for="exampleInputCategory">Category description</label>
            <textarea type="text" id="textarea2" autofocus maxlength="350" rows="10" cols="40" class="form-control" value="{{$category->category_description}}"  id="exampleInputCategory" name="category_description" placeholder="Enter category description">{{$category->category_description}}</textarea>
            
            <div id="count2">
            <span id="current_count2">0</span>
            <span id="maximum_count2">/ 350</span>
             </div>
            
            
            @error('category_description')
            <span class="text-danger">{{$message}}</span>
                
            @enderror

            <div class="form-group">
                    <div class="custom-control custom-switch">
                     
                      <input type="checkbox" name="description_value"  value="1" {{($category->description_value==1)? 'checked ':''}}   class="custom-control-input" id="customSwitch2">
                     
                      <label class="custom-control-label" for="customSwitch2">Hide the Category Description</label>
                    </div>
          </div>

          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="/category" class="btn go-back">Go Back</a>
          <button type="submit"  class="btn btn-success">Update</button>
        </div>
      </form>



    </div>
</div>


 <!-- Modal -->
 <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Category Slider Images</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <table id="table" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th width="30px">#</th>
                  <th>Image</th>
                 
                    
                </tr>
                </thead>
                
                <tbody id="tablecontents">
                
                
                  @foreach($stones as $value)
               

                <tr class="row1" data-id="{{$value->id}}">
                 
                 <td class="pl-3">
                 {{$value->order}}
                 </td>


                
                
                  <td>
                  <img src="{{asset($value->product_image)}}" style="height: 60px; width:100px;">
                 </td> 
                 
                 
                
                  
                
                </tr>
         
                 @endforeach

               

               </tbody>
               
               
              </table>
      </div>
      
    </div>
  </div>
</div>

<script>

var loandFile1=function(event) {

  var output=document.getElementById('output');
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




</script> <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
    <script type="text/javascript">
      $(function () {
        $("#table").DataTable({
          paging: false,
          "searching": false
      });

        $( "#tablecontents" ).sortable({
          items: "tr",
          cursor: 'move',
          opacity: 0.6,
          update: function() {
              sendOrderToServer();
          }
        });
        function sendOrderToServer() {
          var order = [];
          var token = $('meta[name="csrf-token"]').attr('content');

        //   by this function User can Update hisOrders or Move to top or under
          $('tr.row1').each(function(index,element) {
            order.push({
              id: $(this).attr('data-id'),
              position: index+1
            });
          });
  
         
          $.ajax({
            type: "POST", 
            dataType:'json',
            url:"{{ route('category-sortable_new')}}",
            data: {
              order: order,
              "_token": "{{ csrf_token() }}",
              "category_id":"{{$category->id}}"
            },
            success: function(response) {
                if (response.status == "success") {
                  console.log(response);
                } else {
                  console.log(response);
                }
            }
          });
        }
      });






    </script>



</div>

 @endsection
