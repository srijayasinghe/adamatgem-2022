
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>

                {{-- <a href="{{route('all.gallery_new')}}" class="btn btn-primary btn-sm btn-text" style="margin-left: 550px">Add Gallery</a> --}}
 
            </div>   
       
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example25" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Gallery Name</th>
                  <th>Date</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>

                  @foreach($allData as $key=>$value)
                 <tr>
                   <td>{{$key+1}}</td>
                   <td>{{$value['gallery_image']['gallery_name']}}</td> 
                   <td>{{$value->created_at}}</td>
                   <td>
                    <a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    
                   
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



 