<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facedes\Image;


use App\Models\Journal;

class Journalcontroller extends Controller{

public function Journal(){

        $journal=Journal::orderBy('id','desc')->get();

        return view('Journal',compact('journal'));
    }


public function Journal_new(){
        
        return view('Journal-table');
    }

public function uploadImage(Request $request){

    
    if($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName.'_'.time().'.'.$extension;
        $request->file('upload')->move(public_path('images/post/'), $fileName);
        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('images/post/'.$fileName); 
        
        $msg = 'Image successfully uploaded'; 
        $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
           
        @header('Content-type: text/html; charset=utf-8'); 
        echo $response;
    }
    

}




public function Journal_Add(Request $request){
   
        $this->validate($request, [
            "post_text" =>'required',
            "post_main_image" =>'required',
            "post_body" =>'required',
           
   ]);
  

    $journal=new Journal();

    $journal->post_text=$request->post_text;

    $journal->post_body=$request->post_body;

    $post_main_image=$request->file('post_main_image');

    $name_gen=hexdec(uniqid());

    $img_ext=strtolower($post_main_image->getClientOriginalExtension());

    $img_name=$name_gen. '.' .$img_ext;

    $up_location='images/Journal_fq/';

    $last_img=$up_location.$img_name;

    $post_main_image->move($up_location,$img_name);


    $journal->post_main_image=$last_img;

    $journal->save();

    $notification=array(
        'message'=>'Journal Inserted Successfully',
        'alert-type'=>'success'
       );

     return Redirect()->route('all.journal')->with($notification);
     
       
    }


public function Journal_Edit($id){

       $journal=Journal::findOrFail($id);

        return view('edit-Journal',compact('journal'));

    }

public function Journal_Update(Request $request,$id){


        $journal=Journal::findOrFail($id);

        $journal->post_text=$request->post_text;


        $journal->post_body=$request->post_body;


        $post_main_image=$request->file('post_main_image');

   if($post_main_image){

      $name_gen=hexdec(uniqid());

      $img_ext=strtolower($post_main_image->getClientOriginalExtension());

      $img_name=$name_gen. '.' .$img_ext;

      $up_location='images/Journal_fq/';

      $last_img=$up_location.$img_name;

      $post_main_image->move($up_location,$img_name);


      $journal->post_main_image=$last_img;

      $journal->save();

      $notification=array(
        'message'=>'Journal Update Successfully',
        'alert-type'=>'success'
       );

       return Redirect()->route('all.journal')->with($notification);

    }else{
        
       $journal->post_text=$request->post_text;

       $journal->post_body=$request->post_body;

       $journal->save();

       $notification=array(
        'message'=>'Journal Update Successfully',
        'alert-type'=>'success'
       );

       return Redirect()->route('all.journal')->with($notification);

    }

        


    }

public function Journal_Delete($id){

        $journal=Journal::findOrFail($id);

        $journal->delete();

        $notification=array(
            'message'=>'Journal Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.journal')->with($notification);

    }

   
}
