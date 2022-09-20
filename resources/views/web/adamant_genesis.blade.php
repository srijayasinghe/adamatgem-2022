@extends('layouts.app')
@section('content')

<div class="our-company-full-wrap">

@foreach($genesis_headers as $genesis_header)

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="our-company-wrap">
          <div class="our-company-head-wrap">
            <h1 class="txt-center">{{$genesis_header->genesis_header}}</h1>
            <p class="info-head-txt">{{$genesis_header->genesis_body}}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 first-mob-map-column">
        <div class="being-based-left-wrap">
          <!-- <img src="/images/genesis/srilaka-gems.png" class="desktop-genis-map" alt="adamant-gem">
          <img src="/images/genesis/mobile-map.jpg" width="100%" class="mobile-genis-map" alt="adamant-gem"> -->
        </div>
      </div>

      @foreach($genesis_seconds as $genesis_second)

      <div class="col-md-6">
        <div class="being-based-right-wrap">
          <div class="being-based-heading-wrap">
            <h2>{{$genesis_second->genesis_seconds_header}}</h2>
          </div>
          <div class="being-based-descript-wrap">
            <p class="info-head-txt">{{$genesis_second->genesis_seconds_body}}</p>
          </div>
        </div>
      </div>

      @endforeach 
    </div>
  </div>

  @endforeach 

</div>

@foreach($genesis_bodys as $genesis_body)

<div class="genesis-middle-fullsection sectionpa-85">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="genesis-middle-left-wrap">
          <h1> <span class="txt-purple">{{$genesis_body->genesis_body_header1}}</span> {{$genesis_body->genesis_body_header2 }}</h1>
        </div>
      </div>
      <div class="col-md-6">
        <div class="genesis-middle-right-wrap">
          <p class="info-head-txt">{{$genesis_body->genesis_body_text}}</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="adipiscing-fullsection sectionpa-120">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="adipiscing-colful-wrap txt-center">
          <div class="adipiscing-icon-wrap">
            <img src="{{$genesis_body->genesis_body_image1}}" alt="adamant-gem" srcset="">
          </div>
          <div class="adipiscing-heading-wrap">
            <h1 class="txt-purple">{{$genesis_body->genesis_image1_header}}</h1>
          </div>
          <div class="adipiscing-descript-wrap">
            <p class="info-head-txt">{{$genesis_body->genesis_image1_body}}</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="adipiscing-colful-wrap adipiscing-colful-wrap2 txt-center">
          <div class="adipiscing-icon-wrap">
            <img src="{{$genesis_body->genesis_body_image2}}" alt="adamant-gem" srcset="">
          </div>
          <div class="adipiscing-heading-wrap">
            <h1 class="txt-purple">{{$genesis_body->genesis_image2_header}}</h1>
          </div>
          <div class="adipiscing-descript-wrap">
            <p class="info-head-txt">{{$genesis_body->genesis_image2_body}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endforeach 




@foreach($genesis_lasts as $genesis_last)

<div class="gemstone-on-request-head-fullwrap">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 p-0">
        <div class="gemstone-onrequest-heading-wrap sectionpa-85">
          <h1 class="txt-purple txt-center">{{$genesis_last->genesis_lasts_header}}</h1>
        </div>
        <div class="gemston-request-img-wrap">
          <img src="/images/genesis/gem-bg2.jpg" width="100%" alt="adamant-gem">
        </div>
      </div>
    </div>
  </div>
  
</div>
<div class="gemstone-on-request-fullwrap sectionpa-85">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ml-auto mr-auto">
          <div class="gemstone-on-request-contents">
          <h2 class="txt-center">{{$genesis_last->genesis_lasts_text1}}</h2>
          <h3 class="txt-center txt-purple">{{$genesis_last->genesis_lasts_text2}}</h3>
          <h1 class="txt-center">{{$genesis_last->genesis_lasts_text3}}</h1>
          <p class="txt-center info-head-txt">{{$genesis_last->genesis_lasts_text4}}
          </p>
          <p class="txt-center info-head-txt-prpl mb-0">{{$genesis_last->genesis_lasts_text5}}</p>
        </div>
      </div>

    </div>
  </div>
</div>


@endforeach 

@foreach($genesis_ends as $genesis_end)


<div class="genesis-purple-ful-wrap sectionpa-120">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="genesis-purple-txt-wrap">
          <p class="paraf2 txt-white">{{$genesis_end->genesis_ends_text1 }}</p>
          <p class="paraf2 txt-white font-weight-bold mb-0 genis-purpla-second-wrap">{{$genesis_end->genesis_ends_text2}}</p>
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
          <h2 class="txt-purple">{{$genesis_end->genesis_ends_text3}}</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="popularised-bottom-wrap">
          <div class="adipiscing-icon-wrap txt-center">
            <img src="{{$genesis_end->genesis_ends_image1}}" height="120" alt="adamant-gem" srcset="">
          </div>
          <div class="adipiscing-heading-wrap txt-center">
            <p class="mb-0 info-head-txt-prpl ">{{$genesis_end->genesis_image1_text1}}</p>
          </div>
          <div class="adipiscing-descript-wrap txt-center">
            <p class="info-head-txt">{{$genesis_end->genesis_image1_text2}}</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="popularised-bottom-wrap">
          <div class="adipiscing-icon-wrap txt-center">
            <img src="{{$genesis_end->genesis_ends_image2}}" height="120" alt="adamant-gem" srcset="">
          </div>
          <div class="adipiscing-heading-wrap txt-center">
            <p class="mb-0 info-head-txt-prpl ">{{$genesis_end->genesis_image2_text1}}</p>
          </div>
          <div class="adipiscing-descript-wrap txt-center">
            <p class="info-head-txt">{{$genesis_end->genesis_image2_text2}}</p>
          </div>
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
@endsection