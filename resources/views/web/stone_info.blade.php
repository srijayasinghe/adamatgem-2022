@extends('layouts.app')
@section('content')
<div class="top-breadcrum-wrap">
  <div class="page-name text-uppercase"> <a href="/">Home</a> </div>
  <div class="page-name-braker text-uppercase"> > </div>
  <div class="page-name text-uppercase"><a href="/gems">Gems</a></div>
  <div class="page-name-braker text-uppercase"> > </div>
  <div class="page-name text-uppercase"><a href="/collections/available-gems/{{$stone_info['showcategory']['category_name']}}">{{$stone_info['showcategory']['category_name']}}</a></div>
  <div class="page-name-braker text-uppercase"> > </div>
  <div class="page-name lst-active-name text-uppercase"> {{$stone_info->product_name}} </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 info-col-md-12">
      <div class="custom-padding-12">
        <div id="carouselExampleIndicators" class="carousel slide stone-info-slider" data-ride="carousel">
          
        <ol class="carousel-indicators">
        @foreach($stone as $key => $slider)
        <li data-target="#carouselExampleCaptions" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach 
          </ol>
          <div class="carousel-inner">
            @foreach($stone as $key => $slider)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }} first-slider-carousel" data-interval="18920">
 
              <img class="d-block w-100" src="{{url('images/stone-gallery/'.$slider->gallery_image)}}" alt="">

            </div>
            @endforeach  
            
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </div>

  </div>

  <div class="row">
    <div class="container">
      <div class="row">
        <div class="col-md-4">

            

          <div class="stone-left-full-wrap">
            <div class="product-name-descript-ful-wrap">
              <div class="product-head-name">
                <h1 class="h2head">{{$stone_info->product_name}}, {{$stone_info->product_Weight}} ct.</h1>
              </div>
              <div class="product-description-wrap">
                <p class="info-head-txt">{!! html_entity_decode($stone_info->product_description) !!}</p>
              </div>
            </div>

            @if($stone_info['showVariety'])

            <div class="stone-info-left-sidebox-wrap">
              <div class="info-name-wrap">
                <p class="mb-0 info-head-txt-prpl">Variety:</p>
              </div>
              <div class="info-name-descript-wrap">
                @if($stone_info['showVariety'])
                <p class="mb-0 info-head-txt">{{$stone_info['showVariety']['variety_name']}}</p>
                @else
                <p class="mb-0 info-head-txt"></p>
                @endif
              </div>
            </div>

            @else

            @endif

            @if($stone_info->product_Weight)
            <div class="stone-info-left-sidebox-wrap mt-3">
              <div class="info-name-wrap">
                <p class="mb-0 info-head-txt-prpl">Weight:</p>
              </div>
              <div class="info-name-descript-wrap">
                <p class="mb-0 info-head-txt">{{$stone_info->Stone_Weight_Description}}</p>
              </div>
            </div>
            @else

            @endif


            @if($stone_info->color)

            <div class="stone-info-left-sidebox-wrap mt-3">
              <div class="info-name-wrap">
                <p class="mb-0 info-head-txt-prpl">Color:</p>
              </div>
              <div class="info-name-descript-wrap">
                <p class="mb-0 info-head-txt">{{$stone_info->color}}</p>
              </div>
            </div>
             @else

             @endif

             @if($stone_info->Shape_Cut)

            <div class="stone-info-left-sidebox-wrap mt-3">
              <div class="info-name-wrap">
                <p class="mb-0 info-head-txt-prpl">Shape & Cut:</p>
              </div>
              <div class="info-name-descript-wrap">
                <p class="mb-0 info-head-txt">{{$stone_info->Shape_Cut}}</p>
              </div>
            </div>
            @else

            @endif

            @if($stone_info->product_dimensions)
            <div class="stone-info-left-sidebox-wrap mt-3">
              <div class="info-name-wrap">
                <p class="mb-0 info-head-txt-prpl">Dimensions:</p>
              </div>
              <div class="info-name-descript-wrap">
                <p class="mb-0 info-head-txt">{{$stone_info->product_dimensions}}</p>
              </div>
            </div>
            @else

            @endif

            @if($stone_data['showclarity'])
            <div class="stone-info-left-sidebox-wrap mt-3">
              <div class="info-name-wrap">
                <p class="mb-0 info-head-txt-prpl">Clarity:</p>
              </div>
              <div class="info-name-descript-wrap">
                <p class="mb-0 info-head-txt">{{$stone_data['showclarity']['clarity_description']}}</p>
              </div>
            </div>
            @else

            @endif
             
            @if($stone_info->product_treatments)
            <div class="stone-info-left-sidebox-wrap mt-3">
              <div class="info-name-wrap">
                <p class="mb-0 info-head-txt-prpl">Treatments:</p>
              </div>
              <div class="info-name-descript-wrap">
                <p class="mb-0 info-head-txt">{{$stone_info->product_treatments}}</p>
              </div>
            </div>
            @else

            @endif

            @if($stone_info->product_labreport)
            <div class="stone-info-left-sidebox-wrap mt-3">
              <div class="info-name-wrap">
                <p class="mb-0 info-head-txt-prpl">Lab Report:</p>
              </div>
              <div class="info-name-descript-wrap">
                <p class="mb-0 info-head-txt">{{$stone_info->product_labreport}}</p>
              </div>
            </div>
            @else

            @endif

            @if($stone_info->product_price)

            <div class="stone-info-left-sidebox-wrap mt-3">
              <div class="info-name-wrap">
                <p class="mb-0 info-head-txt-prpl">Price:</p>
              </div>
              <div class="info-name-descript-wrap">
                <p class="mb-0 info-head-txt">${{$stone_info->product_price}}</p>
              </div>
            </div>
            @else

            @endif

          </div>


        </div>
        <div class="mobile-separator"></div>
        <div class="col-md-8">
        
          <div class="info-right-side-full-wrap">

            <div class="desktop-product-name-description-wrap">
              <div class="product-head-name">
                <h1 class="h2head">{{$stone_info->product_name}}, {{$stone_info->product_Weight}} ct.</h1>
              </div>
              <div class="product-description-wrap">
                <p class="info-head-txt">{!! html_entity_decode($stone_info->product_description) !!}</p>
              </div>
            </div>

          
            
            <div class="product-inqury-form-full-wrap product-category-form-wrap">
              <div class="inqury-form-head">
                <h3>Inquire</h3>
              </div>
              <form class="product-infor-form" action="{{route('update.email')}}"  enctype="multipart/form-data" method="POST">
                {!! csrf_field() !!}

                

                <div class="form-group">
                  <input class="form-control info-form-fields" type="hidden"name="subject" value="{{$stone_info->product_name}}">
                  @error('subject')
                  <span class="text-danger">{{$message}}</span>
                
                  @enderror
                </div>


                <div class="form-group">
                  <input class="form-control info-form-fields" type="text" placeholder="Name" name="Name">
                  @error('Name')
                  <span class="text-danger">{{$message}}</span>
                
                  @enderror
                </div>
                <div class="form-group">
                  <input class="form-control info-form-fields" type="email" placeholder="Email" name="Email">
                  @error('Email')
                  <span class="text-danger">{{$message}}</span>
                
                  @enderror
                </div>
                <div class="form-group">
                  <input class="form-control info-form-fields" type="text" placeholder="Message" name="Message">
                  @error('Message')
                  <span class="text-danger">{{$message}}</span>
                
                  @enderror
                </div>
               <div class="form-btn-wrap">
                <input type="submit" value="submit" class="form-submit-btn purple-btn">
               </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="home-logo-mainwrap home-colord-logo-mainwrap">
  <div class="container-fluid">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="home-middle-logo-main-wrap">
            <img src="/images/home-icon-1.png" class="home-middle-logo-img" alt="">
            <h3 class="home-middle-logo-head txt-purple">Lorem Ipsum is simply dummy text</h3>
            <p class="mb-0 home-middle-logo-descript paraf2">Lorem Ipsum is simply dummy text of the printing and
              typesetting
              industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="home-middle-logo-main-wrap">
            <img src="/images/home-icon-2.png" class="home-middle-logo-img" alt="">
            <h3 class="home-middle-logo-head txt-purple">Lorem Ipsum is simply dummy text</h3>
            <p class="mb-0 home-middle-logo-descript paraf2">Lorem Ipsum is simply dummy text of the printing and
              typesetting
              industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="home-middle-logo-main-wrap">
            <img src="/images/home-icon-3.png" class="home-middle-logo-img" alt="">
            <h3 class="home-middle-logo-head txt-purple">Lorem Ipsum is simply dummy text</h3>
            <p class="mb-0 home-middle-logo-descript paraf2">Lorem Ipsum is simply dummy text of the printing and
              typesetting
              industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

 

@endsection