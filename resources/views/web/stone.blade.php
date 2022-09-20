@extends('layouts.app')
@section('content')


<!--Slider section-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 p-0">
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide stone-slider-wrap">

          <div class="carousel-inner">


            @foreach($our_stones as $our_stone)

            <div class="carousel-item active first-slider-carousel" style="background-image: url({{$our_stone->our_stone_banner}});
               background-position: center bottom; background-size: cover;">

              <div class="carousel-caption wish-logo slider-custom-caption stone-slider-caption">

                <h2
                  class="animate__animated animate__fadeInUp heading-h2-gray stone-slider-heading txt-white stone-head-txt">
                  {{$our_stone->our_stone_header}}
                </h2>

                <p class="animate__animated animate__fadeInUp heading-h2-gray paraf1 txt-white stone-slider-paraf limit">
                  {{$our_stone->our_stone_body}}
                </p>


              </div>
            </div>
            @endforeach








          </div>
        </div>
      </div>
    </div>
  </div>




<div class="our-stone-full-wrap stone-gap">
  <div class="container-fluid p-0">
    <div class="row">
      
    <div class="col-md-12">
        <div class="ourstone-wrap">
        @foreach($our_categorys as $our_stone)

        <h2>{{$our_stone->our_category_header}}</h2>
        <p class="paraf1">{{$our_stone->our_category_body}}</p>
        <a href="/collections/available-gems/available" class="link-explore stone">Explore <img src="/images/arrow-right-short.svg" alt="adamant-gem" srcset=""></a>
  


       @endforeach
        
      </div>

     <div class="col-md-12 p-0">
       <div class="row">
        @foreach($category as $key=>$slider1)


        <div class="col-md-4 p-0">

        
        <div class="home-stones-slider-wrap">

        
            
        <div id="carouselExampleControls{{$slider1->id}}" class="carousel slide home-stone-slider" data-ride="carousel">
        
       

       <div class="carousel-inner">
        

       @foreach($slider1->application as $key => $slider)

        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">

        <a href="{{url('/collections/available-gems',$slider1->category_name)}}">

          <img src="{{$slider->product_image}}" class="d-block w-100" alt="...">
        
        </a>

       </div>
     @endforeach


     </div>

     
      

      <a class="carousel-control-prev" href="#carouselExampleControls{{$slider1->id}}" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls{{$slider1->id}}" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
      

     </div>

             <div class="home-slider-bottom-wrap">
                <div class="home-slider-bottom-wrap-txt">
                  
               <h3>{{$slider1->category_name}}</h3>
              
       </div>
       </div>

          </div>
         </div>

        @endforeach

     </div>
 </div>
      

    </div>
  </div>
</div>






  <div class="home-logo-mainwrap">
    <div class="container-fluid">
      <div class="container">
        <div class="row">

          @foreach($home_selects as $home_select)
          <div class="col-md-4">
            <div class="home-middle-logo-main-wrap">
              <img src="{{asset($home_select->home_selectus_logo)}}" class="home-middle-logo-img" alt="adamant-gem">
              <h3 class="home-middle-logo-head txt-purple">{{$home_select->home_selectus_header}}</h3>
              <p class="mb-0 home-middle-logo-descript paraf2">{{$home_select->home_selectus_body}}</p>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>

  {{-- mailchimp section --}}
  <div class="mailchimp-section-wrap">

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div class="mailchimp-ful-wrap">

            <div class="mailchimp-heading">
              <h1>Get on our list.</h1>
            </div>
            <div class="mailchimp-description">
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et libero nec leo rhoncus
                sagittis.</p>
            </div>
            <div class="mailchimp-form-wrap">
              <div class="input-group mb-3 col-4 new-filed-section-new">
                <input type="text" class="form-control feild-section-eamil" placeholder="Your email address" aria-label="Your email address"
                  aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">Join</button>
                </div>
              </div>
            </div>

          </div>


        </div>
      </div>
    </div>



  </div>

  



  @endsection