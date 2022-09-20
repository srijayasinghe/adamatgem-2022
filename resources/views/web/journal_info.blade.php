@extends('layouts.app')

@section('content')
<div class="top-breadcrum-wrap">
  <div class="page-name text-uppercase"> <a href="/">Home</a> </div>
  <div class="page-name-braker text-uppercase"> > </div>
  <div class="page-name text-uppercase"><a href="/journal">JOURNAL</a></div>
  <div class="page-name-braker text-uppercase"> > </div>
  <div class="page-name text-uppercase"><a href="">{{$journal->post_text}}</a></div>
 
</div>

<div class="journal-info-main-wrap">
  <div class="container-fluid" >
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="journal-info-img-wrap">
          <img src="{{asset($journal->post_main_image)}}" width="100%" alt="adamant-gem" srcset="">
        </div>
      </div>
    </div>
    <div class="container journal-info-section">  
      <div class="row">
        <div class="container">
          <div class="col-md-9 ml-auto mr-auto">
            <div class="journal-info-name-wrap">
              <h2>{{$journal->post_text}}</h2>
            </div>
  
            <div class="journal-info-date-wrap">
              <span class="info-head-txt txt-light-gray"> {{ Carbon\Carbon::parse($journal->created_at)->isoFormat('D MMMM YYYY') }}</span>
            </div>
  
            <div class="journal-info-contents mt-4 pb-5">
            {!! html_entity_decode($journal->post_body) !!}
            </div>
  
  
          </div>
        </div>
      </div>
    </div>
      

     
  </div>
</div>

@endsection