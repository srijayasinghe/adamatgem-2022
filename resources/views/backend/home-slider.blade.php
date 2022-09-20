
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Home / Main Sliders</h3>
            
                <a href="{{route('all.adamant_slider_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
             
            </div>   
            <img src="/images/Web-view/Screenshot_1.jpg" style="width:auto;height:auto">
       
            <!-- /.card-header -->
            <div class="card-body">
              

             

              <table  id="table" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th width="30px">#</th>  
                  <th>Slider Image</th>
                  <th>Gem Image</th>
                  <th>Slider Title</th>
                  <th>Slider Description</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody id="tablecontents">

                @foreach($home_sliders as $home_slider)
                 <tr class="row1" data-id="{{$home_slider->id}}">
                 <td class="pl-3"><i class="fa fa-sort"></i></td>
                   
                   <td><img src="{{asset($home_slider->home_banner_image)}}" style="height: 60px; width:160px;"></td> 
                  

                   <td><img src="{{asset($home_slider->home_body_image)}}" style="height: 60px; width:60px;"></td> 
                  
                   <td>{{$home_slider->home_banner_header}}</td>
                   

                    
                 
                   <td>{{$home_slider->home_banner_description}}</td>
                  
                   <td>
                     
                    <div class="btn-group btn-group-sm" role="group">
                    @if($home_slider->disabled)
                       <a href="{{route('toggle.adamant_slider',$home_slider->id)}}" class="btn btn-success" title="Enable">Enable</a>
                    @else
                    <a href="{{route('toggle.adamant_slider',$home_slider->id)}}" class="btn btn-danger" title="Disable">Disable</a>
                    @endif
                     </div>
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{route('edit.adamant_slider',$home_slider->id)}}" class="btn btn-primary" title="Edit"><i class="fa fa-edit"></i></a>
                   
                    </div>
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="{{route('delete.adamant_slider',$home_slider->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                   
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
        <!-- /.col -->


      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->


    <script>

var loandFile1=function(event) {

  var output=document.getElementById('output');
  output.src=URL.createObjectURL(event.target.files[0]); 
};

var loandFile2=function(event) {

var output=document.getElementById('output1');
output.src=URL.createObjectURL(event.target.files[0]); 
};



</script>


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
            url:"{{ route('Slider-sortable_new')}}",
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
    </script>

  </section>
  <!-- /.content -->




  

 @endsection



 










