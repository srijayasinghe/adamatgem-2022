
@extends('layouts.app-style') 
@section('content')

<style>
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
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h2 class="card-title">Faq / Faq Category</h2>

                <a href="{{route('all.Faq_category_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
 
            </div>   
            <img src="/images/Web-view/Screenshot_24.jpg" style="width:auto;height:auto">  
         
       
            <!-- /.card-header -->
            <div class="card-body">
              <table id="table" class="table table-bordered table-hover" style="width:100%;
               max-width:100%;white-space:nowrap;">
                <thead>
                <tr>
                  <th width="30px">#</th> 
                  <th>Faq Category Name</th>
                 
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody id="tablecontents">

                  @foreach($faq_category as $category)
                 <tr class="row1" data-id="{{$category->id}}">

                   <td class="pl-3"><i class="fa fa-sort"></i></td>
                   
                   <td>{{$category->faq_category_name}}</td>
                  
                   <td>
                   <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('edit.Faq_category',$category->id)}}" class="btn btn-primary"><i class="fa fa-edit fa-sm"></i></a>
                   </div>
                   <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('delete.Faq_category',$category->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-trash fa-sm"></i></a>
                  </div>
                   </td>
                   
                 
                 </tr>
                 @endforeach   
   
               </tbody>
            
              </table>
              {{ $faq_category->links() }}
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
  </section>
  <!-- /.content -->


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
            url:"{{ route('category-sortable_new')}}",
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




  

 @endsection



 