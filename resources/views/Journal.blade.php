
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Journal / Journal</h3>

                <a href="{{route('all.journal_new')}}" class="btn btn-success" style="float: right;"><i class="fas fa-edit"></i></a>
 
            </div>  
            <img src="/images/Web-view/Screenshot_21.jpg" style="width:auto;height:auto">  
        
          
       
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Journal Header</th>
                  <th>Journal image</th>
                  
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  
                  @foreach($journal as $value)
                 <tr>
                   <td>{{$value->id}}</td>
                   <td>{{$value->post_text}}</td>
                   <td><img src="{{asset($value->post_main_image)}}" style="height: 60px; width:100px;"></td>
                   
                   
          
                  
                  
                   <td>
                   <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('edit.journal',$value->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                   </div>


                   <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('delete.journal',$value->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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



 