
@extends('layouts.app-style') 
@section('content')


<style>
 .form-control {
    display: block;
    width: 100%;
    height: 30px !important;
    padding: 3px !important;
    font-size: 13px !important;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.btn-group-sm>.btn{
    padding: 0.2rem 0.5rem !important;
    font-size: .575rem !important;
    line-height: 1.5;
    border-radius: 0.1rem;
}
.row.new {
    display: flex;
    flex-direction: column;
}
</style>



 

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-header">
              <h2 class="card-title">Faq / Faq</h2>

                <a href="{{route('all.faq_new')}}" class="btn btn-success  btn-text" style="float: right;"><i class="fas fa-edit"></i></a>
 
            </div>   
            <img src="/images/Web-view/Screenshot_25.jpg" style="width:auto;height:auto">  
         
       
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover" style="width:100%;
               max-width:100%;white-space:nowrap;">
                <thead>
                <tr>
                  
                  <th>Faq Category Name</th>
                  <th>Faq Header</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>

                  @foreach($faq_category as $category)
                 <tr>
                
                   @if($category['showfaq'])

                   <td>{{$category['showfaq']['faq_category_name']}}</td>
                   @else

                   <td class="select-category">Select the Faq Category</td>

                   @endif
                   <td>{{$category->faq_question}}</td>
                   
                   <td>
                   <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('edit.faq',$category->id)}}" class="btn btn-primary"><i class="fa fa-edit fa-sm"></i></a>
                  </div>
                  <div class="btn-group btn-group-sm" role="group">
                    <a href="{{route('delete.faq',$category->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-trash fa-sm"></i></a>
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



 