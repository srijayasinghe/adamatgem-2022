
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Stone / Add Stone</h3>
              <div class="btn-group btn-group-sm" role="group" style="float: right;">
                <a href="{{route('all.stone_new')}}" class="btn btn-success" style="float: right;"><i class="fas fa-edit"></i></a>
             </div> 
            </div> 
           

            <img src="/images/Web-view/Screenshot_35.jpg" style="width:auto;height:auto">  
                    
            

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                
                <thead>
                <tr>
                  
                  <th>Stone Name</th>
                  <th>Color Term</th>
                  <th>Stone Image</th>
                 
                  <th>Stone Weight</th>
    
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>

                  @foreach($allData as $key=>$value)
                 <tr>
                   
                   <td>{{$value->product_name}}</td>
                   <td>{{$value->product_variety}}</td>
              
                   <td><img src="{{asset($value->product_image)}}" style="height: 60px; width:100px;"></td>
                   
                   <td>{{$value->product_Weight}} ct.</td>
                 
                   <td>

                   <div class="btn-group btn-group-sm" role="group">
                    
                   <a href="{{route('edit.stone',$value->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                </div>

                <div class="btn-group btn-group-sm" role="group">

                    <a href="{{route('delete.stone',$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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



 