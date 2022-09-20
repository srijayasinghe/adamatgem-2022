@extends('layouts.app')
@section('content')
{{-- home journal section --}}
<div class="home-journal-main-wrap">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="home-journal-head-wrap">
          <h2>Journal</h2>
        </div>
      </div>
    </div>



  </div>
  <div class="container">

    <div class="row">

      <section id="pinBoot">



        @foreach($journal as $value)

        <article class="white-panel">
        <a href="{{url('journal_info',$value->id)}}"><img src="{{asset($value->post_main_image)}}" alt="adamant-gem"></a>
          <div class="home-journal-date-wrap">
            <p class="mb-0">
                    @if($value->created_at==NULL)
                    <span class="text-danger">NO Date Set</span>
                    @else
                    {{ Carbon\Carbon::parse($value->created_at)->isoFormat('D MMMM YYYY') }}
                    @endif</p>
          </div>
          <div class="home-journal-name-wrap">
            <a href="{{url('journal_info',$value->id)}}">
              <p>{{$value->post_text}}</p>
            </a>
          </div>
        </article>

        @endforeach



      </section>

     



      <div class="journal-pagination-wrap">
        {{$journal->links()}}
      </div>


    </div>

  </div>
</div>
@endsection