@extends('layouts.app')
@section('content')

<style>
  .hom-map-logo-image{
    width:100%;
    display: block;
  }
  div#instafeed-container img{
  width: 270px  !important;
  height: 270px !important;
  object-fit: cover !IMPORTANT;
}
</style>


<!--Slider section-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 p-0">

   
      <div class="bd-example">
        <div id="carouselExampleCaptions" data-interval="10000" class="carousel slide home-slider-wrap" data-ride="carousel">

          <div class="carousel-inner">
           
          @foreach($home_sliders as $key =>$home_slider)

            

            <div class="carousel-item {{ $loop->first ? 'active' : '' }} first-slider-carousel" data-interval="18920">
              <img src="{{asset($home_slider->home_banner_image)}}" class="d-block" alt="">

              <div class="carousel-description-ful-wrap">


                <div class="slider-custom-header-wrap carousel-caption">
                  <h2 class="animate__animated animate__fadeInUp heading-h2-gray slider-heading txt-white">
                    {{ $home_slider->home_banner_header }}
                  </h2>
                </div>
               
  
                <div class="slider-custom-midle-image-wrap carousel-caption">
                  <a href="#" target="_blank"><img src="{{asset($home_slider->home_body_image)}}" alt=""
                    class="slider-rise-logo animate__animated animate__fadeInUp slider-middle-img"></a>
                </div>
  
                
                <div class="slider-custom-midle-description-wrap carousel-caption">
                  <p class="animate__animated animate__fadeInUp heading-h2-gray paraf1 txt-white slider-paraf">
                    {{$home_slider->home_banner_description}}
                   </p>
                </div>

              </div>
             



              <div class="carousel-caption wish-logo slider-custom-caption">
              {{-- <div class="carousel-caption wish-logo slider-custom-caption"> --}}
                
                {{-- <div class="slider-custom-header-wrap">
                  <h2 class="animate__animated animate__fadeInUp heading-h2-gray slider-heading txt-white">
                    {{ $home_slider->home_banner_header }}
                  </h2>
                </div>
               

                <div class="slider-custom-midle-image-wrap">
                  <a href="#" target="_blank"><img src="{{asset($home_slider->home_body_image)}}" alt=""
                    class="slider-rise-logo animate__animated animate__fadeInUp slider-middle-img"></a>
                </div>

                
                <div class="slider-custom-midle-description-wrap">
                  <p class="animate__animated animate__fadeInUp heading-h2-gray paraf1 txt-white slider-paraf">
                    {{$home_slider->home_banner_description}}
                   </p>
                </div> --}}

                
              </div>
            </div>

          

     @endforeach 
   
     <ol class="carousel-indicators">
  @foreach($home_sliders as $key =>$home_slider)

<li data-target="#carouselExampleCaptions" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
  @endforeach 
</ol>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      
    </div>
  </div>
</div>




<div class="our-stone-full-wrap stone-gap">
  <div class="container-fluid">
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




@foreach($home_bodys as $home_body)

<div class="home-middle-background-section" style="margin-top: 80px;
    background-image: url({{$home_body->home_body_banner}});
    background-position: center center;
    background-size: cover;
    min-height: 450px;
    position: relative;" >
    
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="home-middle-banner-bottom-txt-wrap ">
            <h1 class="txt-white">{{$home_body->home_body_banner_text1}}</h1>
            <h1 class="txt-white"></h1>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>



<div class="home-typesetting-ful-wrap d-flex align-items-stretch">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="typesetting-head-wrap">
          <h1 class="txt-darkblack">{{$home_body->home_body_text}}</h1>
        </div>
        <div class="typesetting-description-wrap paraf1">
        {!! html_entity_decode($home_body->home_body_content) !!}
        

          
        </div>
        <a href="/process" class="link-explore">Explore <img src="/images/arrow-right-short.svg" alt="adamant-gem" srcset=""></a>
      </div>
      <div class="col-md-6">
        <div class="typesetting-rightimg-wrap ">
          <img src="{{ asset($home_body->home_body_logo)}}" width="100%" alt="adamant-gem" srcset="">
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach 



@foreach($home_maps as $home_map)

<div class="home-custom-map-section sectionpa-85">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="home-map-section-head">
          <h2 class="txt-purple">{{$home_map->home_map_text}}</h2>
          <p class="paraf1">{{$home_map->home_map_body}}</p>
        </div>

        <div class="home-map-image-wrap">
          <img src="images/Home/home-map.jpg" class="hom-map-logo-image" alt="adamant-gem" srcset="">
        </div>
      </div>
    </div>
  </div>
</div>

@endforeach 




<div class="home-journal-main-wrap">
  <div class="container-fluid new-journsl-section">
    <div class="row">
      <div class="col-md-12">
        <div class="home-journal-head-wrap">
          <h2>Journal</h2>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <section id="pinBoot">

          
          @foreach($journal as $value)

          <article class="white-panel"><a href="{{url('journal_info',$value->id)}}"><img src="{{asset($value->post_main_image)}}" alt="adamant-gem"></a>
            <div class="home-journal-date-wrap">
              <p class="mb-0">
              @if($value->created_at==NULL)
                    <span class="text-danger">NO Date Set</span>
                    @else
                    {{ Carbon\Carbon::parse($value->created_at)->isoFormat('D MMMM YYYY') }}
              @endif

              </p>
            </div>
            <div class="home-journal-name-wrap">
              <a href="{{url('journal_info',$value->id)}}"><p>{{$value->post_text}}</p></a>
            </div>
          </article>

          @endforeach  

          

          

        </section>


       <div class="home-journal-explore-btn-wrap">
        <a href="/journal" class="link-explore">Explore <img src="/images/arrow-right-short.svg" alt="adamant-gem" srcset=""></a>
       </div>


      </div>

    </div>


  </div>
</div>

<div class="home-logo-mainwrap home-colord-logo-mainwrap home-new-logo-wrap">
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



<div class="home-instagram-feed-wrap">
  <div class="container-fluid">
    <div class="container">
      <div class="row d-flex align-items-stretch flex-column-reverse flex-md-row">
        <div class="col-md-6">
          <div class="instagram-img-wrap">
         
          <img src="images/Home/insta-feed-sample.jpg" width="100%" alt="adamant-gem" srcset="">
          </div>
          
        </div>
        <div class="col-md-6">
          <div class="home-insta-right-wrap">
              <div class="logo-wrap">
                <img src="images/Home/insta-icon.png" alt="adamant-gem" srcset="">
              </div>
              <div class="insta-head-wrap">
                <p class="mb-0 insta-headtxt-prple">@adamantgems</p>
                <p class="mb-0 insta-headtxt-blck text-center">on instagram</p>
              </div>
              <div class="insta-description-wrap paraf3">
                <p class="mb-0 paraf3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
              </div>
              <div class="insta-btn-wrap">
                <a href="https://www.instagram.com/" target="_blank" class="purple-btn">view instagram</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
	<script type="text/javascript">
	var userFeed = new Instafeed({
		get: 'user',
		limit : 4, 
		target: "instafeed-container",
    	resolution: 'max_resolution',
		accessToken: 'IGQVJWY0dnRldLVHZAOX3lOYlZAQYW5nbEJLTXhUdWltaW1IRWdTdndRLVBPNENqeV9VcUM4SUhlWDdOMzctZAHRYZAXNKOEVUYThwOXl6SGRLbzA5d0dSclRhTXVva24tVVpjM3FVV2hvSnQ2TnJabDUyMQZDZD'
	});
	    userFeed.run();
	</script>

@endsection