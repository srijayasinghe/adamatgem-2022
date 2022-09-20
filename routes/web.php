<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebhomeController;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\Stonecontroller;
use App\Http\Controllers\Filtercontroller;
use App\Http\Controllers\Journalcontroller;
use App\Http\Controllers\homeController;
use App\Http\Controllers\GenesisController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\featuresController;


Route::get('/clear-cache', function() {
  Artisan::call('cache:clear');
  Artisan::call('route:clear');
  Artisan::call('config:clear');
  Artisan::call('view:clear');
 
 return "Cache is cleared";
});



Route::post('/newsletter', [WebhomeController::class, 'Mail_Account'])->name('latter.store');

Route::get('/', [WebhomeController::class, 'index']);
Route::get('/gems', [WebhomeController::class, 'stone']);
Route::get('/stone_info/{id}', [WebhomeController::class, 'stoneInfo']);


Route::post('/journal_info/{id}', [WebhomeController::class, 'journal_Email'])->name('update.email');
Route::get('/process', [WebhomeController::class, 'process']);
Route::get('/Company', [WebhomeController::class, 'adamantGenesis']);
Route::get('/journal', [WebhomeController::class, 'journal']);
Route::get('/journal_info/{id}', [WebhomeController::class, 'journal_info']);
Route::get('/reviews', [WebhomeController::class, 'reviews']);
Route::get('/faq', [WebhomeController::class, 'faq']);
Route::get('/contact', [WebhomeController::class, 'contact'])->name('contact.new');
Route::post('/contact/email', [WebhomeController::class, 'contact_email'])->name('contact.email');


Route::get('/privacy-policy', [WebhomeController::class, 'privacy_policy']);
Route::get('/terms-conditions', [WebhomeController::class, 'terms_conditions']);

//filter
Route::get('collections/available-gems/{name}', [Filtercontroller::class, 'Category_View'])->name('view.category');

Route::get('gc/', [Filtercontroller::class, 'All_View'])->name('view.category');

Route::get('ga/', [Filtercontroller::class, 'All_View'])->name('view.available');

Route::get('gcc/', [Filtercontroller::class, 'All_View'])->name('view.color');

Route::get('gss/', [Filtercontroller::class, 'All_View'])->name('view.shape');

Route::get('gctt/', [Filtercontroller::class,'All_View'])->name('View.clarity');



Route::get('gpn/', [Filtercontroller::class,'All_View'])->name('View.Prodct');
Route::get('gsn/', [Filtercontroller::class,'All_View'])->name('Sort.Prodct');


Route::get('gww/', [Filtercontroller::class,'All_View'])->name('carat.weight');



Route::get('gee/', [Filtercontroller::class, 'All_View'])->name('view.enhancement');

Route::get('gppp/', [Filtercontroller::class, 'All_View'])->name('view.price');




//Email
Route::post('/stone_info/email', [WebhomeController::class, 'info_Email'])->name('update.email');
 



Route::group(['middleware'=>['auth:sanctum', 'verified']],function(){

  
   
  Route::get('/dashboard',[WebhomeController::class,'Dashboard']);

  Route::get('/2FA', [WebhomeController::class, 'FA'])->name('all.adamant_2FA');
  

  
  Route::get('/user/logout', [WebhomeController::class, 'Logout'])->name('user.logout');


  //home slider
  Route::get('/adamant-slider', [homeController::class, 'Adamant_slider'])->name('all.adamant_slider');
  Route::get('/adamant-slider/add', [homeController::class, 'Adamant_slider_new'])->name('all.adamant_slider_new');
  Route::post('/adamant-slider', [homeController::class, 'Adamant_slider_Add'])->name('add.adamant_slider');
  Route::get('/adamant-slider/edit/{id}', [homeController::class, 'Adamant_slider_Edit'])->name('edit.adamant_slider');
  Route::post('/adamant-slider/update/{id}', [homeController::class, 'Adamant_slider_Update'])->name('update.adamant_slider');
  Route::get('/adamant-slider/delete/{id}', [homeController::class, 'Adamant_slider_Delete'])->name('delete.adamant_slider');

  Route::get('/adamant-slider/toggle/{id}', [homeController::class, 'Adamant_slider_toggle'])->name('toggle.adamant_slider');

  Route::post('slider-sortable',[homeController::class,'Slider_Sortable'])->name('Slider-sortable_new');





 //home body
 Route::get('/adamant-body', [homeController::class, 'Adamant_Body'])->name('all.adamant_body');
 Route::get('/adamant-body/add', [homeController::class, 'Adamant_Body_new'])->name('all.adamant_body_new');
 Route::post('/adamant-body', [homeController::class, 'Adamant_Body_Add'])->name('add.adamant_body');
 Route::get('/adamant-body/edit/{id}', [homeController::class, 'Adamant_Body_Edit'])->name('edit.adamant_body');
 Route::post('/adamant-body/update/{id}', [homeController::class, 'Adamant_Body_Update'])->name('update.adamant_body');
 Route::get('/adamant-body/delete/{id}', [homeController::class, 'Adamant_Body_Delete'])->name('delete.adamant_body');

  //home body section 2
  Route::get('/adamant-map', [homeController::class, 'Adamant_Map'])->name('all.adamant_map');
  Route::get('/adamant-map/add', [homeController::class, 'Adamant_Map_new'])->name('all.adamant_map_new');
  Route::post('/adamant-map', [homeController::class, 'Adamant_Map_Add'])->name('add.adamant_map');
  Route::get('/adamant-map/edit/{id}', [homeController::class, 'Adamant_Map_Edit'])->name('edit.adamant_map');
  Route::post('/adamant-map/update/{id}', [homeController::class, 'Adamant_Map_Update'])->name('update.adamant_map');
  Route::get('/adamant-map/delete/{id}', [homeController::class, 'Adamant_Map_Delete'])->name('delete.adamant_map');

  //home select section 
  Route::get('/adamant-select', [homeController::class, 'Adamant_Select'])->name('all.adamant_select');
  Route::get('/adamant-select/add', [homeController::class, 'Adamant_Select_new'])->name('all.adamant_select_new');
  Route::post('/adamant-select', [homeController::class, 'Adamant_Select_Add'])->name('add.adamant_select');
  Route::get('/adamant-select/edit/{id}', [homeController::class, 'Adamant_Select_Edit'])->name('edit.adamant_select');
  Route::post('/adamant-select/update/{id}', [homeController::class, 'Adamant_Select_Update'])->name('update.adamant_select');
  Route::get('/adamant-select/delete/{id}', [homeController::class, 'Adamant_Select_Delete'])->name('delete.adamant_select');


    //Our stone 
    Route::get('/our-stone-new', [homeController::class, 'Our_Stone'])->name('all.our_stone');
    Route::get('/our-stone-new/add', [homeController::class, 'Our_Stone_new'])->name('all.our_stone_new');
    Route::post('/our-stone-new', [homeController::class, 'Our_Stone_Add'])->name('add.our_stone');
    Route::get('/our-stone-new/edit/{id}', [homeController::class, 'Our_Stone_Edit'])->name('edit.our_stone');
    Route::post('/our-stone-new/update/{id}', [homeController::class, 'Our_Stone_Update'])->name('update.our_stone');
    Route::get('/our-stone-new/delete/{id}', [homeController::class, 'Our_Stone_Delete'])->name('delete.our_stone');

    //Our stone category
    Route::get('/our-category', [homeController::class, 'Our_Category'])->name('all.our_category');
    Route::get('/our-category/add', [homeController::class, 'Our_Category_new'])->name('all.our_category_new');
    Route::post('/our-category', [homeController::class, 'Our_Category_Add'])->name('add.our_category');
    Route::get('/our-category/edit/{id}', [homeController::class, 'Our_Category_Edit'])->name('edit.our_category');
    Route::post('/our-category/update/{id}', [homeController::class, 'Our_Category_Update'])->name('update.our_category');
    Route::get('/our-category/delete/{id}', [homeController::class, 'Our_Category_Delete'])->name('delete.our_category');


    //genesis
    Route::get('/genesis-header', [GenesisController::class, 'Genesis_Header'])->name('all.genesis_header');
    Route::get('/genesis-header/add', [GenesisController::class, 'Genesis_Header_new'])->name('all.genesis_header_new');
    Route::post('/genesis-header', [GenesisController::class, 'Genesis_Header_Add'])->name('add.genesis_header');
    Route::get('/genesis-header/edit/{id}', [GenesisController::class, 'Genesis_Header_Edit'])->name('edit.genesis_header');
    Route::post('/genesis-header/update/{id}', [GenesisController::class, 'Genesis_Header_Update'])->name('update.genesis_header');
    Route::get('/genesis-header/delete/{id}', [GenesisController::class, 'Genesis_Header_Delete'])->name('delete.genesis_header');

      //genesis seconds
      Route::get('/genesis-seconds', [GenesisController::class, 'Genesis_Seconds'])->name('all.genesis_seconds');
      Route::get('/genesis-seconds/add', [GenesisController::class, 'Genesis_Seconds_new'])->name('all.genesis_seconds_new');
      Route::post('/genesis-seconds', [GenesisController::class, 'Genesis_Seconds_Add'])->name('add.genesis_seconds');
      Route::get('/genesis-seconds/edit/{id}', [GenesisController::class, 'Genesis_Seconds_Edit'])->name('edit.genesis_seconds');
      Route::post('/genesis-seconds/update/{id}', [GenesisController::class, 'Genesis_Seconds_Update'])->name('update.genesis_seconds');
      Route::get('/genesis-seconds/delete/{id}', [GenesisController::class, 'Genesis_Seconds_Delete'])->name('delete.genesis_seconds');
  
   //genesis body
   Route::get('/genesis-body', [GenesisController::class, 'Genesis_Body'])->name('all.genesis_body');
   Route::get('/genesis-body/add', [GenesisController::class, 'Genesis_Body_new'])->name('all.genesis_body_new');
   Route::post('/genesis-body', [GenesisController::class, 'Genesis_Body_Add'])->name('add.genesis_body');
   Route::get('/genesis-body/edit/{id}', [GenesisController::class, 'Genesis_Body_Edit'])->name('edit.genesis_body');
   Route::post('/genesis-body/update/{id}', [GenesisController::class, 'Genesis_Body_Update'])->name('update.genesis_body');
   Route::get('/genesis-body/delete/{id}', [GenesisController::class, 'Genesis_Body_Delete'])->name('delete.genesis_body');


   

   //genesis last
   Route::get('/genesis-lasts', [GenesisController::class, 'Genesis_Lasts'])->name('all.genesis_lasts');
   Route::get('/genesis-lasts/add', [GenesisController::class, 'Genesis_Lasts_new'])->name('all.genesis_lasts_new');
   Route::post('/genesis-lasts', [GenesisController::class, 'Genesis_Lasts_Add'])->name('add.genesis_lasts');
   Route::get('/genesis-lasts/edit/{id}', [GenesisController::class, 'Genesis_Lasts_Edit'])->name('edit.genesis_lasts');
   Route::post('/genesis-lasts/update/{id}', [GenesisController::class, 'Genesis_Lasts_Update'])->name('update.genesis_lasts');
   Route::get('/genesis-lasts/delete/{id}', [GenesisController::class, 'Genesis_Lasts_Delete'])->name('delete.genesis_lasts');


   
   //genesis last
   Route::get('/genesis-ends',[GenesisController::class, 'Genesis_Ends'])->name('all.genesis_ends');
   Route::get('/genesis-ends/add', [GenesisController::class, 'Genesis_Ends_new'])->name('all.genesis_ends_new');
   Route::post('/genesis-ends', [GenesisController::class, 'Genesis_Ends_Add'])->name('add.genesis_ends');
   Route::get('/genesis-ends/edit/{id}', [GenesisController::class, 'Genesis_Ends_Edit'])->name('edit.genesis_ends');
   Route::post('/genesis-ends/update/{id}', [GenesisController::class, 'Genesis_Ends_Update'])->name('update.genesis_ends');
   Route::get('/genesis-ends/delete/{id}', [GenesisController::class, 'Genesis_Ends_Delete'])->name('delete.genesis_ends');

    
   //process one
   Route::get('/process-one',[ProcessController::class, 'Process_One'])->name('all.process_one');
   Route::get('/process-one/add', [ProcessController::class, 'Process_One_new'])->name('all.process_one_new');
   Route::post('/process-one', [ProcessController::class, 'Process_One_Add'])->name('add.process_one');
   Route::get('/process-one/edit/{id}', [ProcessController::class, 'Process_One_Edit'])->name('edit.process_one');
   Route::post('/process-one/update/{id}', [ProcessController::class, 'Process_One_Update'])->name('update.process_one');
   Route::get('/process-one/delete/{id}', [ProcessController::class, 'Process_One_Delete'])->name('delete.process_one');

   
   //process two
   Route::get('/process-two',[ProcessController::class, 'Process_Two'])->name('all.process_two');
   Route::get('/process-two/add', [ProcessController::class, 'Process_Two_new'])->name('all.process_two_new');
   Route::post('/process-two', [ProcessController::class, 'Process_Two_Add'])->name('add.process_two');
   Route::get('/process-two/edit/{id}', [ProcessController::class, 'Process_Two_Edit'])->name('edit.process_two');
   Route::post('/process-two/update/{id}', [ProcessController::class, 'Process_Two_Update'])->name('update.process_two');
   Route::get('/process-two/delete/{id}', [ProcessController::class, 'Process_Two_Delete'])->name('delete.process_two');

     //process three
     Route::get('/process-three',[ProcessController::class, 'Process_Three'])->name('all.process_three');
     Route::get('/process-three/add', [ProcessController::class, 'Process_Three_new'])->name('all.process_three_new');
     Route::post('/process-three', [ProcessController::class, 'Process_Three_Add'])->name('add.process_three');
     Route::get('/process-three/edit/{id}', [ProcessController::class, 'Process_Three_Edit'])->name('edit.process_three');
     Route::post('/process-three/update/{id}', [ProcessController::class, 'Process_Three_Update'])->name('update.process_three');
     Route::get('/process-three/delete/{id}', [ProcessController::class, 'Process_Three_Delete'])->name('delete.process_three');

     //process four
     Route::get('/process-four',[ProcessController::class, 'Process_Four'])->name('all.process_four');
     Route::get('/process-four/add', [ProcessController::class, 'Process_Four_new'])->name('all.process_four_new');
     Route::post('/process-four', [ProcessController::class, 'Process_Four_Add'])->name('add.process_four');
     Route::get('/process-four/edit/{id}', [ProcessController::class, 'Process_Four_Edit'])->name('edit.process_four');
     Route::post('/process-four/update/{id}', [ProcessController::class, 'Process_Four_Update'])->name('update.process_four');
     Route::get('/process-four/delete/{id}', [ProcessController::class, 'Process_Four_Delete'])->name('delete.process_four');

     
     //process last
     Route::get('/process-last',[ProcessController::class, 'Process_Five'])->name('all.process_five');
     Route::get('/process-last/add', [ProcessController::class, 'Process_Five_new'])->name('all.process_five_new');
     Route::post('/process-last', [ProcessController::class, 'Process_Five_Add'])->name('add.process_five');
     Route::get('/process-last/edit/{id}', [ProcessController::class, 'Process_Five_Edit'])->name('edit.process_five');
     Route::post('/process-last/update/{id}', [ProcessController::class, 'Process_Five_Update'])->name('update.process_five');
     Route::get('/process-last/delete/{id}', [ProcessController::class, 'Process_Five_Delete'])->name('delete.process_five');

//process studio

Route::get('/process-studio',[ProcessController::class, 'Process_Studio'])->name('all.process_studio');
Route::get('/process-studio/add', [ProcessController::class, 'Process_Studio_new'])->name('all.process_studio_new');
Route::post('/process-studio', [ProcessController::class, 'Process_Studio_Add'])->name('add.process_studio');
Route::get('/process-studio/edit/{id}', [ProcessController::class, 'Process_Studio_Edit'])->name('edit.process_studio');
Route::post('/process-studio/update/{id}', [ProcessController::class, 'Process_Studio_Update'])->name('update.process_studio');
Route::get('/process-studio/delete/{id}', [ProcessController::class, 'Process_Studio_Delete'])->name('delete.process_studio');



//process studiobody

Route::get('/process-studiobody',[ProcessController::class, 'Process_Studiobody'])->name('all.process_studiobody');
Route::get('/process-studiobody/add', [ProcessController::class, 'Process_Studiobody_new'])->name('all.process_studiobody_new');
Route::post('/process-studiobody', [ProcessController::class, 'Process_Studiobody_Add'])->name('add.process_studiobody');
Route::get('/process-studiobody/edit/{id}', [ProcessController::class, 'Process_Studiobody_Edit'])->name('edit.process_studiobody');
Route::post('/process-studiobody/update/{id}', [ProcessController::class, 'Process_Studiobody_Update'])->name('update.process_studiobody');
Route::get('/process-studiobody/delete/{id}', [ProcessController::class, 'Process_Studiobody_Delete'])->name('delete.process_studiobody');


//process studioslider

Route::get('/process-studioslider',[ProcessController::class, 'Process_Studioslider'])->name('all.process_studioslider');
Route::get('/process-studioslider/add', [ProcessController::class, 'Process_Studioslider_new'])->name('all.process_studioslider_new');
Route::post('/process-studioslider', [ProcessController::class, 'Process_Studioslider_Add'])->name('add.process_studioslider');
Route::get('/process-studioslider/edit/{id}', [ProcessController::class, 'Process_Studioslider_Edit'])->name('edit.process_studioslider');
Route::post('/process-studioslider/update/{id}', [ProcessController::class, 'Process_Studioslider_Update'])->name('update.process_studioslider');
Route::get('/process-studioslider/delete/{id}', [ProcessController::class, 'Process_Studioslider_Delete'])->name('delete.process_studioslider');


//process studioslider

Route::get('/process-daylights',[ProcessController::class, 'Process_Daylights'])->name('all.process_daylights');
Route::get('/process-daylights/add', [ProcessController::class, 'Process_Daylights_new'])->name('all.process_daylights_new');
Route::post('/process-daylights', [ProcessController::class, 'Process_Daylights_Add'])->name('add.process_daylights');
Route::get('/process-daylights/edit/{id}', [ProcessController::class, 'Process_Daylights_Edit'])->name('edit.process_daylights');
Route::post('/process-daylights/update/{id}', [ProcessController::class, 'Process_Daylights_Update'])->name('update.process_daylights');
Route::get('/process-daylights/delete/{id}', [ProcessController::class, 'Process_Daylights_Delete'])->name('delete.process_daylights');



//process studioslider

Route::get('/process-goldens',[ProcessController::class, 'Process_Goldens'])->name('all.process_goldens');
Route::get('/process-goldens/add', [ProcessController::class, 'Process_Goldens_new'])->name('all.process_goldens_new');
Route::post('/process-goldens', [ProcessController::class, 'Process_Goldens_Add'])->name('add.process_goldens');
Route::get('/process-goldens/edit/{id}', [ProcessController::class, 'Process_Goldens_Edit'])->name('edit.process_goldens');
Route::post('/process-goldens/update/{id}', [ProcessController::class, 'Process_Goldens_Update'])->name('update.process_goldens');
Route::get('/process-goldens/delete/{id}', [ProcessController::class, 'Process_Goldens_Delete'])->name('delete.process_goldens');


     

  Route::get('/category', [Stonecontroller::class, 'Category'])->name('all.category');
  Route::get('/category/add', [Stonecontroller::class, 'Category_new'])->name('all.category_new');
  Route::post('/category', [Stonecontroller::class, 'Category_Add'])->name('add.category');
  Route::get('/category/edit/{id}', [Stonecontroller::class, 'Category_Edit'])->name('edit.category');
  Route::post('/category/update/{id}', [Stonecontroller::class, 'Category_Update'])->name('update.category');
  Route::get('/category/delete/{id}', [Stonecontroller::class, 'Category_Delete'])->name('delete.category');

  

 


  Route::get('/color', [Stonecontroller::class, 'Color'])->name('all.color');
  Route::get('/color/add', [Stonecontroller::class, 'Color_new'])->name('all.color_new');
  Route::post('/color', [Stonecontroller::class, 'Color_Add'])->name('add.color');
  Route::get('/color/edit/{id}', [Stonecontroller::class, 'Color_Edit'])->name('edit.color');
  Route::post('/color/update/{id}', [Stonecontroller::class, 'Color_Update'])->name('update.color');
  Route::get('/color/delete/{id}', [Stonecontroller::class, 'Color_Delete'])->name('delete.color');

  Route::get('/available', [Stonecontroller::class, 'Available'])->name('all.available');
  Route::get('/available/add', [Stonecontroller::class, 'Available_new'])->name('all.available_new');
  Route::post('/available', [Stonecontroller::class, 'Available_Add'])->name('add.available');
  Route::get('/available/edit/{id}', [Stonecontroller::class, 'Available_Edit'])->name('edit.available');
  Route::post('/available/update/{id}', [Stonecontroller::class, 'Available_Update'])->name('update.available');
  Route::get('/available/delete/{id}', [Stonecontroller::class, 'Available_Delete'])->name('delete.available');
 

 



  
 Route::get('/clarity', [Stonecontroller::class, 'Clarity'])->name('all.clarity');
 Route::get('/clarity/add', [Stonecontroller::class, 'Clarity_new'])->name('all.clarity_new');
 Route::post('/clarity', [Stonecontroller::class, 'Clarity_Add'])->name('add.clarity');
 Route::get('/clarity/edit/{id}', [Stonecontroller::class, 'Clarity_Edit'])->name('edit.clarity');
 Route::post('/clarity/update/{id}', [Stonecontroller::class, 'Clarity_Update'])->name('update.clarity');
 Route::get('/clarity/delete/{id}', [Stonecontroller::class, 'Clarity_Delete'])->name('delete.clarity');


 Route::get('/enhancements', [Stonecontroller::class, 'Enhancements'])->name('all.enhancements');
 Route::get('/enhancements/add', [Stonecontroller::class, 'Enhancements_new'])->name('all.enhancements_new');
 Route::post('/enhancements', [Stonecontroller::class, 'Enhancements_Add'])->name('add.enhancements');
 Route::get('/enhancements/edit/{id}', [Stonecontroller::class, 'Enhancements_Edit'])->name('edit.enhancements');
  Route::post('/enhancements/update/{id}', [Stonecontroller::class, 'Enhancements_Update'])->name('update.enhancements');
  Route::get('/enhancements/delete/{id}', [Stonecontroller::class, 'Enhancements_Delete'])->name('delete.enhancements');



 Route::get('/shape', [Stonecontroller::class, 'Shape'])->name('all.shape');
 Route::get('/shape/add', [Stonecontroller::class, 'Shape_new'])->name('all.shape_new');
 Route::post('/shape', [Stonecontroller::class, 'Shape_Add'])->name('add.shape');
 Route::get('/shape/edit/{id}', [Stonecontroller::class, 'Shape_Edit'])->name('edit.shape');
 Route::post('/shape/update/{id}', [Stonecontroller::class, 'Shape_Update'])->name('update.shape');
 Route::get('/shape/delete/{id}', [Stonecontroller::class, 'Shape_Delete'])->name('delete.shape');


 Route::get('/gallery', [Stonecontroller::class, 'Gallery'])->name('all.gallery');
 Route::get('/gallery/add', [Stonecontroller::class, 'Gallery_new'])->name('all.gallery_new');
 Route::post('/gallery', [Stonecontroller::class, 'Gallery_Add'])->name('add.gallery');
 Route::get('/gallery/edit/{id}', [Stonecontroller::class, 'Gallery_Edit'])->name('edit.gallery');
 Route::post('/gallery/update/{id}', [Stonecontroller::class,'Gallery_Update'])->name('update.gallery');
 Route::get('/gallery/delete/{id}', [Stonecontroller::class, 'Gallery_Delete'])->name('delete.gallery');







 Route::get('/gallery-image', [Stonecontroller::class, 'Gallery_Image'])->name('all.gallery_image');
 Route::get('/gallery-image/add', [Stonecontroller::class, 'Gallery_Image_new'])->name('all.gallery_image_new');
 Route::post('/gallery-image', [Stonecontroller::class, 'Gallery_Image_Add'])->name('add.gallery_image');
 Route::get('/gallery-image/edit/{id}', [Stonecontroller::class, 'Gallery_Image_Edit'])->name('edit.gallery_image');
 Route::post('/gallery-image/update/{id}', [Stonecontroller::class,'Gallery_Image_Update'])->name('update.gallery_image');
//  Route::get('/gallery-image/delete/{id}', [Stonecontroller::class, 'Gallery_Image_Delete'])->name('delete.gallery_image');



 Route::post('/gallery-image/multipleusersdelete',[Stonecontroller::class, 'Gallery_multiple_Delete'])->name('delete.gallery_image');


 Route::get('/gallery-image/checkbox', [Stonecontroller::class, 'Gallery_multiple_Delete'])->name('delete.gallery_multiple');
 
 Route::post('post-sortable',[Stonecontroller::class,'Post_Sortable'])->name('post-sortable_new');

 Route::post('faq-sortable',[Stonecontroller::class,'FAQ_Sortable'])->name('faq-sortable_new');


 Route::post('category-image',[Stonecontroller::class,'Category_image_Sortable'])->name('category-sortable_new');


 Route::get('/stone', [Stonecontroller::class, 'Stone'])->name('all.stone');
 Route::get('/stone/add', [Stonecontroller::class, 'Stone_new'])->name('all.stone_new');
 Route::post('/stone', [Stonecontroller::class, 'Stone_Add'])->name('add.stone');
 Route::get('/stone/edit/{id}', [Stonecontroller::class, 'Stone_Edit'])->name('edit.stone');
 Route::post('/stone/update/{id}', [Stonecontroller::class,'Stone_Update'])->name('update.stone');
 Route::get('/stone/delete/{id}', [Stonecontroller::class, 'Stone_Delete'])->name('delete.stone');


 Route::post('/search', [Stonecontroller::class,'Search_View'])->name('View.Search');


  
//Journal


 Route::get('/journal-fq', [Journalcontroller::class, 'Journal'])->name('all.journal');
 Route::get('/journal-fq/add', [Journalcontroller::class, 'Journal_new'])->name('all.journal_new');
 Route::post('/journal-fq', [Journalcontroller::class, 'Journal_Add'])->name('add.journal');

 Route::post('/journal-fq/image',[Journalcontroller::class, 'uploadImage'])->name('journal.image');
 
 Route::get('/journal-fq/edit/{id}', [Journalcontroller::class, 'Journal_Edit'])->name('edit.journal');
 Route::post('/journal-fq/update/{id}', [Journalcontroller::class,'Journal_Update'])->name('update.journal');
 Route::get('/journal-fq/delete/{id}', [Journalcontroller::class, 'Journal_Delete'])->name('delete.journal');



//reviews
 Route::get('/reviews-fq', [Stonecontroller::class, 'Reviews'])->name('all.reviews');
 Route::get('/reviews-fq/add', [Stonecontroller::class, 'Reviews_new'])->name('all.reviews_new');
 Route::post('/reviews-fq', [Stonecontroller::class, 'Reviews_Add'])->name('add.reviews');
 Route::get('/reviews-fq/edit/{id}', [Stonecontroller::class, 'Reviews_Edit'])->name('edit.reviews');
 Route::post('/reviews-fq/update/{id}', [Stonecontroller::class,'Reviews_Update'])->name('update.reviews');
 Route::get('/reviews-fq/delete/{id}', [Stonecontroller::class, 'Reviews_Delete'])->name('delete.reviews');

 //reviews
 Route::get('/reviews-header', [Stonecontroller::class, 'Reviews_Header'])->name('all.reviews_header');
 Route::get('/reviews-header/add', [Stonecontroller::class, 'Reviews_Header_new'])->name('all.reviews_header_new');
 Route::post('/reviews-header', [Stonecontroller::class, 'Reviews_Header_Add'])->name('add.reviews_header');
 Route::get('/reviews-header/edit/{id}', [Stonecontroller::class, 'Reviews_Header_Edit'])->name('edit.reviews_header');
 Route::post('/reviews-header/update/{id}', [Stonecontroller::class,'Reviews_Header_Update'])->name('update.reviews_header');
 Route::get('/reviews-header/delete/{id}', [Stonecontroller::class, 'Reviews_Header_Delete'])->name('delete.reviews_header');

//Faq-category
Route::get('/Faq-category', [Stonecontroller::class, 'Faq_category'])->name('all.Faq_category');
Route::get('/Faq-category/add', [Stonecontroller::class, 'Faq_category_new'])->name('all.Faq_category_new');
Route::post('/Faq-category', [Stonecontroller::class, 'Faq_category_Add'])->name('add.Faq_category');
Route::get('/Faq-category/edit/{id}', [Stonecontroller::class, 'Faq_category_Edit'])->name('edit.Faq_category');
Route::post('/Faq-category/update/{id}', [Stonecontroller::class,'Faq_category_Update'])->name('update.Faq_category');
Route::get('/Faq-category/delete/{id}', [Stonecontroller::class, 'Faq_category_Delete'])->name('delete.Faq_category');

 //Faq
 Route::get('/faq-fq', [Stonecontroller::class, 'Faq'])->name('all.faq');
 Route::get('/faq-fq/add', [Stonecontroller::class, 'Faq_new'])->name('all.faq_new');
 Route::post('/faq-fq', [Stonecontroller::class, 'Faq_Add'])->name('add.faq');
 Route::get('/faq-fq/edit/{id}', [Stonecontroller::class, 'Faq_Edit'])->name('edit.faq');
 Route::post('/faq-fq/update/{id}', [Stonecontroller::class,'Faq_Update'])->name('update.faq');
 Route::get('/faq-fq/delete/{id}', [Stonecontroller::class, 'Faq_Delete'])->name('delete.faq');

  //contact
  Route::get('/contact-details', [WebhomeController::class, 'Contact_Details'])->name('all.contact_details');
  Route::get('/contact-details/add', [WebhomeController::class, 'Contact_Details_new'])->name('all.contact_details_new');
  Route::post('/contact-details', [WebhomeController::class, 'Contact_Details_Add'])->name('add.contact_details');
  Route::get('/contact-details/edit/{id}', [WebhomeController::class, 'Contact_Details_Edit'])->name('edit.contact_details');
  Route::post('/contact-details/update/{id}', [WebhomeController::class,'Contact_Details_Update'])->name('update.contact_details');
  Route::get('/contact-details/delete/{id}', [WebhomeController::class, 'Contact_Details_Delete'])->name('delete.contact_details');

  //contact
  Route::get('/footer-description', [homeController::class, 'Footer_Description'])->name('all.footer_description');
  Route::get('/footer-description/add', [homeController::class, 'Footer_Description_new'])->name('all.footer_description_new');
  Route::post('/footer-description', [homeController::class, 'Footer_Description_Add'])->name('add.footer_description');
  Route::get('/footer-description/edit/{id}', [homeController::class, 'Footer_Description_Edit'])->name('edit.footer_description');
  Route::post('/footer-description/update/{id}', [homeController::class,'Footer_Description_Update'])->name('update.footer_description');
  Route::get('/footer-description/delete/{id}', [homeController::class, 'Footer_Description_Delete'])->name('delete.footer_description');

 //Variety
 Route::get('/Variety', [Stonecontroller::class, 'Variety'])->name('all.Variety');
 Route::get('/Variety/add', [Stonecontroller::class, 'Variety_new'])->name('all.Variety_new');
 Route::post('/Variety', [Stonecontroller::class, 'Variety_Add'])->name('add.Variety');
 Route::get('/Variety/edit/{id}', [Stonecontroller::class, 'Variety_Edit'])->name('edit.Variety');
 Route::post('/Variety/update/{id}', [Stonecontroller::class,'Variety_Update'])->name('update.Variety');
 Route::get('/Variety/delete/{id}', [Stonecontroller::class, 'Variety_Delete'])->name('delete.Variety');



 


//user activity
Route::get('/activitylog', [Stonecontroller::class, 'Activitylog'])->name('user.activitylog');
Route::get('/activitylog/logout', [Stonecontroller::class, 'Activitylog_Logout'])->name('user.activitylogout');

 
  


});


