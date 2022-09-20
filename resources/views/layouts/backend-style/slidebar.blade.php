 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <!-- <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light header-new-section098">Admin Portal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>

        
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
        
      </div> -->

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item {{Request::is('dashboard') ? 'menu-is-opening.menu-open menu-is-opening menu-open' : '' }}">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          

          <li class="nav-item {{Request::is('adamant-slider') || Request::is('adamant-body') || Request::is('adamant-map') || Request::is('adamant-select') ||(request()->segment(1) == 'adamant-slider') ||(request()->segment(1) == 'adamant-body') ||(request()->segment(1) == 'adamant-map') ||(request()->segment(1) == 'adamant-select') ? 'menu-is-opening.menu-open menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link">
              
              <p >
                [A] Home
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
 
            </a>
           
            <ul class="nav nav-treeview">

              <li class="nav-item {{Request::is('adamant-slider') || (request()->segment(1) == 'adamant-slider') ? 'color' : ''}}">
                <a href="{{route('all.adamant_slider')}}" class="nav-link">
                
                  
                  
                  <p>[A1]  Main Sliders</p>
               
                </a>
               
              </li>
               
              <li class="nav-item {{Request::is('adamant-body') ? 'color' : ''}}">
                <a href="{{route('all.adamant_body')}}" class="nav-link">
                  
                  <p>[A2]  Adamant Logo Section</p>
                </a>
              </li>
             
              <li class="nav-item {{Request::is('adamant-map') ? 'color' : ''}}">
                <a href="{{route('all.adamant_map')}}" class="nav-link">
                  
                  <p>[A3]  Map Section</p>
                </a>
              </li>

              <li class="nav-item {{Request::is('adamant-select')|| (request()->segment(1) == 'adamant-select') ? 'color' : ''}}">
                <a href="{{route('all.adamant_select')}}" class="nav-link">
                 
                  <p>[A4]  Our Values</p>
                </a>
              </li>

             
              
            </ul>
          </li>

          <li class="nav-item {{Request::is('our-stone-new') || Request::is('our-category') ||(request()->segment(1) == 'our_stone') ||(request()->segment(1) == 'our_category') ? 'menu-is-opening.menu-open menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link">
              
              
              <p>
               [B] Our Stones
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item {{Request::is('our-stone-new')||(request()->segment(1) == 'our_stone') ? 'color' : ''}}">
                <a href="{{route('all.our_stone')}}" class="nav-link">
                  
                  <p>[B1] Our Stones Banner</p>
                </a>
              </li>
              <li class="nav-item {{Request::is('our-category') || (request()->segment(1) == 'our_category')  ? 'color' : ''}}">
                <a href="{{route('all.our_category')}}" class="nav-link">
                  
                  <p>[B2] Stone Category</p>
                </a>
              </li>
               
              
             
             

             
              
            </ul>
          </li>

          <li class="nav-item {{Request::is('genesis-header') || Request::is('genesis-seconds') || Request::is('genesis-seconds') || Request::is('genesis-body') || Request::is('genesis-lasts') || Request::is('genesis-ends')||(request()->segment(1) == 'genesis-header')||(request()->segment(1) == 'genesis-seconds')||(request()->segment(1) == 'genesis-body')||(request()->segment(1) == 'genesis-lasts')||(request()->segment(1) == 'genesis-ends') ? 'menu-is-opening.menu-open menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link">
              
              
              <p>
              [C] Company
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">5</span>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item {{Request::is('genesis-header')||(request()->segment(1) == 'genesis-header') ? 'color' : ''}}">
                <a href="{{route('all.genesis_header')}}" class="nav-link">
                  
                  <p>[C1] Section 01</p>
                </a>
              </li>

              <li class="nav-item {{Request::is('genesis-seconds')||(request()->segment(1) == 'genesis-seconds') ? 'color' : ''}}">
                <a href="{{route('all.genesis_seconds')}}" class="nav-link">
                  
                  <p>[C2] Section 02</p>
                </a>
              </li>

              <li class="nav-item {{Request::is('genesis-body')||(request()->segment(1) == 'genesis-body') ? 'color' : ''}}">
                <a href="{{route('all.genesis_body')}}" class="nav-link">
                  
                  <p>[C3] Section 03</p>
                </a>
              </li>

              <li class="nav-item {{Request::is('genesis-lasts')||(request()->segment(1) == 'genesis-lasts') ? 'color' : ''}}">
                <a href="{{route('all.genesis_lasts')}}" class="nav-link">
                  
                  <p>[C4] Section 04</p>
                </a>
              </li>


              <li class="nav-item {{Request::is('genesis-ends')||(request()->segment(1) == 'genesis-ends') ? 'color' : ''}}">
                <a href="{{route('all.genesis_ends')}}" class="nav-link">
                  
                  <p>[C5] Section 05</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item {{Request::is('process-one') || Request::is('process-two') || Request::is('process-three') || Request::is('process-four') || Request::is('process-studio') || Request::is('process-studiobody') || Request::is('process-studioslider') || Request::is('process-daylights') || Request::is('process-goldens') || Request::is('process-last')||(request()->segment(1) == 'process-one')||(request()->segment(1) == 'process-two')||(request()->segment(1) == 'process-three')||(request()->segment(1) == 'process-four')||(request()->segment(1) == 'process-studio')||(request()->segment(1) == 'process-studiobody')||(request()->segment(1) == 'process-daylights')||(request()->segment(1) == 'process-goldens')||(request()->segment(1) == 'process-last')||(request()->segment(1) == 'process-studioslider') ? 'menu-is-opening.menu-open menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link">
             
              
              <p>
                [D] Process
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">10</span>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item {{Request::is('process-one') ? 'color' : ''}}">
                <a href="{{route('all.process_one')}}" class="nav-link">
                 
                  <p>[D1] Section 01</p>
                </a>
              </li>

              <li class="nav-item {{Request::is('process-two') ? 'color' : ''}}">
                <a href="{{route('all.process_two')}}" class="nav-link">
                  
                  <p>[D2] Section 02</p>
                </a>
              </li>

              <li class="nav-item {{Request::is('process-three') ? 'color' : ''}}">
                <a href="{{route('all.process_three')}}" class="nav-link">
                  
                  <p>[D3] Section 03</p>
                </a>
              </li>

              <li class="nav-item {{Request::is('process-four') ? 'color' : ''}}">
                <a href="{{route('all.process_four')}}" class="nav-link">
                  
                  <p>[D4] Section 04</p>
                </a>
              </li>

              <li class="nav-item {{Request::is('process-studio') ? 'color' : ''}}">
                <a href="{{route('all.process_studio')}}" class="nav-link">
                  
                  <p>[D5] Section 05</p>
                </a>
              </li>

              <li class="nav-item {{Request::is('process-studiobody') ? 'color' : ''}}">
                <a href="{{route('all.process_studiobody')}}" class="nav-link">
                  
                  <p>[D6] Section 06</p>
                </a>
              </li>

              <li class="nav-item {{Request::is('process-studioslider')||(request()->segment(1) == 'process-studioslider') ? 'color' : ''}}">
                <a href="{{route('all.process_studioslider')}}" class="nav-link">
                  
                  <p>[D7] Section 07</p>
                </a>
              </li>
              <li class="nav-item {{Request::is('process-daylights') ? 'color' : ''}}">
                <a href="{{route('all.process_daylights')}}" class="nav-link">
                  
                  <p>[D8] Section 08</p>
                </a>
              </li>
              <li class="nav-item {{Request::is('process-goldens') ? 'color' : ''}}">
                <a href="{{route('all.process_goldens')}}" class="nav-link">
                  
                  <p>[D9] Section 09</p>
                </a>
              </li>

              <li class="nav-item {{Request::is('process-last') ? 'color' : ''}}">
                <a href="{{route('all.process_five')}}" class="nav-link">
                  
                  <p>[D10] Section 10</p>
                </a>
              </li>
              
              
               
              
             
             

             
              
            </ul>
          </li>



          

          
         

          <li class="nav-item {{Request::is('reviews-header') || Request::is('reviews-fq')||(request()->segment(1) == 'reviews-header')||(request()->segment(1) == 'reviews-fq') ? 'menu-is-opening.menu-open menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link">
              

              <p>
                [E] Reviews
                <i class="fas fa-angle-left right"></i>

                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">

            <li class="nav-item {{Request::is('reviews-header')||(request()->segment(1) == 'reviews-header') ? 'color' : ''}}">
                <a href="{{route('all.reviews_header')}}" class="nav-link">
                  
                  <p>[E1] Reviews Header</p>
                </a>
              </li>
               
              <li class="nav-item {{Request::is('reviews-fq')||(request()->segment(1) == 'reviews-fq') ? 'color' : ''}}">
                <a href="{{route('all.reviews')}}" class="nav-link">
                  
                  <p>[E2] Add Reviews</p>
                </a>
              </li>
             
              
            </ul>
          </li>

          <li class="nav-item {{Request::is('journal-fq')||(request()->segment(1) == 'journal-fq') ? 'menu-is-opening.menu-open menu-is-opening menu-open' : '' }}">
            <a href="{{route('all.journal')}}" class="nav-link">
              
              <p>
                [F] Journal
              </p>
            </a>
            
          </li>

          <li class="nav-item {{Request::is('Faq-category') || Request::is('faq-fq')||(request()->segment(1) == 'Faq-category')||(request()->segment(1) == 'faq-fq') ? 'menu-is-opening.menu-open menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link">
              
              
              <p>
                [G] FAQ
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item {{Request::is('Faq-category')||(request()->segment(1) == 'Faq-category') ? 'color' : ''}}">
                <a href="{{route('all.Faq_category')}}" class="nav-link">
                  
                  <p>[G1] Add FAQ Category</p>
                </a>
              </li>
               
              <li class="nav-item {{Request::is('faq-fq')||(request()->segment(1) == 'faq-fq') ? 'color' : ''}}">
                <a href="{{route('all.faq')}}" class="nav-link">
                  
                  <p>[G2] Add FAQ</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item {{Request::is('contact-details')||(request()->segment(1) == 'contact-details') ? 'menu-is-opening.menu-open menu-is-opening menu-open' : '' }}">
            <a href="{{route('all.contact_details')}}" class="nav-link">
              
              
              <p>
                [H] Contact Details
                
                
              </p>
            </a>
           
          </li>
          <li class="nav-item {{Request::is('footer-description')||(request()->segment(1) == 'footer-description') ? 'menu-is-opening.menu-open menu-is-opening menu-open' : '' }}">
            <a href="{{route('all.footer_description')}}" class="nav-link">
              
              
              <p>
                [I] Footer 
                
                
              </p>
            </a>
            
          </li>

          <li class="nav-item {{Request::is('category') || Request::is('color') || Request::is('shape') || Request::is('available') || Request::is('clarity') || Request::is('enhancements') || Request::is('gallery') || Request::is('stone')||(request()->segment(1) == 'category')||(request()->segment(1) == 'color')||(request()->segment(1) == 'shape')||(request()->segment(1) == 'available')||(request()->segment(1) == 'clarity')||(request()->segment(1) == 'enhancements')||(request()->segment(1) == 'gallery')||(request()->segment(1) == 'stone') ? 'menu-is-opening.menu-open menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link">
              <!-- <i class="nav-icon fas fa-copy"></i> -->
             
              <p>
                [J] Inventory Management
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">7</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{Request::is('category') ||(request()->segment(1) == 'category')  ? 'color' : ''}}">
                <a href="{{route('all.category')}}" class="nav-link">
                  <i class="fas fa-circle category"></i>
                  <p>[J1] Category Management</p>
                </a>
              </li>
              <li class="nav-item {{Request::is('color')||(request()->segment(1) == 'color')  ? 'color' : ''}}">
                <a href="{{route('all.color')}}" class="nav-link">
                  <i class="fas fa-circle colours"></i>
                  <p>[J2] Color Management</p>
                </a>
              </li>
              <li class="nav-item {{Request::is('shape')||(request()->segment(1) == 'shape')  ? 'color' : ''}}">
                <a href="{{route('all.shape')}}" class="nav-link">
                  <i class="fas fa-circle shapes"></i>
                  <p>[J3] Shape Management</p>
                </a>
              </li>
              <li class="nav-item {{Request::is('available')||(request()->segment(1) == 'available')  ? 'color' : ''}}">
                <a href="{{route('all.available')}}" class="nav-link">
                  <i class="fas fa-circle availability"></i>
                  <p>[J4] Availability Management</p>
                </a>
              </li>
              <li class="nav-item {{Request::is('clarity')||(request()->segment(1) == 'clarity')  ? 'color' : ''}}">
                <a href="{{route('all.clarity')}}" class="nav-link">
                  <i class="fas fa-circle clarity"></i>
                  <p>[J5] Clarity Management</p>
                </a>
              </li>
              <li class="nav-item {{Request::is('enhancements')||(request()->segment(1) == 'enhancements')  ? 'color' : ''}}">
                <a href="{{route('all.enhancements')}}" class="nav-link">
                  <i class="fas fa-circle enhancement"></i>
                  <p>[J6] Enhancements Management</p>
                </a>

                <li class="nav-item {{Request::is('gallery')||(request()->segment(1) == 'gallery')  ? 'color' : ''}}">
                <a href="{{route('all.gallery')}}" class="nav-link">
                  <i class="fas fa-circle gallery"></i>
                  <p>[J7] Gallery Management</p>
                </a>
               </li>
               <li class="nav-item {{Request::is('Variety')||(request()->segment(1) == 'Variety')  ? 'color' : ''}}">
                <a href="{{route('all.Variety')}}" class="nav-link">
                  <i class="fas fa-circle Variety"></i>
                  <p>[J8] Variety Management</p>
                </a>
               </li>
             

             
              <li class="nav-item {{Request::is('stone')||(request()->segment(1) == 'stone')  ? 'color' : ''}}">
                <a href="{{route('all.stone')}}" class="nav-link">
                  <i class="fas fa-circle stone"></i>
                  <p>[J9] Stone Management</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item {{Request::is('activitylog') ? 'menu-is-opening.menu-open menu-is-opening menu-open' : '' }}">
            <a href="{{route('user.activitylog')}}" class="nav-link">
              
              
              <p>
               [K] User Activity Log
                
                
              </p>
            </a>
            
          </li>
         
          

      

         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>