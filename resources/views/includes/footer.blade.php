<div class="footer-main-wrap">


  <div class="container-fluid">
    <div class="footer-first-row-wrap">
      <div class="row">
        <div class="col-md-12">
          <div class="list-inline mobile-inlineto-block">
            <a href="/" class="list-inline-item footter-class-new {{Request::is('/') ? 'active' : '' }}">Explore</a>
            <a href="/gems" class="list-inline-item footter-class-new {{Request::is('gems') ? 'active' : '' }}">Our Gems</a>
            <a href="/Company" class="list-inline-item footter-class-new {{Request::is('Company') ? 'active' : '' }}">Company</a>
            <a href="/journal" class="list-inline-item footter-class-new {{Request::is('journal') ? 'active' : '' }}">Journal</a>
            <a href="/faq" class="list-inline-item footter-class-new {{Request::is('aq') ? 'active' : '' }}">FAQ</a>
            <a href="/contact" class="list-inline-item footter-class-new {{Request::is('contact') ? 'active' : '' }}">Contact</a>
            <a href="/privacy-policy" class="list-inline-item footter-class-new {{Request::is('privacy-policy') ? 'active' : '' }}">Privacy Policy</a>
            <a href="/terms-conditions" class="list-inline-item footter-class-new {{Request::is('terms-conditions') ? 'active' : '' }}">Terms & Conditions</a>
          </div>


        </div>
        
      </div>
    </div>
    <div class="footer-second-row-wrap">
      <div class="row">
        <div class="col-md-12">
        @if($footers->count())
          <div class="list-inline footer-logo-wrap">

            <a href="#" class="list-inline-item">
             
              <img src="{{asset($footers[0]->footer_logo1)}}" class="footer-middle-logo-img" alt="adamant-gem">
           
            </a>
            <a href="#" class="list-inline-item">
              <img src="{{asset($footers[0]->footer_logo2)}}" class="footer-middle-logo-img" alt="adamant-gem">
            </a>
            <a href="#" class="list-inline-item">
              <img src="{{asset($footers[0]->footer_logo3)}}" class="footer-middle-logo-img" alt="adamant-gem">
            </a>

          </div>
        
        @endif
        </div>
        
      </div>
    </div>

    <div class="footer-third-row-wrap">
      <div class="row">
        <div class="col-md-12">
        @if($footers->count())
          <div class="footer-bottom-description">

            <p class="mb-0">{{$footers[0]->footer_description}}</p>

          </div>
          @endif


        </div>
        
      </div>
    </div>
  </div>



 </div>

 <div class="footer-bottom-wrap">
   <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="footer-left-colum-wrap">
         <span>Copyright © 2022 Adamant Gems All rights reserved.</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="footer-right-side">

          <span>created</span>
          <a href="https://www.listudiosl.com/">
        <img src="/images/li.svg" alt="adamant-gem" srcset="">
          </a>
        </div>
        
      </div>
    </div>
   </div>
 </div>

