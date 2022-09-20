<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Process_ones;
use App\Models\Process_Twos;
use App\Models\Process_Thres;
use App\Models\Process_Fours;
use App\Models\Process_Fives;
use App\Models\Process_Studios;
use App\Models\Process_Studiobodys;
use App\Models\Process_Studioslider;
use App\Models\Process_Daylights;
use App\Models\Process_Goldens;


class ProcessController extends Controller
{
    public  function Process_One(){

        $process_ones=Process_ones::orderBy('id','desc')->limit(1)->get();

        return view('backend/process-ones',compact('process_ones'));

    }

    public  function Process_One_new(){

        return view('backend/process-ones-table');
        
    }

    public  function Process_One_Add(Request $request){

        $this->validate($request, [

            "process_header_text" =>'required',
             "process_header_body" =>'required',
    
    
        ]);

        if($process_ones->count() < 1){
    
        $process_ones=new Process_ones();
    
        
        $process_ones->process_header_text=$request->process_header_text;
      
        $process_ones->process_header_body=$request->process_header_body;
      
        $process_ones->save();
      
        $notification=array(
                'message'=>'process one insert Successfully',
               'alert-type'=>'success'
        );
      
            return Redirect()->route('all.process_one')->with($notification);


        }else{
            $notification=array(
                'message'=>'only one records',
                'alert-type'=>'error'
        );
      
            return Redirect()->route('all.process_one')->with($notification);
    
        } 
        
    }

    public  function Process_One_Edit($id){
        
        $process_ones=Process_ones::find($id);

        return view('backend/process-ones-edit',compact('process_ones'));
        
    }

    public  function Process_One_Update(Request $request,$id){

        $process_ones=Process_ones::orderBy('id','desc')->get();

       

        $process_ones=Process_ones::find($id);

        $process_ones->process_header_text=$request->process_header_text;
      
        $process_ones->process_header_body=$request->process_header_body;
      
        $process_ones->save();
      
        $notification=array(
                'message'=>'process one Update Successfully',
               'alert-type'=>'success'
        );
      
            return Redirect()->route('all.process_one')->with($notification);
      
        
    }

    public  function Process_One_Delete($id){

        $process_ones=Process_ones::find($id);

        if ( $process_ones != null) {
    
            $process_ones->delete();
    
        $notification=array(
            'message'=>'process one Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.process_one')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.process_one')->with($notification);
    
        }
        
    }





    public function Process_Two(){

        $process_twos=Process_Twos::orderBy('id','desc')->limit(1)->get();

        return view('backend/process-two',compact('process_twos'));

    }

    public function Process_Two_new(){

        return view('backend/process-two-table');
        
    }

    public function Process_Two_Add(Request $request){

        $this->validate($request, [

             "process_sub_header" =>'required',
             "process_sub_header2" =>'required',
             "process_sub_body"=>'required',
             'process_sub_image1'=>'required'
        
    
    
        ]);
    
        $process_twos=new Process_Twos();

     
        
        $process_twos->process_sub_header=$request->process_sub_header;
      
        $process_twos->process_sub_header2=$request->process_sub_header2;

        $process_twos->process_sub_body=$request->process_sub_body;

     $process_sub_image1=$request->file('process_sub_image1'); 
     $name_gen1=hexdec(uniqid());
     $img_ext1=strtolower($process_sub_image1->getClientOriginalExtension());
     $img_name1=$name_gen1. '.' .$img_ext1;
     $up_location1='images/process-section/';
     $last_img1=$up_location1.$img_name1;
     $process_sub_image1->move($up_location1,$img_name1);
     $process_twos->process_sub_image1=$last_img1;
    

    
    
      
        $process_twos->save();
      
        $notification=array(
                'message'=>'process two insert Successfully',
               'alert-type'=>'success'
        );
      
            return Redirect()->route('all.process_two')->with($notification);
        
    }

    public function Process_Two_Edit($id){

        $process_twos=Process_Twos::findOrFail($id);

        return view('backend/process-two-edit',compact('process_twos'));
        
    }

    public function Process_Two_Update(Request $request,$id){

        
        $process_twos=Process_Twos::findOrFail($id);

        $process_sub_image1=$request->file('process_sub_image1'); 

       

        if($process_sub_image1 ){


        
     $name_gen1=hexdec(uniqid());
     $img_ext1=strtolower($process_sub_image1->getClientOriginalExtension());
     $img_name1=$name_gen1. '.' .$img_ext1;
     $up_location1='images/process-section/';
     $last_img1=$up_location1.$img_name1;
     $process_sub_image1->move($up_location1,$img_name1);
     $process_twos->process_sub_image1=$last_img1;
    

        $process_twos->process_sub_header=$request->process_sub_header;
      
        $process_twos->process_sub_header2=$request->process_sub_header2;

        $process_twos->process_sub_body=$request->process_sub_body;
      
        $process_twos->save();
      
        $notification=array(
                'message'=>'process two update Successfully',
               'alert-type'=>'success'
        );
      
            return Redirect()->route('all.process_two')->with($notification);

    
        }else {

        $process_twos->process_sub_header=$request->process_sub_header;
      
        $process_twos->process_sub_header2=$request->process_sub_header2;

        $process_twos->process_sub_body=$request->process_sub_body;
      
        $process_twos->save();
      
        $notification=array(
                'message'=>'process two update Successfully',
               'alert-type'=>'success'
        );
      
            return Redirect()->route('all.process_two')->with($notification);
            
        }    
        
    }

    public function Process_Two_Delete($id){

        $process_twos=Process_Twos::find($id);

        if ( $process_twos != null) {
    
            $process_twos->delete();
    
        $notification=array(
            'message'=>'process two Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.process_two')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.process_two')->with($notification);
    
        }
        
    }



    public function Process_Three(){

        $process_threes=Process_Thres::orderBy('id','desc')->limit(1)->get();

        return view('backend/process-three',compact('process_threes'));

    }
    public function Process_Three_new(){

        return view('backend/process-three-table');
        
    }
    public function Process_Three_Add(Request $request){

        
        $this->validate($request, [

            "process_center_header1" =>'required',
            "process_center_header2" =>'required',
            "process_center_header3"=>'required',
   
   
       ]);

       $process_threes=Process_Thres::orderBy('id','desc')->get();

       if($process_threes->count() < 1){
   
       $process_three=new Process_Thres();
   
       
       $process_three->process_center_header1=$request->process_center_header1;
     
       $process_three->process_center_header2=$request->process_center_header2;

       $process_three->process_center_header3=$request->process_center_header3;
     
       $process_three->save();
     
       $notification=array(
               'message'=>'process three insert Successfully',
              'alert-type'=>'success'
       );
     
           return Redirect()->route('all.process_three')->with($notification);
    }else{

        $notification=array(
            'message'=>'process three insert Successfully',
           'alert-type'=>'success'
    );
  
        return Redirect()->route('all.process_three')->with($notification);

    }  
        
    }
    public function Process_Three_Edit($id){

        $process_threes=Process_Thres::find($id);

        return view('backend/process-three-edit',compact('process_threes'));
        
    }
    public function Process_Three_Update(Request $request,$id){

       $process_threes=Process_Thres::find($id);
        
       $process_threes->process_center_header1=$request->process_center_header1;
     
       $process_threes->process_center_header2=$request->process_center_header2;

       $process_threes->process_center_header3=$request->process_center_header3;
     
       $process_threes->save();
     
       $notification=array(
               'message'=>'process three Update Successfully',
              'alert-type'=>'success'
       );
     
           return Redirect()->route('all.process_three')->with($notification);
        
    }

    public function Process_Three_Delete($id){
        $process_threes=Process_Thres::find($id);

        if ( $process_threes != null) {
    
            $process_threes->delete();
    
        $notification=array(
            'message'=>'process three Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.process_three')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.process_three')->with($notification);
    
        }
        
    }



    public function Process_Four(){

        $process_fours=Process_Fours::orderBy('id','desc')->limit(1)->get();



        return view('backend/process-four',compact('process_fours'));

    }

    public function Process_Four_new(){

        return view('backend/process-four-table');

    }

    public function Process_Four_Add(Request $request){

        

        $this->validate($request, [

            "process_center_banner" =>'required',
            "process_center_banner_text" =>'required',
            "process_center_text1"=>'required',
            "process_center_text2"=>'required',
            "process_center_text3"=>'required',
   
   
       ]);
   
     $process_fours=new Process_Fours();

     $process_center_banner=$request->file('process_center_banner'); 

     $name_gen1=hexdec(uniqid());
 
     $img_ext1=strtolower($process_center_banner->getClientOriginalExtension());
 
     $img_name1=$name_gen1. '.' .$img_ext1;
 
     $up_location1='images/process-section/';
 
     $last_img1=$up_location1.$img_name1;
 
     $process_center_banner->move($up_location1,$img_name1);
 
     $process_fours->process_center_banner=$last_img1;



   

     
       $process_fours->process_center_banner_text=$request->process_center_banner_text;

       $process_fours->process_center_text1=$request->process_center_text1;

       $process_fours->process_center_text2=$request->process_center_text2;

       $process_fours->process_center_text3=$request->process_center_text3;
     
       $process_fours->save();
     
       $notification=array(
               'message'=>'process four insert Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_four')->with($notification);
       

    }

    public function Process_Four_Edit($id){

        $process_fours=Process_Fours::find($id);

        return view('backend/process-four-edit',compact('process_fours'));

    }


    public function Process_Four_Update(Request $request,$id){

        $process_fours=Process_Fours::find($id);


        $process_center_banner=$request->file('process_center_banner');

        if($process_center_banner){

            $name_gen1=hexdec(uniqid());
 
     $img_ext1=strtolower($process_center_banner->getClientOriginalExtension());
 
     $img_name1=$name_gen1. '.' .$img_ext1;
 
     $up_location1='images/process-section/';
 
     $last_img1=$up_location1.$img_name1;
 
     $process_center_banner->move($up_location1,$img_name1);
 
     $process_fours->process_center_banner=$last_img1;


     $process_fours->process_center_banner_text=$request->process_center_banner_text;

       $process_fours->process_center_text1=$request->process_center_text1;

       $process_fours->process_center_text2=$request->process_center_text2;

       $process_fours->process_center_text3=$request->process_center_text3;
     
       $process_fours->save();
     
       $notification=array(
               'message'=>'process Update insert Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_four')->with($notification);

        }else{

            $process_fours->process_center_banner_text=$request->process_center_banner_text;

       $process_fours->process_center_text1=$request->process_center_text1;

       $process_fours->process_center_text2=$request->process_center_text2;

       $process_fours->process_center_text3=$request->process_center_text3;
     
       $process_fours->save();
     
       $notification=array(
               'message'=>'process Update insert Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_four')->with($notification);

        }

    }

    public function Process_Four_Delete($id){

        $process_fours=Process_Fours::find($id);


        if ( $process_fours != null) {
    
            $process_fours->delete();
    
        $notification=array(
            'message'=>'process four Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.process_four')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.process_four')->with($notification);
    
        }

    }



    public function Process_Five(){

        $process_lasts=Process_Fives::orderBy('id','desc')->limit(1)->get();

         return view('backend/process-five',compact('process_lasts'));

    }

    public function Process_Five_new(){
        return view('backend/process-five-table');
        
    }

    public function Process_Five_Add(Request $request){

        $this->validate($request, [

            "process_new_banner" =>'required',
            "process_new_body_text1" =>'required',
            "process_new_body_text2"=>'required',
            "process_new_body_image"=>'required',
            "process_new_icon1"=>'required',
            "process_new_icon2"=>'required',
            "process_new_icon_text"=>'required',
          
   
   
       ]);
   
     $process_lasts=new Process_Fives();

     $process_lasts->process_new_banner=$request->process_new_banner;

    


     $process_new_body_image=$request->file('process_new_body_image'); 
     $name_gen=hexdec(uniqid());
     $img_ext=strtolower($process_new_body_image->getClientOriginalExtension());
     $img_name=$name_gen. '.' .$img_ext;
     $up_location='images/process-ends/';
     $last_img=$up_location.$img_name;
     $process_new_body_image->move($up_location,$img_name);
     $process_lasts->process_new_body_image=$last_img;


     $process_lasts->process_new_body_text1=$request->process_new_body_text1;
     $process_lasts->process_new_body_text2=$request->process_new_body_text2;


     
    $process_new_icon1=$request->file('process_new_icon1'); 
    $name_gen1=hexdec(uniqid());
    $img_ext1=strtolower($process_new_icon1->getClientOriginalExtension());
    $img_name1=$name_gen1. '.' .$img_ext1;
    $up_location1='images/process-ends/';
    $last_img1=$up_location1.$img_name1;
    $process_new_icon1->move($up_location1,$img_name1);
    $process_lasts->process_new_icon1=$last_img1;



    $process_new_icon2=$request->file('process_new_icon2'); 
    $name_gen2=hexdec(uniqid());
    $img_ext2=strtolower($process_new_icon2->getClientOriginalExtension());
    $img_name2=$name_gen2. '.' .$img_ext2;
    $up_location2='images/process-ends/';
    $last_img2=$up_location2.$img_name2;
    $process_new_icon2->move($up_location2,$img_name2);
    $process_lasts->process_new_icon2=$last_img2;

     $process_lasts->process_new_icon_text=$request->process_new_icon_text;

     $process_lasts->save();
     
       $notification=array(
               'message'=>'process End insert Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_five')->with($notification);






        
    }

    public function Process_Five_Edit($id){

        $process_lasts=Process_Fives::findOrFail($id);

        return view('backend/process-five-edit',compact('process_lasts'));
        
    }

    public function Process_Five_Update(Request $request,$id){


        $process_lasts=Process_Fives::findOrFail($id);

        
     $process_new_body_image=$request->file('process_new_body_image');

     $process_new_icon1=$request->file('process_new_icon1');
     
     $process_new_icon2=$request->file('process_new_icon2'); 

     if($process_new_body_image){

        $process_lasts->process_new_banner=$request->process_new_banner;
       


    
     $name_gen=hexdec(uniqid());
     $img_ext=strtolower($process_new_body_image->getClientOriginalExtension());
     $img_name=$name_gen. '.' .$img_ext;
     $up_location='images/process-ends/';
     $last_img=$up_location.$img_name;
     $process_new_body_image->move($up_location,$img_name);
     $process_lasts->process_new_body_image=$last_img;


     $process_lasts->process_new_body_text1=$request->process_new_body_text1;
     $process_lasts->process_new_body_text2=$request->process_new_body_text2;





     $process_lasts->process_new_icon_text=$request->process_new_icon_text;

     $process_lasts->save();
     
       $notification=array(
               'message'=>'process End Update Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_five')->with($notification);


     }elseif ($process_new_icon1) {

        
        $process_lasts->process_new_banner=$request->process_new_banner;
        


    

     $process_lasts->process_new_body_text1=$request->process_new_body_text1;
     $process_lasts->process_new_body_text2=$request->process_new_body_text2;


     
    
    $name_gen1=hexdec(uniqid());
    $img_ext1=strtolower($process_new_icon1->getClientOriginalExtension());
    $img_name1=$name_gen1. '.' .$img_ext1;
    $up_location1='images/process-ends/';
    $last_img1=$up_location1.$img_name1;
    $process_new_icon1->move($up_location1,$img_name1);
    $process_lasts->process_new_icon1=$last_img1;




     $process_lasts->process_new_icon_text=$request->process_new_icon_text;

     $process_lasts->save();
     
       $notification=array(
               'message'=>'process End Update Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_five')->with($notification);
    
     

                
     }elseif ($process_new_icon2) {

        
        $process_lasts->process_new_banner=$request->process_new_banner;
        


    


     $process_lasts->process_new_body_text1=$request->process_new_body_text1;
     $process_lasts->process_new_body_text2=$request->process_new_body_text2;

    
    $name_gen2=hexdec(uniqid());
    $img_ext2=strtolower($process_new_icon2->getClientOriginalExtension());
    $img_name2=$name_gen2. '.' .$img_ext2;
    $up_location2='images/process-ends/';
    $last_img2=$up_location2.$img_name2;
    $process_new_icon2->move($up_location2,$img_name2);
    $process_lasts->process_new_icon2=$last_img2;

     $process_lasts->process_new_icon_text=$request->process_new_icon_text;

     $process_lasts->save();
     
       $notification=array(
               'message'=>'process End Update Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_five')->with($notification);
        
      
 
     }else {
        $process_lasts->process_new_banner=$request->process_new_banner;
        

        $process_lasts->process_new_body_text1=$request->process_new_body_text1;
        $process_lasts->process_new_body_text2=$request->process_new_body_text2;


        $process_lasts->process_new_icon_text=$request->process_new_icon_text;

        $process_lasts->save();
     
       $notification=array(
               'message'=>'process End Update Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_five')->with($notification);
     }


        
    }

    public function Process_Five_Delete($id){

        $process_lasts=Process_Fives::findOrFail($id);

        if ( $process_lasts != null) {
    
            $process_lasts->delete();
    
        $notification=array(
            'message'=>'process End Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.process_five')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.process_five')->with($notification);
    
        }
        
    }


    public function Process_Studio(){

        $process_studios=Process_Studios::orderBy('id','desc')->limit(1)->get();

        return view('backend/process-studio',compact('process_studios'));

    }

    public function Process_Studio_new(){
        return view('backend/process-studio-table');
        
    }

    public function Process_Studio_Add(Request $request){

        $this->validate($request, [

            "process_studios_header_text" =>'required',
            "process_studios_header_text2" =>'required', 
   
       ]);

       

       $process_studios=new Process_Studios();

       $process_studios->process_studios_header_text=$request->process_studios_header_text;
       $process_studios->process_studios_header_text2=$request->process_studios_header_text2;

       $process_studios->save();
    
      $notification=array(
              'message'=>'process Studio Successfully',
              'alert-type'=>'success'
      );
    
      return Redirect()->route('all.process_studio')->with($notification);
       
       




        
    }

    public function Process_Studio_Edit($id){

        $process_studios=Process_Studios::find($id);

        return view('backend/process-studio-edit',compact('process_studios'));
        
    }

    public function Process_Studio_Update(Request $request,$id){

        $process_studios=Process_Studios::find($id);

       $process_studios->process_studios_header_text=$request->process_studios_header_text;
       $process_studios->process_studios_header_text2=$request->process_studios_header_text2;

       $process_studios->save();
    
      $notification=array(
              'message'=>'process Studio Update Successfully',
              'alert-type'=>'success'
      );
    
      return Redirect()->route('all.process_studio')->with($notification);
        
    }

    public function Process_Studio_Delete($id){

        $process_studios=Process_Studios::find($id);

        if ( $process_studios != null) {
    
            $process_studios->delete();
    
        $notification=array(
            'message'=>'process studio Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.process_studio')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.process_studio')->with($notification);
    
        }
        
    }





    public function Process_Studiobody(){

        $process_studiobodys=Process_Studiobodys::orderBy('id','desc')->limit(1)->get();

        return view('backend/process-studiobody',compact('process_studiobodys'));
        
    }
    public function Process_Studiobody_new(){

        return view('backend/process-studiobody-table');
        
    }
    public function Process_Studiobody_Add(Request $request){


        $this->validate($request, [

            "process_studios_slider_headertext1" =>'required',
            "process_studios_slider_headertext2" =>'required', 
   
       ]);

       

       $process_studiobodys=new Process_Studiobodys();

       $process_studiobodys->process_studios_slider_headertext1=$request->process_studios_slider_headertext1;
       $process_studiobodys->process_studios_slider_headertext2=$request->process_studios_slider_headertext2;

       $process_studiobodys->save();
    
      $notification=array(
              'message'=>'process Studio Body Successfully',
              'alert-type'=>'success'
      );
    
      return Redirect()->route('all.process_studiobody')->with($notification);

        
        
    }
    public function Process_Studiobody_Edit($id){

        $process_studiobodys=Process_Studiobodys::find($id);

        return view('backend/process-studiobody-edit',compact('process_studiobodys'));
        
    }
    public function Process_Studiobody_Update(Request $request,$id){

        $process_studiobodys=Process_Studiobodys::find($id);

        
       $process_studiobodys->process_studios_slider_headertext1=$request->process_studios_slider_headertext1;
       $process_studiobodys->process_studios_slider_headertext2=$request->process_studios_slider_headertext2;

       $process_studiobodys->save();
    
      $notification=array(
              'message'=>'process Studio Body Update Successfully',
              'alert-type'=>'success'
      );
    
      return Redirect()->route('all.process_studiobody')->with($notification);
        
    }
    public function Process_Studiobody_Delete($id){

        $process_studiobodys=Process_Studiobodys::find($id);

        if ( $process_studiobodys != null) {
    
            $process_studiobodys->delete();
    
        $notification=array(
            'message'=>'process studio Body Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.process_studiobody')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.process_studiobody')->with($notification);
    
        }
        
    }





    public function Process_Studioslider(){

        $process_studiosliders=Process_Studioslider::orderBy('id','desc')->get();

        return view('backend/process-studioslider',compact('process_studiosliders'));
        
    }
    public function Process_Studioslider_new(){

        return view('backend/process-studioslider-table');
        
    }
    public function Process_Studioslider_Add(Request $request){

        $this->validate($request, [

            "process_studios_slider_image" =>'required',
            "process_studios_slider_endtext" =>'required', 
   
       ]);

       

       $process_studiosliders=new Process_Studioslider();

       $process_studiosliders->process_studios_slider_endtext=$request->process_studios_slider_endtext;
      


       $process_studios_slider_image=$request->file('process_studios_slider_image'); 
       $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($process_studios_slider_image->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/process-ends/';
       $last_img1=$up_location1.$img_name1;
       $process_studios_slider_image->move($up_location1,$img_name1);
       $process_studiosliders->process_studios_slider_image=$last_img1;

      

       $process_studiosliders->save();
    
      $notification=array(
              'message'=>'process Studio slider Successfully',
              'alert-type'=>'success'
      );
    
      return Redirect()->route('all.process_studioslider')->with($notification);
        
    }
    public function Process_Studioslider_Edit($id){

        $process_studiosliders=Process_Studioslider::findOrFail($id);

        return view('backend/process-studioslider-edit',compact('process_studiosliders'));
        
    }
    public function Process_Studioslider_Update(Request $request,$id){


        $process_studiosliders=Process_Studioslider::findOrFail($id);

        $process_studios_slider_image=$request->file('process_studios_slider_image');

        if($process_studios_slider_image){

            $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($process_studios_slider_image->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/process-ends/';
       $last_img1=$up_location1.$img_name1;
       $process_studios_slider_image->move($up_location1,$img_name1);
       $process_studiosliders->process_studios_slider_image=$last_img1;


       $process_studiosliders->process_studios_slider_endtext=$request->process_studios_slider_endtext;
      
       $process_studiosliders->save();
    
      $notification=array(
              'message'=>'process Studio slider Update Successfully',
              'alert-type'=>'success'
      );
    
      return Redirect()->route('all.process_studioslider')->with($notification);


        }else {

            
       $process_studiosliders->process_studios_slider_endtext=$request->process_studios_slider_endtext;
      
       $process_studiosliders->save();
    
      $notification=array(
              'message'=>'process Studio slider Update Successfully',
              'alert-type'=>'success'
      );
    
      return Redirect()->route('all.process_studioslider')->with($notification);
            
        }
        
    }
    public function Process_Studioslider_Delete($id){

        $process_studiosliders=Process_Studioslider::find($id);


        
        if ( $process_studiosliders != null) {
    
            $process_studiosliders->delete();
    
        $notification=array(
            'message'=>'process studio slider Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.process_studioslider')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.process_studioslider')->with($notification);
    
        }


        
    }


    public  function Process_Goldens(){

        $process_goldens=Process_Goldens::orderBy('id','desc')->limit(1)->get();


        return view('backend/process-goldens',compact('process_goldens'));

    }
    public  function Process_Goldens_new(){

        return view('backend/process-goldens-table');
        
    }
    public  function Process_Goldens_Add(Request $request){

        $this->validate($request, [

            "process_golden_header" =>'required',
            "process_golden_text" =>'required', 
            "process_golden_image1" =>'required', 
            "process_golden_image2" =>'required',
            "process_golden_image3" =>'required', 
            "process_golden_image4" =>'required',  
            "process_golden_image5" =>'required', 
   
       ]);

       

       $process_goldens=new Process_Goldens();

       $process_goldens->process_golden_header=$request->process_golden_header;
       $process_goldens->process_golden_text=$request->process_golden_text;
       


       $process_golden_image1=$request->file('process_golden_image1'); 
       $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($process_golden_image1->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/process-ends/';
       $last_img1=$up_location1.$img_name1;
       $process_golden_image1->move($up_location1,$img_name1);
       $process_goldens->process_golden_image1=$last_img1;

       
       $process_golden_image2=$request->file('process_golden_image2'); 
       $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($process_golden_image2->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/process-ends/';
       $last_img1=$up_location1.$img_name1;
       $process_golden_image2->move($up_location1,$img_name1);
       $process_goldens->process_golden_image2=$last_img1;

       
       $process_golden_image3=$request->file('process_golden_image3'); 
       $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($process_golden_image3->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/process-ends/';
       $last_img1=$up_location1.$img_name1;
       $process_golden_image3->move($up_location1,$img_name1);
       $process_goldens->process_golden_image3=$last_img1;

       
       $process_golden_image4=$request->file('process_golden_image4'); 
       $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($process_golden_image4->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/process-ends/';
       $last_img1=$up_location1.$img_name1;
       $process_golden_image4->move($up_location1,$img_name1);
       $process_goldens->process_golden_image4=$last_img1;

       
       $process_golden_image5=$request->file('process_golden_image5'); 
       $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($process_golden_image5->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/process-ends/';
       $last_img1=$up_location1.$img_name1;
       $process_golden_image5->move($up_location1,$img_name1);
       $process_goldens->process_golden_image5=$last_img1;

      
    
       $process_goldens->save();
    
      $notification=array(
              'message'=>'process goldens Insert Successfully',
              'alert-type'=>'success'
      );
    
      return Redirect()->route('all.process_goldens')->with($notification);


        
    }
    public  function Process_Goldens_Edit($id){

        $process_goldens=Process_Goldens::find($id);

        return view('backend/process-goldens-edit',compact('process_goldens'));
        
    }
    public  function Process_Goldens_Update(Request $request,$id){

        

        $process_goldens=Process_Goldens::find($id);

        $process_golden_image1=$request->file('process_golden_image1');
        $process_golden_image2=$request->file('process_golden_image2');
        $process_golden_image3=$request->file('process_golden_image3');
        $process_golden_image4=$request->file('process_golden_image4');
        $process_golden_image5=$request->file('process_golden_image5');


      

      if($process_golden_image1){

       $process_goldens->process_golden_header=$request->process_golden_header;
       $process_goldens->process_golden_text=$request->process_golden_text;

       $process_goldens->color_1=$request->color_1;
       $process_goldens->color_2=$request->color_2;
       $process_goldens->color_3=$request->color_3;
       $process_goldens->color_4=$request->color_4;
       $process_goldens->color_5=$request->color_5;
       


        
       $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($process_golden_image1->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/process-ends/';
       $last_img1=$up_location1.$img_name1;
       $process_golden_image1->move($up_location1,$img_name1);
       $process_goldens->process_golden_image1=$last_img1;

       
       
      
      
    
       $process_goldens->save();
    
      $notification=array(
              'message'=>'process goldens Update Successfully',
              'alert-type'=>'success'
      );
    
      return Redirect()->route('all.process_goldens')->with($notification);

    }elseif($process_golden_image2) {

        $process_goldens->process_golden_header=$request->process_golden_header;
        $process_goldens->process_golden_text=$request->process_golden_text;


        $process_goldens->color_1=$request->color_1;
       $process_goldens->color_2=$request->color_2;
       $process_goldens->color_3=$request->color_3;
       $process_goldens->color_4=$request->color_4;
       $process_goldens->color_5=$request->color_5;
        
 
 
         
        
 
        
        
        $name_gen2=hexdec(uniqid());
        $img_ext2=strtolower($process_golden_image2->getClientOriginalExtension());
        $img_name2=$name_gen2. '.' .$img_ext2;
        $up_location2='images/process-ends/';
        $last_img2=$up_location2.$img_name2;
        $process_golden_image2->move($up_location2,$img_name2);
        $process_goldens->process_golden_image2=$last_img2;
 
        
         
      
        
       
 
       
     
        $process_goldens->save();
     
       $notification=array(
               'message'=>'process goldens Update Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_goldens')->with($notification);
 

      
        
    }elseif($process_golden_image3){

        $process_goldens->process_golden_header=$request->process_golden_header;
        $process_goldens->process_golden_text=$request->process_golden_text;

        $process_goldens->color_1=$request->color_1;
       $process_goldens->color_2=$request->color_2;
       $process_goldens->color_3=$request->color_3;
       $process_goldens->color_4=$request->color_4;
       $process_goldens->color_5=$request->color_5;
        
 
 
         
       
 
        
         
        $name_gen3=hexdec(uniqid());
        $img_ext3=strtolower($process_golden_image3->getClientOriginalExtension());
        $img_name3=$name_gen3. '.' .$img_ext3;
        $up_location3='images/process-ends/';
        $last_img3=$up_location3.$img_name3;
        $process_golden_image3->move($up_location3,$img_name3);
        $process_goldens->process_golden_image3=$last_img3;
 
        
      
 
       
     
        $process_goldens->save();
     
       $notification=array(
               'message'=>'process goldens Update Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_goldens')->with($notification);
 

    }elseif($process_golden_image4){

        $process_goldens->process_golden_header=$request->process_golden_header;
        $process_goldens->process_golden_text=$request->process_golden_text;

        $process_goldens->color_1=$request->color_1;
       $process_goldens->color_2=$request->color_2;
       $process_goldens->color_3=$request->color_3;
       $process_goldens->color_4=$request->color_4;
       $process_goldens->color_5=$request->color_5;
        
 
 
         
        
 
        
        
       
 
        
         
        $name_gen4=hexdec(uniqid());
        $img_ext4=strtolower($process_golden_image4->getClientOriginalExtension());
        $img_name4=$name_gen4. '.' .$img_ext4;
        $up_location4='images/process-ends/';
        $last_img4=$up_location4.$img_name4;
        $process_golden_image4->move($up_location4,$img_name4);
        $process_goldens->process_golden_image4=$last_img4;
 
        
       
 
       
     
        $process_goldens->save();
     
       $notification=array(
               'message'=>'process goldens Update Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_goldens')->with($notification);
 

    }elseif($process_golden_image5){

        $process_goldens->process_golden_header=$request->process_golden_header;
        $process_goldens->process_golden_text=$request->process_golden_text;


        $process_goldens->color_1=$request->color_1;
       $process_goldens->color_2=$request->color_2;
       $process_goldens->color_3=$request->color_3;
       $process_goldens->color_4=$request->color_4;
       $process_goldens->color_5=$request->color_5;
        
 
        
         
        $name_gen5=hexdec(uniqid());
        $img_ext5=strtolower($process_golden_image5->getClientOriginalExtension());
        $img_name5=$name_gen5. '.' .$img_ext5;
        $up_location5='images/process-ends/';
        $last_img5=$up_location5.$img_name5;
        $process_golden_image5->move($up_location5,$img_name5);
        $process_goldens->process_golden_image5=$last_img5;
 
       
     
        $process_goldens->save();
     
       $notification=array(
               'message'=>'process goldens Update Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_goldens')->with($notification);
 

    }else {
        $process_goldens->process_golden_header=$request->process_golden_header;
        $process_goldens->process_golden_text=$request->process_golden_text;

        $process_goldens->color_1=$request->color_1;
       $process_goldens->color_2=$request->color_2;
       $process_goldens->color_3=$request->color_3;
       $process_goldens->color_4=$request->color_4;
       $process_goldens->color_5=$request->color_5;
        
        $process_goldens->save();
     
       $notification=array(
               'message'=>'process goldens Update Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_goldens')->with($notification);
        
    }

        
    }
    public  function Process_Goldens_Delete($id){
        $process_goldens=Process_Goldens::find($id);


        if (  $process_goldens != null) {
    
             $process_goldens->delete();
    
        $notification=array(
            'message'=>'process goldens Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.process_goldens')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.process_goldens')->with($notification);

    
        }
        
    }






    public  function Process_Daylights(){

        $process_daylights=Process_Daylights::orderBy('id','desc')->limit(1)->get();

        return view('backend/process-daylights',compact('process_daylights'));

    }
    public  function Process_Daylights_new(){

        return view('backend/process-daylights-table');
        
    }
    public  function Process_Daylights_Add(Request $request){


        $this->validate($request, [

            "process_daylights_image" =>'required',
            "process_daylights_header" =>'required', 
            "process_daylights_text1" =>'required', 
           
   
       ]);

       

       $process_daylights=new Process_Daylights();


       $process_daylights_image=$request->file('process_daylights_image'); 
       $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($process_daylights_image->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/process-ends/';
       $last_img1=$up_location1.$img_name1;
       $process_daylights_image->move($up_location1,$img_name1);
       $process_daylights->process_daylights_image=$last_img1;

       $process_daylights->process_daylights_header=$request->process_daylights_header;
       $process_daylights->process_daylights_text1=$request->process_daylights_text1;
       
      


      

       $process_daylights->save();
    
      $notification=array(
              'message'=>'process Daylights Insert Successfully',
              'alert-type'=>'success'
      );
    
      return Redirect()->route('all.process_daylights')->with($notification);
        
    }
    public  function Process_Daylights_Edit($id){

        $process_daylights=Process_Daylights::find($id);

        return view('backend/process-daylights-edit',compact('process_daylights'));
        
    }
    public  function Process_Daylights_Update(Request $request,$id){


        $process_daylights=Process_Daylights::find($id);


        $process_daylights_image=$request->file('process_daylights_image'); 
         
        if($process_daylights_image){

        $name_gen1=hexdec(uniqid());
        $img_ext1=strtolower($process_daylights_image->getClientOriginalExtension());
        $img_name1=$name_gen1. '.' .$img_ext1;
        $up_location1='images/process-ends/';
        $last_img1=$up_location1.$img_name1;
        $process_daylights_image->move($up_location1,$img_name1);
        $process_daylights->process_daylights_image=$last_img1;
 
        $process_daylights->process_daylights_header=$request->process_daylights_header;
        $process_daylights->process_daylights_text1=$request->process_daylights_text1;
        
       
 
 
       
 
        $process_daylights->save();
     
       $notification=array(
               'message'=>'process Daylights Insert Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_daylights')->with($notification);

    }else {

        $process_daylights->process_daylights_header=$request->process_daylights_header;
        $process_daylights->process_daylights_text1=$request->process_daylights_text1;
           
 
        $process_daylights->save();
     
       $notification=array(
               'message'=>'process Daylights Update Successfully',
               'alert-type'=>'success'
       );
     
       return Redirect()->route('all.process_daylights')->with($notification);
        
    }  
        
    }
    public  function Process_Daylights_Delete($id){

        $process_daylights=Process_Daylights::find($id);

        if ( $process_daylights != null) {
    
            $process_daylights->delete();
    
        $notification=array(
            'message'=>'process daylights Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.process_daylights')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.process_daylights')->with($notification);
    
        }
        
    }
    

    




}
