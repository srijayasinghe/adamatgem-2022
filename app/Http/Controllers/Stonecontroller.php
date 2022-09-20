<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Category;
use App\Models\Available;
use App\Models\Clarity;
use App\Models\Enhancements;
use App\Models\Shape;
use File;
use App\Models\Stone;
use App\Models\Gallery;
use App\Models\GalleryImages;
use App\Models\Galleryshow;
use App\Models\Galleryshowdata;
use App\Models\Stoneshow;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Reviews;
use App\Models\Faq_Category;
use App\Models\Faq;
use App\Models\FaqShow;
use App\Models\Review_Headers;
use App\Models\Activity;
use App\Models\Variety;
use App\Models\CategoryShow;
use Exception;



class Stonecontroller extends Controller
{

   public function Activitylog(){

    $data['allData']=Activity::orderBy('id','desc')->get();

     

    return view('activitylog',$data);

   }

    public function Category(){

        $categorys=Category::orderBy('id','desc')->get();

       

        return view('category',compact('categorys'));
        
    }

    public function Category_new(){
        

        return view('category-table');
    }
    
 
    //add category
    public function Category_Add(Request $request){

       

      $this->validate($request, [
               "category_name" =>'required',
               "category_image" =>'required',
               "category_description" =>'required',
        
  
      ]);

      $category = new Category();

      $category->category_name=$request->category_name;


      

      
      $category_image=$request->file('category_image');

      $name_gen=hexdec(uniqid());

      $img_ext=strtolower($category_image->getClientOriginalExtension());

      $img_name=$name_gen. '.' .$img_ext;

      $up_location='images/category-images/';

      $last_img=$up_location.$img_name;

      $category_image->move($up_location,$img_name);


      $category->category_image=$last_img;



      $category->category_description=$request->category_description;
      $category->name_value=$request->name_value;
      $category->description_value=$request->description_value;
      
      $category->save();

      $notification=array(
          'message'=>'Category Inserted Successfully',
          'alert-type'=>'success'
      );

      return Redirect()->route('all.category')->with($notification);
       



    }

    public function Category_image_Sortable(Request $request){

       

        

        $stones=Stone::Where('category_id',$request->category_id)
        ->Where('value',1)
        ->OrderBy('id','desc')
        ->get();


       

    foreach ($stones as $stoness) {
        foreach ($request->order as $order) {
            if ($order['id'] == $stoness->id) {

                $stoness->update(['order' => $order['position']]);

                

            }
        }
    }
    
    return response('Update Successfully.', 200);



    }


    public function Category_Edit($id){

   

        $category=Category::findOrFail($id);

        $stones=Stone::Where('category_id',$id)
               ->Where('value',1)
               ->OrderBy('id','desc')
               ->get();


              


        
     
       

       try{

        return view('edit-category',compact(['category','stones']));

        

      }catch(\Exception $e){

         return view('errors.404');

        }
        
    }

    public function Category_Update(Request $request,$id){


   $category=Category::findOrFail($id);

   $category->category_name=$request->category_name;

   $category_image=$request->file('category_image');


   if($category_image){

      $name_gen=hexdec(uniqid());

      $img_ext=strtolower($category_image->getClientOriginalExtension());

      $img_name=$name_gen. '.' .$img_ext;

      $up_location='images/category-images/';

      $last_img=$up_location.$img_name;

      $category_image->move($up_location,$img_name);


      $category->category_image=$last_img;



      $category->category_description=$request->category_description;
      $category->name_value=$request->name_value;
      $category->description_value=$request->description_value;
      
   $category->save();

   $notification=array(
       'message'=>'Category Update Successfully',
       'alert-type'=>'success'
   );

   return Redirect()->route('all.category')->with($notification);


}else{
    $category=Category::findOrFail($id);

   $category->category_name=$request->category_name;

   $category->category_description=$request->category_description;
   $category->name_value=$request->name_value;
   $category->description_value=$request->description_value;
      
   $category->save();

   $notification=array(
       'message'=>'Category Update Successfully',
       'alert-type'=>'success'
   );

   return Redirect()->route('all.category')->with($notification);

}

    }
   public function Category_Delete($id){

    
    $category=Category::find($id);

    if ($category != null) {

    $category->delete();

    $notification=array(
        'message'=>'Category Deleted Successfully',
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

    //add color
    public function Color(){
        $colors=Color::orderBy('id','desc')->get();
       
        return view('color',compact('colors'));
    }

    public function Color_new(){
        return view('color-table');
    }

    public function Color_Add(Request $request){

        $this->validate($request, [
            "color_name" =>'required',
            "color_code" =>'required',
            "color_description" =>'required',
     

   ]);

   $color=new Color();

   $color->color_name=$request->color_name;
   $color->color_code=$request->color_code;
   $color->color_description=$request->color_description;
   $color->save();

   $notification=array(
       'message'=>'Color Inserted Successfully',
       'alert-type'=>'success'
   );

   return Redirect()->route('all.color')->with($notification);
    }

    public function Color_Edit($id){

        $colors=Color::findOrFail($id);

        try{

         
        return view('edit-color',compact('colors'));

        
       }catch(\Exception $e){

       return view('errors.404');
       }
      

    }

    public function Color_Update(Request $request,$id){

        $color=Color::findOrFail($id);

        $color->color_name=$request->color_name;
        $color->color_code=$request->color_code;
        $color->color_description=$request->color_description;
        $color->save();
     
        $notification=array(
            'message'=>'Color Update Successfully',
            'alert-type'=>'success'
        );
     
        return Redirect()->route('all.color')->with($notification);
        
    }

    public function Color_Delete($id){
        
        $color=Color::findOrFail($id);


        if($color !=null){

        

        $color->delete();

        $notification=array(
            'message'=>'Color Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.color')->with($notification);

    }else{
        

        $notification=array(
            'message'=>'Wrong ID!!',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.color')->with($notification);
    }
        
    }


//avalable
    public function Available(){

        $availability=Available::orderBy('id','desc')->get();
        return view('available',compact('availability'));
    }
    public function Available_new(){
        return view('available-table');
    }

    public function Available_Add(Request $request){
        $this->validate($request, [
            "Available_name" =>'required',
           
     

         ]);

   $availability=new Available();

   $availability->Available_name=$request->Available_name;

   $availability->save();

   $notification=array(
       'message'=>'Availability Inserted Successfully',
       'alert-type'=>'success'
   );

   return Redirect()->route('all.available')->with($notification);

    }

    public function Available_Edit($id){

        $availability=Available::findOrFail($id);

        return view('edit-available',compact('availability'));

    }

    public function Available_Update(Request $request, $id){

        $availability=Available::findOrFail($id);

        $availability->Available_name=$request->Available_name;
     
        $availability->save();
     
        $notification=array(
            'message'=>'Availability Update Successfully',
            'alert-type'=>'success'
        );
     
        return Redirect()->route('all.available')->with($notification);

    }

    public function Available_Delete($id){

        $availability=Available::findOrFail($id);

        if($availability !=null){

        $availability->delete();

        $notification=array(
            'message'=>'Availability Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.available')->with($notification);

    }else{

        $notification=array(
            'message'=>'Wrong ID!!',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.available')->with($notification);

    }
    
    }


//clarity
    public function Clarity(){
        $clarity=Clarity::orderBy('id','desc')->get();
         return view('clarity',compact('clarity'));
    }
    
    public function Clarity_new(){
      return view('clarity-table');
    }
    public function Clarity_Add(Request $request){

        $this->validate($request, [
            "clarity_name" =>'required',
           
     

   ]);

      $clarity=new Clarity();

      $clarity->clarity_name=$request->clarity_name;
      $clarity->clarity_description=$request->clarity_description;

      $clarity->save();

      $notification=array(
           'message'=>'clarity Inserted Successfully',
           'alert-type'=>'success'
    );

   return Redirect()->route('all.clarity')->with($notification);


    }

    public function Clarity_Edit($id){

        $clarity=Clarity::findOrFail($id);

        return view('edit-clarity',compact('clarity'));

    }
    public function Clarity_Update(Request $request,$id){

        $clarity=Clarity::findOrFail($id);


        $clarity->clarity_name=$request->clarity_name;
        $clarity->clarity_description=$request->clarity_description;
  
        $clarity->save();
  
        $notification=array(
             'message'=>'clarity Update Successfully',
             'alert-type'=>'success'
      );
  
     return Redirect()->route('all.clarity')->with($notification);
        
    }
    public function Clarity_Delete($id){

        $clarity=Clarity::findOrFail($id);

        if($clarity !=null){

        $clarity->delete();

        $notification=array(
            'message'=>'Charity Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.clarity')->with($notification);
        
    }else{
        $notification=array(
            'message'=>'Wrong ID!!',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.clarity')->with($notification);
        
    } 
    }

    //enhancements

    public function Enhancements(){

        $enhancements=Enhancements::orderBy('id','desc')->get();

        return view('enhancements',compact('enhancements'));

    }
    public function Enhancements_new(){
        return view('enhancements-table');
    }
    public function Enhancements_Add(Request $request){


        $this->validate($request, [
            "enhancement_name" =>'required',
           
     

   ]);

      $enhancement=new Enhancements();

      $enhancement->enhancement_name=$request->enhancement_name;
      $enhancement->enhancement_description=$request->enhancement_description;

      $enhancement->save();

      $notification=array(
           'message'=>'Enhancement Inserted Successfully',
           'alert-type'=>'success'
    );

   return Redirect()->route('all.enhancements')->with($notification);
        
    }

    public function Enhancements_Edit($id){
        $enhancement=Enhancements::findOrFail($id);

        return view('edit-enhancements',compact('enhancement'));

    }
    public function Enhancements_Update(Request $request,$id){

        $enhancement=Enhancements::findOrFail($id);

      $enhancement->enhancement_name=$request->enhancement_name;
      $enhancement->enhancement_description=$request->enhancement_description;

      $enhancement->save();

      $notification=array(
           'message'=>'Enhancement Update Successfully',
           'alert-type'=>'success'
    );

   return Redirect()->route('all.enhancements')->with($notification);
        
    }
    public function Enhancements_Delete($id){
        $enhancement=Enhancements::findOrFail($id);  

         if($enhancement !=null){

        $enhancement->delete();

        $notification=array(
            'message'=>'Enhancements Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.enhancements')->with($notification);

    }else{
        

        $notification=array(
            'message'=>'Wrong ID!!',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.enhancements')->with($notification);
    }
    }

    //shape

    public function Shape(){
        $shape=Shape::orderBy('id','desc')->get();

       return view('shape',compact('shape'));
    }

    public function Shape_new(){
        return view('shape-table');
    }

    public function Shape_Add(Request $request){

    

        $this->validate($request, [
            "shape_name" =>'required',
            "shape_image" =>'required',
            "shape_description" =>'required',
           
           

   ]);

      $shape=new Shape();

      $shape->shape_name=$request->shape_name;


       $shape_image=$request->file('shape_image');

       $name_gen=hexdec(uniqid());

       $img_ext=strtolower($shape_image->getClientOriginalExtension());

       $img_name=$name_gen. '.' .$img_ext;

       $up_location='images/shape/';

       $last_img=$up_location.$img_name;

       $shape_image->move($up_location,$img_name);


       $shape->shape_image=$last_img;
       $shape->shape_description=$request->shape_description;

      $shape->save();

      $notification=array(
           'message'=>'Shape Inserted Successfully',
           'alert-type'=>'success'
    );

    return Redirect()->route('all.shape')->with($notification);

        
        
    }

    public function Shape_Edit($id){
        $shape=Shape::findOrFail($id);

        return view('edit-shape',compact('shape'));

    }

    public function Shape_Update(Request $request, $id){

        $shape=Shape::findOrFail($id);

        $old_image=$request->old_image;

        $shape_image=$request->file('shape_image');


         if($shape_image){

         $name_gen=hexdec(uniqid());
  
         $img_ext=strtolower($shape_image->getClientOriginalExtension());
  
         $img_name=$name_gen. '.' .$img_ext;
  
         $up_location='images/shape/';
  
         $last_img=$up_location.$img_name;
  
         $shape_image->move($up_location,$img_name);
  
         unlink($old_image); 
         $shape->shape_name=$request->shape_name; 
         $shape->shape_image=$last_img;
         $shape->shape_description=$request->shape_description;
  
        $shape->save();
  
        $notification=array(
             'message'=>'Shape Update Successfully',
             'alert-type'=>'success'
      );
  
            return Redirect()->route('all.shape')->with($notification);

         }else{

            $shape->shape_name=$request->shape_name; 
            $shape->shape_description=$request->shape_description;
     
           $shape->save();
     
           $notification=array(
                'message'=>'Shape Update Successfully',
                'alert-type'=>'success'
         );
     
               return Redirect()->route('all.shape')->with($notification);

         }
  
         

    }

    public function Shape_Delete($id){

        $shape=Shape::findOrFail($id);

        if($shape !=null){

        
        $shape->delete();

        $notification=array(
            'message'=>'Shape Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.shape')->with($notification);

    }else{
        

        $notification=array(
            'message'=>'Wrong ID!!',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.shape')->with($notification);
    }
        
    }


//gallery
public function Gallery(){
    $gallery=Gallery::orderBy('id','desc')->get();

    

    $data=Galleryshowdata::orderBy('order','ASC')->get();

    return view('gallery',compact(['gallery','data']));


        
}

public function Gallery_new(){
    return view('gallery-table');    
}

public function Gallery_Add(Request $request){

    $this->validate($request, [
        "gallery_name" =>'required',
        "gallery_description" =>'required',
    ]);

    

        $gallery=new Gallery();

        $gallery->gallery_name=$request->gallery_name;  
        
        $gallery->gallery_description=$request->gallery_description;

        $gallery->save();

        $notification=array(
        'message'=>'Gallery Inserted Successfully',
        'alert-type'=>'success'
       );

       return Redirect()->route('all.gallery')->with($notification);

}

public function Gallery_Edit($id){

    $gallery=Gallery::find($id);

    return view('newgallery-image',compact('gallery'));

}

public function Gallery_Update(Request $request,$id){

      $gallery=Gallery::find($id);

        $gallery->gallery_name=$request->gallery_name;  
        
        $gallery->gallery_description=$request->gallery_description;

        $gallery->save();

        $notification=array(
        'message'=>'Gallery Update Successfully',
        'alert-type'=>'success'
       );

       return Redirect()->route('all.gallery')->with($notification);

}

public function Gallery_Delete($id){

    

   

    $gallery=Gallery::find($id);

 if($gallery !=null){

    $gallery->delete();

    $notification=array(
        'message'=>'Gallery Deleted Successfully',
        'alert-type'=>'info'
    );
 
    
    return Redirect()->route('all.gallery')->with($notification);
 }else{
   

    $notification=array(
        'message'=>'Wrong ID!!',
        'alert-type'=>'info'
    );
 
    
    return Redirect()->route('all.gallery')->with($notification);
 }

    

}









  public function Gallery_Image(){

    return view('all.gallery');
  }

   public function Gallery_Image_new(){
  
    $gallery=Gallery::orderBy('id','desc')->get();

    return view('gallery-image-table',compact('gallery'));


    }

 public function Gallery_Image_Add(Request $request){

    if($request->file('file')){

        $file = $request->file('file');
    
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
    
        $file->move(public_path('images/stone-gallery'), $name);
            
        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);


       
    
      }
 

      foreach($request->gallery_image as $value){        
        $gallery_image=new GalleryImages();
        $gallery_image->gallery_id=$request->gallery_id;
        $gallery_image->gallery_image=$value;  

        $gallery_image->save();
        
      }

      $notification=array(
        'message'=>'Gallery Image Inserted Successfully',
        'alert-type'=>'success'
       );

       return Redirect()->route('all.gallery')->with($notification);


}

public function Gallery_Image_Edit($id){
    $data['editData']=Galleryshowdata::find($id);
    $data['gallery']=Gallery::orderBy('id','desc')->get();
 
    return view('edit-gallery',$data);

}
public function Post_Sortable(Request $request)
{


    $posts=GalleryImages::orderBy('id','desc')->get();

    foreach ($posts as $post) {
        foreach ($request->order as $order) {
            if ($order['id'] == $post->id) {

                $post->update(['order' => $order['position']]);

            }
        }
    }
    
    return response('Update Successfully.', 200);
}

public function FAQ_Sortable(Request $request)
{

    
    $faqs=Faq_Category::orderBy('id','desc')->get();

    foreach ($faqs as $faq) {
        foreach ($request->order as $order) {
            if ($order['id'] == $faq->id) {

                $faq->update(['order' => $order['position']]);

            }
        }
    }
    
    return response('Update Successfully.', 200);
}



public function Gallery_Image_Update(Request $request,$id){

   

       $gallery_image=Galleryshowdata::find($id);
         
      
        $file = $request->file('gallery_image');

         if($file){
    
           
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move(public_path('images/stone-gallery'), $name);
           
    
  

       $gallery_image->gallery_id=$request->gallery_id;
       $gallery_image->gallery_image =$name;
      

       $gallery_image->save();

      $notification=array(
        'message'=>'Gallery Image Update Successfully',
        'alert-type'=>'success'
       );

    }else{
        $gallery_image->gallery_id=$request->gallery_id; 

        $gallery_image->save();

        $notification=array(
          'message'=>'Gallery Image Update Successfully',
          'alert-type'=>'success'
         );
    }


       return Redirect()->route('all.gallery')->with($notification);

}

 public function Gallery_Image_Delete($id){


    $data=GalleryImages::find($id);

    

  if($data !=null){

    $distanation=public_path('images/stone-gallery').$data->gallery_image;

    if(File::exists($distanation)){
        
        File::delete($distanation);
    }

    $data->delete();

    $notification=array(
        'message'=>'Gallery Deleted Successfully',
        'alert-type'=>'info'
    );
 
    return Redirect()->route('all.gallery')->with($notification);

 }else{
    

    $notification=array(
        'message'=>'Wrong ID!!',
        'alert-type'=>'info'
    );
 
    return Redirect()->route('all.gallery')->with($notification);
 }
}


public function Gallery_multiple_Delete(Request $request){


   



      if($request->id){

  
       $id = $request->id;
		foreach ($id as $user) 
		{


            GalleryImages::where('id', $user)->delete();

            
		}
        $notification=array(
            'message'=>'Gallery Images Deleted Successfully',
            'alert-type'=>'info'
        );
     

        return Redirect()->route('all.gallery')->with($notification);


    }else{
        $notification=array(
            'message'=>'gallery images required ',
            'alert-type'=>'info'
        );
     

        return Redirect()->route('all.gallery')->with($notification);

    }


    
   
}












  
   

 








    //stone

    public function Stone(){

     
        $data['allData']=Stoneshow::orderBy('id','desc')->get();

      
   
        return view('stone',$data);



      
     
      
    }

    public function Stone_new(){
        $category= Category::orderBy('id','desc')->get();
        $clarity=Clarity::orderBy('id','desc')->get();
        $color=Color::orderBy('id','desc')->get();
        $availability=Available::orderBy('id','desc')->get();
        $enhancement=Enhancements::orderBy('id','desc')->get();
        $shape=Shape::orderBy('id','asc')->get();
        $gallery=Gallery::orderBy('id','desc')->get();
        $Variety=Variety::orderBy('id','desc')->get();
       
   

        return view('stone-table',compact(['category','Variety','gallery','clarity','color','availability','enhancement','shape']));
    }


    public function Stone_Add(Request $request){

        $this->validate($request, [
            "product_name" =>'required',
            "product_description" =>'required',
            "product_image"=>'required',     
            
        ]);

   


      $stone=new Stone();
     

      $stone->product_name=$request->product_name;
      $stone->product_description=$request->product_description;


      $product_image=$request->file('product_image');
      $name_gen=hexdec(uniqid());
      $img_ext=strtolower($product_image->getClientOriginalExtension());
      $img_name=$name_gen. '.' .$img_ext;
      $up_location='images/stone-banner/';
      $last_img=$up_location.$img_name;
      $product_image->move($up_location,$img_name);
      $stone->product_image=$last_img;




      $stone->category_id=$request->category_id;
      $stone->Available_id=$request->Available_id;
      $stone->color_id=$request->color_id;
      $stone->clarity_id=$request->clarity_id;
      $stone->enhancement_id=$request->enhancement_id;
      $stone->shape_id=$request->shape_id;
      $stone->Variety_id=$request->Variety_id;
      $stone->gallery_id=$request->gallery_id;

      $stone->value=$request->value;
      $stone->solid=$request->solid;
      $stone->color=$request->color;

      $stone->Shape_Cut=$request->Shape_Cut;

      $stone->product_dimensions=$request->product_dimensions;
      $stone->product_treatments=$request->product_treatments;
      $stone->product_labreport=$request->product_labreport;
      $stone->product_price=$request->product_price;
      $stone->product_Weight=$request->product_Weight;
      
      $stone->Stone_Weight_Description=$request->Stone_Weight_Description;
      $stone->product_variety=$request->product_variety;

     

    
      $stone->save();

      $notification=array(
        'message'=>'Stone Inserted Successfully',
        'alert-type'=>'success'
       );

       return Redirect()->route('all.stone')->with($notification);
     

    

        
        
    }

    public function Stone_Edit($id){
        $data['editData']=Stoneshow::findOrFail($id);
        $data['category']= Category::orderBy('id','asc')->get();
        $data['clarity']=Clarity::orderBy('id','asc')->get();
        $data['color']=Color::orderBy('id','asc')->get();
        $data['availability']=Available::orderBy('id','asc')->get();
        $data['enhancement']=Enhancements::orderBy('id','asc')->get();
        $data['shape']=Shape::orderBy('id','asc')->get();
        $data['gallery']=Gallery::orderBy('id','asc')->get();
        $data['Variety']=Variety::orderBy('id','asc')->get();

       
       

        return view('edit-stone',$data);
    }


    public function Stone_Update(Request $request,$id){


      $stone=Stone::findOrFail($id);

    
      $old_image=$request->old_image;

      $product_image=$request->file('product_image');


      if($product_image){

      $name_gen=hexdec(uniqid());

      $img_ext=strtolower($product_image->getClientOriginalExtension());

      $img_name=$name_gen. '.' .$img_ext;

      $up_location='images/stone-banner/';

      $last_img=$up_location.$img_name;

      $product_image->move($up_location,$img_name);

       unlink($old_image); 
       $stone->product_image=$last_img;


      $stone->save();

      $notification=array(
        'message'=>'Stone Update Successfully',
        'alert-type'=>'success'
       );

       return Redirect()->route('all.stone')->with($notification);
    

     }else{

      $stone->product_name=$request->product_name;
      $stone->product_description=$request->product_description;
      $stone->category_id=$request->category_id;
      $stone->Available_id=$request->Available_id;
      $stone->color_id=$request->color_id;
      $stone->clarity_id=$request->clarity_id;
      $stone->gallery_id=$request->gallery_id;
      $stone->enhancement_id=$request->enhancement_id;
      $stone->shape_id=$request->shape_id;
      $stone->Variety_id=$request->Variety_id;
      $stone->value=$request->value;
      $stone->solid=$request->solid;

      $stone->Shape_Cut=$request->Shape_Cut;
      
      
      $stone->color=$request->color;
      $stone->product_dimensions=$request->product_dimensions;
      $stone->product_treatments=$request->product_treatments;
      $stone->product_labreport=$request->product_labreport;
      $stone->product_price=$request->product_price;
      $stone->product_Weight=$request->product_Weight;
      $stone->Stone_Weight_Description=$request->Stone_Weight_Description;
      $stone->product_variety=$request->product_variety;


      $stone->save();

      $notification=array(
        'message'=>'Stone Update Successfully',
        'alert-type'=>'success'
       );

       return Redirect()->route('all.stone')->with($notification);

    }


        

    }

    public function Stone_Delete($id){

        $delete=Stone::findOrFail($id);


        if($delete !=null){

        $delete->delete();

        $notification=array(
            'message'=>'Stone Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.stone')->with($notification);
    }else{
        
        $notification=array(
            'message'=>'Wrong ID!!',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.stone')->with($notification);
    }
    }


    public function Reviews(){

        $reviews=Reviews::orderBy('id','desc')->get();

        return view('reviews',compact('reviews'));

    }
    public function Reviews_new(){

        return view('reviews-table');
        
    }
    public function Reviews_Add(Request $request){

        $this->validate($request, [
            "reviews_header" =>'required',
            "reviews_body" =>'required',
            "reviews_client" =>'required',
            "reviews_city" =>'required',
           
   ]);

      $reviews=new Reviews();

      $reviews->reviews_header=$request->reviews_header;
      $reviews->reviews_body=$request->reviews_body;
      $reviews->reviews_client=$request->reviews_client;
      $reviews->reviews_city=$request->reviews_city;

      $reviews->save();

      $notification=array(
        'message'=>'reviews Add Successfully',
        'alert-type'=>'success'
       );

       return Redirect()->route('all.reviews')->with($notification);
        
    }

    public function Reviews_Edit($id){

        $reviews=Reviews::findOrFail($id);

        return view('edit-reviews',compact('reviews'));

    }
    public function Reviews_Update(Request $request,$id){

        $reviews=Reviews::findOrFail($id);

       
        


      $reviews->reviews_header=$request->reviews_header;
      $reviews->reviews_body=$request->reviews_body;
      $reviews->reviews_client=$request->reviews_client;
      $reviews->reviews_city=$request->reviews_city;

      $reviews->save();

      $notification=array(
        'message'=>'reviews Update Successfully',
        'alert-type'=>'success'
       );

       return Redirect()->route('all.reviews')->with($notification); 
        
    }
    public function Reviews_Delete($id){

        $reviews=Reviews::findOrFail($id);
         
        if($reviews !=null){

        $reviews->delete();

        $notification=array(
            'message'=>'Reviews Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.reviews')->with($notification);
      }else{
        
        $notification=array(
            'message'=>'Wrong ID!!',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.reviews')->with($notification);

    }
        
    }
public function Reviews_Header(){

    $reviews=Review_Headers::orderBy('id','asc')->limit(1)->get();

    return view('reviews-header',compact('reviews'));

}
public function Reviews_Header_new(){
    return view('reviews-header-table');
    
}
public function Reviews_Header_Add(Request $request){

    
    $this->validate($request, [
        "reviews_banner_image" =>'required',
        "reviews_header_header" =>'required',
        "reviews_header_text" =>'required',
       
       
]);

  $reviews=new Review_Headers();

  
  $reviews_banner_image=$request->file('reviews_banner_image'); 
  $name_gen1=hexdec(uniqid());
  $img_ext1=strtolower($reviews_banner_image->getClientOriginalExtension());
  $img_name1=$name_gen1. '.' .$img_ext1;
  $up_location1='images/reviews-backend/';
  $last_img1=$up_location1.$img_name1;
  $reviews_banner_image->move($up_location1,$img_name1);
  $reviews->reviews_banner_image=$last_img1;

  $reviews->reviews_header_header=$request->reviews_header_header;
  $reviews->reviews_header_text=$request->reviews_header_text;
  

  $reviews->save();

  $notification=array(
    'message'=>'reviews Header Add Successfully',
    'alert-type'=>'success'
   );

   return Redirect()->route('all.reviews_header')->with($notification);

    
    
}
public function Reviews_Header_Edit($id){
    $reviews=Review_Headers::find($id);
    return view('reviews-header-edit',compact('reviews'));
    
}
public function Reviews_Header_Update(Request $request,$id){

    $reviews=Review_Headers::find($id);

    $reviews_banner_image=$request->file('reviews_banner_image');
    
    if($reviews_banner_image){
    $name_gen1=hexdec(uniqid());
    $img_ext1=strtolower($reviews_banner_image->getClientOriginalExtension());
    $img_name1=$name_gen1. '.' .$img_ext1;
    $up_location1='images/reviews-backend/';
    $last_img1=$up_location1.$img_name1;
    $reviews_banner_image->move($up_location1,$img_name1);
    $reviews->reviews_banner_image=$last_img1;

    $reviews->reviews_header_header=$request->reviews_header_header;
    $reviews->reviews_header_text=$request->reviews_header_text;



  $reviews->save();

  $notification=array(
    'message'=>'reviews Update Successfully',
    'alert-type'=>'success'
   );

   return Redirect()->route('all.reviews_header')->with($notification);

}else{
    $reviews->reviews_header_header=$request->reviews_header_header;
    $reviews->reviews_header_text=$request->reviews_header_text;

  

  $reviews->save();

  $notification=array(
    'message'=>'reviews Update Successfully',
    'alert-type'=>'success'
   );
   return Redirect()->route('all.reviews_header')->with($notification);

}  
    
}
public function Reviews_Header_Delete($id){

    $reviews=Review_Headers::find($id);

    if($reviews !=null){

        $reviews->delete();

        $notification=array(
            'message'=>'Reviews Header Deleted Successfully',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.reviews_header')->with($notification);
      }else{
        
        $notification=array(
            'message'=>'Wrong ID!!',
            'alert-type'=>'info'
        );
     
        return Redirect()->route('all.reviews_header')->with($notification);

    }
    
}














    public function Faq_category(){

        $faq_category=Faq_Category::orderBy('order','ASC')->paginate(5);

        return view('Faq-category',compact('faq_category'));

    }
    public function Faq_category_new(){
        return view('Faq-category-table');

    }
    public function Faq_category_Add(Request $request){
        
        $this->validate($request, [
            "faq_category_name" =>'required',
           
           
   ]);

      $faq_category=new Faq_Category();
      $faq_category->faq_category_name=$request->faq_category_name; 
      $faq_category->save();

      $notification=array(
        'message'=>'Faq Category Add Successfully',
        'alert-type'=>'success'
       );

       return Redirect()->route('all.Faq_category')->with($notification);


    }

    public function Faq_category_Edit($id){
        $faq_category=Faq_Category::findOrFail($id);

        return view('Faq-category-edit',compact('faq_category'));


    }
    public function Faq_category_Update(Request $request,$id){
        $faq_category=Faq_Category::findOrFail($id);

        $this->validate($request, [
            "faq_category_name" =>'required',
           
           
   ]);

      $faq_category->faq_category_name=$request->faq_category_name; 
      $faq_category->save();

      $notification=array(
        'message'=>'Faq Category Update Successfully',
        'alert-type'=>'success'
       );

       return Redirect()->route('all.Faq_category')->with($notification);
       

    }

    public function Faq_category_Delete($id){

        $faq_category=Faq_Category::where('id',$id)->first();

        if ($faq_category != null) {

        $faq_category->delete();

        $notification=array(
            'message'=>'Faq Category Delete Successfully',
            'alert-type'=>'success'
           );
    
           return Redirect()->route('all.Faq_category')->with($notification);
        }else{
            
        $notification=array(
            'message'=>'Wrong ID!!',
            'alert-type'=>'success'
           );
    
           return Redirect()->route('all.Faq_category')->with($notification);

        } 
    


    }

    public function Faq(){
        $faq_category=FaqShow::orderBy('id','desc')->get();

        

        return view('Faq',compact('faq_category'));
    }
    public function Faq_new(){
        $faq_category=Faq_Category::orderBy('id','desc')->get();

        return view('Faq-table',compact('faq_category'));
        
    }
    public function Faq_Add(Request $request){

     

          
        $this->validate($request, [
            "faq_category_id" =>'required',
            "faq_question" =>'required',
            "faq_answer" =>'required',
           
           
   ]);

      $faq=new Faq();
      $faq->faq_category_id=$request->faq_category_id; 
      $faq->faq_question=$request->faq_question; 
      $faq->faq_answer=$request->faq_answer; 
      $faq->save();

      $notification=array(
        'message'=>'Faq  Add Successfully',
        'alert-type'=>'success'
       );

       return Redirect()->route('all.faq')->with($notification);


        

       

        
    }
    public function Faq_Edit($id){
        $faq_category=Faq_Category::orderBy('id','asc')->get();
        $faq_data=FaqShow::findOrFail($id);

 

        return view('edit-Faq',compact(['faq_category','faq_data']));




        
    }
    public function Faq_Update(Request $request,$id){

        $faq=Faq::findOrFail($id);

        $this->validate($request, [
            "faq_category_id" =>'required',
            "faq_question" =>'required',
            "faq_answer" =>'required',
           
           
   ]);

      
      $faq->faq_category_id=$request->faq_category_id; 
      $faq->faq_question=$request->faq_question; 
      $faq->faq_answer=$request->faq_answer; 
      $faq->save();

      $notification=array(
        'message'=>'Faq  update Successfully',
        'alert-type'=>'success'
       );

       return Redirect()->route('all.faq')->with($notification);



        
        
    }
    public function Faq_Delete($id){

        $faq=Faq::findOrFail($id);

        if ($faq != null) {

            $faq->delete();
    
            $notification=array(
                'message'=>'Faq  Delete Successfully',
                'alert-type'=>'success'
               );
        
               return Redirect()->route('all.faq')->with($notification);
            }else{
                
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'success'
               );
        
               return Redirect()->route('all.faq')->with($notification);
            } 


        
    }

    public function Search_View(Request $request){

        if($request->product_name){
       

        $data['allData']=Stoneshow::where('product_name','LIKE','%'.$request->product_name.'%')->paginate(20);
   
        return view('stone',$data);
       

        }else{
            $notification=array(
                'message'=>'Not Select Stone',
                'alert-type'=>'success'
               );
        
               return Redirect()->route('all.stone')->with($notification);
            
        } 
}
     //Variety

     public function Variety(){

        $Varietys=Variety::orderBy('id','desc')->get();

        return view('Variety',compact('Varietys'));

     }
     public function Variety_new(){

        return view('Variety-table');
         
    }
    public function Variety_Add(Request $request){

        $this->validate($request, [
            "variety_name" =>'required',
            "variety_description"=>'required',     
        ]);

        $Variety=new Variety();

        $Variety->variety_name=$request->variety_name; 
        $Variety->variety_description=$request->variety_description; 
        $Variety->save();
  
        $notification=array(
          'message'=>'Variety Add Successfully',
          'alert-type'=>'success'
         );
  
        return Redirect()->route('all.Variety')->with($notification);
         
    }

    public function Variety_Edit($id){

        $Variety=Variety::findOrFail($id);

        return view('Variety-edit',compact('Variety'));

         
    }
    public function Variety_Update(Request $request,$id){

        $Variety=Variety::findOrFail($id);

        $Variety->variety_name=$request->variety_name; 
        $Variety->variety_description=$request->variety_description; 
        $Variety->save();
  
        $notification=array(
          'message'=>'Variety Update Successfully',
          'alert-type'=>'success'
         );
  
        return Redirect()->route('all.Variety')->with($notification);
         
    }
    public function Variety_Delete($id){

        $Variety=Variety::findOrFail($id);

        if($Variety != null) {

            $Variety->delete();
    
            $notification=array(
                'message'=>'Variety Delete Successfully',
                'alert-type'=>'success'
               );
        
               return Redirect()->route('all.Variety')->with($notification);
            }else{
                
            $notification=array(
                'message'=>'Wrong ID!!',
                'alert-type'=>'success'
               );
        
               return Redirect()->route('all.Variety')->with($notification);
            } 
         
    }





    

    
}
