
@extends('layouts.app-style') 
@section('content')


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">User Activity Log</h3>
              <div class="btn-group btn-group-sm" role="group" style="float: right;">
              
          </div>
            </div>
    
                
       
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                 
                  <th>Name</th>
                  <th>Email</th>
                  <th>Log Type</th>
                  <th>Log Date</th>
                  <th>Data</th>
                  
                </tr>
                </thead>
                <tbody>

                @foreach($allData as $useractivit)
                 <tr>
                 @if($useractivit['Activityshow']) 
                   <td>{{$useractivit['Activityshow']['name']}}</td>
                  @else 
                  <td>Delete User</td>
                @endif
               
                 @if($useractivit['Activityshow']) 
                   <td>{{$useractivit['Activityshow']['email']}}</td> 
                 @else
                 <td>Delete Email</td>  
                 @endif  
                        
                   <td>{{$useractivit->log_type}}</td>
                   <td>{{$useractivit->log_date}}</td>
                   <td>{{$useractivit->data}}</td>
                 
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



 










