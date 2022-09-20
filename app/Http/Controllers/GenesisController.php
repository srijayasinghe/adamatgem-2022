<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genesis_Headers;
use Illuminate\Support\Facades\DB;
use App\Models\Genesis_Seconds;
use App\Models\Genesis_Bodys;
use App\Models\Genesis_Lasts;
use App\Models\Genesis_Ends;

class GenesisController extends Controller
{
    public function Genesis_Header(){

        $genesis_headers=DB::table('genesis_headers')->select('id','genesis_header','genesis_body','created_at','updated_at')->orderBy('id','desc')->limit(1)->get();


        return view('backend/Genesis-header',compact('genesis_headers'));

    }

    public function Genesis_Header_new(){

        return view('backend/Genesis-header-table');
        
    }

    public function Genesis_Header_Add(Request $request){


        $this->validate($request, [
            "genesis_header" =>'required',
             "genesis_body" =>'required',

        
     

      ]);

      $genesis_headers=DB::table('genesis_headers')->select('id','genesis_header','genesis_body','created_at','updated_at')->orderBy('id','desc')->get();

      if($genesis_headers->count() <1){
      
      $genesis_headers= new Genesis_Headers();

      
      $genesis_headers->genesis_header=$request->genesis_header;

      $genesis_headers->genesis_body=$request->genesis_body;

      $genesis_headers->save();

      $notification=array(
              'message'=>'genesis header Insert Successfully',
             'alert-type'=>'success'
      );

          return Redirect()->route('all.genesis_header')->with($notification);
    }else{
        $notification=array(
            'message'=>'only one records',
            'alert-type'=>'error'
    );

        return Redirect()->route('all.genesis_header')->with($notification);

    }  
        
    }

    public function Genesis_Header_Edit($id){

        $genesis_headers=Genesis_Headers::find($id);

        return view('backend/Genesis-header-edit',compact('genesis_headers'));
        
    }

    public function Genesis_Header_Update(Request $request,$id){

        $genesis_headers=Genesis_Headers::find($id);

      
        $genesis_headers->genesis_header=$request->genesis_header;
  
        $genesis_headers->genesis_body=$request->genesis_body;
  
        $genesis_headers->save();
  
        $notification=array(
                'message'=>'genesis header Update Successfully',
               'alert-type'=>'success'
        );
  
            return Redirect()->route('all.genesis_header')->with($notification);
        
    }

    public function Genesis_Header_Delete($id){

        $genesis_headers=Genesis_Headers::find($id);

        if ( $genesis_headers != null) {
    
            $genesis_headers->delete();
    
        $notification=array(
            'message'=>'genesis Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.genesis_header')->with($notification);
    
        }else{
    
    
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'info'
            );
         
            return Redirect()->route('all.genesis_header')->with($notification);
    
        }
        
    }

  public function Genesis_Seconds(){

    $genesis_seconds=DB::table('genesis_seconds')->select('id','genesis_seconds_header','genesis_seconds_body','created_at','updated_at')->orderBy('id','desc')->limit(1)->get();


    return view('backend/Genesis-seconds',compact('genesis_seconds'));

  }

  public function Genesis_Seconds_new(){

    return view('backend/Genesis-seconds-table');
      
  }

public function Genesis_Seconds_Add(Request $request){

    
    $this->validate($request, [

        "genesis_seconds_header" =>'required',
         "genesis_seconds_body" =>'required',


    ]);
    $genesis_seconds=DB::table('genesis_seconds')->select('id','genesis_seconds_header','genesis_seconds_body','created_at','updated_at')->orderBy('id','desc')->get();
    if($genesis_seconds->count() <1 ){

    $genesis_seconds=new Genesis_Seconds();

    
    $genesis_seconds->genesis_seconds_header=$request->genesis_seconds_header;
  
    $genesis_seconds->genesis_seconds_body=$request->genesis_seconds_body;
  
    $genesis_seconds->save();
  
    $notification=array(
            'message'=>'genesis seconds insert Successfully',
           'alert-type'=>'success'
    );
  
        return Redirect()->route('all.genesis_seconds')->with($notification);

  
}else{

    $notification=array(
        'message'=>'only one records',
        'alert-type'=>'error'
);

    return Redirect()->route('all.genesis_seconds')->with($notification);

}
    

      
 }

public function Genesis_Seconds_Edit($id){

    
    $genesis_seconds=Genesis_Seconds::find($id);


    return view('backend/Genesis-seconds-edit',compact('genesis_seconds'));
      
}

public function Genesis_Seconds_Update(Request $request,$id){

    $genesis_seconds=Genesis_Seconds::find($id);

  
    $genesis_seconds->genesis_seconds_header=$request->genesis_seconds_header;
  
    $genesis_seconds->genesis_seconds_body=$request->genesis_seconds_body;
  
    $genesis_seconds->save();
  
    $notification=array(
            'message'=>'genesis seconds Update Successfully',
           'alert-type'=>'success'
    );
  
        return Redirect()->route('all.genesis_seconds')->with($notification);
      
}

public function Genesis_Seconds_Delete($id){

    $genesis_seconds=Genesis_Seconds::find($id);

    
    if ( $genesis_seconds != null) {
    
        $genesis_seconds->delete();

    $notification=array(
        'message'=>'genesis seconds Deleted Successfully',
        'alert-type'=>'info'
    );
 
    return Redirect()->route('all.genesis_seconds')->with($notification);

    }else{


        $notification=array(
            'message'=>'Wrong ID!!',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.genesis_seconds')->with($notification);

    }
      
}



public function Genesis_Body(){

    $genesis_bodys=DB::table('genesis_bodys')->select('id','genesis_body_header1','genesis_body_header2','genesis_body_text','genesis_body_image1','genesis_image1_header','genesis_image1_body','genesis_body_image2','genesis_image2_header','genesis_image2_body','created_at','updated_at')->orderBy('id','desc')->limit(1)->get();



    
    return view('backend/Genesis-body',compact('genesis_bodys'));

}
public function Genesis_Body_new(){
    
    return view('backend/Genesis-body-table');
    
}

public function Genesis_Body_Add(Request $request){

    

    $this->validate($request, [

        'genesis_body_header1'=>'required',
        'genesis_body_header2'=>'required',
        'genesis_body_text'=>'required',
        'genesis_body_image1'=>'required',
        'genesis_image1_header'=>'required',
        'genesis_image1_body'=>'required',
        'genesis_body_image2'=>'required',
        'genesis_image2_header'=>'required',
        'genesis_image2_body'=>'required',


    ]);

    $genesis_bodys=DB::table('genesis_bodys')->select('id','genesis_body_header1','genesis_body_header2','genesis_body_text','genesis_body_image1','genesis_image1_header','genesis_image1_body','genesis_body_image2','genesis_image2_header','genesis_image2_body','created_at','updated_at')->orderBy('id','desc')->get();

    if($genesis_bodys->count() <1){

    $genesis_bodys=new Genesis_Bodys();

    $genesis_bodys->genesis_body_header1=$request->genesis_body_header1;
    $genesis_bodys->genesis_body_header2=$request->genesis_body_header2;
    $genesis_bodys->genesis_body_text=$request->genesis_body_text;
   

    $genesis_body_image1=$request->file('genesis_body_image1'); 
    $name_gen1=hexdec(uniqid());
    $img_ext1=strtolower($genesis_body_image1->getClientOriginalExtension());
    $img_name1=$name_gen1. '.' .$img_ext1;
    $up_location1='images/Genesis-backend/';
    $last_img1=$up_location1.$img_name1;
    $genesis_body_image1->move($up_location1,$img_name1);
    $genesis_bodys->genesis_body_image1=$last_img1;


    $genesis_bodys->genesis_image1_header=$request->genesis_image1_header;

    $genesis_bodys->genesis_image1_body=$request->genesis_image1_body;


    $genesis_body_image2=$request->file('genesis_body_image2'); 
    $name_gen2=hexdec(uniqid());
    $img_ext2=strtolower($genesis_body_image2->getClientOriginalExtension());
    $img_name2=$name_gen2. '.' .$img_ext2;
    $up_location2='images/Genesis-backend/';
    $last_img2=$up_location2.$img_name2;
    $genesis_body_image2->move($up_location2,$img_name2);
    $genesis_bodys->genesis_body_image2=$last_img2;

    
    $genesis_bodys->genesis_image2_header=$request->genesis_image2_header;

    $genesis_bodys->genesis_image2_body=$request->genesis_image2_body;


    $genesis_bodys->save();
  
    $notification=array(
            'message'=>'genesis body insert Successfully',
           'alert-type'=>'success'
    );
  
        return Redirect()->route('all.genesis_body')->with($notification);

}else{
    $notification=array(
        'message'=>'only one records',
        'alert-type'=>'error'
);

    return Redirect()->route('all.genesis_body')->with($notification);

}


    
}

public function Genesis_Body_Edit($id){

    $genesis_bodys=Genesis_Bodys::find($id);
    
    return view('backend/Genesis-body-edit',compact('genesis_bodys'));
    
}

public function Genesis_Body_Update(Request $request,$id){

    $genesis_bodys=Genesis_Bodys::find($id);

    $genesis_body_image1=$request->file('genesis_body_image1'); 

    $genesis_body_image2=$request->file('genesis_body_image2'); 

    if($genesis_body_image1 AND $genesis_body_image2 ){

        $name_gen1=hexdec(uniqid());
        $img_ext1=strtolower($genesis_body_image1->getClientOriginalExtension());
        $img_name1=$name_gen1. '.' .$img_ext1;
        $up_location1='images/Genesis-backend/';
        $last_img1=$up_location1.$img_name1;
        $genesis_body_image1->move($up_location1,$img_name1);
        $genesis_bodys->genesis_body_image1=$last_img1;


        $name_gen2=hexdec(uniqid());
$img_ext2=strtolower($genesis_body_image2->getClientOriginalExtension());
$img_name2=$name_gen2. '.' .$img_ext2;
$up_location2='images/Genesis-backend/';
$last_img2=$up_location2.$img_name2;
$genesis_body_image2->move($up_location2,$img_name2);
$genesis_bodys->genesis_body_image2=$last_img2;


        $genesis_bodys->genesis_body_header1=$request->genesis_body_header1;
        $genesis_bodys->genesis_body_header2=$request->genesis_body_header2;
        $genesis_bodys->genesis_body_text=$request->genesis_body_text;
        $genesis_bodys->genesis_image1_header=$request->genesis_image1_header;
        $genesis_bodys->genesis_image1_body=$request->genesis_image1_body;
        $genesis_bodys->genesis_image2_header=$request->genesis_image2_header;
        $genesis_bodys->genesis_image2_body=$request->genesis_image2_body;


    $genesis_bodys->save();
  
    $notification=array(
            'message'=>'genesis body Update Successfully',
           'alert-type'=>'success'
    );
  
        return Redirect()->route('all.genesis_body')->with($notification);



    }elseif($genesis_body_image1){

        $name_gen1=hexdec(uniqid());
        $img_ext1=strtolower($genesis_body_image1->getClientOriginalExtension());
        $img_name1=$name_gen1. '.' .$img_ext1;
        $up_location1='images/Genesis-backend/';
        $last_img1=$up_location1.$img_name1;
        $genesis_body_image1->move($up_location1,$img_name1);
        $genesis_bodys->genesis_body_image1=$last_img1;


        $genesis_bodys->genesis_body_header1=$request->genesis_body_header1;
        $genesis_bodys->genesis_body_header2=$request->genesis_body_header2;
        $genesis_bodys->genesis_body_text=$request->genesis_body_text;
        $genesis_bodys->genesis_image1_header=$request->genesis_image1_header;
        $genesis_bodys->genesis_image1_body=$request->genesis_image1_body;
        $genesis_bodys->genesis_image2_header=$request->genesis_image2_header;
        $genesis_bodys->genesis_image2_body=$request->genesis_image2_body;


    $genesis_bodys->save();
  
    $notification=array(
            'message'=>'genesis body Update Successfully',
           'alert-type'=>'success'
    );
  
        return Redirect()->route('all.genesis_body')->with($notification);

}elseif ($genesis_body_image2) {

    
$name_gen2=hexdec(uniqid());
$img_ext2=strtolower($genesis_body_image2->getClientOriginalExtension());
$img_name2=$name_gen2. '.' .$img_ext2;
$up_location2='images/Genesis-backend/';
$last_img2=$up_location2.$img_name2;
$genesis_body_image2->move($up_location2,$img_name2);
$genesis_bodys->genesis_body_image2=$last_img2;


    $genesis_bodys->genesis_body_header1=$request->genesis_body_header1;
    $genesis_bodys->genesis_body_header2=$request->genesis_body_header2;
    $genesis_bodys->genesis_body_text=$request->genesis_body_text;
    $genesis_bodys->genesis_image1_header=$request->genesis_image1_header;
    $genesis_bodys->genesis_image1_body=$request->genesis_image1_body;
    $genesis_bodys->genesis_image2_header=$request->genesis_image2_header;
    $genesis_bodys->genesis_image2_body=$request->genesis_image2_body;


$genesis_bodys->save();

$notification=array(
        'message'=>'genesis body Update Successfully',
       'alert-type'=>'success'
);

    return Redirect()->route('all.genesis_body')->with($notification);
   


    }else{

        $genesis_bodys->genesis_body_header1=$request->genesis_body_header1;
        $genesis_bodys->genesis_body_header2=$request->genesis_body_header2;
        $genesis_bodys->genesis_body_text=$request->genesis_body_text;
        $genesis_bodys->genesis_image1_header=$request->genesis_image1_header;
        $genesis_bodys->genesis_image1_body=$request->genesis_image1_body;
        $genesis_bodys->genesis_image2_header=$request->genesis_image2_header;
        $genesis_bodys->genesis_image2_body=$request->genesis_image2_body;


        $genesis_bodys->save();
  
    $notification=array(
            'message'=>'genesis body Update Successfully',
           'alert-type'=>'success'
    );
  
        return Redirect()->route('all.genesis_body')->with($notification);

    }
    
}

public function Genesis_Body_Delete($id){

    $genesis_bodys=Genesis_Bodys::find($id);
    

    
    if ( $genesis_bodys != null) {
    
        $genesis_bodys->delete();

    $notification=array(
        'message'=>'genesis bodys Deleted Successfully',
        'alert-type'=>'info'
    );
 
    return Redirect()->route('all.genesis_body')->with($notification);

    }else{


        $notification=array(
            'message'=>'Wrong ID!!',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.genesis_body')->with($notification);

    }
}



public function Genesis_Lasts(){

    $genesis_lasts=Genesis_Lasts::orderBy('id','desc')->limit(1)->get();

    return view('backend/genesis-lasts',compact('genesis_lasts'));

}
public function Genesis_Lasts_new(){

    return view('backend/genesis-lasts-table');
    
}
public function Genesis_Lasts_Add(Request $request){


    $this->validate($request, [

        'genesis_lasts_header'=>'required',
        'genesis_lasts_text1'=>'required',
        'genesis_lasts_text2'=>'required',
        'genesis_lasts_text3'=>'required',
        'genesis_lasts_text4'=>'required',
        'genesis_lasts_text5'=>'required',


    ]);
    $genesis_lasts=Genesis_Lasts::orderBy('id','desc')->get();

    if($genesis_lasts->count() <1){

    $genesis_lasts=new Genesis_Lasts();

    $genesis_lasts->genesis_lasts_header=$request->genesis_lasts_header;
    
    $genesis_lasts->genesis_lasts_text1=$request->genesis_lasts_text1;
    
    $genesis_lasts->genesis_lasts_text2=$request->genesis_lasts_text2;
    
    $genesis_lasts->genesis_lasts_text3=$request->genesis_lasts_text3;

    $genesis_lasts->genesis_lasts_text4=$request->genesis_lasts_text4;

    $genesis_lasts->genesis_lasts_text5=$request->genesis_lasts_text5;



    
    $genesis_lasts->save();
  
    $notification=array(
            'message'=>'genesis last insert Successfully',
           'alert-type'=>'success'
    );
  
        return Redirect()->route('all.genesis_lasts')->with($notification);

}else{
    $notification=array(
        'message'=>'only one records',
        'alert-type'=>'error'
);

    return Redirect()->route('all.genesis_lasts')->with($notification);

}
    
}
public function Genesis_Lasts_Edit(Request $request,$id){

    $genesis_lasts=Genesis_Lasts::find($id);

    return view('backend/genesis-lasts-edit',compact('genesis_lasts'));
    
}
public function Genesis_Lasts_Update(Request $request,$id){

    $genesis_lasts=Genesis_Lasts::find($id);

    $genesis_lasts->genesis_lasts_header=$request->genesis_lasts_header;
    
    $genesis_lasts->genesis_lasts_text1=$request->genesis_lasts_text1;
    
    $genesis_lasts->genesis_lasts_text2=$request->genesis_lasts_text2;
    
    $genesis_lasts->genesis_lasts_text3=$request->genesis_lasts_text3;

    $genesis_lasts->genesis_lasts_text4=$request->genesis_lasts_text4;

    $genesis_lasts->genesis_lasts_text5=$request->genesis_lasts_text5;



    
    $genesis_lasts->save();
  
    $notification=array(
            'message'=>'genesis last Update Successfully',
           'alert-type'=>'success'
    );
  
        return Redirect()->route('all.genesis_lasts')->with($notification);
    
}
public function Genesis_Lasts_Delete($id){

    $genesis_lasts=Genesis_Lasts::find($id);


    if ( $genesis_lasts != null) {
    
        $genesis_lasts->delete();

    $notification=array(
        'message'=>'genesis lasts Deleted Successfully',
        'alert-type'=>'info'
    );
 
    return Redirect()->route('all.genesis_lasts')->with($notification);

    }else{


        $notification=array(
            'message'=>'Wrong ID!!',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.genesis_lasts')->with($notification);

    }
    
}


public function Genesis_Ends(){

    $genesis_ends=Genesis_Ends::orderBy('id','desc')->limit(1)->get();

    return view('backend/genesis-ends',compact('genesis_ends'));

}
public function Genesis_Ends_new(){
    return view('backend/genesis-ends-table');
    
}
public function Genesis_Ends_Add(Request $request){

   

    $this->validate($request, [

        
        'genesis_ends_text1'=>'required',
        'genesis_ends_text2'=>'required',
        'genesis_ends_text3'=>'required',
        'genesis_ends_image1'=>'required',
        'genesis_image1_text1'=>'required',
        'genesis_image1_text2'=>'required',
        'genesis_ends_image2'=>'required',
        'genesis_image2_text1'=>'required',
        'genesis_image2_text2'=>'required',


    ]);

    $genesis_ends=Genesis_Ends::orderBy('id','desc')->get();

    if($genesis_ends->count() < 1){

    $genesis_ends=new Genesis_Ends();

    $genesis_ends->genesis_ends_text1=$request->genesis_ends_text1;
    $genesis_ends->genesis_ends_text2=$request->genesis_ends_text2;
    $genesis_ends->genesis_ends_text3=$request->genesis_ends_text3;


    $genesis_ends_image1=$request->file('genesis_ends_image1'); 
    $name_gen1=hexdec(uniqid());
    $img_ext1=strtolower($genesis_ends_image1->getClientOriginalExtension());
    $img_name1=$name_gen1. '.' .$img_ext1;
    $up_location1='images/genesis_new/';
    $last_img1=$up_location1.$img_name1;
    $genesis_ends_image1->move($up_location1,$img_name1);
    $genesis_ends->genesis_ends_image1=$last_img1;

    $genesis_ends->genesis_image1_text1=$request->genesis_image1_text1;
    $genesis_ends->genesis_image1_text2=$request->genesis_image1_text2;


    $genesis_ends_image2=$request->file('genesis_ends_image2'); 
    $name_gen2=hexdec(uniqid());
    $img_ext2=strtolower($genesis_ends_image2->getClientOriginalExtension());
    $img_name2=$name_gen2. '.' .$img_ext2;
    $up_location2='images/genesis_new/';
    $last_img2=$up_location2.$img_name2;
    $genesis_ends_image2->move($up_location2,$img_name2);
    $genesis_ends->genesis_ends_image2=$last_img2;

    $genesis_ends->genesis_image2_text1=$request->genesis_image2_text1;
    $genesis_ends->genesis_image2_text2=$request->genesis_image2_text2;


    $genesis_ends->save();
  
    $notification=array(
            'message'=>'genesis ends insert Successfully',
           'alert-type'=>'success'
    );
  
    return Redirect()->route('all.genesis_ends')->with($notification);

    }else{
        $notification=array(
            'message'=>'only one records',
            'alert-type'=>'error'
    );
  
    return Redirect()->route('all.genesis_ends')->with($notification);

    }
    
}


public function Genesis_Ends_Edit($id){

    $genesis_ends=Genesis_Ends::find($id);

    return view('backend/genesis-ends-edit',compact('genesis_ends'));
    
}
public function Genesis_Ends_Update(Request $request, $id){

    $genesis_ends=Genesis_Ends::find($id);

    $genesis_ends_image1=$request->file('genesis_ends_image1'); 
    
    $genesis_ends_image2=$request->file('genesis_ends_image2'); 

if($genesis_ends_image1 AND $genesis_ends_image2) {

    $genesis_ends->genesis_ends_text1=$request->genesis_ends_text1;
    $genesis_ends->genesis_ends_text2=$request->genesis_ends_text2;
    $genesis_ends->genesis_ends_text3=$request->genesis_ends_text3;

$name_gen1=hexdec(uniqid());
$img_ext1=strtolower($genesis_ends_image1->getClientOriginalExtension());
$img_name1=$name_gen1. '.' .$img_ext1;
$up_location1='images/genesis_new/';
$last_img1=$up_location1.$img_name1;
$genesis_ends_image1->move($up_location1,$img_name1);
$genesis_ends->genesis_ends_image1=$last_img1;

$genesis_ends->genesis_image1_text1=$request->genesis_image1_text1;
$genesis_ends->genesis_image1_text2=$request->genesis_image1_text2;


 
$name_gen2=hexdec(uniqid());
$img_ext2=strtolower($genesis_ends_image2->getClientOriginalExtension());
$img_name2=$name_gen2. '.' .$img_ext2;
$up_location2='images/genesis_new/';
$last_img2=$up_location2.$img_name2;
$genesis_ends_image2->move($up_location2,$img_name2);
$genesis_ends->genesis_ends_image2=$last_img2;

$genesis_ends->genesis_image2_text1=$request->genesis_image2_text1;
$genesis_ends->genesis_image2_text2=$request->genesis_image2_text2;


$genesis_ends->save();

$notification=array(
        'message'=>'genesis ends Update Successfully',
       'alert-type'=>'success'
);

return Redirect()->route('all.genesis_ends')->with($notification);




}elseif($genesis_ends_image1){

        $genesis_ends->genesis_ends_text1=$request->genesis_ends_text1;
        $genesis_ends->genesis_ends_text2=$request->genesis_ends_text2;
        $genesis_ends->genesis_ends_text3=$request->genesis_ends_text3;

    $name_gen1=hexdec(uniqid());
    $img_ext1=strtolower($genesis_ends_image1->getClientOriginalExtension());
    $img_name1=$name_gen1. '.' .$img_ext1;
    $up_location1='images/genesis_new/';
    $last_img1=$up_location1.$img_name1;
    $genesis_ends_image1->move($up_location1,$img_name1);
    $genesis_ends->genesis_ends_image1=$last_img1;

    $genesis_ends->genesis_image1_text1=$request->genesis_image1_text1;
    $genesis_ends->genesis_image1_text2=$request->genesis_image1_text2;


    $genesis_ends->save();
  
    $notification=array(
            'message'=>'genesis ends Update Successfully',
           'alert-type'=>'success'
    );
  
    return Redirect()->route('all.genesis_ends')->with($notification);

}elseif ($genesis_ends_image2) {

    
    $genesis_ends->genesis_ends_text1=$request->genesis_ends_text1;
    $genesis_ends->genesis_ends_text2=$request->genesis_ends_text2;
    $genesis_ends->genesis_ends_text3=$request->genesis_ends_text3;


 
$name_gen2=hexdec(uniqid());
$img_ext2=strtolower($genesis_ends_image2->getClientOriginalExtension());
$img_name2=$name_gen2. '.' .$img_ext2;
$up_location2='images/genesis_new/';
$last_img2=$up_location2.$img_name2;
$genesis_ends_image2->move($up_location2,$img_name2);
$genesis_ends->genesis_ends_image2=$last_img2;

$genesis_ends->genesis_image2_text1=$request->genesis_image2_text1;
$genesis_ends->genesis_image2_text2=$request->genesis_image2_text2;


$genesis_ends->save();

$notification=array(
        'message'=>'genesis ends Update Successfully',
       'alert-type'=>'success'
);

return Redirect()->route('all.genesis_ends')->with($notification);
    



    }else {

        $genesis_ends->genesis_ends_text1=$request->genesis_ends_text1;
        $genesis_ends->genesis_ends_text2=$request->genesis_ends_text2;
        $genesis_ends->genesis_ends_text3=$request->genesis_ends_text3;

        $genesis_ends->genesis_image1_text1=$request->genesis_image1_text1;
        $genesis_ends->genesis_image1_text2=$request->genesis_image1_text2;


        $genesis_ends->genesis_image2_text1=$request->genesis_image2_text1;
        $genesis_ends->genesis_image2_text2=$request->genesis_image2_text2;


        $genesis_ends->save();
  
        $notification=array(
            'message'=>'genesis ends Update Successfully',
           'alert-type'=>'success'
        );
  
        return Redirect()->route('all.genesis_ends')->with($notification);
        
    }


    
}
public function Genesis_Ends_Delete($id){

    $genesis_ends=Genesis_Ends::find($id);


    if (  $genesis_ends != null) {
    
        $genesis_ends->delete();

    $notification=array(
        'message'=>'genesis ends Deleted Successfully',
        'alert-type'=>'info'
    );
 
    return Redirect()->route('all.genesis_ends')->with($notification);

    }else{


        $notification=array(
            'message'=>'Wrong ID!!',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.genesis_ends')->with($notification);

    }


    
}






}
