@extends('layouts.app')
@section('content')

<style>
  .category-flex {
    display: flex;
    justify-content: space-between;
    font-weight: 600 !important;
    font-family: "EB Garamond", serif !important;
    font-size: 12px;
    line-height: 13px;
}
p.text-category-x {
    margin-left: 67px;
}



</style>


<div id="breadcrum-data">
<div class="top-breadcrum-wrap">
  <div class="page-name text-uppercase"> <a href="/">Home</a> </div>
  <div class="page-name-braker text-uppercase"> > </div>
  <div class="page-name text-uppercase"><a href="/gems">Gems</a></div>
  <div class="page-name-braker text-uppercase"> > </div>

  @if($category_filter == null)
  <div class="page-name lst-active-name text-uppercase">All</div>
  @else

  <div class="page-name lst-active-name text-uppercase">{{$category_filter->category_name}}</div>
  @endif

</div>
</div>

 <div id="category-filters">

 @if($category_filter == null)

<div class="top-banner-main-wrap" style="background-image:url('/images/our-stones/1734253114902697.jpg')">


  <div class="banner-main-txt-wrap catergory-banner-main-wrap">
    <div class="main-head-wrap">


      <h1 class="txt-white"></h1>


    </div>
    <div class="banner-descript-wrap catergory-banner-descripion">


    <p class="paraf1 txt-white"></p>

    </div>
  </div>

</div>

@else

<div class="top-banner-main-wrap" style="background-image:url('/{{$category_filter->category_image}}')">


  <div class="banner-main-txt-wrap catergory-banner-main-wrap">
    <div class="main-head-wrap">


      <h1 class="txt-white">{{$category_filter->category_name}}</h1>


    </div>
    <div class="banner-descript-wrap catergory-banner-descripion">


    <p class="paraf1 txt-white">{{$category_filter->category_description}}</p>

    </div>
  </div>

</div>


@endif

</div>



<div class="left-right-wrap-mobile">

  <div class="container-fluid" id="sort-new-section">
    <div class="row">
      <div class="col-6">
        <div class="filter-icon-wrap">
          <i class="fa fa-bars" aria-hidden="true"></i>
          <p class="paraf2 mb-0 ml-1">Filter By</p>
        </div>
      </div>
      <div class="col-6">
        <div class="filter-icon-rightwrap float-right">
          <i class="fa fa-angle-down" aria-hidden="true" onclick="openNav()"></i>
        </div>

      </div>
    </div>

    <div class="sidebar-wrap mobile-category-section-wrap" id="mySidebarmob">

      <div class="top-filter-baner-wrap">

        <div class="row">
          <div class="col-6 filterby-column">
            <div class="filter-topicon-wrap">
              <i class="fa fa-bars" aria-hidden="true"></i>
              <p class="mb-0 pl-2 paraf2">Filter By</p>
            </div>
          </div>
          <div class="col-6">
            <div class="filter-closeicon-rightwrap float-right">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            </div>
          </div>
        </div>

      </div>


      <div class="row mobile-category-raw">

        <div class="col-md-12" id="mobile-head-section">
           <select class="form-control sorting-select" id="select_byy">
              <option selected disabled hidden>Sort by Weight</option>
              <option  value="Newest">Max to Min</option>
              <option  value="Weight">Min to Max</option>


            </select>

          <a class="text-uppercase float-right sidebar-title side-bar-clear-link" id="selectt"  style="cursor: pointer;">Clear All</a>

        </div>

        <div class="mobile-text-print">
        <p class="new-class-id" id="dataa"></p>
        <p class="new-class-id" id="neww"></p>
        <p class="new-class-id" id="short-neww"></p>


        </div>



        <div class="col-12">
          <div class="category-wrap">

            <div class="sidebar-section-2">
              <div class="categoryname-headtxt-wrap category-head-txt-wrap">
                <p class="sidebar-main-category-names sidebar-title">Category</p>
              </div>
              <div class="categoryname-list-wrap main-category-list-wrap">

              <ul class="pl-0 mobile-category-list">





                @foreach($categorys as $category)


                  <li class="category-calss-new">

                  <div class="shape-style-wrap">

                  <label class="container-checkbox">
                        <input type="checkbox" id="CATEGORY: {{$category->category_name}}" name="Category_filter" value="{{$category->id}}" class="Category_filterr">

                        <span class="checkmark"></span>
                   </label>

                <div class="shape-name-wrap">

                        <p class="mb-0"> {{$category->category_name}}</p>


                </div>



               </div>



                </li>





                @endforeach

              </ul>

            </div>

            </div>

            <div class="sidebar-section-3">
              <div class="available-headtxt-wrap category-head-txt-wrap">
                <p class="sidebar-title">Availability</p>
              </div>
              <div class="categoryname-list-wrap available-list-wrap main-category-list-wrap">

              <ul class="pl-0">
                @foreach($availabilitys as $availability)


                  <li class="category-calss-new">

                    <div class="shape-style-wrap">

                        <label class="container-checkbox">
                              <input type="checkbox" id="AVAILABILITY: {{$availability->Available_name}}" name="Available_filter" value="{{$availability->id}}" class="Available_filterr">

                              <span class="checkmark"></span>
                        </label>

                       <div class="shape-name-wrap">
                               <p class="mb-0">{{$availability->Available_name}}</p>
                       </div>

                    </div>

                  </li>


                  @endforeach
              </ul>

            </div>

            </div>


            <div class="sidebar-section-4">
              <div class="available-headtxt-wrap category-head-txt-wrap">
                <p class="sidebar-title">Colours</p>
              </div>
              <div class="categoryname-list-wrap main-category-list-wrap color-list-wrap">

              @foreach($colors as $color)
              <ul class="pl-0">


                <div class="color-codes-wrap" style="background:{{ $color->color_code }};">
                  <input type="checkbox" id="COLORS: {{ $color->color_name }}" name="color_name" id="checkbox" class="color_namee" value="{{$color->id}}" >

                  <span class="checkmark"></span>
                </div>








                </li>
                </a>

              </ul>
              @endforeach

            </div>

            </div>


            <div class="sidebar-section-5">
              <div class="shape-headtxt-wrap category-head-txt-wrap">
                <p class="sidebar-title">Shape</p>
              </div>
              <div class="shape-list-wrap">





              <ul class="pl-0">



                  @foreach($shapes as $shape)
                  <li>
                    <div class="shape-style-wrap">


                      <label class="container-checkbox">
                        <input type="checkbox" id="SHAPE: {{$shape->shape_name}}" name="shape_filter" value="{{$shape->id}}" class="shape_filterr">

                        <span class="checkmark"></span>
                      </label>
                      <div class="shape-img-wrap">
                        <img src="{{asset($shape->shape_image)}}" alt="adamant-gem" srcset="">
                      </div>
                      <div class="shape-name-wrap">
                        <p class="mb-0">{{$shape->shape_name}}</p>
                      </div>
                    </div>
                  </li>
                  @endforeach



              </ul>


            </div>

            </div>


            <div class="sidebar-section-6">
              <div class="Clarity-headtxt-wrap category-head-txt-wrap">
                <p class="sidebar-title">Clarity</p>
              </div>
              <div class="Clarity-list-wrap main-category-list-wrap">



                        <ul class="pl-0">
                             @foreach($claritys as $clarity)
                             <li>
                     <div class="Clarity-style-wrap">

                              <label class="container-checkbox">{{$clarity->clarity_name}}
                           <input type="checkbox" id="CLARITY: {{$clarity->clarity_name}}" value="{{$clarity->id}}" class="clarity_filterr">

                       <span class="checkmark"></span>
                         </label>

                                </div>
                         </li>
                        @endforeach
                          </ul>



             </div>

            </div>


            <div class="sidebar-section-7">
              <div class="enhancement-headtxt-wrap category-head-txt-wrap">
                <p class="sidebar-title">Enhancements</p>
              </div>
              <div class="enhancement-list-wrap main-category-list-wrap">



                <ul class="pl-0">
                  @foreach($enhancements as $enhancement)
                  <li>
                    <div class="enhancement-style-wrap">


                      <label class="container-checkbox">{{$enhancement->enhancement_name}}
                        <input type="checkbox" id="ENHANCEMENTS: {{$enhancement->enhancement_name}}" name="enhancement_filter" value="{{$enhancement->id}}"
                          class="enhancement_filterr">

                        <span class="checkmark"></span>
                      </label>



                    </div>
                  </li>
                  @endforeach
                </ul>


            </div>

            </div>

            <div class="sidebar-section-8">
              <div class="caratweight-headtxt-wrap category-head-txt-wrap">
                <p class="sidebar-title">Carat Weight</p>
              </div>
              <div class="caratweight-list-wrap main-category-list-wrap">
                <ul class="pl-0">
                  <li>
                  <div class="caratweight-list-wrap main-category-list-wrap">
              <ul class="pl-0">
                <li>
                  <div class="caratweight-style-wrap">
                    <select class="form-control sorting-select"  id="weight_byy">
                           <option id="weigh-new">Weight</option>
                           <option id="CARAT WEIGHT: 0.00 - 0.99"  value="0.00 - 0.99">0.00 - 0.99</option>
                           <option id="CARAT WEIGHT: 1.00 - 1.99" value="1.00-1.99">1.00 - 1.99</option>
                           <option id="CARAT WEIGHT: 2.00 - 2.99" value="2.00-2.99">2.00 - 2.99</option>
                           <option id="CARAT WEIGHT: 3.00 +" value="3.00-100.00">3.00 +</option>

                   </select>





                  </div>
                </li>

              </ul>

            </div>







              </div>

            </div>

          </div>

        </div>
      </div>
    </div>

  </div>
</div>

<div class="left-filter-wrap-desktop">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 left-catergory-wrap-column">
        <div class="sidebar-main-wrap">

          <div class="sidebar-section-1">
            <div class="filterby-txt-wrap">
              <p class="paraf1">Filter by</p>

            </div>
            <div class="clearall-txt-wrap">
            <a class="side-bar-clear-link" id="select"  style="cursor: pointer;">Clear all</a>

            </div>

            <p class="new-class-id" id="data"></p>
            <p class="new-class-id" id="new"></p>
            <p class="new-class-id" id="short-new"></p>


          </div>



          <div class="sidebar-section-2">
            <div class="categoryname-headtxt-wrap category-head-txt-wrap">
              <p class="sidebar-main-category-names sidebar-title">Category</p>
            </div>
            <div class="categoryname-list-wrap main-category-list-wrap">

              <ul class="pl-0">





                @foreach($categorys as $category)


                  <li class="category-calss-new">

                  <div class="shape-style-wrap">

                  <label class="container-checkbox">
                        <input type="checkbox" id="CATEGORY: {{$category->category_name}}" name="Category_filter" value="{{$category->id}}" class="Category_filter">

                        <span class="checkmark"></span>
                   </label>

                <div class="shape-name-wrap">

                        <p class="mb-0"> {{$category->category_name}}</p>


                </div>



               </div>



                </li>





                @endforeach

              </ul>

            </div>

          </div>









          <div class="sidebar-section-3">
            <div class="available-headtxt-wrap category-head-txt-wrap">
              <p class="sidebar-title">Availability</p>
            </div>

            <div id="avalable-filter-id-1">
            <div class="categoryname-list-wrap available-list-wrap main-category-list-wrap">

              <ul class="pl-0">
                @foreach($availabilitys as $availability)


                  <li class="category-calss-new">

                    <div class="shape-style-wrap">

                        <label class="container-checkbox">
                              <input type="checkbox" id="AVAILABILITY: {{$availability->Available_name}}" name="Available_filter" value="{{$availability->id}}" class="Available_filter">

                              <span id="al-check" class="checkmark"></span>
                        </label>

                       <div class="shape-name-wrap">
                               <p class="mb-0">{{$availability->Available_name}}</p>
                       </div>

                    </div>

                  </li>


                 @endforeach
              </ul>

            </div>
            </div>

          </div>


          <div class="sidebar-section-4">
            <div class="available-headtxt-wrap category-head-txt-wrap">
              <p class="sidebar-title">Colors</p>
            </div>
            <div id="color-filter-id">
            <div class="categoryname-list-wrap main-category-list-wrap color-list-wrap">

              @foreach($colors as $color)
              <ul class="pl-0">


                <div class="color-codes-wrap" style="background:{{ $color->color_code }};">
                  <input type="checkbox" id="COLORS: {{ $color->color_name }}" name="color_name" id="checkbox" class="color_name" value="{{$color->id}}" >

                  <span class="checkmark"></span>
                </div>








                </li>
                </a>

              </ul>
              @endforeach

            </div>
           </div>

          </div>


          <div class="sidebar-section-5">
            <div class="shape-headtxt-wrap category-head-txt-wrap">
              <p class="sidebar-title">Shape</p>
            </div>
            <div id="shape-filter-id">
            <div class="shape-list-wrap">





              <ul class="pl-0">



                  @foreach($shapes as $shape)
                  <li>
                    <div class="shape-style-wrap">


                      <label class="container-checkbox">
                        <input type="checkbox" id="SHAPE: {{$shape->shape_name}}" name="shape_filter" value="{{$shape->id}}" class="shape_filter">

                        <span class="checkmark"></span>
                      </label>
                      <div class="shape-img-wrap">
                        <img src="{{asset($shape->shape_image)}}" alt="adamant-gem" srcset="">
                      </div>
                      <div class="shape-name-wrap">
                        <p class="mb-0">{{$shape->shape_name}}</p>
                      </div>
                    </div>
                  </li>
                  @endforeach



              </ul>


            </div>
            </div>

          </div>


          <div class="sidebar-section-6">
            <div class="Clarity-headtxt-wrap category-head-txt-wrap">
              <p class="sidebar-title">Clarity</p>
            </div>

            <div id="clarity-filter-id">
            <div class="Clarity-list-wrap main-category-list-wrap">



              <ul class="pl-0">
                @foreach($claritys as $clarity)
                <li>
                  <div class="Clarity-style-wrap">

                    <label class="container-checkbox">{{$clarity->clarity_name}}
                      <input type="checkbox" id="CLARITY: {{$clarity->clarity_name}}" value="{{$clarity->id}}" class="clarity_filter">

                      <span class="checkmark"></span>
                    </label>

                  </div>
                </li>
                @endforeach
              </ul>



            </div>
           </div>


          </div>


          <div class="sidebar-section-7">
            <div class="enhancement-headtxt-wrap category-head-txt-wrap">
              <p class="sidebar-title">Enhancements</p>
            </div>
            <div id="enhancement-filter-id">
            <div class="enhancement-list-wrap main-category-list-wrap">



                <ul class="pl-0">
                  @foreach($enhancements as $enhancement)
                  <li>
                    <div class="enhancement-style-wrap">


                      <label class="container-checkbox">{{$enhancement->enhancement_name}}
                        <input type="checkbox" id="ENHANCEMENTS: {{$enhancement->enhancement_name}}" name="enhancement_filter" value="{{$enhancement->id}}"
                          class="enhancement_filter">

                        <span class="checkmark"></span>
                      </label>



                    </div>
                  </li>
                  @endforeach
                </ul>


            </div>
           </div>

          </div>



          <div class="sidebar-section-8">
            <div class="caratweight-headtxt-wrap category-head-txt-wrap">
              <p class="sidebar-title">Carat Weight</p>
            </div>
            <div class="caratweight-list-wrap main-category-list-wrap">
              <ul class="pl-0">
                <li>
                  <div class="caratweight-style-wrap">
                    <select class="form-control sorting-select"  id="weight_by">
                           <option selected disabled hidden>Weight</option>
                           <option id="CARAT WEIGHT: 0.00 - 0.99"  value="0.00 - 0.99">0.00 - 0.99</option>
                           <option id="CARAT WEIGHT: 1.00 - 1.99" value="1.00-1.99">1.00 - 1.99</option>
                           <option id="CARAT WEIGHT: 2.00 - 2.99" value="2.00-2.99">2.00 - 2.99</option>
                           <option id="CARAT WEIGHT: 3.00 +" value="3.00-100.00">3.00 +</option>

                   </select>





                  </div>
                </li>

              </ul>
            </div>

          </div>

        </div>
      </div>


      <div class="col-md-10">

        <div class="row">

          <div class="col-md-6 sort-by-select" id="sort-by-mobile">
            <select class="form-control sorting-select" id="select_by">
              <option selected disabled hidden>Sort by Weight</option>
              <option  value="Newest">Max to Min</option>
              <option  value="Weight">Min to Max</option>


            </select>
          </div>

          <div class="col-md-6" id="mobile-pagi">
          {{ $stonedata->links() }}
           </div>
         </div>

        <div class="products_listing-wrap" id="speakerResponse">


          <div class="row">

            @foreach($stonedata as $value)
            <div class="col-md-4">


              <div class="category-prod-img-wrap">
              <a href="{{url('stone_info',$value->id)}}">
                @if($value->Available_id===1)
                <p class="new-text">Available</p>
                @elseif($value->Available_id===2)
                <p class="new-text">Sold</p>
                @elseif($value->Available_id===4)
                <p class="new-text">Reserved</p>
                @endif



              <img src="{{asset($value->product_image)}}" width="100%" alt="adamant-gem" srcset="">

            </a>

              </div>
              <div class="category-prod-name-wrap txt-center">
                <a href="{{url('stone_info',$value->id)}}">
                  <p class="paraf1 mb-0">{{$value->product_name}}, {{$value->product_Weight}} ct.</p>
                </a>
              </div>
              <div class="category-prod-desc-wrap txt-center">
                <p class="paraf2 txt-dark-gray">{{$value->product_variety}}</p>
              </div>



            </div>

            @endforeach

          </div>

          {{ $stonedata->links() }}







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
            <img src="/images/home-icon-1.png" class="home-middle-logo-img" alt="adamant-gem">
            <h3 class="home-middle-logo-head txt-purple">Lorem Ipsum is simply dummy text</h3>
            <p class="mb-0 home-middle-logo-descript paraf2">Lorem Ipsum is simply dummy text of the printing and
              typesetting
              industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="home-middle-logo-main-wrap">
            <img src="/images/home-icon-2.png" class="home-middle-logo-img" alt="adamant-gem">
            <h3 class="home-middle-logo-head txt-purple">Lorem Ipsum is simply dummy text</h3>
            <p class="mb-0 home-middle-logo-descript paraf2">Lorem Ipsum is simply dummy text of the printing and
              typesetting
              industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="home-middle-logo-main-wrap">
            <img src="/images/home-icon-3.png" class="home-middle-logo-img" alt="adamant-gem">
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>



  $(document).ready(function() {





      $('#select').click(function() {
        $(':checkbox').each(function() {
            this.checked = false;

            $('#data').text("");
            $('#new').text("");

            location.reload();



        });






      });

      $('#selectt').click(function() {
        $(':checkbox').each(function() {
            this.checked = false;

            $('#dataa').text("");
            $('#neww').text("");

            location.reload();



        });






      });





      $('.Category_filter').click(function() {

        var $list = $('#data').empty();

        $(':checkbox:checked').map(function() {

          var id = $(this).attr('id');

          var htmlString = "";

        htmlString +=  '<div class="category-flex">'+

         '<p class="text-category-value">'+id+'</p>'+



         '</div>';


          $('#data').append(htmlString);
           return id;
        }).get();


     });

     $('.Category_filterr').click(function() {

        var $list = $('#dataa').empty();

        $(':checkbox:checked').map(function() {

          var id = $(this).attr('id');

          var htmlString = "";

        htmlString +=  '<div class="category-flex">'+

         '<p class="text-category-value">'+id+'</p>'+



         '</div>';


          $('#dataa').append(htmlString);
           return id;
        }).get();


     });


      $('.Available_filter').click(function() {

        var $list = $('#data').empty();

        $(':checkbox:checked').map(function() {

          var id = $(this).attr('id');

          var htmlString = "";

        htmlString +=  '<div class="category-flex">'+

         '<p class="text-category-value">'+id+'</p>'+



         '</div>';


          $('#data').append(htmlString);
           return id;
        }).get();


     });

      $('.Available_filterr').click(function() {

        var $list = $('#dataa').empty();

        $(':checkbox:checked').map(function() {

          var id = $(this).attr('id');

          var htmlString = "";

        htmlString +=  '<div class="category-flex">'+

         '<p class="text-category-value">'+id+'</p>'+



         '</div>';


          $('#dataa').append(htmlString);
           return id;
        }).get();


     });



      $('.color_name').click(function() {

                var $list = $('#data').empty();

                   $(':checkbox:checked').map(function() {

                 var id = $(this).attr('id');

                     var htmlString = "";

                  htmlString +=  '<div class="category-flex">'+

                      '<p class="text-category-value">'+id+'</p>'+



                       '</div>';


                       $('#data').append(htmlString);
                      return id;
                    }).get();


        });

        $('.color_namee').click(function() {

                var $list = $('#dataa').empty();

                   $(':checkbox:checked').map(function() {

                 var id = $(this).attr('id');

                     var htmlString = "";

                  htmlString +=  '<div class="category-flex">'+

                      '<p class="text-category-value">'+id+'</p>'+



                       '</div>';


                       $('#dataa').append(htmlString);
                      return id;
                    }).get();


        });

        $('.shape_filter').click(function() {

                var $list = $('#data').empty();

                   $(':checkbox:checked').map(function() {

                 var id = $(this).attr('id');

                     var htmlString = "";

                  htmlString +=  '<div class="category-flex">'+

                      '<p class="text-category-value">'+id+'</p>'+



                       '</div>';


                       $('#data').append(htmlString);
                      return id;
                    }).get();


        });

        $('.shape_filterr').click(function() {

                var $list = $('#dataa').empty();

                   $(':checkbox:checked').map(function() {

                 var id = $(this).attr('id');

                     var htmlString = "";

                  htmlString +=  '<div class="category-flex">'+

                      '<p class="text-category-value">'+id+'</p>'+



                       '</div>';


                       $('#dataa').append(htmlString);
                      return id;
                    }).get();


        });

        $('.clarity_filter').click(function() {

                var $list = $('#data').empty();

                   $(':checkbox:checked').map(function() {

                 var id = $(this).attr('id');

                     var htmlString = "";

                  htmlString +=  '<div class="category-flex">'+

                      '<p class="text-category-value">'+id+'</p>'+



                       '</div>';


                       $('#data').append(htmlString);
                      return id;
                    }).get();


         });

         $('.clarity_filterr').click(function() {

                var $list = $('#dataa').empty();

                   $(':checkbox:checked').map(function() {

                 var id = $(this).attr('id');

                     var htmlString = "";

                  htmlString +=  '<div class="category-flex">'+

                      '<p class="text-category-value">'+id+'</p>'+



                       '</div>';


                       $('#dataa').append(htmlString);
                      return id;
                    }).get();


         });

        $('.enhancement_filter').click(function() {

                var $list = $('#data').empty();

                   $(':checkbox:checked').map(function() {

                 var id = $(this).attr('id');

                     var htmlString = "";

                  htmlString +=  '<div class="category-flex">'+

                      '<p class="text-category-value">'+id+'</p>'+



                       '</div>';


                       $('#data').append(htmlString);
                      return id;
                    }).get();


        });


        $('.enhancement_filterr').click(function() {

                var $list = $('#dataa').empty();

                   $(':checkbox:checked').map(function() {

                 var id = $(this).attr('id');

                     var htmlString = "";

                  htmlString +=  '<div class="category-flex">'+

                      '<p class="text-category-value">'+id+'</p>'+



                       '</div>';


                       $('#dataa').append(htmlString);
                      return id;
                    }).get();


        });


        $('#weight_by').change(function() {

                var $list = $('#new').empty();

                   $("#weight_by").map(function() {

                    var id = $(this).val();

                     var htmlString = "";


                     if(id==="Weight"){

                  htmlString +=  '<div class="category-flex">'+

                      '<p class="text-category-value"></p>'+

                        '<p class="text-category-x" style="cursor: pointer"></p>'+

                       '</div>';

                     }else{

                      htmlString +=  '<div class="category-flex">'+

                        '<p class="text-category-value">'+'CARAT WEIGHT: '+id+'</p>'+



                        '</div>';

                     }


                       $('#new').append(htmlString);
                      return id;
                    }).get();


        });

        $('#weight_byy').change(function() {

var $list = $('#neww').empty();

   $("#weight_byy").map(function() {

    var id = $(this).val();

     var htmlString = "";


     if(id==="Weight"){

  htmlString +=  '<div class="category-flex">'+

      '<p class="text-category-value"></p>'+

        '<p class="text-category-x" style="cursor: pointer"></p>'+

       '</div>';

     }else{

      htmlString +=  '<div class="category-flex">'+

        '<p class="text-category-value">'+'CARAT WEIGHT: '+id+'</p>';



        '</div>';

     }


       $('#neww').append(htmlString);
      return id;
    }).get();


});


        $('#select_by').change(function() {

var $list = $('#short-new').empty();

   $("#select_by").map(function() {

    var id = $(this).val();


     var htmlString = "";


     if(id==="Sort by Weight"){

  htmlString +=  '<div class="category-flex">'+

      '<p class="text-category-value"></p>'+

        '<p class="text-category-x" style="cursor: pointer"></p>'+

       '</div>';

     }if(id==="Newest"){

      htmlString +=  '<div class="category-flex">'+

        '<p class="text-category-value">'+'Sort by Weigh: Max to Min '+'</p>'+



        '</div>';

     }if(id==="Weight"){

      htmlString +=  '<div class="category-flex">'+

        '<p class="text-category-value">'+'Sort by Weigh: Min to Max '+'</p>'+



        '</div>';

     }


       $('#short-new').append(htmlString);
      return id;
    }).get();

});


       $('#select_byy').change(function() {

var $list = $('#short-neww').empty();

   $("#select_byy").map(function() {

    var id = $(this).val();


     var htmlString = "";


     if(id==="Sort by Weight"){

  htmlString +=  '<div class="category-flex">'+

      '<p class="text-category-value"></p>'+

        '<p class="text-category-x" style="cursor: pointer"></p>'+

       '</div>';

     }if(id==="Newest"){

      htmlString +=  '<div class="category-flex">'+

        '<p class="text-category-value">'+'Sort by Weigh: Max to Min '+'</p>'+



        '</div>';

     }if(id==="Weight"){

      htmlString +=  '<div class="category-flex">'+

        '<p class="text-category-value">'+'Sort by Weigh: Min to Max '+'</p>'+



        '</div>';

     }


       $('#short-neww').append(htmlString);
      return id;
    }).get();

});





































});
</script>











@endsection



