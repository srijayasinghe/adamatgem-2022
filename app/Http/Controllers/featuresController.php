<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Features;
use App\Models\Category;

class featuresController extends Controller
{
    public function feature(){


    }

    public function feature_new(){

        $categorys=Category::orderBy('id','desc')->get();

        return view('features-table',compact('categorys'));
        
    }

    public function feature_Add(Request $request){


        if($request->file('file')){

            $file = $request->file('file');
        
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
        
            $file->move(public_path('images/features-images'), $name);
        
            return response()->json([
                'name'          => $name,
                'original_name' => $file->getClientOriginalName(),
            ]);
    
    
           
        
          }


        $this->validate($request, [
            "category_id" =>'required',
            "feature_images"=>'required',
        
       ]);

       foreach($request->feature_images as $value){        
        $features=new Features();
        $features->category_id=$request->category_id;
        $features->feature_images=$value;  

        $features->save();
        
      }

 
     
        $notification=array(
            'message'=>'features Inserted Successfully',
            'alert-type'=>'success'
        );
     
        return Redirect()->route('all.category')->with($notification);
        
    }

    public function feature_Edit($id){
        $categorys=Category::orderBy('id','desc')->get();

        $features=Features::find($id);

        return view('features-edit',compact(['features','categorys']));

    }

    public function feature_Update(Request $request,$id){
        $features=Features::find($id); 

       
        $file = $request->file('feature_images');

        if($file){
   
       $name = uniqid() . '_' . trim($file->getClientOriginalName());
   
       $file->move(public_path('images/features-images'), $name);
   
 

       $features->category_id=$request->category_id;
       $features->feature_images=$name;
     

       $features->save();

        $notification=array(
            'message'=>'features update Successfully',
            'alert-type'=>'success'
        );
     
        

    }else{
        $features->category_id=$request->category_id;
      
     

       $features->save();

        $notification=array(
            'message'=>'features update Successfully',
            'alert-type'=>'success'
        );

    }
    
    return Redirect()->route('all.category')->with($notification);

    }

   



public function feature_Delete($id){

    $features=Features::find($id); 

  if($features !=null){

    $features->delete();

    $notification=array(
        'message'=>'Features Deleted Successfully',
        'alert-type'=>'info'
    );
 
    return Redirect()->route('all.category')->with($notification);

 }else{
    

    $notification=array(
        'message'=>'Wrong ID!!',
        'alert-type'=>'info'
    );
 
    return Redirect()->route('all.category')->with($notification);
 }


}

    



}
