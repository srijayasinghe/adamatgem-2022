
@extends('layouts.app-style') 
@section('content')
     
 
 <!-- Main content -->
 <section class="content">
   <div class="container-fluid">


   


     <!-- Small boxes (Stat box) -->
     <div class="row">
    
      <div class="col-lg-3 col-6">
        
         <!-- small box -->
         <div class="small-box bg-danger">


      
         @if($count1->count()-1 > 10)
         <a  class="small-box-footer new-more box-section">
         <h3>{{$count1->count()-1}}</h3> 
         Stone Categories</a>

         @else
         <a  class="small-box-footer new-more box-section">
         <h3>0{{$count1->count()-1}}</h3> 
         Stone Categories</a>

         @endif



           <div class="inner body-section">
            
           <div class="inner-section-data">
           @foreach($categorys as $category)
            @if($category->category_name=="All")

            @else
         
           <p class="category-color">{{$category->category_name}}</p>

           @endif

          

          

           @endforeach
           </div>
             
           </div>
           <!-- <div class="icon">
             <i class="ion ion-pie-graph"></i>
           </div> -->
           <a href="/category" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
       </div>


       <div class="col-lg-3 col-6">
        
        <!-- small box -->
        <div class="small-box bg-success">
        
       

        @if($count2->count()>10)
        <a  class="small-box-footer new-more box-section"> 
        <h3>{{$count2->count()}}</h3> 
        Stone Colors</a>
        
        @else
        <a  class="small-box-footer new-more box-section"> 
        <h3>0{{$count2->count()}}</h3> 
        Stone Colors</a>

        @endif
        
         


          <div class="inner body-section">
           
          <div class="inner-section-data">
          @foreach($colors as $color)

          <p class="category-color"> <i class="fas fa-circle " style="color:{{$color->color_code}}"></i> {{$color->color_code}}</p>

          @endforeach
          </div>
            
          </div>
          <!-- <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div> -->
          <a href="/color" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        
        <!-- small box -->
        <div class="small-box bg-warning">


           @if($count3->count() >10)
          <a  class="small-box-footer new-more box-section">
          <h3>{{$count3->count()}}</h3>
           Stone Shapes</a>

           @else
           <a  class="small-box-footer new-more box-section">
          <h3>0{{$count3->count()}}</h3>
          Stone Shapes</a>

           @endif




          <div class="inner body-section">
           
          <div class="inner-section-data">
          @foreach($shapes as $shape)

          <p class="category-color">{{$shape->shape_name}}</p>

          @endforeach
          </div>
            
          </div>
          <!-- <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div> -->
          <a href="/shape" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        
        <!-- small box -->
        <div class="small-box bg-info">

          
          @if($count4->count() > 10)
          <a  class="small-box-footer new-more box-section">
          <h3>{{$count4->count()}}</h3>
           Stone Clarity</a>

          @else
          <a  class="small-box-footer new-more box-section">
          <h3>0{{$count4->count()}}</h3>
          Stone Clarity</a>
          
          @endif




          <div class="inner body-section">
           
          <div class="inner-section-data">
          @foreach($claritys as $clarity)

          <p class="category-color">{{$clarity->clarity_name}}</p>

          @endforeach
          </div>
            
          </div>
          <!-- <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div> -->
          <a href="/clarity" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>


      <div class="col-lg-6 col-6">


      <div class="card card-primary">
              <div class="card-header section-card">
                <h3 class="card-title">Stones Chart</h3>

                <div class="card-tools">
                 
                 
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        
      
      </div>

      <div class="col-lg-6 col-6">
      <div class="card card-primary">
              <div class="card-header section-card">
                <h3 class="card-title">Stones</h3>

              
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                     
                      <th>Stones Name</th>
                      <th>Image</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($stones as $stone)
                    <tr>
                      
                      <td>{{$stone->product_name}}</td>
                      <td>
                        <div class="">
                        <img src="{{asset($stone->product_image)}}" style="height: 42px; width:100px;">
                        </div>
                      </td>
                      
                    </tr>

               @endforeach
                   
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

     
      </div>
       



       <!-- DONUT CHART -->
       
      
       <!-- ./col -->
       
       <!-- ./col -->
       
       <!-- ./col -->
     </div>
     <!-- /.row -->
     <!-- Main row -->
    
     <!-- /.row (main row) -->
   </div><!-- /.container-fluid -->
 </section>
 <!-- /.content -->

 <script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

   
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
        @foreach($stonesall as $category)

        @if($category->category_name=="All")

        @else

        '{{$category->category_name}}',

       @endif

         @endforeach
      ],
      datasets: [
        {
          data: [
            
            @foreach ($stonesall as $key => $value)
            @if($value->id == 7)
            @else

            {{ $value->application->count()}},

            @endif
            @endforeach
            ],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#FF5733'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    

    
   

   
  })
</script>

 @endsection