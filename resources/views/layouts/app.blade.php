<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="Listudios (Pvt) Ltd">
  <meta property="og:site_name" content="Adamant">

  <meta name="description" content="Fine quality gemstones from Sri Lanka and East Africa. Ceylon sapphires, chrysoberyls, spinels, tourmalines, zircons, beryls, garnets and other gems.">

  <meta property="og:title" content="Welcome to Adamant" />
  <meta property="og:type" content="website" />

  <title>Adamant</title>
  <link rel="icon" type="image/png" href="/images/adamant-icon.png">

  <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
  <style>
  .journal-info-section .journal-info-contents img {
    height: auto !important;
    width: 100% !important;
    object-fit: contain !important;
}
.our-company-full-wrap {
    background-image: url('/images/genesis/our-company-map-bg-full.jpg');
    position: relative;
    background-repeat: no-repeat;
    background-size: contain;
    background-position: bottom;
}

.adipiscing-fullsection {
    background-image: url('/images/genesis/gem-bg.jpg');
    position: relative;
    background-size: cover;
    background-position: center;
}

.journal-info-img-wrap img {
    max-height: 600px;
    object-fit: cover;
}
button.btn.btn-primary.login-button-section.w-100 {
    margin-bottom: 20px !important;
}
.home-middle-banner-bottom-txt-wrap h1 {
    line-height: 50px!important;
    width: 60%;
}
      .letters-set p {
    font-size: 17px !important;
    line-height: 28px !important;
    font-weight: normal !important;
    font-family: "EB Garamond", serif !important;
    letter-spacing: 0.06px;
    color: #606060 !important;
}
.new-text-process p {
    font-size: 34px!important;
    color: #724b8e!important;
    font-family: EB Garamond,serif!important;
    font-weight: 400!important;
    letter-spacing: 0;
    line-height: 45px!important;
    opacity: 1;
}
.journal-info-contents.mt-4.pb-5 p {
    font-family: "EB Garamond", serif !important;
}
  </style>


  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

  {{--
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"> --}}

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />
  <!-- Styles -->
  <!--Plugin CSS file with desired skin-->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />



  {{--
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pannellum/2.5.6/pannellum.css"
    integrity="sha512-UoT/Ca6+2kRekuB1IDZgwtDt0ZUfsweWmyNhMqhG4hpnf7sFnhrLrO0zHJr2vFp7eZEvJ3FN58dhVx+YMJMt2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

  @yield('styles')


</head>

<body class="body-section-home">



  <div class="mobile-rotate-wrap" style="display:none;">
    <p class="rotate"><i class="fa fa-mobile" aria-hidden="true"></i><br>Please Rotate Your Device.<br>[Portrait Mode]
    </p>
  </div>

  <div class="preloader">


    <div class="sk-chase">
      <div class="sk-chase-dot"></div>
     
    </div>
  </div> 


  @include('includes.header')
  @yield('content')
  @include('includes.footer')

  {{-- <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i
      class="fa fa-chevron-up"></i></a> --}}

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="{{ asset('js/app.js') }}"></script>

  <script src="https://use.fontawesome.com/d7032634d9.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>


  <!--Plugin JavaScript file-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.js"></script>



<script>
  $(".see-more").click(function() {

$div = $($(this).data('div')); //div to append
  $link = $(this).data('link'); //current URL

  $page = $(this).data('page'); //get the next page #
  $href = $link + $page; //complete URL
  $.get($href, function(response) { //append data
    $html = $(response).find("#posts").html(); 
    $div.append($html);
  });

  $(this).data('page', (parseInt($page) + 1)); //update page #
});
</script>




  


  <script>
    

    //   pannellum.viewer('panorama-360-view', {
    // "type": "equirectangular",
    // "panorama": "/images/360-img.jpg",
    // "autoLoad": true
    // })




// var threesixty = new ThreeSixty(document.getElementById('threesixty'), {
//   image: '/images/360-img.jpg',
//   width: 320,
//   height: 320,
//   count: 31,
//   perRow: 4,
//   speed: 1000
// });

// threesixty.play();



$(function() {

var num = 25; // the total number of images 

// Preload all the images into hidden div
for (var i=1 ; i<=num ; i++) {
    var img = document.createElement('img');
    img.src = '/images/process/rotate/gemstone360_('+i+').jpg';
    document.getElementById('preload-imgs').appendChild(img);
}

// Control swipes using jquery.touchSwipe.min.js
// http://labs.rampinteractive.co.uk/touchSwipe/
var swipeOptions=
{
    triggerOnTouchEnd : true,	
    swipeStatus : swipeStatus,
    allowPageScroll:"vertical",
    threshold:75			
}

$(function()
{				
    imgs = $(".img-container"); // the element that will be swipeable
    imgs.swipe( swipeOptions );
});

function swipeStatus(event, phase, direction, distance) {
    var duration = 0;
    if(direction == "left") {
    	changeImg(distance);
    }
    else if (direction == "right") {
    	changeImgR(-distance);
    }
}

function changeImg (imgNum) {

    // divide by 8 (or any number) to spread 
    // it out so it doesn't load new img 
    // every single px of swipe distance
    imgNum = Math.floor(imgNum/8); 

    if (imgNum < 1) {
    	imgNum += num;
    }
    if (imgNum > num) {
    	imgNum -= num;
    }

    // change the image src
    document.getElementById("myImg").src="/images/process/rotate/gemstone360_("+imgNum+").jpg";
}

function changeImgR (imgNum) {

    // divide by 8 (or any number) to spread 
    // it out so it doesn't load new img 
    // every single px of swipe distance
    imgNum = Math.floor(imgNum/8); 

    var num2 = -Math.abs(num); 
    if (imgNum > num2) {
    	imgNum += num;
    }
    if (imgNum <= num2) {
    	imgNum += num*2;
    }

    // change the image src
    document.getElementById("myImg").src="/images/process/rotate/gemstone360_("+imgNum+").jpg";
}
})

  
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

(function ($){
    $(document).ready(function() {


      
      

        $('.left-filter-wrap-desktop').change(function(){

        
          
          var Category=[];
          var Available=[];
          var color=[];
          var shape=[];
          var clarity=[];
          var enhancement=[];


          

         
        


        
          
          
          var sortby=$('#select_by option:selected').val();


          

          $('.Category_filter').each(function(){
 
              if($(this).is(":checked")){
                
                Category.push($(this).val());
                
      
              }

            
      
          });

        

          $('.Available_filter').each(function(){

            

              if($(this).is(":checked")){ 

                $(this).find(".checkmark").after().css("display","block");
                
                Available.push($(this).val());
                
                
              }
      
          });

          $('.color_name').each(function(){
              if($(this).is(":checked")){
                  color.push($(this).val());
      
      
              }
      
          });

          $('.shape_filter').each(function(){
              if($(this).is(":checked")){
                shape.push($(this).val());
      
      
              }
      
          });

          $('.clarity_filter').each(function(){
              if($(this).is(":checked")){
                  clarity.push($(this).val());
      
      
              }
      
          });

          $('.enhancement_filter').each(function(){
              if($(this).is(":checked")){
                enhancement.push($(this).val());
      
      
              }
      
          });


          var link =window.location.href;
          var qp = link.split("/");

          if(qp[5]=='Sapphire'){
            Category=1;
          }if(qp[5]=='Spinel'){
            Category=2;

          }if(qp[5]=='Chrysoberyl'){
            Category=3;

          }if(qp[5]=='Garnet'){
            Category=5;

          }if(qp[5]=='Other%20Varieties'){
            Category=6;

          }if(qp[5]=='Add-ons'){
            Category=7;

          }

          


          


          



            var data=$('#weight_by option:selected').val();
            var Doc=data.split('-');
            var Weight_min=Doc[0];
            var Weight_max=Doc[1];




          
            
        
          FinalCategory=Category.toString();
          FinalAvailable=Available.toString();
          Finalcolor=color.toString();
          Finalshape=shape.toString();
          Finalclarity=clarity.toString();
          Finalenhancement=enhancement.toString();


           

          



          
         

          $.ajax({
                type: "GET",
                url: "{{route('view.category')}}",
                async: false,
                dataType:'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{"Category":FinalCategory,"Available":FinalAvailable,"color":Finalcolor,"shape":Finalshape,"clarity":Finalclarity,"enhancement":Finalenhancement,"Weight_min":Weight_min,"Weight_max":Weight_max,"sortby":sortby,"qp":qp[5]},
                
                success: function(response) {


                   
                  
                     html = "";  
                     html += '<div class="row">';
                            $.each(response.stonedata, function( index,value ) {

                              
                                html += '<div class="col-md-4">';

                                html += '<div class="category-prod-img-wrap">'; 
                                
                                if(value.Available_id===1){

                                html += '<a href="http://localhost:8000/stone_info/'+value.id+'">';

                                html +='<p class="new-text">';
                                
                                html +='Available';

                                html +='</p>';

                                html +='<img src="http://localhost:8000/'+value.product_image+'" width="100%" alt="adamant-gem" srcset="">';

                                html +='<a>';

                                }if(value.Available_id===2){
                                  html += '<a href="http://localhost:8000/stone_info/'+value.id+'">';

                                  html +='<p class="new-text">';

                                  html +='Sold';

                                  html +='</p>';

                                  html +='<img src="http://localhost:8000/'+value.product_image+'" width="100%" alt="adamant-gem" srcset="">';

                                  html +='<a>';

                                }if(value.Available_id===4){
                                  html += '<a href="http://localhost:8000/stone_info/'+value.id+'">';

                                  html +='<p class="new-text">';

                                  html +='Reserved';

                                  html +='</p>';

                                  html +='<img src="http://localhost:8000/'+value.product_image+'" width="100%" alt="adamant-gem" srcset="">';

                                  html +='<a>';

                                }

                                html +='</div>';


                                html += '<div class="category-prod-name-wrap txt-center">';
                                html += '<a href="http://localhost:8000/stone_info/'+value.id+'"><p class="paraf2 mb-0">'+value.product_name+', '+value.product_Weight+' ct.</p></a> ';
                                html += ' </div>';


                                html += '<div class="category-prod-desc-wrap txt-center">';
                                html += '<p class="paraf2 txt-dark-gray">'+value.product_variety+'</p> ';
                                html += ' </div>';
                                  

                                html += '</div>';

                               

                              
                        });
                        html += '</div>';
                        

                      

                     $('#speakerResponse').empty('').append(html);



                     $.each(response.category_data, function( index,value ) {

                     
                     
                      
                       
                     html="";

                  

                     if(index == 0){

                     html +='<div class="top-banner-main-wrap" style="background-image:url('+'/'+value.category_image+')">';

                     html +='<div class="banner-main-txt-wrap catergory-banner-main-wrap">';

                     html +='<div class="main-head-wrap">';

                     html +='<h1 class="txt-white">'+value.category_name+'</h1>';

                     html +='</div>';

                     html +='<div class="banner-descript-wrap catergory-banner-descripion">';

                     html +=' <p class="paraf1 txt-white">'+value.category_description+'</p>';

                     html +='</div>';

                     html +='</div>';

                     html +='</div>';

                     html +='</div>';

                     }if(index  >= 1){

                      html +='<div class="top-banner-main-wrap" style="background-image:url(/images/our-stones/1734253114902697.jpg)">';

                     html +='<div class="banner-main-txt-wrap catergory-banner-main-wrap">';

                     html +='<div class="main-head-wrap">';

                     html +='<h1 class="txt-white"></h1>';

                     html +='</div>';

                     html +='<div class="banner-descript-wrap catergory-banner-descripion">';

                     html +=' <p class="paraf1 txt-white"></p>';

                     html +='</div>';

                     html +='</div>';

                     html +='</div>';

                     html +='</div>';

                      


                     }if(index === 'null'){

                      html +='<div class="top-banner-main-wrap" style="background-image:url(/images/our-stones/1734253114902697.jpg)">';

                     html +='<div class="banner-main-txt-wrap catergory-banner-main-wrap">';

                     html +='<div class="main-head-wrap">';

                     html +='<h1 class="txt-white"></h1>';

                     html +='</div>';

                     html +='<div class="banner-descript-wrap catergory-banner-descripion">';

                     html +=' <p class="paraf1 txt-white"></p>';

                     html +='</div>';

                     html +='</div>';

                     html +='</div>';

                     html +='</div>';

                     }


                     });


                     $('#category-filters').empty('').append(html);


                   

                      
                     

                     html ="";

                     html +='<div class="top-breadcrum-wrap">';

                     html +='<div class="page-name text-uppercase"> <a href="/">Home</a> </div>';

                     html +='<div class="page-name-braker text-uppercase"> > </div>';

                     html +='<div class="page-name text-uppercase"><a href="/gems">Gems</a></div>';

                     html +='<div class="page-name-braker text-uppercase"> > </div>';

                     $.each(response.category_data, function( index,value ) {

                     

                     if(index == 0){

                     html +='<div class="page-name lst-active-name text-uppercase">'+value.category_name+'</div>';
                     

                     }if(index >=1){
                      html +=' , ';

                      html +='<div class="page-name lst-active-name text-uppercase">'+value.category_name+'</div>';
                     

                     }if(index === "null"){

                      html +='<div class="page-name lst-active-name text-uppercase">All</div>';
                     

                     }

                     
                    });

                     html +='</div>';

                     $('#breadcrum-data').empty('').append(html);





                      // availability

                      html='';

                      html +='<div class="categoryname-list-wrap available-list-wrap main-category-list-wrap">';
                      html +='<ul class="pl-0">';
                     
                      $.each(response.availability, function( index,value ) {

                        

                      html +='<li class="category-calss-new">';
                      html +='<div class="shape-style-wrap">';
                      html +='<label class="container-checkbox">';
                      html +='<input type="checkbox" id="AVAILABILITY: '+value.Available_name+'" name="Available_filter" value="'+value.id+'" class="Available_filter">';
                      html +='<span class="checkmark"></span>';
                      html +='</label>';
                      html +='<div class="shape-name-wrap">';
                      html +=' <p class="mb-0">'+value.Available_name+'</p>';
                      html +='</div>';
                      html +='</div>';
                      html +='</li>';

                      });

                      html +='</ul>';
                      html +='</div>';

                      $('#avalable-filter-id').empty('').append(html);


                      //color
                      

                      html='';

                      html +='<div class="categoryname-list-wrap main-category-list-wrap color-list-wrap">';

                      $.each(response.color, function( index,value ) {
                      html +='<ul class="pl-0">';
                      html +='<div class="color-codes-wrap" style="background:' +value.color_code+'">';
                      html +=' <input type="checkbox" id="COLORS: '+value.color_name+'" name="color_name" id="checkbox" class="color_name" value="'+value.id+'" >';
                      html +='<span class="checkmark"></span>';
                      html +='</div>';
                      html +='</ul>';
                      });

                      html +='</div>';


                      $('#color-filter-id').empty('').append(html);


                      // shape
                      

                      html='';

                      html +='<div class="shape-list-wrap">';
                      html +='<ul class="pl-0">';

                      $.each(response.shape, function( index,value ) {

                      html +=' <li>';
                      html +='<div class="shape-style-wrap">';
                      html +='<label class="container-checkbox">';
                      html +='<input type="checkbox" id="SHAPE: '+value.shape_name+'" name="shape_filter" value="'+value.id+'" class="shape_filter">';
                      html +='<span class="checkmark"></span>';
                      html +='</label>';
                      html +='<div class="shape-img-wrap">';
                      html +='<img src="'+'/'+value.shape_image+'" alt="adamant-gem" srcset="">';
                      html +='</div>';
                      html +='<div class="shape-name-wrap">';
                      html +='<p class="mb-0">'+value.shape_name+'</p>';
                      html +='</div>';
                      html +='</div>';
                      html +='</li>';
                      });

                      html +='</ul>';
                      html +='</div>';

                      $('#shape-filter-id').empty('').append(html);



                      // clarity
                      

                      html='';

                      html +='<div class="Clarity-list-wrap main-category-list-wrap">';
                      html +='<ul class="pl-0">';

                      $.each(response.clarity, function( index,value ) {
                      html +='<li>';
                      html +='<div class="Clarity-style-wrap">';
                      html +='<label class="container-checkbox">'+value.clarity_name+'';
                      html +='<input type="checkbox" id="CLARITY: '+value.clarity_name+'" value="'+value.id+'" class="clarity_filter">';
                      html +='<span class="checkmark"></span>';
                      html +='</label>';
                      html +='</div>';
                      html +='</li>';
                      });

                      html +='</ul>';
                      html +='</div>';


                      $('#clarity-filter-id').empty('').append(html);

                      




                       // enhashment
                      

                      html='';

                      html +='<div class="enhancement-list-wrap main-category-list-wrap">';
                      html +='<ul class="pl-0">';

                      $.each(response.enhancement, function( index,value ) {
                      html +='<li>';
                      html +='<div class="enhancement-style-wrap">';
                      html +='<label class="container-checkbox">'+value.enhancement_name+'';
                      html +='<input type="checkbox" id="ENHANCEMENTS: '+value.enhancement_name+'" name="enhancement_filter" value="'+value.id+'" class="enhancement_filter">';
                      html +='<span class="checkmark"></span>';
                      html +='</label>';
                      html +='</div>';
                      html +='</li>';
                      });

                      html +='</ul>';
                      html +='</div>';


                      $('#enhancement-filter-id').empty('').append(html);



                    
                              
                     }

                     

                       
                    }).fail(function(xhr, status, textStatus, error) {
                          // error logout
                       if (xhr.status === 401) {
                        window.location.href = 'https://' + $(location).attr('host');
                     }
                  });

                
            });
      
  });


  


    }(jQuery));

  </script>


<script type="text/javascript">

(function ($){
    $(document).ready(function() {
    
        $('.left-right-wrap-mobile').change(function(){
 
          var Category=[];
          var Available=[];
          var color=[];
          var shape=[];
          var clarity=[];
          var enhancement=[];
          
          
          var sortby=$('#select_byy option:selected').val();

          if(sortby){
            document.getElementById("mySidebarmob").style.width = "0";
          }

          $('.Category_filterr').each(function(){
           
              if($(this).is(":checked")){
                
                Category.push($(this).val());
                $(".Category_filterr").trigger("submit");

                document.getElementById("mySidebarmob").style.width = "0";
      
              }
      
          });

          $('.Available_filterr').each(function(){
              if($(this).is(":checked")){
                Available.push($(this).val());

                document.getElementById("mySidebarmob").style.width = "0";
      
      
              }
      
          });

          $('.color_namee').each(function(){
              if($(this).is(":checked")){
                  color.push($(this).val());

                  document.getElementById("mySidebarmob").style.width = "0";
      
      
              }
      
          });

          $('.shape_filterr').each(function(){
              if($(this).is(":checked")){
                shape.push($(this).val());

                document.getElementById("mySidebarmob").style.width = "0";
      
      
              }
      
          });

          $('.clarity_filterr').each(function(){
              if($(this).is(":checked")){
                  clarity.push($(this).val());

                  document.getElementById("mySidebarmob").style.width = "0";
      
      
              }
      
          });

          $('.enhancement_filterr').each(function(){
              if($(this).is(":checked")){
                enhancement.push($(this).val());

                document.getElementById("mySidebarmob").style.width = "0";
      
      
              }
      
          });


          



            var data=$('#weight_byy option:selected').val();

            if(data){
            var Doc=data.split('-');
            var Weight_min=Doc[0];
            var Weight_max=Doc[1];


            document.getElementById("mySidebarmob").style.width = "0";

            }

            var link =window.location.href;
          var qp = link.split("/");

          if(qp[5]=='Sapphire'){
            Category=1;
          }if(qp[5]=='Spinel'){
            Category=2;

          }if(qp[5]=='Chrysoberyl'){
            Category=3;

          }if(qp[5]=='Garnet'){
            Category=5;

          }if(qp[5]=='Other%20Varieties'){
            Category=6;

          }if(qp[5]=='Add-ons'){
            Category=7;

          }


            

                   
          FinalCategory=Category.toString();
          FinalAvailable=Available.toString();
          Finalcolor=color.toString();
          Finalshape=shape.toString();
          Finalclarity=clarity.toString();
          Finalenhancement=enhancement.toString();



          
         

          $.ajax({
                type: "GET",
                url: "{{route('view.category')}}",
                async: false,
                dataType:'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{"Category":FinalCategory,"Available":FinalAvailable,"color":Finalcolor,"shape":Finalshape,"clarity":Finalclarity,"enhancement":Finalenhancement,"Weight_min":Weight_min,"Weight_max":Weight_max,"sortby":sortby,"qp":qp[5]},
                
                success: function(response) {

                  

                   
                  
                     html = "";  
                     html += '<div class="row">';
                            $.each(response.stonedata, function( index,value ) {

                              
                                html += '<div class="col-md-4">';

                                html += '<div class="category-prod-img-wrap">'; 
                                
                                if(value.Available_id===1){

                                html += '<a href="http://localhost:8000/stone_info/'+value.id+'">';

                                html +='<p class="new-text">';
                                
                                html +='Available';

                                html +='</p>';

                                html +='<img src="http://localhost:8000/'+value.product_image+'" width="100%" alt="adamant-gem" srcset="">';

                                html +='<a>';

                                }if(value.Available_id===2){
                                  html += '<a href="http://localhost:8000/stone_info/'+value.id+'">';

                                  html +='<p class="new-text">';

                                  html +='Sold';

                                  html +='</p>';

                                  html +='<img src="http://localhost:8000/'+value.product_image+'" width="100%" alt="adamant-gem" srcset="">';

                                  html +='<a>';

                                }if(value.Available_id===4){
                                  html += '<a href="http://localhost:8000/stone_info/'+value.id+'">';

                                  html +='<p class="new-text">';

                                  html +='Reserved';

                                  html +='</p>';

                                  html +='<img src="http://localhost:8000/'+value.product_image+'" width="100%" alt="adamant-gem" srcset="">';

                                  html +='<a>';

                                }

                                html +='</div>';


                                html += '<div class="category-prod-name-wrap txt-center">';
                                html += '<a href="http://localhost:8000/stone_info/'+value.id+'"><p class="paraf2 mb-0">'+value.product_name+', '+value.product_Weight+' ct.</p></a> ';
                                html += ' </div>';


                                html += '<div class="category-prod-desc-wrap txt-center">';
                                html += '<p class="paraf2 txt-dark-gray">'+value.product_variety+'</p> ';
                                html += ' </div>';
                                  

                                html += '</div>';

                               

                              
                        });
                        html += '</div>';
                        

                      

                     $('#speakerResponse').empty('').append(html);



                     $.each(response.category_data, function( index,value ) {

                     
                     
                      
                       
                     html="";

                  

                     if(index == 0){

                     html +='<div class="top-banner-main-wrap" style="background-image:url('+'/'+value.category_image+')">';

                     html +='<div class="banner-main-txt-wrap catergory-banner-main-wrap">';

                     html +='<div class="main-head-wrap">';

                     html +='<h1 class="txt-white">'+value.category_name+'</h1>';

                     html +='</div>';

                     html +='<div class="banner-descript-wrap catergory-banner-descripion">';

                     html +=' <p class="paraf1 txt-white">'+value.category_description+'</p>';

                     html +='</div>';

                     html +='</div>';

                     html +='</div>';

                     html +='</div>';

                     }if(index  >= 1){

                      html +='<div class="top-banner-main-wrap" style="background-image:url(/images/our-stones/1734253114902697.jpg)">';

                     html +='<div class="banner-main-txt-wrap catergory-banner-main-wrap">';

                     html +='<div class="main-head-wrap">';

                     html +='<h1 class="txt-white"></h1>';

                     html +='</div>';

                     html +='<div class="banner-descript-wrap catergory-banner-descripion">';

                     html +=' <p class="paraf1 txt-white"></p>';

                     html +='</div>';

                     html +='</div>';

                     html +='</div>';

                     html +='</div>';

                      


                     }if(index === 'null'){

                      html +='<div class="top-banner-main-wrap" style="background-image:url(/images/our-stones/1734253114902697.jpg)">';

                     html +='<div class="banner-main-txt-wrap catergory-banner-main-wrap">';

                     html +='<div class="main-head-wrap">';

                     html +='<h1 class="txt-white"></h1>';

                     html +='</div>';

                     html +='<div class="banner-descript-wrap catergory-banner-descripion">';

                     html +=' <p class="paraf1 txt-white"></p>';

                     html +='</div>';

                     html +='</div>';

                     html +='</div>';

                     html +='</div>';

                     }


                     });


                     $('#category-filters').empty('').append(html);


                   

                      
                     

                     html ="";

                     html +='<div class="top-breadcrum-wrap">';

                     html +='<div class="page-name text-uppercase"> <a href="/">Home</a> </div>';

                     html +='<div class="page-name-braker text-uppercase"> > </div>';

                     html +='<div class="page-name text-uppercase"><a href="/gems">Gems</a></div>';

                     html +='<div class="page-name-braker text-uppercase"> > </div>';

                     $.each(response.category_data, function( index,value ) {

                     

                     if(index == 0){

                     html +='<div class="page-name lst-active-name text-uppercase">'+value.category_name+'</div>';
                     

                     }if(index >=1){
                      html +=' , ';

                      html +='<div class="page-name lst-active-name text-uppercase">'+value.category_name+'</div>';
                     

                     }if(index === "null"){

                      html +='<div class="page-name lst-active-name text-uppercase">All</div>';
                     

                     }

                     
                    });

                     html +='</div>';

                    




                     $('#breadcrum-data').empty('').append(html);













                    
                              
                     }

                     

                       
                    }).fail(function(xhr, status, textStatus, error) {
                          // error logout
                       if (xhr.status === 401) {
                        window.location.href = 'https://' + $(location).attr('host');
                     }
                  });

                
            });
      
  });


  


    }(jQuery));

  </script>





  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



  @if(session()->has('message'))
  <script type="text/javascript">
    Swal.fire({
            position: 'center',
            icon: 'success',
            title: "{!! session()->get('message') !!}",
            showConfirmButton: false,
            timer: 2500
  })

  </script>
  @endif



  <script>
    function openNav() {

   console.log('asjjsajsacj');

    document.getElementById("mySidebarmob").style.width = "100vw";
    // document.getElementById("main").style.marginLeft = "250px";

    
}
function openmobNav() {
    document.getElementById("mymobSidebarmob").style.width = "100vw";
    // document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidebarmob").style.width = "0";
    // document.getElementById("main").style.marginLeft = "0";
}
function closemobNav() {
    document.getElementById("mymobSidebarmob").style.width = "0";
    // document.getElementById("main").style.marginLeft = "0";
}
  </script>

 

  <script>
    $(document).ready(function() {
 
  $(window).scroll(function () { 

   

    if ($(window).scrollTop() > 250) {
      $('.mobile-nav-bar').addClass('navbar-fixed-top');
      $('.main-nav').addClass('navbar-fixed-top-main');
      $('nav .nav-not-fixed').css('display','none');
      $('nav .nav-item-fixed').css('display','block');
    }

    if ($(window).scrollTop() < 251) {
      $('.mobile-nav-bar').removeClass('navbar-fixed-top');
      $('.main-nav').removeClass('navbar-fixed-top-main');
      $('nav .nav-not-fixed').css('display','block');
      $('nav .nav-item-fixed').css('display','none');
    }
  });
});

  </script>

<script>

window.addEventListener('load', () => { /* Страница загружена, включая все ресурсы */
  const preloader = document.querySelector('.preloader') /* находим блок Preloader */
  preloader.classList.add('preloader_hidden') /* добавляем ему класс для скрытия */
})

</script>


<script> 
var $buoop = {required:{e:-4,f:-3,o:-3,s:-1,c:-3},insecure:true,api:2022.01 }; 
function $buo_f(){ 
 var e = document.createElement("script"); 
 e.src = "//browser-update.org/update.min.js"; 
 document.body.appendChild(e);
};
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}
</script>


<script type="text/javascript">

$(document).ready(function(){
  $(".limit").each(function(i){
    len=$(this).text().length;
    if(len>505)
    {
      $(this).text($(this).text().substr(0,490)+'...');
    }
  });       
});
</script>







  @yield('scripts')


</body>

</html>