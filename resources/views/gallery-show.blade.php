
@extends('layouts.app-style') 
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">gallery Images</h3>

           </div>   
       
            <!-- /.card-header -->
            <div class="card-body">

                 

                  
                 

                      <div class="row">
                        @foreach($editData as $key=>$value)
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                      
                             <img src="{{url('images/stone-gallery/'.$value->gallery_image)}}" alt="" class="w-100 shadow-1-strong rounded mb-4">
                          
                            </div>
                            @endforeach 
                          </div>
                     
                   



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



 