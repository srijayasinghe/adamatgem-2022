<nav class="navbar navbar-expand-md navbar-fixed-top main-nav">
    <div class="container desktop-navbar-container">
        <div class="navbar-collapse collapse nav-content order-2 desktop-left-navbar">
            <ul class="nav navbar-nav">
                <li class="nav-item {{Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link acive-color-header" href="/">Explore</a>
                </li>
                <li class="nav-item {{Request::is('gems') || (request()->segment(1) == 'stone_category') || (request()->segment(1) == 'stone_info') ? 'active' : '' }}">
                    <a class="nav-link acive-color-header" href="/gems">Gems</a>
                </li>
                <li class="nav-item {{Request::is('Company') ? 'active' : '' }}">
                    <a class="nav-link acive-color-header" href="/Company">Company</a>
                </li>
                <li class="nav-item {{Request::is('process') ? 'active' : '' }}">
                    <a class="nav-link acive-color-header" href="/process">Process</a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav text-nowrap flex-row mx-md-auto order-1 order-md-2 mobile-toggler-ul">
            <li class="nav-item nav-not-fixed" ><a class="nav-link" href="/"><img style="width: 180px;" src="/images/adamant-logo.png" class="web-logo"
                        alt="adamant-gem"></a></li>
            <li class="nav-item nav-item-fixed"><a class="nav-link" href="/"><img src="/images/adamant-icon.png" class="web-logo"
                        alt="adamant-gem"></a></li>

        </ul>
        <div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3 desktop-right-navbar">
            <ul class="ml-auto nav navbar-nav">
                <li class="nav-item {{Request::is('reviews') ? 'active' : '' }}">
                    <a class="nav-link acive-color-header" href="/reviews">Reviews</a>
                </li>
                <li class="nav-item {{Request::is('journal') || (request()->segment(1) == 'journal_info') ? 'active' : '' }}">
                    <a class="nav-link acive-color-header" href="/journal">Journal</a>
                </li>
                <li class="nav-item {{Request::is('faq') ? 'active' : '' }}">
                    <a class="nav-link acive-color-header" href="/faq">FAQ</a>
                </li>
                <li class="nav-item {{Request::is('contact') ? 'active' : '' }}">
                    <a class="nav-link acive-color-header" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class="mobile-nav-bar">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="mobile-nav-full-wrap">
                    <div class="mobile-nav-logo-wrap">
                        <a class="" href="/"><img src="/images/adamant-logo.png" class="web-logo" width="100%"
                                alt="adamant-gem"></a>
                    </div>
                    <div class="mobile-nav-toggler-wrap">
                        <img src="/images/Home/menu.png" alt="toggler-icon" onclick="openmobNav()" srcset="">
                    </div>

                </div>

            </div>
            {{-- <div class="col-4">

                <img src="/images/home/menu.png" alt="toggler-icon" srcset="">

            </div> --}}
        </div>

        
    </div>
    
</nav>

<div class="mobile-navlinks-outer-wrap" id="mymobSidebarmob">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                
                <div class="mobile-navlink-full-wrap">
                    <div class="mobile-navlink-top-wrap">
                        <div class="mobile-nav-full-wrap">
                            <div class="mobile-nav-logo-wrap">
                                <a class="" href="/"><img src="/images/adamant-logo.png" class="web-logo" width="100%"
                                        alt="adamant-gem"></a>
                            </div>
                            <div class="mobile-nav-toggler-wrap close-btn-wrap">
                                <a href="javascript:void(0)" class="closebtn" onclick="closemobNav()">×</a>
                            </div>
    
                        </div>
    
                        
                    </div>
                </div>
    
            </div>

            <div class="mobile-navlinks-wrap w-100 txt-center">
                <ul class="list-none pl-0">
                    <a href="/" class="nav-link"><li>Explore</li></a>
                    <a href="/gems" class="nav-link"><li>Gems</li></a>
                    <a href="/Company" class="nav-link"><li>Company</li></a>
                    <a href="/process" class="nav-link"><li>Process</li></a>
                    <a href="/reviews" class="nav-link"><li>Reviews</li></a>
                    <a href="/journal" class="nav-link"><li>Journal</li></a>
                    <a href="/faq" class="nav-link"><li>Faq</li></a>
                    <a href="/contact" class="nav-link"><li>Contact</li></a>
                </ul>
            </div>
        </div>
    </div>
</div>
