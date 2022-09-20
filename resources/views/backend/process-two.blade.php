
@extends('layouts.app-style') 
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Process / Section 02</h3>
              @if(count($process_twos) < 4) 
                <a href="{{route('all.process_two_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
              @endif
            </div>   
            <img src="/images/Web-view/Screenshot_12.jpg" style="width:auto;height:auto">
       
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example25" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Sub Header</th>
                  
                  
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody>

              
                @foreach($process_twos as $process_two)
                 <tr>
                   <td>{{$process_two->id}}</td>
                  
                  
                   <td>{{$process_two->process_sub_header}}</td>
                   <td>{{$process_two->process_sub_header2}}</td>
                  
                   
                   <td>
                   <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('edit.process_two',$process_two->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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



 










