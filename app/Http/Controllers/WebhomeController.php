<?php

namespace App\Http\Controllers;
use App\Models\userActivitylog;
use Illuminate\Http\Request;
use App\Models\Brand;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Category;
use App\Models\Available;
use App\Models\Color;
use App\Models\Shape;
use App\Models\Clarity;
use App\Models\Enhancements;
use App\Models\Stoneshow;
use App\Models\Stone;
use App\Models\Galleryshowdata;
use App\Models\Journal;
use Illuminate\Support\Facades\DB;
use App\Models\Reviews;
use App\Mail\Enquire;
use App\Mail\Contact;
use Mail;
use App\Models\CategoryShow;
use App\Models\FaqShowData;
use App\Models\Faq_Category;
use App\Models\Home_slider;
use App\Models\Home_Body;
use App\Models\Home_Map;
use App\Models\Home_Select_Us;
use App\Models\Our_Stone;
use App\Models\Genesis_Headers;
use App\Models\Genesis_Seconds;
use App\Models\Process_Goldens;
use App\Models\Contact_Details;
use App\Models\Footers;
use App\Models\Genesis_Bodys;
use App\Models\Genesis_Lasts;
use App\Models\Genesis_Ends;

use App\Models\Process_ones;
use App\Models\Process_Twos;
use App\Models\Process_Thres;
use App\Models\Process_Fours;
use App\Models\Process_Fives;
use App\Models\Process_Studios;
use App\Models\Process_Studiobodys;
use App\Models\Process_Studioslider;
use App\Models\Process_Daylights;
use App\Models\Review_Headers;
use App\Models\Our_Stone_Category;
use App\Models\Features;
use Newsletter;


class WebhomeController extends Controller
{


    //home
    public function index(){

       


        $journal=Journal::orderBy('id','desc')->paginate(9);

       $category=Category::with(['application' =>function ($q) {
            $q ->where('value',1)->orderBy('order','asc');
        }])->get();

       
        
        

        $home_sliders=Home_slider::where('disabled',1)->orderBy('order','ASC')->get();

        $home_bodys=Home_Body::orderBy('id','desc')->take(1)->get();

        $home_maps=Home_Map::orderBy('id','desc')->take(1)->get();

        $home_selects=Home_Select_Us::orderBy('id','desc')->take(3)->get();

        $footers=Footers::orderBy('id','desc')->take(1)->get();
        $our_stones=Our_Stone::orderBy('id','desc')->take(1)->get();

        $our_categorys=Our_Stone_Category::orderBy('id','desc')->take(1)->get();

        
            
        return view('web/home',compact(['home_sliders','journal','category','home_bodys','home_maps','home_selects','footers','our_stones','our_categorys']));

    }

    public function Mail_Account(Request $request){

        $contact_details=Contact_Details::orderBy('id','desc')->take(1)->get();
        $footers=Footers::orderBy('id','desc')->take(1)->get();

        

        if ( ! Newsletter::isSubscribed($request->user_email) ) {
            Newsletter::subscribe($request->user_email);

            
            
            return Redirect()->route('contact.new')->with('success', 'Thanks For Subscribe');
        }

         return Redirect()->route('contact.new')->with('failure', 'Sorry! You have already subscribed ');
        

        

    }

    public function stone(){

        $category=Category::with(['application' =>function ($q) {
            $q ->where('value',1)->orderBy('order','asc');
        }])->get();
        

        $our_stones=Our_Stone::orderBy('id','desc')->take(1)->get();
        $our_categorys=Our_Stone_Category::orderBy('id','desc')->take(1)->get();

        $home_selects=Home_Select_Us::orderBy('id','desc')->take(3)->get();
        $footers=Footers::orderBy('id','desc')->take(1)->get();
        return view('web/stone',compact(['category','our_stones','home_selects','our_categorys','footers']));
                                  

    }

    // public function stoneCategory(){

    
    //     $footers=Footers::orderBy('id','desc')->take(1)->get();
      

    //     return view('web/stone_category',compact(['footers']));

       

    // }


    public function stoneInfo($id){

        $stone_info=Stoneshow::findOrFail($id);
        $stone_data=Stoneshow::findOrFail($id);
        $stone=Galleryshowdata::where('gallery_id',$stone_info->gallery_id)->orderBy('order','asc')->get();
        
        // dd($stone_info);

        $footers=Footers::orderBy('id','desc')->take(1)->get();
        return view('web/stone_info',compact(['stone_info','stone_data','stone','footers']));

    }


    public function adamantGenesis(){
        $genesis_headers=Genesis_Headers::orderBy('id','desc')->take(1)->get();

        $genesis_seconds=Genesis_Seconds::orderBy('id','desc')->take(1)->get();

        $genesis_bodys=Genesis_Bodys::orderBy('id','desc')->take(1)->get();

        $genesis_lasts=Genesis_Lasts::orderBy('id','desc')->take(1)->get();

        $genesis_ends=Genesis_Ends::orderBy('id','desc')->take(1)->get();

        $home_selects=Home_Select_Us::orderBy('id','desc')->take(3)->get();

        $footers=Footers::orderBy('id','desc')->take(1)->get();

        return view('web/adamant_genesis',compact(['genesis_headers','genesis_seconds','genesis_bodys','genesis_lasts','genesis_ends','home_selects','footers']));

    }

    public function process(){

        $process_ones=Process_ones::orderBy('id','desc')->take(1)->get();

        $process_goldens=Process_Goldens::orderBy('id','desc')->take(1)->get();

        $process_twos=Process_Twos::orderBy('id','desc')->take(3)->get();

        $process_threes=Process_Thres::orderBy('id','desc')->take(1)->get();

        $process_fours=Process_Fours::orderBy('id','desc')->take(1)->get();

        $process_studios=Process_Studios::orderBy('id','desc')->take(1)->get();

        $process_studiobodys=Process_Studiobodys::orderBy('id','desc')->take(1)->get();

      

        $process_studiosliders=Process_Studioslider::orderBy('id','desc')->take(3)->get();

        $process_daylights=Process_Daylights::orderBy('id','desc')->take(1)->get();

        $process_lasts=Process_Fives::orderBy('id','desc')->take(1)->get();

        $home_selects=Home_Select_Us::orderBy('id','desc')->take(3)->get();

        $footers=Footers::orderBy('id','desc')->take(1)->get();
       

        return view('web/adamantProcess',compact(['process_goldens','process_ones','process_twos','process_threes','process_fours','process_studios','process_studiobodys','process_studiosliders','process_daylights','process_lasts','home_selects','footers']));

    }
    public function journal(){
        $footers=Footers::orderBy('id','desc')->take(1)->get();

        $journal=Journal::orderBy('id','desc')->paginate(6);

             return view('web/journal',compact(['journal','footers']));

    }


    public function journal_info($id){
        $footers=Footers::orderBy('id','desc')->take(1)->get();

        $journal=Journal::findOrFail($id);
        

        return view('web/journal_info',compact(['journal','footers']));

    }

    public function reviews(){

        $footers=Footers::orderBy('id','desc')->take(1)->get();
        
        $reviewsnew=Review_Headers::orderBy('id','desc')->take(1)->get();

        $reviews=Reviews::orderBy('id','desc')->paginate(8);

        return view('web/reviews',compact(['reviews','reviewsnew','footers']));

    }

    public function faq(){

        $faq=Faq_Category::with(['application'])->orderBy('order','asc')->get();
        $footers=Footers::orderBy('id','desc')->take(1)->get();

        return view('web/faq',compact(['faq','footers']));

    }

    public function contact(){

        $contact_details=Contact_Details::orderBy('id','desc')->take(1)->get();
        $footers=Footers::orderBy('id','desc')->take(1)->get();
        return view('web/contact',compact(['contact_details','footers']));

    }

    public function Dashboard(){



         $footers=Footers::orderBy('id','desc')->take(1)->get();

         $categorys=Category::orderBy('id','desc')->limit(7)->get();

         $categorys1=Category::orderBy('id','desc')->get();

         $count1=Category::orderBy('id','asc')->get();

         $colors=Color::orderBy('id','desc')->limit(6)->get();
         $count2=Color::orderBy('id','desc')->get();

         $shapes=Shape::orderBy('id','desc')->limit(6)->get();
         $count3=Shape::orderBy('id','desc')->get();

         $claritys=Clarity::orderBy('id','desc')->limit(6)->get();
         $count4=Clarity::orderBy('id','desc')->get();


         $stonesall=Category::with(['application'])->orderBy('id','desc')->get();

         



         $stones=Stone::orderBy('id','desc')->limit(5)->get();

       



        return view('dashboard',compact(['footers','categorys1','categorys','stones','colors','shapes','claritys','stonesall','count1','count2','count3','count4']));
    }


    public function FA(){

        return view('2FA');

    }


//log out
public function Logout(){

    Auth::guard('web')->logout();

   return Redirect()->route('login')->with('success','User Logout');

}

// info email

public function info_Email(Request $request){


   
    $this->validate($request, [
        "Email" =>'required',
        "Message"=>'required'
        
    ]);

    Mail::to('adamant.international@gmail.com')->send(new Enquire($request));

    return redirect()->back()->with('message','Your form has been submitted'); 

    }

// contact email

public function contact_email(Request $request){

    

   
    $this->validate($request, [
        "Email" =>'required',
        "Message" =>'required',
       
       
    ]);

    Mail::to('adamant.international@gmail.com')->send(new Contact($request));

    

    return redirect()->back()->with('message','Your form has been submitted');

   

}


public function Contact_Details(){

    $contact_details=Contact_Details::orderBy('id','desc')->limit(1)->get();

    return view('backend/contact-details',compact('contact_details'));

}
public function Contact_Details_new(){

    return view('backend/contact-details-table');

}
public function Contact_Details_Add(Request $request){

    $this->validate($request, [
        "conatct_header" =>'required',
        "conatct_header_text" =>'required',
        "conatct_number" =>'required',
        "conatct_number_image" =>'required|dimensions:width=150,height=150',
        "conatct_email" =>'required',
        
        "conatct_email_image" =>'required|dimensions:width=150,height=150',
        "conatct_insta" =>'required',
        "conatct_insta_image" =>'required|dimensions:width=150,height=150',
        "conatct_register_office" =>'required',
        "conatct_register_adress1" =>'required',
        "conatct_register_adress2" =>'required',
        "conatct_register_adress3" =>'required',
        "conatct_ourlist" =>'required',
        "conatct_ourlist_text" =>'required',

       
    ]);


    $contact_details=new Contact_Details();
    
    $contact_details->conatct_header=$request->conatct_header;
    $contact_details->conatct_header_text=$request->conatct_header_text;
    $contact_details->conatct_number=$request->conatct_number;
       


       $conatct_number_image=$request->file('conatct_number_image'); 
       $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($conatct_number_image->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/contacts/';
       $last_img1=$up_location1.$img_name1;
       $conatct_number_image->move($up_location1,$img_name1);
       $contact_details->conatct_number_image=$last_img1;

       $contact_details->conatct_email=$request->conatct_email;

       $conatct_email_image=$request->file('conatct_email_image'); 
       $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($conatct_email_image->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/contacts/';
       $last_img1=$up_location1.$img_name1;
       $conatct_email_image->move($up_location1,$img_name1);
       $contact_details->conatct_email_image=$last_img1;


       $contact_details->conatct_insta=$request->conatct_insta;

       $conatct_insta_image=$request->file('conatct_insta_image'); 
       $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($conatct_insta_image->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/contacts/';
       $last_img1=$up_location1.$img_name1;
       $conatct_insta_image->move($up_location1,$img_name1);
       $contact_details->conatct_insta_image=$last_img1;


       $contact_details->conatct_register_office=$request->conatct_register_office;
       $contact_details->conatct_register_adress1=$request->conatct_register_adress1;
       $contact_details->conatct_register_adress2=$request->conatct_register_adress2;
       $contact_details->conatct_register_adress3=$request->conatct_register_adress3;
       $contact_details->conatct_ourlist=$request->conatct_ourlist;
       $contact_details->conatct_ourlist_text=$request->conatct_ourlist_text;


       $contact_details->save();
    
      $notification=array(
              'message'=>'process Contact Details Insert Successfully',
              'alert-type'=>'success'
      );
    
      return Redirect()->route('all.contact_details')->with($notification);



}
public function Contact_Details_Edit($id){

    $contact_details=Contact_Details::find($id);

    return view('backend/contact-details-edit',compact('contact_details'));

}
public function Contact_Details_Update(Request $request,$id){

   if($request->conatct_number_image){
    $this->validate($request, [
       
        "conatct_number_image" =>'required|dimensions:width=150,height=150',
       
       
    ]);

   }if($request->conatct_email_image){
    $this->validate($request, [
       
        
        
        "conatct_email_image" =>'required|dimensions:width=150,height=150',
       
       
        
       
    ]);
       

   }if($request->conatct_insta_image){
    $this->validate($request, [
       
    
       
        "conatct_insta_image" =>'required|dimensions:width=150,height=150',
        
       
    ]);

   }




    $contact_details=Contact_Details::find($id);



    
       
    $conatct_number_image=$request->file('conatct_number_image');
    $conatct_email_image=$request->file('conatct_email_image'); 
    $conatct_insta_image=$request->file('conatct_insta_image'); 

    if($conatct_number_image AND $conatct_email_image And $conatct_insta_image ){

        $contact_details->conatct_header=$request->conatct_header;
    $contact_details->conatct_header_text=$request->conatct_header_text;
    $contact_details->conatct_number=$request->conatct_number;


        
       $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($conatct_number_image->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/contacts/';
       $last_img1=$up_location1.$img_name1;
       $conatct_number_image->move($up_location1,$img_name1);
       $contact_details->conatct_number_image=$last_img1;

       $contact_details->conatct_email=$request->conatct_email;

       
       $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($conatct_email_image->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/contacts/';
       $last_img1=$up_location1.$img_name1;
       $conatct_email_image->move($up_location1,$img_name1);
       $contact_details->conatct_email_image=$last_img1;


       $contact_details->conatct_insta=$request->conatct_insta;

       
       $name_gen1=hexdec(uniqid());
       $img_ext1=strtolower($conatct_insta_image->getClientOriginalExtension());
       $img_name1=$name_gen1. '.' .$img_ext1;
       $up_location1='images/contacts/';
       $last_img1=$up_location1.$img_name1;
       $conatct_insta_image->move($up_location1,$img_name1);
       $contact_details->conatct_insta_image=$last_img1;


       $contact_details->conatct_register_office=$request->conatct_register_office;
       $contact_details->conatct_register_adress1=$request->conatct_register_adress1;
       $contact_details->conatct_register_adress2=$request->conatct_register_adress2;
       $contact_details->conatct_register_adress3=$request->conatct_register_adress3;
       $contact_details->conatct_ourlist=$request->conatct_ourlist;
       $contact_details->conatct_ourlist_text=$request->conatct_ourlist_text;


       $contact_details->save();
    
      $notification=array(
              'message'=>'process Contact Details Insert Successfully',
              'alert-type'=>'success'
      );
    
      return Redirect()->route('all.contact_details')->with($notification);
    }elseif ($conatct_number_image) {

        $contact_details->conatct_header=$request->conatct_header;
        $contact_details->conatct_header_text=$request->conatct_header_text;
        $contact_details->conatct_number=$request->conatct_number;
    
    
            
           $name_gen1=hexdec(uniqid());
           $img_ext1=strtolower($conatct_number_image->getClientOriginalExtension());
           $img_name1=$name_gen1. '.' .$img_ext1;
           $up_location1='images/contacts/';
           $last_img1=$up_location1.$img_name1;
           $conatct_number_image->move($up_location1,$img_name1);
           $contact_details->conatct_number_image=$last_img1;
    
           $contact_details->conatct_email=$request->conatct_email;
    
        
    
           $contact_details->conatct_insta=$request->conatct_insta;
    
           
    
    
           $contact_details->conatct_register_office=$request->conatct_register_office;
           $contact_details->conatct_register_adress1=$request->conatct_register_adress1;
           $contact_details->conatct_register_adress2=$request->conatct_register_adress2;
           $contact_details->conatct_register_adress3=$request->conatct_register_adress3;
           $contact_details->conatct_ourlist=$request->conatct_ourlist;
           $contact_details->conatct_ourlist_text=$request->conatct_ourlist_text;
    
    
           $contact_details->save();
        
          $notification=array(
                  'message'=>'process Contact Details Update Successfully',
                  'alert-type'=>'success'
          );
        
          return Redirect()->route('all.contact_details')->with($notification);
    
       
    }elseif ($conatct_email_image) {
        $contact_details->conatct_header=$request->conatct_header;
        $contact_details->conatct_header_text=$request->conatct_header_text;
        $contact_details->conatct_number=$request->conatct_number;
    
    
            
          
    
           $contact_details->conatct_email=$request->conatct_email;
    
           
           $name_gen1=hexdec(uniqid());
           $img_ext1=strtolower($conatct_email_image->getClientOriginalExtension());
           $img_name1=$name_gen1. '.' .$img_ext1;
           $up_location1='images/contacts/';
           $last_img1=$up_location1.$img_name1;
           $conatct_email_image->move($up_location1,$img_name1);
           $contact_details->conatct_email_image=$last_img1;
    
    
           $contact_details->conatct_insta=$request->conatct_insta;
    
           
         
    
    
           $contact_details->conatct_register_office=$request->conatct_register_office;
           $contact_details->conatct_register_adress1=$request->conatct_register_adress1;
           $contact_details->conatct_register_adress2=$request->conatct_register_adress2;
           $contact_details->conatct_register_adress3=$request->conatct_register_adress3;
           $contact_details->conatct_ourlist=$request->conatct_ourlist;
           $contact_details->conatct_ourlist_text=$request->conatct_ourlist_text;
    
    
           $contact_details->save();
        
          $notification=array(
                  'message'=>'process Contact Details update Successfully',
                  'alert-type'=>'success'
          );
        
          return Redirect()->route('all.contact_details')->with($notification);
    
        
    }elseif ($conatct_insta_image) {
        $contact_details->conatct_header=$request->conatct_header;
        $contact_details->conatct_header_text=$request->conatct_header_text;
        $contact_details->conatct_number=$request->conatct_number;
    
    
            
           
    
           $contact_details->conatct_email=$request->conatct_email;
    
           
           
    
    
           $contact_details->conatct_insta=$request->conatct_insta;
    
           
           $name_gen1=hexdec(uniqid());
           $img_ext1=strtolower($conatct_insta_image->getClientOriginalExtension());
           $img_name1=$name_gen1. '.' .$img_ext1;
           $up_location1='images/contacts/';
           $last_img1=$up_location1.$img_name1;
           $conatct_insta_image->move($up_location1,$img_name1);
           $contact_details->conatct_insta_image=$last_img1;
    
    
           $contact_details->conatct_register_office=$request->conatct_register_office;
           $contact_details->conatct_register_adress1=$request->conatct_register_adress1;
           $contact_details->conatct_register_adress2=$request->conatct_register_adress2;
           $contact_details->conatct_register_adress3=$request->conatct_register_adress3;
           $contact_details->conatct_ourlist=$request->conatct_ourlist;
           $contact_details->conatct_ourlist_text=$request->conatct_ourlist_text;
    
    
           $contact_details->save();
        
          $notification=array(
                  'message'=>'process Contact Details Update Successfully',
                  'alert-type'=>'success'
          );
        
          return Redirect()->route('all.contact_details')->with($notification);
    
        
    }else {
        $contact_details->conatct_header=$request->conatct_header;
        $contact_details->conatct_header_text=$request->conatct_header_text;
        $contact_details->conatct_number=$request->conatct_number;

        $contact_details->conatct_email=$request->conatct_email;

        $contact_details->conatct_insta=$request->conatct_insta;
        $contact_details->conatct_register_office=$request->conatct_register_office;
        $contact_details->conatct_register_adress1=$request->conatct_register_adress1;
       $contact_details->conatct_register_adress2=$request->conatct_register_adress2;
       $contact_details->conatct_register_adress3=$request->conatct_register_adress3;
       $contact_details->conatct_ourlist=$request->conatct_ourlist;
       $contact_details->conatct_ourlist_text=$request->conatct_ourlist_text;


       $contact_details->save();
    
      $notification=array(
              'message'=>'process Contact Details Update Successfully',
              'alert-type'=>'success'
      );
    
      return Redirect()->route('all.contact_details')->with($notification);
        
    }

}
public function Contact_Details_Delete($id){
    $contact_details=Contact_Details::find($id);

    
    if (  $contact_details != null) {
    
        $contact_details->delete();

   $notification=array(
       'message'=>'contacts Details Deleted Successfully',
       'alert-type'=>'info'
   );

   return Redirect()->route('all.contact_details')->with($notification);

   }else{


       $notification=array(
           'message'=>'Wrong ID!!',
           'alert-type'=>'info'
       );
    
       return Redirect()->route('all.contact_details')->with($notification);


   }

}


public function privacy_policy(){
    $footers=Footers::orderBy('id','desc')->take(1)->get();

    return view('privacy-policy',compact('footers'));

}

public function terms_conditions(){
    $footers=Footers::orderBy('id','desc')->take(1)->get();

    return view('team-condition',compact('footers'));

}







}
