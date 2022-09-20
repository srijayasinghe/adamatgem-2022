
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Reviews / Add Reviews</h3>

                <a href="{{route('all.reviews_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
 
            </div>  
            <img src="/images/Web-view/Screenshot_23.jpg" style="width:auto;height:auto">  
         
       
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                 
                  <th>Review Header</th>
                  <th>Review client</th>
                  <th>Review City</th>
                 
                  
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>

                  @foreach($reviews as $reviewsData)
                 <tr>
                  
                   <td>{{$reviewsData->reviews_header}}</td>
                   <td>{{$reviewsData->reviews_client}}</td>
                   <td>{{$reviewsData->reviews_city}}</td>
                  
                   <td>
                   <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('edit.reviews',$reviewsData->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                    </div>

                    <div class="btn-group btn-group-sm" role="group">

                   <a href="{{route('delete.reviews',$reviewsData->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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



 










