@extends('layouts.app')
@section('content')

@foreach($reviewsnew as $new)

<div class="top-banner-main-wrap reviews" style="background-image:url('/{{$new->reviews_banner_image}}')">
  <div class="banner-main-txt-wrap" >
    <div class="main-head-wrap">
      <h1 class="txt-white">{{$new->reviews_header_header}}</h1>
    </div>
    <div class="banner-descript-wrap">
      <p class="paraf1 txt-white">{{$new->reviews_header_text}}</p>
    </div>
  </div>
</div>

@endforeach 


<div class="review-main-wrap">
  <div class="container">
    <div class="card-columns">

      @foreach($reviews as $reviewsData)

      <div class="card">
        <div class="review-content-full-wrap card-body">
          <div class="review-head-wrap">
            <h3 class="txt-purple">{{$reviewsData->reviews_header}}</h3>
          </div>
          <div class="review-description-wrap">
            <p class="info-head-txt new-text-one-01">{!!html_entity_decode($reviewsData->reviews_body)!!}</p>
          </div>
          <div class="review-client-name">
            <p class="paraf3 txt-purple mb-2">{{$reviewsData->reviews_client}}, {{$reviewsData->reviews_city}}</p>
            <div class="client-name-btm-brder-wrap">

            </div>
               
          </div>
        </div>
      </div>

      @endforeach   
     

      
    </div>
    
   
  </div>
  <div class="journal-pagination-wrap">
        {{$reviews->links()}}
      </div>
</div>



@endsection