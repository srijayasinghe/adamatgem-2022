
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Stone / Availability</h3>
              <div class="btn-group btn-group-sm" role="group" style="float: right;">
                <a href="{{route('all.available_new')}}" class="btn btn-success" style="float: right;"><i class="fas fa-edit"></i></a>
</div>
            </div>
            <img src="/images/Web-view/Screenshot_31.jpg" style="width:auto;height:auto">  
                
       
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                 
                  <th>Availability Name</th>
                
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>

                  @foreach($availability as $availabili)
                 <tr>
                   <td>{{$availabili->Available_name}}</td>
                   <td>
                   <div class="btn-group btn-group-sm" role="group">
                   <a href="{{route('edit.available',$availabili->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                 </div>  
                 <div class="btn-group btn-group-sm" role="group">

                   <a href="{{route('delete.available',$availabili->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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



 










