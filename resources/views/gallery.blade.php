
@extends('layouts.app-style') 
@section('content')

<style>
  button#delete-all {
    position: absolute;
    left: 40%;
    z-index: 1;
}
.btn.bg-danger{
  display: none;
}
.btn.bg-danger.menuitemshow{
  display: block;
}
  .form-control {
    display: block;
    width: 100%;
    height: 30px !important;
    padding: 3px !important;
    font-size: 13px !important;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
div.dataTables_wrapper div.dataTables_length select {
    width: 45px !important;
    display: inline-block;
}

.btn-group-sm>.btn{
    padding: 0.2rem 0.5rem !important;
    font-size: .575rem !important;
    line-height: 1.5;
    border-radius: 0.1rem;
}
.row.new {
    display: flex;
    flex-direction: column;
}

</style>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-4">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Stone / Gallery Name</h3>
              <div class="btn-group btn-group-sm" role="group" style="float: right;">
                <a href="{{route('all.gallery_new')}}" class="btn btn-success" style="float: right;"><i class="fas fa-edit"></i></a>
              </div>
            </div> 
            <img src="/images/Web-view/Screenshot_34.jpg" style="width:auto;height:auto">  
                    
       
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover" style="width:100%; max-width:100%;
white-space:nowrap;">
                <thead>
                <tr>
               
                  
                  <th>Gallery Name</th>
                 
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>

                  @foreach($gallery as $galler)
                 <tr>
                   
                   <td>{{$galler->gallery_name }}</td> 
                 
                   
                   <td>
                   <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('edit.gallery',$galler->id)}}" class="btn btn-primary"><i class="fa fa-edit fa-sm"></i></a>
                 </div>
                    <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('delete.gallery',$galler->id)}}" class="btn btn-danger"><i class="fa fa-trash fa-sm"></i></a>
                     </div>                    
                   
                   </td>
                   
                 
                 </tr>
                 @endforeach   
   
               </tbody>
            
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-8">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Stone / Gallery Images</h3>
              <div class="btn-group btn-group-sm" role="group" style="float: right;">
                <a href="{{route('all.gallery_image_new')}}" class="btn btn-success" style="float: right;"><i class="fas fa-edit"></i></a>
            </div>
            </div> 
            <img src="/images/Web-view/Screenshot_34.png" style="width:auto;height:auto">  
                
            <form method="post" action="{{route('delete.gallery_image')}}" enctype="multipart/form-data">
              {{ csrf_field() }}
            <!-- /.card-header -->
           
		           
            <div class="card-body">

            <button type="submit" id="delete-all" class="btn bg-danger">delete images</button>
		    

              <table id="table" class="table table-bordered table-hover" style="width:100%; max-width:100%;
                 white-space:nowrap;">
                <thead>
                <tr>
                  <th width="30px"> <input type="checkbox" id="checkAll">Select All</th>
                  <th>Gallery Image</th>
                  <th>Gallery Image Path</th>
                 
                  <th>Action</th>
                  
                </tr>
                </thead>
                
                <tbody id="tablecontents">


             

                  @foreach($data as $key=>$value)

                 



                  

              
                  
                 <tr class="row1" data-id="{{$value->id}}">
                 
                  <td class="pl-3">
                  <input name='id[]' type="checkbox" id="checkItem" value="{{$value->id}}">
                  <i class="fa fa-sort"></i>
                  </td>
                 
                  

                   <td>
                     <div class="row new">
                       @if($value['showgallery']) 
                       <div class="col-4"> {{$value['showgallery']['gallery_name']}}</div>
                       @else
                       <div class="col-4 select-category">Select the Gallery</div>
                       @endif
                       <div class="col-6"> <img src="{{url('images/stone-gallery/'.$value->gallery_image)}}"  style="height: 50px; width:55px;"></div>
                     
                     
                      </div>   
                  </td> 
                  <td>
                    {{$value->gallery_image}}
                  </td> 
                  
                   <td>
                   <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('edit.gallery_image',$value->id)}}" class="btn btn-primary"><i class="fa fa-edit fa-sm"></i></a>
                 </div>
                    <!-- <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('delete.gallery_image',$value->id)}}" class="btn btn-danger"><i class="fa fa-trash fa-sm"></i></a>
                  </div>                -->
                   
                   </td>
                   
                 
                 </tr>
                 @endforeach   

               

               </tbody>
               
               
              </table>





              
             
            </div>

            </form>


            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
    <script type="text/javascript">
      $(function () {
        $("#table").DataTable();
// this is need to Move Ordera accordin user wish Arrangement
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
            url:"{{ route('post-sortable_new')}}",
            data: {
              order: order,
              "_token": "{{ csrf_token() }}",
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



      $("#checkAll").click(function () {
				$('input:checkbox').not(this).prop('checked', this.checked);
			});

      $('input:checkbox').change(function(){
    if($(this).is(":checked")) {
        $('#delete-all').addClass("menuitemshow");
    } else {
        $('#delete-all').removeClass("menuitemshow");
      }
     });




    </script>





  </section>
  <!-- /.content -->

 @endsection



 