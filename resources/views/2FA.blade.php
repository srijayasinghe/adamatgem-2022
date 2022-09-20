
@extends('layouts.app-style') 
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">


      
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h2 class="card-title">Two Factor Authentication</h2>
              <div class="btn-group btn-group-sm" role="group" style="float: right;">
               
            </div>
            </div>  
   
             
       
            <!-- /.card-header -->
            <div class="card-body">

     
       <div class="center">
     
            <form method="POST" action="user/two-factor-authentication">
        @csrf

        @if(auth()->user()->two_factor_secret)

        @method('DELETE')

        <div class="pb-5">
          {!!auth()->user()->twoFactorQrCodeSvg()!!}
      </div>

      <div>
          <h2>QR Codes</h2>
        <ul>

        
          @foreach(json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as $code)

          <li>{{$code}}</li>

          @endforeach
        </ul>
      </div>

       <button class="btn btn-danger">Disable</button>

        @else

       <button class="btn btn-primary">Enable</button>

        @endif


    </form>

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



 




