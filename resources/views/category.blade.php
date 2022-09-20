
@extends('layouts.app-style') 
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">


      
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h2 class="card-title">Stone / Category</h2>
              <div class="btn-group btn-group-sm" role="group" style="float: right;">
                <a href="{{route('all.category_new')}}" class="btn btn-success  btn-text" style="float: right;" ><i class="fas fa-plus"></i> New</a>
            </div>
            </div>  
            <img src="/images/Web-view/Screenshot_28.jpg" style="width:auto;height:auto">  
             
       
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  
                  <th>Category Name</th>
                  <th>Category Description</th>
                  <th>Category Image</th>
                  
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>

                  @foreach($categorys as $category)

                

                 <tr>
                  
                   <td>{{$category->category_name}}</td>
                   <td>{{$category->category_description}}</td>
                   <td><img src="{{asset($category->category_image)}}" style="height: 60px; width:100px;"></td>
                   
                   <td>
                  
              
                   <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('edit.category',$category->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                   </div> 
                   <div class="btn-group btn-group-sm" role="group">

                   <a href="{{route('delete.category',$category->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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



 