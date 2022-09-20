@extends('layouts.app')
@section('content')

<style>
  div#instafeed-container img{
  width: 270px  !important;
  height: 270px !important;
  object-fit: cover !IMPORTANT;
}
</style>


@foreach($contact_details as $contact_detail)

<div class="contact-page-full-wrap">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 ml-auto contact-right-wrap8">
        <div class="row">
          <div class="col-md-4 tab-width100">
            <div class="contact-left-ful-wrap">
              <div class="contact-head-txt">
                <h2>{{$contact_detail->conatct_header}}</h2>
              </div>
              <div class="contact-descrpt-txt">
                <p>{{$contact_detail->conatct_header_text}}</p>
              </div>
              <div class="contact-icon-ful-wrap">
                <div class="contact-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#BD98BB" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>
                </div>
                <div class="contact-icon-details">
                  <span><a href="tel:{{$contact_detail->conatct_number}}" class="info-head-txt-prpl ">{{$contact_detail->conatct_number}}</a></span>
                </div>
              </div>
              <div class="contact-icon-ful-wrap">
                <div class="contact-icon-envelope">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </div>
                <div class="contact-icon-details">
                  <span><a href="mailto::{{$contact_detail->conatct_email}}" class="info-head-txt-prpl">{{$contact_detail->conatct_email}}</a></span>
                </div>
              </div>
              <div class="contact-icon-ful-wrap">
                <div class="contact-icon-instagram">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </div>
                <div class="contact-icon-details">
                  <span><a href="https://{{$contact_detail->conatct_insta}}" class="info-head-txt-prpl">adamant.gems</a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 tab-width100">
            <div class="product-inqury-form-full-wrap contact-form-right">
              
              <form class="product-infor-form" action="{{route('contact.email')}}" enctype="multipart/form-data" method="POST">
                {!! csrf_field() !!}

                <div class="form-group">
                  <input class="form-control info-form-fields" type="text" placeholder="Name" name="Name">
                  @error('Name')
                  <span class="text-danger">{{$message}}</span>
                
                  @enderror
                </div>
                <div class="form-group">
                  <input class="form-control info-form-fields" type="text" placeholder="Contact" name="Contact">
                  @error('Contact')
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
                  <input class="form-control info-form-fields" type="text" placeholder="Company" name="Company">
                  @error('Company')
                  <span class="text-danger">{{$message}}</span>
                
                  @enderror
                </div>
                <div class="form-group">
                  <input class="form-control info-form-fields" type="text" placeholder="Subject" name="Subject">
                  @error('Subject')
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
    <div class="row">
      
      <div class="col-md-8 ml-auto contact-right-wrap82 ">
        <div class="contact-page-separator">
        
        </div>
        <div class="row">
          <div class="col-md-4 tab-width100">
            <div class="contact-left-ful-wrap">
              <div class="contact-head-txt">
                <h2>{{$contact_detail->conatct_register_office}}</h2>
              </div>
              <div class="contact-descrpt-txt">
                <p class="mb-2">{{$contact_detail->conatct_register_adress1}}</p>
                <p class="mb-2">{{$contact_detail->conatct_register_adress2}}</p>
                <p class="mb-2">{{$contact_detail->conatct_register_adress3}}</p>
              </div>
              
              
            </div>
          </div>
          <div class="col-md-8 tab-width100">
            <div class="contact-bottom-right-ful-wrap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.788166233224!2d79.87120121532595!3d6.915911420394318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25975eb455555%3A0xfabb7571b56beed9!2sAdamant%20International%20Ltd!5e0!3m2!1sen!2slk!4v1632766128496!5m2!1sen!2slk" width="65%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mailchimp-contactsection-wrap">

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
  
          <div class="mailchimp-ful-wrap">
  
            <div class="mailchimp-heading">
              <h1>{{$contact_detail->conatct_ourlist}}</h1>
            </div>
            <div class="mailchimp-description">
              <p class="mb-0">{{$contact_detail->conatct_ourlist_text}}</p>
            </div>
            <div class="mailchimp-form-wrap">
             

              <form action="{{route('latter.store')}}" method="POST">
              {{ csrf_field() }}
              <div class="input-group mb-3 col-4">

                <input type="email" class="form-control" required name="user_email" placeholder="Your email address" aria-label="Your email address"
                  aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit">Join</button>
                </div>
              </div>

              </form>

              <div class="text-center">
              
                @if (Session::has('success'))
                        <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                         </div><br />
                @endif
                @if (Session::has('failure'))
                <div class="alert alert-danger">
                        <p>{{ \Session::get('failure') }}</p>
                 </div><br />
                @endif
                </div>

            </div>
  
          </div>
  
  
        </div>
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
                <p class="mb-0 paraf3 txt-purple">@adamantgems</p>
                <p class="mb-0 paraf3">on instagram</p>
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

@endforeach



@endsection