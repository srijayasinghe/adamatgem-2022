@extends('layouts.app')
@section('content')
<div class="faq-full-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="home-faq-head-wrap mt-5 txt-center">
          <h2>FAQ</h2>
        </div>
      </div>
    </div>
  </div>

  @foreach($faq as $key=>$faq1)

  <div class="faq-accord-full-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 ml-auto mr-auto">

          <div class="faq-accordian-full-wrap">
            <div class="faq-accordian-header-txt">
              <h3 class="txt-purple">{{$faq1->faq_category_name}}</h3>
            </div>
            @foreach($faq1->application as $key=>$faq2)

           
            
            <div class="accordion" id="faq">
              <div class="card">
                <div class="card-header" id="faqhead{{$faq2->id}}">
                  <a href="#" class="btn btn-header-link info-head-txt-prpl collapsed" data-toggle="collapse" data-target="#faq{{$faq2->id}}"
                    aria-expanded="false" aria-controls="faq{{$faq2->id}}">{{$faq2->faq_question}}</a>
                </div>

                <div id="faq{{$faq2->id}}" class="collapse" aria-labelledby="faqhead{{$faq2->id}}" data-parent="#faq{{$faq2->id}}">
                  <div class="card-body">

                    {!! html_entity_decode($faq2->faq_answer) !!}

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

@endforeach 
 
  {{-- <div class="faq-accord-full-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 ml-auto mr-auto">

          <div class="faq-accordian-full-wrap">
            <div class="faq-accordian-header-txt">
              <h3 class="txt-purple">Payment</h3>
            </div>
            <div class="accordion" id="faq">
              <div class="card">
                <div class="card-header" id="faqhead21">
                  <a href="#" class="btn btn-header-link collapsed info-head-txt-prpl" data-toggle="collapse" data-target="#faq21"
                    aria-expanded="true" aria-controls="faq1">Which forms of payment do you accept?.</a>
                </div>

                <div id="faq21" class="collapse" aria-labelledby="faqhead21" data-parent="#faq">
                  <div class="card-body">
                    <p class="info-head-txt">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                      richardson ad squid. 3 wolf
                      moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                      eiusmod.
                      Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                      shoreditch et. </p>
                    <p class="info-head-txt">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                      sapiente ea
                      proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                      denim
                      aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="faqhead2">
                  <a href="#" class="btn btn-header-link collapsed info-head-txt-prpl" data-toggle="collapse"
                    data-target="#faq22" aria-expanded="true" aria-controls="faq2">A note on high value stones</a>
                </div>

                <div id="faq22" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                  <div class="card-body">
                    <p class="info-head-txt">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                      richardson ad squid. 3 wolf
                      moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                      eiusmod.
                      Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                      shoreditch et. </p>
                    <p class="info-head-txt">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                      sapiente ea
                      proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                      denim
                      aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                  </div>
                </div>
              </div>
             
            </div>
          </div>


        </div>
      </div>
    </div>
  </div> --}}


</div>

@endsection