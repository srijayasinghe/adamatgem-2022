@extends('layouts.app')
@section('content')

<div class="process-full-wrap">
  <div class="container">
    <div class="row">

      @foreach($process_ones as $process_one)

      <div class="col-md-12">
        <div class="process-head-wrap">
          <div class="our-company-head-wrap">
            <h1 class="txt-center">{{$process_one->process_header_text}}</h1>
            <p class="info-head-txt">{{$process_one->process_header_body}}</p>
          </div>
        </div>
      </div>

      @endforeach
    </div>

  </div>
</div>


<div class="adipiscing-fullsection-process sectionpa-120">
  <div class="container">
    <div class="row">

      @foreach($process_twos as $process_two)
      <div class="col-md-8 ml-auto mr-auto">

        <div class="process-2nd-full-wrap">
          <h1 class="text-center txt-purple" id="header-1">{{$process_two->process_sub_header}}</h1>
          <h3 class="text-center" id="header-2">{{$process_two->process_sub_header2}}</h3>
          <p class="text-center info-head-txt" id="header-3">{{$process_two->process_sub_body}}
            odio.</p>
        </div>

      </div>

      @endforeach

    </div>
  </div>
</div>

<div class="re-cutting-fullwrap sectionpa-85">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 ml-auto mr-auto">
        <div class="re-cutting-heading-wrap">
          @foreach($process_threes as $process_three)

          <h1 class="txt-purple txt-center">{{$process_three->process_center_header1}}</h1>
          <h3 class="txt-purple txt-center">{{$process_three->process_center_header2}}</h3>
          <p class="txt-center paraf1">{{$process_three->process_center_header3}}</p>

          @endforeach

     
        </div>
      </div>
    </div>

   
  </div>

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        {{-- <div id="panorama-360-view"></div> --}}
        
        <div class="img-container">
          <div class="img360">
              <img id="myImg" src="/images/process/rotate/gemstone360_(1).jpg" />
          </div>
      </div>
      <div class="caption">
        
      </div>
      <div id="preload-imgs"></div>


        {{-- end --}}
      </div>
    </div>
  </div>

</div>

@foreach($process_fours as $process_four)

<div class="home-middle-background-section process-pg-middle-wrap" style="background-image: url({{$process_four->process_center_banner}});
    margin-top: 80px;
    background-position: center center;
    background-size: cover;
    min-height: 450px;
    position: relative;">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="home-middle-banner-bottom-txt-wrap">
            <h1 class="txt-white">{{$process_four->process_center_banner_text}}</h1>
            <p class="txt-white info-head-txt">{{$process_four->process_center_text1}}</p>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="purple-background-bottom-section process-we-have-gemston-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <p class="mt-3 info-head-txt">{{$process_four->process_center_text2}}</p>
        <p class="mt-6 info-head-txt">{{$process_four->process_center_text3}}</p>
      </div>
    </div>
  </div>
</div>

@endforeach


<div class="studio-img-full-wrap">
  <div class="container">
    <div class="row">
      @foreach($process_studios as $process_studio)
      <div class="col-md-8 ml-auto mr-auto new-padding-top-section ">
        <h1 class="txt-purple">{{$process_studio->process_studios_header_text }}</h1>
        <p class="Occasionally-paraf info-head-txt">{{$process_studio->process_studios_header_text2}}</p>
      </div>
      @endforeach
      
    </div>

    <div class="row">
      @foreach($process_studiobodys as $process_studiobody)
      <div class="col-md-8 ml-auto mr-auto">
        <div class="slider-top-abslt-txt">
          <p class="info-head-txt txt-white text-new-one mt-3">
            {{$process_studiobody->process_studios_slider_headertext1}}</p>
          <p class="info-head-txt txt-white text-new-one">
            {{$process_studiobody->process_studios_slider_headertext2}}</p>
        </div>
      </div>
      @endforeach
    </div>

  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="process-slider-wrap">
        {{-- <div class="container">
          <div class="row">
            @foreach($process_studiobodys as $process_studiobody)

            <div class="col-md-8 ml-auto mr-auto">
              <div class="slider-top-abslt-txt">
                <p class="info-head-txt txt-white text-new-one mt-3">
                  {{$process_studiobody->process_studios_slider_headertext1}}</p>
                <p class="info-head-txt txt-white text-new-one">
                  {{$process_studiobody->process_studios_slider_headertext2}}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div> --}}



        <div id="processsliderindicator" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators new-slider-section">
          @foreach($process_studiosliders as $key =>$process_studioslider)
          <li data-target="#carouselExampleCaptions" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach
          </ol>
          <div class="carousel-inner">
            @foreach($process_studiosliders as $process_studioslider)

            <div class="carousel-item {{ $loop->first ? 'active' : '' }} first-slider-carousel">
              <img class="d-block w-100" src="{{asset($process_studioslider->process_studios_slider_image)}}"
                alt="First slide">
              <div class="carousel-caption">
                <p class="animate__animated animate__fadeInUp heading-h2-gray paraf1 txt-white slider-paraf">
                  {{$process_studioslider->process_studios_slider_endtext}}
                </p>
              </div>
            </div>

            @endforeach
          </div>
          <a class="carousel-control-prev" href="#processsliderindicator" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#processsliderindicator" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="gemstone-on-request-fullwrap sectionpa-85">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="gemstone-on-request-contents">
            <h2 class="txt-center">What if you can’t find the stone you’re looking for ?</h2>
            <h3 class="txt-center txt-purple">Spent hours poring over displays in jewelry stores and came back empty
              handed? Or Googled for days but
              found nothing ?</h3>
            <h1 class="txt-center">We’ll find it for you, if we can.</h1>
            <p class="txt-center info-head-txt">Before we went public and made our gems and services available to the
              broader market we operated mainly as
              an on-demand stone provider for other companies within the industry. Dealers or jewelers looking for
              specific stones or sets would come to us and we’d find it for them. We still do sometimes. In
              transitioning
              to a more open business model, we’ve extended the opportunity to leverage this service to all our clients.
            </p>
            <p class="txt-center info-head-txt-prpl">So whether it’s about finding the perfect stone to pop the
              question, working on a jewelry project or adding
              the latest masterpiece to your collection, simply contact us and we’ll keep an eye out!</p>
          </div>
        </div>

      </div>
    </div>
  </div>



  <div class="genesis-purple-ful-wrap sectionpa-120">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="genesis-purple-txt-wrap">
            <p class="paraf2 txt-white">Note: There are no additional charges for this service, nor does an inquiry
              oblige you to buy anything at all. You request a stone, we tap the source and find options for you if any
              are available at the time. Simple. There are no guarantees that a stone could be found – particularly with
              demanding orders/cuts but it doesn’t hurt to try.</p>
            <p class="paraf2 txt-white font-weight-bold mb-0">For more info, estimated supply times and detailed
              explanations, just contact us.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="popularised-ful-wrap sectionpa-120">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="popularised-content-wrap">
            <h2 class="txt-purple">It was popularised in the 1960s <span class="font-italic">with the release of
                Letraset</span> sheets containing Lorem Ipsum passages, and more recently with desktop publishing
              software like Aldus PageMaker including versions of Lorem Ipsum.</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="popularised-bottom-wrap">
            <div class="adipiscing-icon-wrap txt-center">
              <img src="/images/genesis/icon-2.png" height="120" alt="adamant-gem" srcset="">
            </div>
            <div class="adipiscing-heading-wrap txt-center">
              <p class="mb-0 info-head-txt-prpl ">Adipiscing</p>
            </div>
            <div class="adipiscing-descript-wrap txt-center">
              <p class="info-head-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et libero nec leo
                rhoncus sagittis. Duis
                imperdiet tortor sit amet eros volutpat, at vehicula felis aliquet. Donec scelerisque posuere felis, vel
                tempus massa malesuada vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="popularised-bottom-wrap">
            <div class="adipiscing-icon-wrap txt-center">
              <img src="/images/genesis/icon-1.png" height="120" alt="adamant-gem" srcset="">
            </div>
            <div class="adipiscing-heading-wrap txt-center">
              <p class="mb-0 info-head-txt-prpl ">Lorem ipsum</p>
            </div>
            <div class="adipiscing-descript-wrap txt-center">
              <p class="info-head-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et libero nec leo
                rhoncus sagittis. Duis
                imperdiet tortor sit amet eros volutpat, at vehicula felis aliquet. Donec scelerisque posuere felis, vel
                tempus massa malesuada vitae.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="genesis-middle-fullsection sectionpa-85 section-657 process-daylight-ful-wrap">
    <div class="container">

      <div class="row justify-content-center flex-column-reverse flex-md-row">

        @foreach($process_daylights as $process_daylight)

        <div class="col-md-8">
          <div class="genesis-middle-left-wrap middle-section-one day-light-left-wrap">
            <img src="{{$process_daylight->process_daylights_image}}"
              class="home-middle-logo-img home-middle-page-image" alt="adamant-gem">
          </div>
        </div>
        <div class="col-md-4 golden-text-style day-light-right-wrap">
          <div>
            <div class="align-middle home-middle-page-image-text inner-section-slider">
              <div class="letters-set">
                <h1 class="h1head txt-purple">{{$process_daylight->process_daylights_header}}</h1>
                <p class="process-head-txt Occasionally-paraf ">{!! html_entity_decode($process_daylight->process_daylights_text1) !!}</p>
   
              </div>
            </div>

            @endforeach

          </div>
        </div>

      </div>


    </div>
  </div>






  <div class="genesis-middle-fullsection golden-standard-full-wrap">
    <div class="container">

      <div class="row">

        @foreach($process_goldens as $process_golden)

        <div class="col-md-6 golden-text-style golden-standard-left-wrap">
          <div class="align-middle">
            <h1 class="h1head txt-purple">{{$process_golden->process_golden_header}}</h1>
            <p class="process-head-txt padding-slider-image">{{$process_golden->process_golden_text}}</p>

          </div>
        </div>
        <div class="col-md-6">
          <div class="genesis-middle-left-wrap middle-section-one process-bottom-slider-wrap">

            <div id="slider" class="carousel slide" data-ride="carousel">

              <div class="slider-content">

                <ol class="carousel-indicators new">
                  <li data-target="#slider" data-slide-to="0" class="one-slider active" style="background-color:{{ $process_golden->color_1 }}"></li>
                  <li data-target="#slider" data-slide-to="1" class="two-slider" style="background-color:{{ $process_golden->color_2 }}"></li>
                  <li data-target="#slider" data-slide-to="2" class="three-slider" style="background-color:{{ $process_golden->color_3}}"></li>
                  <li data-target="#slider" data-slide-to="3" class="for-slider" style="background-color:{{ $process_golden->color_4}}"></li>
                  <li data-target="#slider" data-slide-to="4" class="five-slider" style="background-color:{{ $process_golden->color_5 }}"></li>
                </ol>
              </div>

              <div class="carousel-inner inner-section-slider">
                <div class="carousel-item image-slider active">
                  <img class="d-block w-100" src="{{asset($process_golden->process_golden_image1)}}">
                </div>
                <div class="carousel-item image-slider">
                  <img class="d-block w-100" src="{{asset($process_golden->process_golden_image2)}}">
                </div>
                <div class="carousel-item image-slider">
                  <img class="d-block w-100" src="{{asset($process_golden->process_golden_image3)}}">
                </div>
                <div class="carousel-item image-slider">
                  <img class="d-block w-100" src="{{asset($process_golden->process_golden_image4)}}">
                </div>
                <div class="carousel-item image-slider">
                  <img class="d-block w-100" src="{{asset($process_golden->process_golden_image5)}}">
                </div>
              </div>

            </div>

          </div>

        </div>

        @endforeach

      </div>


    </div>
  </div>




  @foreach($process_lasts as $process_last)

  <div class="process-purple-ful-wrap sectionpa-120 body-content-section last-section inner-section-slider">
    <div class="container">
      <div class="row ">
        <div class="col-md-12">
          <div class="process-purple-txt-wrap new-text-process">
            <p class="process h2head txt-purple">{!! html_entity_decode($process_last->process_new_banner) !!}</p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="process-finally-wrap">
    <div class="container-fluid">

      <div class="row genesis-purple-ful-wrap">
  
      <div class="col-md-3 no-gutters p-0 process-finally-let-wrap" style="
      background-image: url({{$process_last->process_new_body_image}});
    background-position: center center;
    background-size: cover;">
      <!-- <img src="{{$process_last->process_new_body_image}}" class="home-middle-logo-img home-middle-page-image home-middle-page-image-one" alt="adamant-gem"> -->
     </div>
  
        <div class="col-md-8 genesis-purple-ful-wrap process-finally-right-wrap">
          <div class="process-purple-txt-wrap w-75">
            <p class="h2head txt-white text-left">{{$process_last->process_new_body_text1}}</p>
  
            <p class="process-head-txt txt-white text-left">{{$process_last->process_new_body_text2}}</p>
  
          </div>
        </div>
  
      </div>
    </div>
  </div>
  



  <div class="section-process-color sectionpa-120 last-section">
    <div class="container">


      <div class="col-md-12 sectionpa-12">

        <div class="text-center">
          <img src="{{$process_last->process_new_icon1}}" height="80" alt="adamant-gem" srcset="" class="image-padding-section">
          <img src="{{$process_last->process_new_icon2}}" height="80" alt="adamant-gem" srcset="" class="image-padding-section">
        </div>


      </div>



      <div class="row">
        <div class="col-md-12">
          <div class="popularised-content-wrap ">


            <h2 class="text-black">{{$process_last->process_new_icon_text}}</h2>
          </div>
        </div>
      </div>

    </div>
  </div>

  @endforeach







  <div class="home-logo-mainwrap home-colord-logo-mainwrap">
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

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script>
    $(document).ready(function() {
    $(window).on("scroll", function() {

   
    
    if($(this).scrollTop() >= 100){

      $(".adipiscing-fullsection-process").css("background-image", "url(/images/process/choosing-stone-img1.jpg)"); 
      $('#header-1').text('Choosing the right stone'); 
      $('#header-2').text('We check thousands of stones from gem dealers, miners, mine owners every month.'); 
      $('#header-3').text('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et libero nec leo rhoncus sagittis. Duis imperdiet tortor sit amet eros volutpat, at vehicula felis aliquet. Donec scelerisque posuere felis vel tempus massa malesuada vitae. Suspendisse nec aliquet neque, ac consectetur odiodio'); 
      
    }
     if($(this).scrollTop() >= 150) {

      $(".adipiscing-fullsection-process").css("background-image", "url(https://images.unsplash.com/photo-1597309656105-14e5bc3350f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)");
      $('#header-1').text('Choosing the right stone1'); 
      $('#header-2').text('We check thousands of stones from gem dealers, miners, mine owners every month.1'); 
      $('#header-3').text('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et libero nec leo rhoncus sagittis. Duis imperdiet tortor sit amet eros volutpat, at vehicula felis aliquet. Donec scelerisque posuere felis vel tempus massa malesuada vitae. Suspendisse nec aliquet neque, ac consectetur odiodio'); 
      
    }
     if($(this).scrollTop() >= 250){

     
      $(".adipiscing-fullsection-process").css("background-image", "url(https://images.unsplash.com/photo-1583937443325-97becde478a8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)"); 
      $('#header-1').text('Choosing the right stone2'); 
      $('#header-2').text('We check thousands of stones from gem dealers, miners, mine owners every month.2'); 
      $('#header-3').text('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et libero nec leo rhoncus sagittis. Duis imperdiet tortor sit amet eros volutpat, at vehicula felis aliquet. Donec scelerisque posuere felis vel tempus massa malesuada vitae. Suspendisse nec aliquet neque, ac consectetur odiodio'); 

    }

 
  })
})
  </script>



  @endsection