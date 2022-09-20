<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Home_slider;
use App\Models\Home_Body;
use App\Models\Home_Map;
use App\Models\Home_Select_Us;
use App\Models\Our_Stone;
use App\Models\Our_Stone_Category;
use Illuminate\Support\Facades\DB;
use App\Models\Footers;

class homeController extends Controller



{
    public function Adamant_slider(){

          $home_sliders=Home_slider::orderBy('order','ASC')->get();
  
          return view('backend/home-slider',compact('home_sliders'));

    }

    public function Adamant_slider_new(){

        return view('backend/home-slider-table');
        
    }
    public function Adamant_slider_toggle($id){
        
        $home_sliders=Home_slider::findOrFail($id);

      if($home_sliders->disabled){

        $home_sliders->disabled = false;
        $home_sliders->save();
        $notification=array(
            'message'=>'Home slider disabel Successfully',
            'alert-type'=>'success'
        );
        }else {

            $home_sliders->disabled = true;
            $home_sliders->save();
            $notification=array(
                'message'=>'Home slider enabel Successfully',
                'alert-type'=>'success'
        );
            
        }
        
    
        return Redirect()->route('all.adamant_slider')->with($notification);
            
        

    }



    public function Slider_Sortable(Request $request)
      {


    $sliders=Home_slider::orderBy('id','desc')->get();

    foreach ($sliders as $slider) {
        foreach ($request->order as $order) {
            if ($order['id'] == $slider->id) {

                $slider->update(['order' => $order['position']]);

            }
        }
    }
    
    return response('Update Successfully.', 200);
    }



    public function Adamant_slider_Add(Request $request){


        
    $home_slider=new Home_slider();

    $home_banner_image=$request->file('home_banner_image'); 
        $home_body_image=$request->file('home_body_image');

        if($home_banner_image AND $home_body_image){

      

        $name_gen1=hexdec(uniqid());
    
        $img_ext1=strtolower($home_banner_image->getClientOriginalExtension());
    
        $img_name1=$name_gen1. '.' .$img_ext1;
    
        $up_location1='images/home_slider/';
    
        $last_img1=$up_location1.$img_name1;
    
        $home_banner_image->move($up_location1,$img_name1);
    
    
        $home_slider->home_banner_image=$last_img1;

        

        $name_gen2=hexdec(uniqid());
    
        $img_ext2=strtolower($home_body_image->getClientOriginalExtension());
    
        $img_name2=$name_gen2. '.' .$img_ext2;
    
        $up_location2='images/home_slider/';
    
        $last_img2=$up_location2.$img_name2;
    
        $home_body_image->move($up_location2,$img_name2);
    
    
        $home_slider->home_body_image=$last_img2;


        $home_slider->home_banner_header=$request->home_banner_header;
        

        $home_slider->home_banner_description=$request->home_banner_description;

        dd($home_slider);

        $home_slider->save();

        $notification=array(
                'message'=>'Home slider add Successfully',
               'alert-type'=>'success'
        );

            return Redirect()->route('all.adamant_slider')->with($notification);


    }elseif ($home_banner_image) {

        $name_gen1=hexdec(uniqid());
    
        $img_ext1=strtolower($home_banner_image->getClientOriginalExtension());
    
        $img_name1=$name_gen1. '.' .$img_ext1;
    
        $up_location1='images/home_slider/';
    
        $last_img1=$up_location1.$img_name1;
    
        $home_banner_image->move($up_location1,$img_name1);
    
    
        $home_slider->home_banner_image=$last_img1;

    
        $home_slider->home_banner_header=$request->home_banner_header;
        

        $home_slider->home_banner_description=$request->home_banner_description;

        $home_slider->save();

        $notification=array(
                'message'=>'Home slider add Successfully',
               'alert-type'=>'success'
        );

            return Redirect()->route('all.adamant_slider')->with($notification);

        
       }elseif ($home_body_image) {

     

        $name_gen2=hexdec(uniqid());
    
        $img_ext2=strtolower($home_body_image->getClientOriginalExtension());
    
        $img_name2=$name_gen2. '.' .$img_ext2;
    
        $up_location2='images/home_slider/';
    
        $last_img2=$up_location2.$img_name2;
    
        $home_body_image->move($up_location2,$img_name2);
    
    
        $home_slider->home_body_image=$last_img2;


        $home_slider->home_banner_header=$request->home_banner_header;

        $home_slider->home_banner_description=$request->home_banner_description;

        

        $home_slider->save();

        $notification=array(
                'message'=>'Home slider add Successfully',
               'alert-type'=>'success'
        );

            return Redirect()->route('all.adamant_slider')->with($notification);

       
          

    }else{

        $home_slider->home_banner_header=$request->home_banner_header;

        $home_slider->home_banner_description=$request->home_banner_description;
        

        $home_slider->save();

        $notification=array(
                'message'=>'Home slider add Successfully',
               'alert-type'=>'success'
        );

            return Redirect()->route('all.adamant_slider')->with($notification);

    } 




        }


    public function Adamant_slider_Edit($id){

        $home_sliders1=Home_slider::orderBy('id','desc')->get();

       
        $home_sliders=Home_slider::findOrFail($id);

        return view('backend/home-slider-edit',compact(['home_sliders','home_sliders1']));

    }

    public function Adamant_slider_Update(Request $request,$id){

        $home_slider=Home_slider::findOrFail($id);


        $home_banner_image=$request->file('home_banner_image'); 
        $home_body_image=$request->file('home_body_image');

        if($home_banner_image AND $home_body_image){

      

        $name_gen1=hexdec(uniqid());
    
        $img_ext1=strtolower($home_banner_image->getClientOriginalExtension());
    
        $img_name1=$name_gen1. '.' .$img_ext1;
    
        $up_location1='images/home_slider/';
    
        $last_img1=$up_location1.$img_name1;
    
        $home_banner_image->move($up_location1,$img_name1);
    
    
        $home_slider->home_banner_image=$last_img1;

        

        $name_gen2=hexdec(uniqid());
    
        $img_ext2=strtolower($home_body_image->getClientOriginalExtension());
    
        $img_name2=$name_gen2. '.' .$img_ext2;
    
        $up_location2='images/home_slider/';
    
        $last_img2=$up_location2.$img_name2;
    
        $home_body_image->move($up_location2,$img_name2);
    
    
        $home_slider->home_body_image=$last_img2;


        $home_slider->home_banner_header=$request->home_banner_header;
        

        $home_slider->home_banner_description=$request->home_banner_description;

        $home_slider->save();

        $notification=array(
                'message'=>'Home slider Update Successfully',
               'alert-type'=>'success'
        );

            return Redirect()->route('all.adamant_slider')->with($notification);


    }elseif ($home_banner_image) {

        $name_gen1=hexdec(uniqid());
    
        $img_ext1=strtolower($home_banner_image->getClientOriginalExtension());
    
        $img_name1=$name_gen1. '.' .$img_ext1;
    
        $up_location1='images/home_slider/';
    
        $last_img1=$up_location1.$img_name1;
    
        $home_banner_image->move($up_location1,$img_name1);
    
    
        $home_slider->home_banner_image=$last_img1;

    
        $home_slider->home_banner_header=$request->home_banner_header;
        

        $home_slider->home_banner_description=$request->home_banner_description;

        $home_slider->save();

        $notification=array(
                'message'=>'Home slider Update Successfully',
               'alert-type'=>'success'
        );

            return Redirect()->route('all.adamant_slider')->with($notification);

        
       }elseif ($home_body_image) {

     

        $name_gen2=hexdec(uniqid());
    
        $img_ext2=strtolower($home_body_image->getClientOriginalExtension());
    
        $img_name2=$name_gen2. '.' .$img_ext2;
    
        $up_location2='images/home_slider/';
    
        $last_img2=$up_location2.$img_name2;
    
        $home_body_image->move($up_location2,$img_name2);
    
    
        $home_slider->home_body_image=$last_img2;


        $home_slider->home_banner_header=$request->home_banner_header;

        $home_slider->home_banner_description=$request->home_banner_description;

        

        $home_slider->save();

        $notification=array(
                'message'=>'Home slider Update Successfully',
               'alert-type'=>'success'
        );

            return Redirect()->route('all.adamant_slider')->with($notification);

       
          

    }else{

        $home_slider->home_banner_header=$request->home_banner_header;

        $home_slider->home_banner_description=$request->home_banner_description;
        

        $home_slider->save();

        $notification=array(
                'message'=>'Home slider Update Successfully',
               'alert-type'=>'success'
        );

            return Redirect()->route('all.adamant_slider')->with($notification);

    } 

        
    }

    public function Adamant_slider_Delete($id){

        $home_slider=Home_slider::find($id);

        if ($home_slider != null) {
    
            $home_slider->delete();
    
        $notification=array(
            'message'=>'Home slider Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.adamant_slider')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.adamant_slider')->with($notification);
    
        }
        
    }



    public function Adamant_Body(){

        $home_bodys=Home_Body::orderBy('id','desc')->limit(1)->get();

        return view('backend/home-body',compact('home_bodys'));

    }

    public function Adamant_Body_new(){

        return view('backend/home-body-table');
        
    }

    public function Adamant_Body_Add(Request $request){

        $this->validate($request, [
             "home_body_banner" =>'required',
             "home_body_banner_text1" =>'required',
             

           
            "home_body_text" =>'required',
            "home_body_content" =>'required',
            "home_body_logo" =>'required',
     

   ]);

   $home_bodys=Home_Body::orderBy('id','desc')->get();

   if($home_bodys->count() < 1){

     $home_bodys=new Home_Body();

     $home_body_banner=$request->file('home_body_banner'); 

     $name_gen1=hexdec(uniqid());
 
     $img_ext1=strtolower($home_body_banner->getClientOriginalExtension());
 
     $img_name1=$name_gen1. '.' .$img_ext1;
 
     $up_location1='images/home_body/';
 
     $last_img1=$up_location1.$img_name1;
 
     $home_body_banner->move($up_location1,$img_name1);
 
 
     $home_bodys->home_body_banner=$last_img1;



     $home_bodys->home_body_banner_text1=$request->home_body_banner_text1;



     $home_bodys->home_body_text=$request->home_body_text;

     $home_bodys->home_body_content=$request->home_body_content;


     $home_body_logo=$request->file('home_body_logo');

     $name_gen2=hexdec(uniqid());
 
     $img_ext2=strtolower($home_body_logo->getClientOriginalExtension());
 
     $img_name2=$name_gen2. '.' .$img_ext2;
 
     $up_location2='images/home_body/';
 
     $last_img2=$up_location2.$img_name2;
 
     $home_body_logo->move($up_location2,$img_name2);
 
 
     $home_bodys->home_body_logo=$last_img2;



     $home_bodys->save();

     $notification=array(
         'message'=>'Home body Inserted Successfully',
         'alert-type'=>'success'
     );
 
     return Redirect()->route('all.adamant_body')->with($notification);

    }else{
        $notification=array(
            'message'=>'only one records',
            'alert-type'=>'error'
        );
    
        return Redirect()->route('all.adamant_body')->with($notification);

    }


        
        
    }

    public function Adamant_Body_Edit($id){

        $home_body=Home_Body::find($id);

        return view('backend/home-body-edit',compact('home_body'));
        
    }
    public function Adamant_Body_Update(Request $request,$id){



     $home_bodys=Home_Body::find($id);

     $home_body_banner=$request->file('home_body_banner'); 

     $home_body_logo=$request->file('home_body_logo');

     if($home_body_banner AND  $home_body_logo ){
     

     $name_gen1=hexdec(uniqid());
 
     $img_ext1=strtolower($home_body_banner->getClientOriginalExtension());
 
     $img_name1=$name_gen1. '.' .$img_ext1;
 
     $up_location1='images/home_body/';
 
     $last_img1=$up_location1.$img_name1;
 
     $home_body_banner->move($up_location1,$img_name1);
 
 
     $home_bodys->home_body_banner=$last_img1;



     $home_bodys->home_body_banner_text1=$request->home_body_banner_text1;


     $home_bodys->home_body_text=$request->home_body_text;

     $home_bodys->home_body_content=$request->home_body_content;


    

     $name_gen2=hexdec(uniqid());
 
     $img_ext2=strtolower($home_body_logo->getClientOriginalExtension());
 
     $img_name2=$name_gen2. '.' .$img_ext2;
 
     $up_location2='images/home_body/';
 
     $last_img2=$up_location2.$img_name2;
 
     $home_body_logo->move($up_location2,$img_name2);
 
 
     $home_bodys->home_body_logo=$last_img2;



     $home_bodys->save();

     $notification=array(
         'message'=>'Home body Update Successfully',
         'alert-type'=>'success'
     );
 
     return Redirect()->route('all.adamant_body')->with($notification);

    }elseif ($home_body_banner) {
        $name_gen1=hexdec(uniqid());
 
        $img_ext1=strtolower($home_body_banner->getClientOriginalExtension());
    
        $img_name1=$name_gen1. '.' .$img_ext1;
    
        $up_location1='images/home_body/';
    
        $last_img1=$up_location1.$img_name1;
    
        $home_body_banner->move($up_location1,$img_name1);
    
    
        $home_bodys->home_body_banner=$last_img1;
   
   
   
        $home_bodys->home_body_banner_text1=$request->home_body_banner_text1;
   
        
   
        $home_bodys->home_body_text=$request->home_body_text;
   
        $home_bodys->home_body_content=$request->home_body_content;
   

   
   
   
        $home_bodys->save();
   
        $notification=array(
            'message'=>'Home body Update Successfully',
            'alert-type'=>'success'
        );
    
        return Redirect()->route('all.adamant_body')->with($notification);
   
        
    }elseif ($home_body_logo) {

   
        $home_bodys->home_body_banner_text1=$request->home_body_banner_text1;
   
   
        $home_bodys->home_body_text=$request->home_body_text;
   
        $home_bodys->home_body_content=$request->home_body_content;
   
   
       
   
        $name_gen2=hexdec(uniqid());
    
        $img_ext2=strtolower($home_body_logo->getClientOriginalExtension());
    
        $img_name2=$name_gen2. '.' .$img_ext2;
    
        $up_location2='images/home_body/';
    
        $last_img2=$up_location2.$img_name2;
    
        $home_body_logo->move($up_location2,$img_name2);
    
    
        $home_bodys->home_body_logo=$last_img2;
   
   
   
        $home_bodys->save();
   
        $notification=array(
            'message'=>'Home body Update Successfully',
            'alert-type'=>'success'
        );
    
        return Redirect()->route('all.adamant_body')->with($notification);
   
        
    


    }else{
        
     $home_bodys->home_body_banner_text1=$request->home_body_banner_text1;


     $home_bodys->home_body_text=$request->home_body_text;

     $home_bodys->home_body_content=$request->home_body_content;

     
     $home_bodys->save();

     $notification=array(
         'message'=>'Home body Update Successfully',
         'alert-type'=>'success'
     );

     return Redirect()->route('all.adamant_body')->with($notification);

    }


      
        
    }
    public function Adamant_Body_Delete($id){

        $home_bodys=Home_Body::find($id);

        if ($home_bodys != null) {
    
            $home_bodys->delete();
    
        $notification=array(
            'message'=>'Home Body Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.adamant_body')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.adamant_body')->with($notification);
    
        }
        
        
        
    }

    public function Adamant_Map(){

       $home_maps=Home_Map::orderBy('id','desc')->limit(1)->get();

        return view('backend/home-map',compact('home_maps'));

    }

    public function Adamant_Map_new(){

        return view('backend/home-map-table');
        
    }

    public function Adamant_Map_Add(Request $request){
        $this->validate($request, [
            "home_map_text" =>'required',
             "home_map_body" =>'required',

        
     

      ]);
      $home_maps=Home_Map::orderBy('id','desc')->get();

      if($home_maps->count() < 1){
      
      $home_maps= new Home_Map();

      
      $home_maps->home_map_text=$request->home_map_text;

      $home_maps->home_map_body=$request->home_map_body;

      $home_maps->save();

      $notification=array(
              'message'=>'Home Map Insert Successfully',
             'alert-type'=>'success'
      );

          return Redirect()->route('all.adamant_map')->with($notification);
    }else{

        $notification=array(
            'message'=>'only one records',
            'alert-type'=>'error'
        );

        return Redirect()->route('all.adamant_map')->with($notification);

    }
        
    }

    public function Adamant_Map_Edit($id){

        $home_maps=Home_Map::find($id);
        return view('backend/home-map-edit',compact('home_maps'));

        
    }

    public function Adamant_Map_Update(Request $request,$id){

        $home_maps=Home_Map::find($id);

      
      $home_maps->home_map_text=$request->home_map_text;

      $home_maps->home_map_body=$request->home_map_body;

      $home_maps->save();

      $notification=array(
              'message'=>'Home Map Update Successfully',
             'alert-type'=>'success'
      );

          return Redirect()->route('all.adamant_map')->with($notification);
        
    }
    public function Adamant_Map_Delete($id){

        
        $home_maps=Home_Map::find($id);

        if ($home_maps != null) {
    
            $home_maps->delete();
    
        $notification=array(
            'message'=>'Home Map Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.adamant_map')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.adamant_map')->with($notification);
    
        }
        
    }

    public function Adamant_Select(){

        $home_selects=Home_Select_Us::orderBy('id','desc')->limit(3)->get();


        return view('backend/home-select',compact('home_selects'));

    }
    public function Adamant_Select_new(){
        return view('backend/home-select-table');
        
    }
    public function Adamant_Select_Add(Request $request){

        $this->validate($request, [

            "home_selectus_logo" =>'required',
            "home_selectus_header" =>'required',
            "home_selectus_body" =>'required',


      ]);

      $home_selects=Home_Select_Us::orderBy('id','desc')->get();

      if($home_selects->count() < 4){

      
      $home_selects= new Home_Select_Us();
      


      $home_selectus_logo=$request->file('home_selectus_logo'); 

      $name_gen1=hexdec(uniqid());
  
      $img_ext1=strtolower($home_selectus_logo->getClientOriginalExtension());
  
      $img_name1=$name_gen1. '.' .$img_ext1;
  
      $up_location1='images/home-select/';
  
      $last_img1=$up_location1.$img_name1;
  
      $home_selectus_logo->move($up_location1,$img_name1);
  
  
      $home_selects->home_selectus_logo=$last_img1;

      $home_selects->home_selectus_header=$request->home_selectus_header;

      $home_selects->home_selectus_body=$request->home_selectus_body;


      $home_selects->save();

      $notification=array(
              'message'=>'Home Select Insert Successfully',
              'alert-type'=>'success'
      );

        return Redirect()->route('all.adamant_select')->with($notification);

      }else{
        $notification=array(
            'message'=>'only one records',
            'alert-type'=>'error'
    );

      return Redirect()->route('all.adamant_select')->with($notification);

      }    
    
    }

    public function Adamant_Select_Edit($id){

        $home_selects=Home_Select_Us::findOrFail($id);

        return view('backend/home-select-edit',compact('home_selects'));
        
    }
    public function Adamant_Select_Update(Request $request,$id){


      $home_selects=Home_Select_Us::findOrFail($id);

        
      $home_selectus_logo=$request->file('home_selectus_logo'); 

      if($home_selectus_logo){

      $name_gen1=hexdec(uniqid());
  
      $img_ext1=strtolower($home_selectus_logo->getClientOriginalExtension());
  
      $img_name1=$name_gen1. '.' .$img_ext1;
  
      $up_location1='images/home-select/';
  
      $last_img1=$up_location1.$img_name1;
  
      $home_selectus_logo->move($up_location1,$img_name1);
  
  
      $home_selects->home_selectus_logo=$last_img1;

      $home_selects->home_selectus_header=$request->home_selectus_header;

      $home_selects->home_selectus_body=$request->home_selectus_body;


      $home_selects->save();

      $notification=array(
              'message'=>'Home Select Update Successfully',
             'alert-type'=>'success'
      );

          return Redirect()->route('all.adamant_select')->with($notification);

    }else {

   

      $home_selects->home_selectus_header=$request->home_selectus_header;

      $home_selects->home_selectus_body=$request->home_selectus_body;


      $home_selects->save();

      $notification=array(
              'message'=>'Home Select Update Successfully',
             'alert-type'=>'success'
      );

          return Redirect()->route('all.adamant_select')->with($notification);
        
    }
        
    }
    public function Adamant_Select_Delete($id){

        $home_selects=Home_Select_Us::findOrFail($id);

        if ($home_selects != null) {
    
            $home_selects->delete();
    
        $notification=array(
            'message'=>'Home Select Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.adamant_select')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.adamant_select')->with($notification);
    
        }
        
    }

    public function Our_Stone(){

        $our_stones=DB::table('our_stone')->select('id','our_stone_banner','our_stone_header','our_stone_body','created_at','updated_at')->orderBy('id','desc')->limit(1)->get();

        return view('backend/our-stone',compact('our_stones'));

    }
    public function Our_Stone_new(){
        return view('backend/our-stone-table');
        
    }
    public function Our_Stone_Add(Request $request){


        $this->validate($request, [

            "our_stone_banner" =>'required',
             "our_stone_header" =>'required',
             "our_stone_body" =>'required',
             


      ]);

      $our_stones=DB::table('our_stone')->select('id','our_stone_banner','our_stone_header','our_stone_body','created_at','updated_at')->orderBy('id','desc')->get();

      if($our_stones->count() < 1){

      $our_stones= new Our_Stone();
      


      $our_stone_banner=$request->file('our_stone_banner'); 

      $name_gen1=hexdec(uniqid());
  
      $img_ext1=strtolower($our_stone_banner->getClientOriginalExtension());
  
      $img_name1=$name_gen1. '.' .$img_ext1;
  
      $up_location1='images/our-stones/';
  
      $last_img1=$up_location1.$img_name1;
  
      $our_stone_banner->move($up_location1,$img_name1);
  
  
      $our_stones->our_stone_banner=$last_img1;

      $our_stones->our_stone_header=$request->our_stone_header;

      $our_stones->our_stone_body=$request->our_stone_body;

 


      $our_stones->save();

      $notification=array(
              'message'=>'Home Our Stone Insert Successfully',
             'alert-type'=>'success'
      );

          return Redirect()->route('all.our_stone')->with($notification);


      }else{
        $notification=array(
            'message'=>'only one records',
            'alert-type'=>'error'
    );

        return Redirect()->route('all.our_stone')->with($notification);

      }
        
    }
    public function Our_Stone_Edit($id){

        $our_stones=Our_Stone::findOrFail($id);

        return view('backend/our-stone-edit',compact('our_stones'));
        
    }
    public function Our_Stone_Update(Request $request,$id){








        $our_stones=Our_Stone::findOrFail($id);


      $our_stone_banner=$request->file('our_stone_banner'); 

      if($our_stone_banner){

      $name_gen1=hexdec(uniqid());
  
      $img_ext1=strtolower($our_stone_banner->getClientOriginalExtension());
  
      $img_name1=$name_gen1. '.' .$img_ext1;
  
      $up_location1='images/our-stones/';
  
      $last_img1=$up_location1.$img_name1;
  
      $our_stone_banner->move($up_location1,$img_name1);
  
  
      $our_stones->our_stone_banner=$last_img1;

      $our_stones->our_stone_header=$request->our_stone_header;

      $our_stones->our_stone_body=$request->our_stone_body;

    


      $our_stones->save();

      $notification=array(
              'message'=>'Home Our Stone Update Successfully',
             'alert-type'=>'success'
      );

          return Redirect()->route('all.our_stone')->with($notification);

    }else {

      $our_stones->our_stone_header=$request->our_stone_header;

      $our_stones->our_stone_body=$request->our_stone_body;

     


      $our_stones->save();

      $notification=array(
              'message'=>'Home Our Stone Update Successfully',
             'alert-type'=>'success'
      );

          return Redirect()->route('all.our_stone')->with($notification);
        
    }
        
    }
    public function Our_Stone_Delete($id){

        $our_stones=Our_Stone::findOrFail($id);


        
        if ( $our_stones != null) {
    
            $our_stones->delete();
    
        $notification=array(
            'message'=>'Our Stone Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.our_stone')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.our_stone')->with($notification);
    
        }


        
    }



    public function Our_Category(){

        $our_categorys=DB::table('our_stone_category')->select('id','our_category_header','our_category_body','created_at','updated_at')->orderBy('id','desc')->limit(1)->get();

        return view('backend/our-stone-category',compact('our_categorys'));

    }
    public function Our_Category_new(){
        return view('backend/our-stone-category-table');
        
    }
    public function Our_Category_Add(Request $request){
        $this->validate($request, [
             'our_category_header'=>'required',
             'our_category_body'=>'required',


      ]);

      $our_categorys=DB::table('our_stone_category')->select('id','our_category_header','our_category_body','created_at','updated_at')->orderBy('id','desc')->get();

      if($our_categorys->count() <0){

      $our_categorys= new Our_Stone_Category();

     $our_categorys->our_category_header=$request->our_category_header;

     $our_categorys->our_category_body=$request->our_category_body;


     $our_categorys->save();

      $notification=array(
             'message'=>'Home Stone Category Insert Successfully',
             'alert-type'=>'success'
      );

          return Redirect()->route('all.our_category')->with($notification);

      }else{
        $notification=array(
            'message'=>'only one records',
            'alert-type'=>'error'
    );

        return Redirect()->route('all.our_category')->with($notification);

      }      

    }

    public function Our_Category_Edit($id){

        $our_categorys=Our_Stone_Category::findOrFail($id);

        return view('backend/our-stone-category-edit',compact('our_categorys'));
        
    }
    public function Our_Category_Update(Request $request,$id){

        $our_categorys=Our_Stone_Category::findOrFail($id);

        $our_categorys->our_category_header=$request->our_category_header;

        $our_categorys->our_category_body=$request->our_category_body;


       $our_categorys->save();

      $notification=array(
              'message'=>'Home Stone Category Update Successfully',
             'alert-type'=>'success'
      );

          return Redirect()->route('all.our_category')->with($notification);



    }  
    
    
    public function Our_Category_Delete($id){

        $our_categorys=Our_Stone_Category::findOrFail($id);


        
        if ( $our_categorys != null) {
    
            $our_categorys->delete();
    
        $notification=array(
            'message'=>'Our Stone Category Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.our_category')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.our_category')->with($notification);
    
        }


        
    }





    public function Footer_Description(){

        $footers=Footers::orderBy('id','desc')->limit(1)->get();

        return view('backend/footer',compact('footers'));

    }
    public function Footer_Description_new(){

        return view('backend/footer-table');
        
    }
    public function Footer_Description_Add(Request $request){

        
        $this->validate($request, [

            "footer_description" =>'required',
             "footer_logo1" =>'required',
             "footer_logo2" =>'required',
             "footer_logo3" =>'required',


      ]);

      
      $footers= new Footers();
      


      $footer_logo1=$request->file('footer_logo1'); 
      $name_gen1=hexdec(uniqid()); 
      $img_ext1=strtolower($footer_logo1->getClientOriginalExtension()); 
      $img_name1=$name_gen1. '.' .$img_ext1; 
      $up_location1='images/home-select/'; 
      $last_img1=$up_location1.$img_name1;
      $footer_logo1->move($up_location1,$img_name1);
      $footers->footer_logo1=$last_img1;

      $footer_logo2=$request->file('footer_logo2'); 
      $name_gen1=hexdec(uniqid()); 
      $img_ext1=strtolower($footer_logo2->getClientOriginalExtension()); 
      $img_name1=$name_gen1. '.' .$img_ext1; 
      $up_location1='images/home-select/'; 
      $last_img1=$up_location1.$img_name1;
      $footer_logo2->move($up_location1,$img_name1);
      $footers->footer_logo2=$last_img1;

      $footer_logo3=$request->file('footer_logo3'); 
      $name_gen1=hexdec(uniqid()); 
      $img_ext1=strtolower($footer_logo3->getClientOriginalExtension()); 
      $img_name1=$name_gen1. '.' .$img_ext1; 
      $up_location1='images/home-select/'; 
      $last_img1=$up_location1.$img_name1;
      $footer_logo3->move($up_location1,$img_name1);
      $footers->footer_logo3=$last_img1;



     $footers->footer_description=$request->footer_description;

     


     $footers->save();

      $notification=array(
              'message'=>'Home Footer Insert Successfully',
             'alert-type'=>'success'
      );

          return Redirect()->route('all.footer_description')->with($notification);
        
    }
    public function Footer_Description_Edit($id){

        $footers=Footers::findOrFail($id);

        return view('backend/footer-edit',compact('footers'));
        
    }
    public function Footer_Description_Update(Request $request,$id){




        $footers=Footers::findOrFail($id);

        $footer_logo1=$request->file('footer_logo1'); 
        $footer_logo2=$request->file('footer_logo2'); 
        $footer_logo3=$request->file('footer_logo3'); 

        if($footer_logo1 AND $footer_logo2 AND $footer_logo3){


      $name_gen1=hexdec(uniqid()); 
      $img_ext1=strtolower($footer_logo1->getClientOriginalExtension()); 
      $img_name1=$name_gen1. '.' .$img_ext1; 
      $up_location1='images/home-select/'; 
      $last_img1=$up_location1.$img_name1;
      $footer_logo1->move($up_location1,$img_name1);
      $footers->footer_logo1=$last_img1;

      
      $name_gen1=hexdec(uniqid()); 
      $img_ext1=strtolower($footer_logo2->getClientOriginalExtension()); 
      $img_name1=$name_gen1. '.' .$img_ext1; 
      $up_location1='images/home-select/'; 
      $last_img1=$up_location1.$img_name1;
      $footer_logo2->move($up_location1,$img_name1);
      $footers->footer_logo2=$last_img1;

      
      $name_gen1=hexdec(uniqid()); 
      $img_ext1=strtolower($footer_logo3->getClientOriginalExtension()); 
      $img_name1=$name_gen1. '.' .$img_ext1; 
      $up_location1='images/home-select/'; 
      $last_img1=$up_location1.$img_name1;
      $footer_logo3->move($up_location1,$img_name1);
      $footers->footer_logo3=$last_img1;



     $footers->footer_description=$request->footer_description;

     


     $footers->save();

      $notification=array(
              'message'=>'Home Footer Update Successfully',
             'alert-type'=>'success'
      );

          return Redirect()->route('all.footer_description')->with($notification);



        }elseif ($footer_logo1) {

            $name_gen1=hexdec(uniqid()); 
            $img_ext1=strtolower($footer_logo1->getClientOriginalExtension()); 
            $img_name1=$name_gen1. '.' .$img_ext1; 
            $up_location1='images/home-select/'; 
            $last_img1=$up_location1.$img_name1;
            $footer_logo1->move($up_location1,$img_name1);
            $footers->footer_logo1=$last_img1;
      
            
      
      
      
           $footers->footer_description=$request->footer_description;
      
           
      
      
           $footers->save();
      
            $notification=array(
                    'message'=>'Home Footer Update Successfully',
                    'alert-type'=>'success'
            );
      
                return Redirect()->route('all.footer_description')->with($notification);
      
           
        }elseif ($footer_logo2) {

           
      
            
            $name_gen1=hexdec(uniqid()); 
            $img_ext1=strtolower($footer_logo2->getClientOriginalExtension()); 
            $img_name1=$name_gen1. '.' .$img_ext1; 
            $up_location1='images/home-select/'; 
            $last_img1=$up_location1.$img_name1;
            $footer_logo2->move($up_location1,$img_name1);
            $footers->footer_logo2=$last_img1;
      
            
            
      
      
      
           $footers->footer_description=$request->footer_description;
      
           
      
      
           $footers->save();
      
            $notification=array(
                    'message'=>'Home Footer Update Successfully',
                   'alert-type'=>'success'
            );
      
                return Redirect()->route('all.footer_description')->with($notification);
      
            
        }elseif ($footer_logo3) {

            
      
            
            $name_gen1=hexdec(uniqid()); 
            $img_ext1=strtolower($footer_logo3->getClientOriginalExtension()); 
            $img_name1=$name_gen1. '.' .$img_ext1; 
            $up_location1='images/home-select/'; 
            $last_img1=$up_location1.$img_name1;
            $footer_logo3->move($up_location1,$img_name1);
            $footers->footer_logo3=$last_img1;
      
      
      
           $footers->footer_description=$request->footer_description;
      
           
      
      
           $footers->save();
      
            $notification=array(
                    'message'=>'Home Footer Update Successfully',
                   'alert-type'=>'success'
            );
      
                return Redirect()->route('all.footer_description')->with($notification);
      
            
        }else {

            
           $footers->footer_description=$request->footer_description;
      
           
      
      
           $footers->save();
      
            $notification=array(
                    'message'=>'Home Footer Update Successfully',
                   'alert-type'=>'success'
            );
      
                return Redirect()->route('all.footer_description')->with($notification);
            
        }   
        
    }
    public function Footer_Description_Delete($id){

        $footers=Footers::find($id);
        if ($footers != null) {
    
            $footers->delete();
    
        $notification=array(
            'message'=>'Home Footer Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.footer_description')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.footer_description')->with($notification);
    
        }
        
    }


    







}
