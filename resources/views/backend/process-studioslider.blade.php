
@extends('layouts.app-style') 
@section('content')



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Process / Process Studio Slider</h3>

                <a href="{{route('all.process_studioslider_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
                
            </div> 
            <img src="/images/Web-view/Screenshot_17.jpg" style="width:auto;height:auto">  
       
            <!-- /.card-header -->
            <div class="card-body">
            
              <table id="example25" class="table table-bordered table-hover">
                <thead>
                <tr>
                  
                  <th>Process Studio Image</th>
                  <th>Process Studio Description</th>

                  
                  
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody>

                @foreach($process_studiosliders as $process_studioslider)
                 <tr>
                  
                  
                   <td><img src="{{asset($process_studioslider->process_studios_slider_image)}}" style="height: 60px; width:100px;"></td>
                   <td>{{$process_studioslider->process_studios_slider_endtext}}</td>
                  
                   
                   <td>
                   <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('edit.process_studioslider',$process_studioslider->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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



 










