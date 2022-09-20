
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

.admin-color-circle {
    border: 1px solid;
    width: 40px;
    height: 40px;
    border-radius: 50%;
}
</style>


 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Stone / Color</h3>
              <div class="btn-group btn-group-sm" role="group" style="float: right;">
                <a href="{{route('all.color_new')}}" class="btn btn-success" style="float: right;"><i class="fas fa-edit"></i></a>
              </div>
            </div>  
            
            <img src="/images/Web-view/Screenshot_29.jpg" style="width:auto;height:auto">  
             
       
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  
                  <th>Color Name</th>
                  <th>Color Description</th>
                  <th>Color</th>
                  <th>Color Code</th>
                  
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>

                  @foreach($colors as $colo)
                 <tr>
                   
                   <td>{{$colo->color_name}}</td>
            
                   <td>{{$colo->color_description}}</td>
                   <td class="color-code"> <div class="admin-color-circle" style="background:{{ $colo->color_code }};"></div> </td>
                   <td>{{$colo->color_code}}</td>
                   <td>
                     
                   <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('edit.color',$colo->id)}}" class="btn btn-primary"><i class="fa fa-edit fa-sm"></i></a>
                   </div>
                   <div class="btn-group btn-group-sm" role="group">

                   <a href="{{route('delete.color',$colo->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-trash fa-sm"></i></a>
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
  </section>
  <!-- /.content -->




  

 @endsection



 










