<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Category;
use App\Models\Available;
use App\Models\Clarity;
use App\Models\Enhancements;
use App\Models\Shape;
use App\Models\Stone;
use App\Models\Gallery;
use App\Models\GalleryImages;
use App\Models\Galleryshow;
use App\Models\Galleryshowdata;
use App\Models\Stoneshow;
use Illuminate\Support\Facades\DB;
use App\Models\Footers;
use Cookie;
use Session;
use localStorage;

use Exception;

class Filtercontroller extends Controller
{

   





    public function Category_View($name){

         


         if($name == "available"){


            $footers=Footers::orderBy('id','desc')->take(1)->get();

            $categorys=Category::whereIn('id', function($query){
                $query->select('category_id')->from('product')->get();
            })->get();

            

            $colors=Color::whereIn('id', function($query){
                $query->select('color_id')->from('product')->get();
            })->get();

            
            $availabilitys=Available::whereIn('id', function($query){
                $query->select('Available_id')->from('product')->get();
            })->get();
                  
   
            
            $shapes=Shape::whereIn('id', function($query){
                $query->select('shape_id')->from('product')->get();
            })->get();




            $claritys=Clarity::whereIn('id', function($query){
                $query->select('clarity_id')->from('product')->get();
            })->get();


            $enhancements=Enhancements::whereIn('id', function($query){
                $query->select('enhancement_id')->from('product')->get();
            })->get();
              
           
         
            $category_filter=Category::where('category_name',$name)->first();

          

            $stonedata=Stone::WhereIn('Available_id',[1,4])->orderBy('product_Weight','asc')->paginate(12); 

           
           


         }else{


            $footers=Footers::orderBy('id','desc')->take(1)->get();
            
   
         
            $category_filter=Category::where('category_name',$name)->first();
            
            $stonedata=Stone::where('category_id',$category_filter->id)->orderBy('product_Weight','asc')->paginate(60); 

      
            foreach ($stonedata as $key => $value) {

              $cat[]=$value->category_id; 
              $col[]=$value->color_id;
              $av[]=$value->Available_id;
              $shap[]=$value->shape_id;
              $clar[]=$value->clarity_id;
              $enh[]=$value->enhancement_id;
              
            }
            
          

            $categorys=Category::whereIn('id',$cat)->get();
            $availabilitys=Available::whereIn('id',$av)->get();                      
            $colors=Color::whereIn('id',$col)->get();
            $shapes=Shape::whereIn('id',$shap)->get();
            $claritys=Clarity::whereIn('id',$clar)->get();
            $enhancements=Enhancements::whereIn('id',$enh)->get(); 


          
           
           

         }

            
         return view('web/stone_category',compact(['categorys','availabilitys','colors','shapes','claritys','enhancements','category_filter','stonedata','footers']));
            
            
        

   

    

     

    }

    public function All_View(Request $request){

         
                 

        //ABCDEFG
        if($request->Category AND  $request->Available AND $request->color AND $request->shape AND $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
        {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
            
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->whereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
            ->orderBy('product_Weight','desc')
            ->get();


            



            if($request->sortby == "Newest"){

                    
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->whereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                              return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                                 
                               
                                $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->whereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','asc')->get();
                                            
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
            }

          

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }
        
        //ABCDEF
        if($request->Category AND  $request->Available AND $request->color AND $request->shape AND $request->clarity AND $request->enhancement)
        {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->orderBy('product_Weight','desc')
            ->get();

            if($request->sortby == "Newest"){

                    
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                                 
                               
                                $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                ->WhereIn('Available_id',explode(',', $request->Available))
                                ->WhereIn('color_id',explode(',', $request->color))
                                ->WhereIn('shape_id',explode(',', $request->shape))
                                ->WhereIn('clarity_id',explode(',', $request->clarity))
                                ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                            ->orderBy('product_Weight','asc')->get();
                                            
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
            }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }
        //ABCDEG
        if($request->Category AND  $request->Available AND $request->color AND $request->shape AND $request->clarity AND $request->Weight_min AND $request->Weight_max)
        {

            
             $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
            ->orderBy('product_Weight','desc')
            ->get();

            if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();  
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                                 
                               
                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','asc')->get();
                                            
                              return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
            }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }
        //ABCDFG
        if($request->Category AND  $request->Available AND $request->color AND $request->shape AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
        {

         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
            ->orderBy('product_Weight','desc')
            ->get();


            if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();   
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                              return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                                 
                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','asc')->get();
                                            
                              return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
            }


            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }
        //ABCEFG
        if($request->Category AND  $request->Available AND $request->color AND $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
        {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
            ->orderBy('product_Weight','desc')
            ->get();



            if($request->sortby == "Newest"){

                    
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                                 
                                $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','asc')->get();
                                            
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
            }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }
        //ABDEFG
        if($request->Category AND  $request->Available AND $request->shape AND $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
        {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
            ->orderBy('product_Weight','desc')
            ->get();


            if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();   
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                                 
                                $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','asc')->get();
                                            
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
            }


            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }
        //ACDEFG
        if($request->Category AND  $request->color AND $request->shape AND $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
        {

           $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
            ->orderBy('product_Weight','desc')
            ->get();


            if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();    
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                                 
                                $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','asc')->get();
                                            
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
            }


            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }
        //BCDEFG
        if($request->Available AND  $request->color AND $request->shape AND $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
        {
             $category_data=['null'=>''];
            
    
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
            ->orderBy('product_Weight','desc')
            ->get();

            if($request->sortby == "Newest"){

                    
               $category_data=['null'=>''];

                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                                 
                               $category_data=['null'=>''];
                                
                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','asc')->get();
                                            
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
            }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }















       //ABCDE
        if($request->Category AND  $request->Available AND $request->color AND $request->shape AND $request->clarity)
        {

         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->orderBy('product_Weight','desc')
            ->orderBy('product_Weight','desc')
             ->get();


             if($request->sortby == "Newest"){

                    
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                                 
                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
                                            ->orderBy('product_Weight','asc')->get();
                                            
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
            }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }
        //ABCDF
        if($request->Category AND  $request->Available AND $request->color AND $request->shape AND $request->enhancement)
        {
         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->orderBy('product_Weight','desc')
             ->get();


             if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();   
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                                 
                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                            ->orderBy('product_Weight','asc')->get();
                                            
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
            }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }
         //ABCDG
         if($request->Category AND  $request->Available AND $request->color AND $request->shape AND $request->Weight_min AND $request->Weight_max)
         {
     
            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->Where('product_Weight',  '>=',$request->Weight_min)
             ->Where('product_Weight', '<=',$request->Weight_max)
             ->orderBy('product_Weight','desc')
             ->get();

             if($request->sortby == "Newest"){

                    
                $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->Where('product_Weight',  '>=',$request->Weight_min)
             ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                                 
                                $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->Where('product_Weight',  '>=',$request->Weight_min)
             ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','asc')->get();
                                            
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
            }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
 
         }
          //ABCEF
        if($request->Category AND  $request->Available AND $request->color AND $request->clarity AND $request->enhancement)
        {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->orderBy('product_Weight','desc')
            ->get();

            if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();   
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                                 
                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                            ->orderBy('product_Weight','asc')->get();
                                            
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
            }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }
        //ABCEG
        if($request->Category AND  $request->Available AND $request->color AND $request->clarity AND $request->Weight_min AND $request->Weight_max)
        {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
            ->orderBy('product_Weight','desc')
            ->get();


            if($request->sortby == "Newest"){

                    
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                                 
                                $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','asc')->get();
                                            
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
            }
 

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }
         //ABCFG
         if($request->Category AND  $request->Available AND $request->color AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
         {

             $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
     
             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->WhereIn('enhancement_id',explode(',', $request->enhancement))
             ->Where('product_Weight',  '>=',$request->Weight_min)
             ->Where('product_Weight', '<=',$request->Weight_max)
             ->orderBy('product_Weight','desc')
             ->get();


             if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();   
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->WhereIn('enhancement_id',explode(',', $request->enhancement))
             ->Where('product_Weight',  '>=',$request->Weight_min)
             ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 
                               
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                ->WhereIn('Available_id',explode(',', $request->Available))
                                ->WhereIn('color_id',explode(',', $request->color))
                                ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                ->Where('product_Weight',  '>=',$request->Weight_min)
                                ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','asc')->get();
                                            
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
            }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
 
         }
          //ABDEF
        if($request->Category AND  $request->Available AND $request->shape AND $request->clarity AND $request->enhancement)
        {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->orderBy('product_Weight','desc')
            ->get();

            if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();      
                
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                        ->orderBy('product_Weight','desc')->get();
                       
                       
                                        return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                       
                        }else{
                       
                             
                           $category_data=Category::whereIn('id',explode(',', $request->Category))->get();              
                            
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                        ->orderBy('product_Weight','asc')->get();
                                        
                                        return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }

                  return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


        }
         //ABDEG
         if($request->Category AND  $request->Available AND $request->shape AND $request->clarity AND $request->Weight_min AND $request->Weight_max)
         {
     

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 

             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->WhereIn('clarity_id',explode(',', $request->clarity))
             ->Where('product_Weight',  '>=',$request->Weight_min)
             ->Where('product_Weight', '<=',$request->Weight_max)
             ->orderBy('product_Weight','desc')
             ->get();



             if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 

                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->WhereIn('clarity_id',explode(',', $request->clarity))
             ->Where('product_Weight',  '>=',$request->Weight_min)
             ->Where('product_Weight', '<=',$request->Weight_max)
                                        ->orderBy('product_Weight','desc')->get();
                       
                       
                                        return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                       
                        }else{
                       
                             
                           $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 

                            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->WhereIn('clarity_id',explode(',', $request->clarity))
             ->Where('product_Weight',  '>=',$request->Weight_min)
             ->Where('product_Weight', '<=',$request->Weight_max)
                                        ->orderBy('product_Weight','asc')->get();
                                        
                                        return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                   }
 
                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
          //ABDFG
          if($request->Category AND  $request->Available AND $request->shape AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
          {
            $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 

              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
              ->orderBy('product_Weight','desc')
              ->get();


              if($request->sortby == "Newest"){

                  $category_data=Category::whereIn('id',explode(',', $request->Category))->get();   
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                        ->orderBy('product_Weight','desc')->get();
                       
                       
                                        return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                       
                        }else{
                       
                             
                           $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 

                            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                        ->orderBy('product_Weight','asc')->get();
                                        
                                        return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                   }
  
                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
  
          }
          //ABEFG
          if($request->Category AND  $request->Available AND $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
          {
            $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
              ->orderBy('product_Weight','desc')
              ->get();



              if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();    
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                        ->orderBy('product_Weight','desc')->get();
                       
                       
                                        return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                       
                        }else{
                       
                           $category_data=Category::whereIn('id',explode(',', $request->Category))->get();  
                           
                            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                        ->orderBy('product_Weight','asc')->get();
                                        
                                        return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                   }
  
                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
  
          }
            //ACDEF
        if($request->Category AND  $request->color AND $request->shape AND $request->clarity AND $request->enhancement)
        {
         $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->orderBy('product_Weight','desc')
            ->get();


            if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();  
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                        ->orderBy('product_Weight','desc')->get();
                       
                       
                         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                       
                        }else{
                       
                             
                           $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 
                            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                        ->orderBy('product_Weight','asc')->get();
                                        
                                        return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                   }

                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }
            //ACDEG
            if($request->Category AND  $request->color AND $request->shape AND $request->clarity AND $request->Weight_min AND $request->Weight_max)
            {
        
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 

                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                ->WhereIn('color_id',explode(',', $request->color))
                ->WhereIn('shape_id',explode(',', $request->shape))
                ->WhereIn('clarity_id',explode(',', $request->clarity))
                ->Where('product_Weight',  '>=',$request->Weight_min)
                ->Where('product_Weight', '<=',$request->Weight_max)
                ->orderBy('product_Weight','desc')
                ->get();


                if($request->sortby == "Newest"){

                    $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 

                    $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                ->WhereIn('color_id',explode(',', $request->color))
                ->WhereIn('shape_id',explode(',', $request->shape))
                ->WhereIn('clarity_id',explode(',', $request->clarity))
                ->Where('product_Weight',  '>=',$request->Weight_min)
                ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','desc')->get();
                           
                           
                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                           
                            }else{
                           
                                 
                               $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 

                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                ->WhereIn('color_id',explode(',', $request->color))
                                ->WhereIn('shape_id',explode(',', $request->shape))
                                ->WhereIn('clarity_id',explode(',', $request->clarity))
                                ->Where('product_Weight',  '>=',$request->Weight_min)
                                ->Where('product_Weight', '<=',$request->Weight_max)
                                            ->orderBy('product_Weight','asc')->get();
                                            
                                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                       }
    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
    
            }
             //ACDFG
             if($request->Category AND  $request->color AND $request->shape AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
             {
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 
         
                 $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                 ->WhereIn('color_id',explode(',', $request->color))
                 ->WhereIn('shape_id',explode(',', $request->shape))
                 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                 ->Where('product_Weight',  '>=',$request->Weight_min)
                 ->Where('product_Weight', '<=',$request->Weight_max)
                 ->orderBy('product_Weight','desc')
                 ->get();

                 if($request->sortby == "Newest"){

                  $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 

                 $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                 ->WhereIn('color_id',explode(',', $request->color))
                 ->WhereIn('shape_id',explode(',', $request->shape))
                 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                 ->Where('product_Weight',  '>=',$request->Weight_min)
                 ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','desc')->get();
                        
                        
                                         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                        
                         }else{
                        
                              
                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 

                 $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                 ->WhereIn('color_id',explode(',', $request->color))
                 ->WhereIn('shape_id',explode(',', $request->shape))
                 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                 ->Where('product_Weight',  '>=',$request->Weight_min)
                 ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','asc')->get();
                                         
                                         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                    }
     
                    return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
     
             }
              //ACEFG
              if($request->Category AND  $request->color AND $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
              {

                  $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 

                  $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                  ->WhereIn('color_id',explode(',', $request->color))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                  ->orderBy('product_Weight','desc')
                  ->get();


                  if($request->sortby == "Newest"){

                     $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 

                    $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                  ->WhereIn('color_id',explode(',', $request->color))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','desc')->get();
                        
                        
                                         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                        
                         }else{

                           $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 
                          
                            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                  ->WhereIn('color_id',explode(',', $request->color))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','asc')->get();
                                         
                                         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                    }
      
                    return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
      
              }
              //ADEFG
              if($request->Category AND  $request->shape AND $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
              {
          
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 

                  $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                  ->WhereIn('shape_id',explode(',', $request->shape))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                  ->orderBy('product_Weight','desc')
                  ->get();

                  if($request->sortby == "Newest"){

                     $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 

                    $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                  ->WhereIn('shape_id',explode(',', $request->shape))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','desc')->get();
                        
                        
                                         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                        
                         }else{
                           $category_data=Category::whereIn('id',explode(',', $request->Category))->get(); 
                              
                            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                  ->WhereIn('shape_id',explode(',', $request->shape))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','asc')->get();
                                         
                                         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                    }
      
                    return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
      
              }
              //BCDEF
            if($request->Available AND  $request->color AND $request->shape AND $request->clarity AND $request->enhancement)
            {
               $category_data=['null'=>''];

                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                ->WhereIn('color_id',explode(',', $request->color))
                ->WhereIn('shape_id',explode(',', $request->shape))
                ->WhereIn('clarity_id',explode(',', $request->clarity))
                ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                ->orderBy('product_Weight','desc')
                ->get();


                if($request->sortby == "Newest"){

                  $category_data=['null'=>''];

                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                ->WhereIn('color_id',explode(',', $request->color))
                ->WhereIn('shape_id',explode(',', $request->shape))
                ->WhereIn('clarity_id',explode(',', $request->clarity))
                ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                         ->orderBy('product_Weight','desc')->get();
                        
                        
                                         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                        
                         }else{

                           $category_data=['null'=>''];
                          
                            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                ->WhereIn('color_id',explode(',', $request->color))
                ->WhereIn('shape_id',explode(',', $request->shape))
                ->WhereIn('clarity_id',explode(',', $request->clarity))
                ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                         ->orderBy('product_Weight','asc')->get();
                                         
                                         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                    }
     
    
                    return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
    
            }
             //BCDEG
             if($request->Available AND  $request->color AND $request->shape AND $request->clarity AND $request->Weight_min AND $request->Weight_max)
             {
                 $category_data=['null'=>''];
         
                 $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                 ->WhereIn('color_id',explode(',', $request->color))
                 ->WhereIn('shape_id',explode(',', $request->shape))
                 ->WhereIn('clarity_id',explode(',', $request->clarity))
                 ->Where('product_Weight',  '>=',$request->Weight_min)
                 ->Where('product_Weight', '<=',$request->Weight_max)
                 ->orderBy('product_Weight','desc')
                 ->get();

                 if($request->sortby == "Newest"){

                  $category_data=['null'=>''];

                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                 ->WhereIn('color_id',explode(',', $request->color))
                 ->WhereIn('shape_id',explode(',', $request->shape))
                 ->WhereIn('clarity_id',explode(',', $request->clarity))
                 ->Where('product_Weight',  '>=',$request->Weight_min)
                 ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','desc')->get();
                        
                        
                           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                        
                         }else{

                           $category_data=['null'=>''];
                        
                              
                            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                 ->WhereIn('color_id',explode(',', $request->color))
                 ->WhereIn('shape_id',explode(',', $request->shape))
                 ->WhereIn('clarity_id',explode(',', $request->clarity))
                 ->Where('product_Weight',  '>=',$request->Weight_min)
                 ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','asc')->get();
                                         
                           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                    }
     
                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
     
             }
              //BCDFG
              if($request->Available AND  $request->color AND $request->shape AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
              {

               $category_data=['null'=>''];
          
                  $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                  ->WhereIn('color_id',explode(',', $request->color))
                  ->WhereIn('shape_id',explode(',', $request->shape))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                  ->orderBy('product_Weight','desc')
                  ->get();

                  if($request->sortby == "Newest"){

                     $category_data=['null'=>''];

                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                  ->WhereIn('color_id',explode(',', $request->color))
                  ->WhereIn('shape_id',explode(',', $request->shape))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','desc')->get();
                        
                        
                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                        
                         }else{

                           $category_data=['null'=>''];
                        
                              
                            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                  ->WhereIn('color_id',explode(',', $request->color))
                  ->WhereIn('shape_id',explode(',', $request->shape))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','asc')->get();
                                         
                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                    }
      
                  return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
      
              }
              //BCEFG
              if($request->Available AND  $request->color AND $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
              {

               $category_data=['null'=>''];
          
                  $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                  ->WhereIn('color_id',explode(',', $request->color))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                  ->orderBy('product_Weight','desc')
                  ->get();


                  if($request->sortby == "Newest"){

                     $category_data=['null'=>''];

                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                  ->WhereIn('color_id',explode(',', $request->color))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','desc')->get();
                        
                        
                           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                        
                         }else{

                           $category_data=['null'=>''];
                        
                              
                            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                  ->WhereIn('color_id',explode(',', $request->color))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','asc')->get();
                                         
                           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                    }
      
                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
      
              }
              //BDEFG
              if($request->Available AND  $request->shape AND $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
              {

               $category_data=['null'=>''];
          
                  $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                  ->WhereIn('shape_id',explode(',', $request->shape))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                  ->orderBy('product_Weight','desc')
                  ->get();

                  if($request->sortby == "Newest"){

                     $category_data=['null'=>''];

                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                  ->WhereIn('shape_id',explode(',', $request->shape))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','desc')->get();
                        
                        
                           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                        
                         }else{
                           $category_data=['null'=>''];
                        
                              
                            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                  ->WhereIn('shape_id',explode(',', $request->shape))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','asc')->get();
                                         
                           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                    }
      
                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
      
              }
              //CDEFG
              if($request->color AND  $request->shape AND $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
              {

               $category_data=['null'=>''];
          
                  $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                  ->WhereIn('shape_id',explode(',', $request->shape))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                  ->orderBy('product_Weight','desc')
                  ->get();


                  if($request->sortby == "Newest"){

                     $category_data=['null'=>''];

                    $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                  ->WhereIn('shape_id',explode(',', $request->shape))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','desc')->get();
                        
                        
                           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                        
                         }else{

                           $category_data=['null'=>''];
                        
                              
                            $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                  ->WhereIn('shape_id',explode(',', $request->shape))
                  ->WhereIn('clarity_id',explode(',', $request->clarity))
                  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                  ->Where('product_Weight',  '>=',$request->Weight_min)
                  ->Where('product_Weight', '<=',$request->Weight_max)
                                         ->orderBy('product_Weight','asc')->get();
                                         
                           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                    }
      
                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
      
              }













        //ABCD
        if($request->Category AND  $request->Available AND $request->color AND $request->shape)
        {   

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->orderBy('product_Weight','desc')
             ->get();


             if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();


                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{
                    
                         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
 
                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }

           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


        }
        //ABCE
        if($request->Category AND  $request->Available AND $request->color AND $request->clarity)
        {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->orderBy('product_Weight','desc')
             ->get();


             if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();


                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{

                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                    
                          
                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }

           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


        }
         //ABCE
         if($request->Category AND  $request->Available AND $request->color AND $request->clarity)
         {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

     
             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->WhereIn('clarity_id',explode(',', $request->clarity))
             ->orderBy('product_Weight','desc')
              ->get();


              if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();


                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->WhereIn('clarity_id',explode(',', $request->clarity))
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{

                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                    
                          
                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->WhereIn('clarity_id',explode(',', $request->clarity))
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //ABCF
         if($request->Category AND  $request->Available AND $request->color AND $request->enhancement)
         {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

     
             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->WhereIn('enhancement_id',explode(',', $request->enhancement))
             ->orderBy('product_Weight','desc')
              ->get();


              if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();


                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{

                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                    
                          
                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //ABCG
         if($request->Category AND  $request->Available AND $request->color AND $request->Weight_min AND $request->Weight_max)
         {
     

             $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->Where('product_Weight',  '>=',$request->Weight_min)
             ->Where('product_Weight', '<=',$request->Weight_max)
             ->orderBy('product_Weight','desc')
              ->get();


              if($request->sortby == "Newest"){

                                 
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->Where('product_Weight',  '>=',$request->Weight_min)
             ->Where('product_Weight', '<=',$request->Weight_max)
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{
                    
                        
                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                      
                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->Where('product_Weight',  '>=',$request->Weight_min)
             ->Where('product_Weight', '<=',$request->Weight_max)
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //ABDE
         if($request->Category AND  $request->Available AND $request->shape AND $request->clarity)
         {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

     
             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->WhereIn('clarity_id',explode(',', $request->clarity))
             ->orderBy('product_Weight','desc')
              ->get();

              if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                 
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->WhereIn('clarity_id',explode(',', $request->clarity))
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{
                    
                        
                        
                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->WhereIn('clarity_id',explode(',', $request->clarity))
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //ABDF
         if($request->Category AND  $request->Available AND $request->shape AND $request->enhancement)
         {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

     
             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->WhereIn('enhancement_id',explode(',', $request->enhancement))
             ->orderBy('product_Weight','desc')
              ->get();


              if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
               
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{
                    
                        
                        
                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //ABDG
         if($request->Category AND  $request->Available AND $request->shape AND $request->Weight_min AND $request->Weight_max)
         {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

     
             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->Where('product_Weight',  '>=',$request->Weight_min)
             ->Where('product_Weight', '<=',$request->Weight_max)
             ->orderBy('product_Weight','desc')
             ->get();


             if($request->sortby == "Newest"){

                                 
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->Where('product_Weight',  '>=',$request->Weight_min)
             ->Where('product_Weight', '<=',$request->Weight_max)
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{
                    
                        
                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                      
                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
             ->WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->Where('product_Weight',  '>=',$request->Weight_min)
             ->Where('product_Weight', '<=',$request->Weight_max)
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
          //ABEF
          if($request->Category AND  $request->Available AND $request->clarity AND $request->enhancement)
          {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

      
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->orderBy('product_Weight','desc')
               ->get();


               if($request->sortby == "Newest"){

                  $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
               
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{
                    
                        
                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                      
                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
          }
          //ABEG
          if($request->Category AND  $request->Available AND $request->clarity AND $request->Weight_min AND $request->Weight_max)
          {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

      
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
              ->orderBy('product_Weight','desc')
               ->get();


               if($request->sortby == "Newest"){

                  $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
               
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{
                    
                        
                        
                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
          }
          //ABFG
          if($request->Category AND  $request->Available AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
          {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

      
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
              ->orderBy('product_Weight','desc')
              ->get();


              if($request->sortby == "Newest"){

                                 
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{
                    
                        
                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                      
                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('Available_id',explode(',', $request->Available))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
          }
            //ACDE
            if($request->Category AND  $request->color AND $request->shape AND $request->clarity)
             {

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

      
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->orderBy('product_Weight','desc')
               ->get();



               if($request->sortby == "Newest"){

                                 
                  $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{
                    
                        
                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                      
                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
            }
            //ACDF
            if($request->Category AND  $request->color AND $request->shape AND $request->enhancement)
             {

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

      
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->orderBy('product_Weight','desc')
               ->get();


               if($request->sortby == "Newest"){

                                 
                  $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{
                    
                        
                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                      
                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }


  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
            }
            //ACDG
            if($request->Category AND  $request->color AND $request->shape AND $request->Weight_min AND $request->Weight_max)
             {

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

      
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
              ->orderBy('product_Weight','desc')
              ->get();


              if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
              
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{
                    
                        
                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                      
                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
            }
            //ACEF
            if($request->Category AND  $request->color AND $request->clarity AND $request->enhancement)
             {

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

      
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->orderBy('product_Weight','desc')
               ->get();


               if($request->sortby == "Newest"){

                  $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{
                    
                        
                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                        
                      
                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
            }
            //ACEG
            if($request->Category AND  $request->color AND $request->clarity AND $request->Weight_min AND $request->Weight_max)
             {

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

      
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
              ->orderBy('product_Weight','desc')
              ->get();


              if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                     ->orderBy('product_Weight','desc')->get();
                    
                    
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                    
                     }else{
                    
                        
                        $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                      
                        $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                        ->WhereIn('color_id',explode(',', $request->color))
                        ->WhereIn('clarity_id',explode(',', $request->clarity))
                        ->Where('product_Weight',  '>=',$request->Weight_min)
                        ->Where('product_Weight', '<=',$request->Weight_max)
                                     ->orderBy('product_Weight','asc')->get();
                                     
                       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
    
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
            }
            //ACFG
            if($request->Category AND  $request->color AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
             {

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

      
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
              ->orderBy('product_Weight','desc')
              ->get();

              if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                  
                
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                   ->orderBy('product_Weight','desc')->get();
                  
                  
                     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                  
                   }else{
                  
                      
                     $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
      
                    
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('color_id',explode(',', $request->color))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                   ->orderBy('product_Weight','asc')->get();
                                   
                     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
            }
             //ADEF
             if($request->Category AND  $request->shape AND $request->clarity AND $request->enhancement)
             {

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

      
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->orderBy('product_Weight','desc')
              ->get();

              if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                   ->orderBy('product_Weight','desc')->get();
                  
                  
                     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                  
                   }else{
                  
                     $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
 
                      
                    $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                   ->orderBy('product_Weight','asc')->get();
                                   
                     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
            }
            //ADEG
            if($request->Category AND  $request->shape AND $request->clarity AND $request->Weight_min AND $request->Weight_max)
             {
      

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
              ->orderBy('product_Weight','desc')
              ->get();



              if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                   ->orderBy('product_Weight','desc')->get();
                  
                  
                     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                  
                   }else{
                  
                      
                     $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                    $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                   ->orderBy('product_Weight','asc')->get();
                                   
                     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
            }
            //ADFG
            if($request->Category AND  $request->shape AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
             {

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

      
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
              ->orderBy('product_Weight','desc')
              ->get();



              if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                   ->orderBy('product_Weight','desc')->get();
                  
                  
                     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                  
                   }else{
                  
                      
                     $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
 
                    $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('shape_id',explode(',', $request->shape))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                   ->orderBy('product_Weight','asc')->get();
                                   
                     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }

  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
            }
            //AEFG
            if($request->Category AND  $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
             {

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

      
              $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
              ->orderBy('product_Weight','desc')
              ->get();





              if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                   ->orderBy('product_Weight','desc')->get();
                  
                  
                     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                  
                   }else{
                  
                     $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
 
                      
                    $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
              ->WhereIn('clarity_id',explode(',', $request->clarity))
              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
              ->Where('product_Weight',  '>=',$request->Weight_min)
              ->Where('product_Weight', '<=',$request->Weight_max)
                                   ->orderBy('product_Weight','asc')->get();
                                   
                     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }

  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
            }
            //BCDE
            if($request->Available AND  $request->color AND $request->shape AND $request->clarity)
            {

               $category_data=['null'=>''];
     
             $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->WhereIn('clarity_id',explode(',', $request->clarity))
             ->orderBy('product_Weight','desc')
             ->get();



             if($request->sortby == "Newest"){
                 
               $category_data=['null'=>''];
                                 
                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                ->WhereIn('color_id',explode(',', $request->color))
                ->WhereIn('shape_id',explode(',', $request->shape))
                ->WhereIn('clarity_id',explode(',', $request->clarity))
                                   ->orderBy('product_Weight','desc')->get();
                  
                  
                     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                  
                   }else{
                  
                     $category_data=['null'=>''];
                      
                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
             ->WhereIn('color_id',explode(',', $request->color))
             ->WhereIn('shape_id',explode(',', $request->shape))
             ->WhereIn('clarity_id',explode(',', $request->clarity))
                                   ->orderBy('product_Weight','asc')->get();
                                   
                     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
           }
           //BCDF
           if($request->Available AND  $request->color AND $request->shape AND $request->enhancement)
           {

            $category_data=['null'=>''];
    
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->orderBy('product_Weight','desc')
            ->get();




            if($request->sortby == "Newest"){

               $category_data=['null'=>''];

                                 
                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                   ->orderBy('product_Weight','desc')->get();
                  
                  
                     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                  
                   }else{

                     $category_data=['null'=>''];
                  
                      
                      
                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                   ->orderBy('product_Weight','asc')->get();
                                   
                     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                }

           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


          }
          //BCDG
          if($request->Available AND  $request->color AND $request->shape AND $request->Weight_min AND $request->Weight_max)
          {

            $category_data=['null'=>''];
   
           $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
           ->WhereIn('color_id',explode(',', $request->color))
           ->WhereIn('shape_id',explode(',', $request->shape))
           ->Where('product_Weight',  '>=',$request->Weight_min)
           ->Where('product_Weight', '<=',$request->Weight_max)
           ->orderBy('product_Weight','desc')
           ->get();



           if($request->sortby == "Newest"){

            $category_data=['null'=>''];

                                 
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                               ->orderBy('product_Weight','desc')->get();
              
              
                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

              
               }else{

                  $category_data=['null'=>''];
              
                  
                  
                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
           ->WhereIn('color_id',explode(',', $request->color))
           ->WhereIn('shape_id',explode(',', $request->shape))
           ->Where('product_Weight',  '>=',$request->Weight_min)
           ->Where('product_Weight', '<=',$request->Weight_max)
                               ->orderBy('product_Weight','asc')->get();
                               
                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

            }





          return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


         }
          //BCEF
          if($request->Available AND  $request->color AND $request->clarity AND $request->enhancement)
          {

            $category_data=['null'=>''];
   
           $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
           ->WhereIn('color_id',explode(',', $request->color))
           ->WhereIn('clarity_id',explode(',', $request->clarity))
           ->WhereIn('enhancement_id',explode(',', $request->enhancement))
           ->orderBy('product_Weight','desc')
           ->get();



           if($request->sortby == "Newest"){

            $category_data=['null'=>''];

                                 
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
           ->WhereIn('color_id',explode(',', $request->color))
           ->WhereIn('clarity_id',explode(',', $request->clarity))
           ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->orderBy('product_Weight','desc')->get();
              
              
                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

              
               }else{

                  $category_data=['null'=>''];
              
                  
                  
                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
           ->WhereIn('color_id',explode(',', $request->color))
           ->WhereIn('clarity_id',explode(',', $request->clarity))
           ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->orderBy('product_Weight','asc')->get();
                               
                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

          }


          return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


         }
         //BCEG
         if($request->Available AND  $request->color AND $request->clarity AND $request->Weight_min AND $request->Weight_max)
         {

            $category_data=['null'=>''];
  
          $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
          ->WhereIn('color_id',explode(',', $request->color))
          ->WhereIn('clarity_id',explode(',', $request->clarity))
          ->Where('product_Weight',  '>=',$request->Weight_min)
          ->Where('product_Weight', '<=',$request->Weight_max)
          ->orderBy('product_Weight','desc')
          ->get();


          if($request->sortby == "Newest"){

            $category_data=['null'=>''];

                                 
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
          ->WhereIn('color_id',explode(',', $request->color))
          ->WhereIn('clarity_id',explode(',', $request->clarity))
          ->Where('product_Weight',  '>=',$request->Weight_min)
          ->Where('product_Weight', '<=',$request->Weight_max)
                               ->orderBy('product_Weight','desc')->get();
              
              
                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

              
               }else{

                  $category_data=['null'=>''];
              
                  
                  
                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
          ->WhereIn('color_id',explode(',', $request->color))
          ->WhereIn('clarity_id',explode(',', $request->clarity))
          ->Where('product_Weight',  '>=',$request->Weight_min)
          ->Where('product_Weight', '<=',$request->Weight_max)
                               ->orderBy('product_Weight','asc')->get();
                               
                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

         }





         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


        }
        //BCFG
        if($request->Available AND  $request->color AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
        {

         $category_data=['null'=>''];
 
         $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
         ->WhereIn('color_id',explode(',', $request->color))
         ->WhereIn('enhancement_id',explode(',', $request->enhancement))
         ->Where('product_Weight',  '>=',$request->Weight_min)
         ->Where('product_Weight', '<=',$request->Weight_max)
         ->orderBy('product_Weight','desc')
         ->get();



         if($request->sortby == "Newest"){

            $category_data=['null'=>''];

                                 
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
         ->WhereIn('color_id',explode(',', $request->color))
         ->WhereIn('enhancement_id',explode(',', $request->enhancement))
         ->Where('product_Weight',  '>=',$request->Weight_min)
         ->Where('product_Weight', '<=',$request->Weight_max)
                               ->orderBy('product_Weight','desc')->get();
              
              
                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

              
               }else{
              
                  $category_data=['null'=>''];
                  
                  
                  
                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
         ->WhereIn('color_id',explode(',', $request->color))
         ->WhereIn('enhancement_id',explode(',', $request->enhancement))
         ->Where('product_Weight',  '>=',$request->Weight_min)
         ->Where('product_Weight', '<=',$request->Weight_max)
                               ->orderBy('product_Weight','asc')->get();
                               
                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

         }





        return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


       }
       //BDEF
       if($request->Available AND  $request->shape AND $request->clarity AND $request->enhancement)
       {

         $category_data=['null'=>''];

        $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
        ->WhereIn('shape_id',explode(',', $request->shape))
        ->WhereIn('clarity_id',explode(',', $request->clarity))
        ->WhereIn('enhancement_id',explode(',', $request->enhancement))
        ->orderBy('product_Weight','desc')
        ->get();


        if($request->sortby == "Newest"){

             $category_data=['null'=>''];                     
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->orderBy('product_Weight','desc')->get();
              
              
                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

              
               }else{
              
                  
                  $category_data=['null'=>'']; 
                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                ->WhereIn('shape_id',explode(',', $request->shape))
                ->WhereIn('clarity_id',explode(',', $request->clarity))
                ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->orderBy('product_Weight','asc')->get();
                               
                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

         }





       return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


      }
      //BDEG
      if($request->Available AND  $request->shape AND $request->clarity AND $request->Weight_min AND $request->Weight_max)
      {

         $category_data=['null'=>''];

       $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
       ->WhereIn('shape_id',explode(',', $request->shape))
       ->WhereIn('clarity_id',explode(',', $request->clarity))
       ->Where('product_Weight',  '>=',$request->Weight_min)
       ->Where('product_Weight', '<=',$request->Weight_max)
       ->orderBy('product_Weight','desc')
       ->get();


       if($request->sortby == "Newest"){

         $category_data=['null'=>''];

                                 
        $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
       ->WhereIn('shape_id',explode(',', $request->shape))
       ->WhereIn('clarity_id',explode(',', $request->clarity))
       ->Where('product_Weight',  '>=',$request->Weight_min)
       ->Where('product_Weight', '<=',$request->Weight_max)
                           ->orderBy('product_Weight','desc')->get();
          
          
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

          
           }else{

            $category_data=['null'=>''];
          
              
              
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
       ->WhereIn('shape_id',explode(',', $request->shape))
       ->WhereIn('clarity_id',explode(',', $request->clarity))
       ->Where('product_Weight',  '>=',$request->Weight_min)
       ->Where('product_Weight', '<=',$request->Weight_max)
                           ->orderBy('product_Weight','asc')->get();
                           
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

     }


      return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


     }
     //BDFG
     if($request->Available AND  $request->shape AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
     {

      $category_data=['null'=>''];

      $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
      ->WhereIn('shape_id',explode(',', $request->shape))
      ->WhereIn('enhancement_id',explode(',', $request->enhancement))
      ->Where('product_Weight',  '>=',$request->Weight_min)
      ->Where('product_Weight', '<=',$request->Weight_max)
      ->orderBy('product_Weight','desc')
      ->get();


      if($request->sortby == "Newest"){

         $category_data=['null'=>''];                        
        $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
      ->WhereIn('shape_id',explode(',', $request->shape))
      ->WhereIn('enhancement_id',explode(',', $request->enhancement))
      ->Where('product_Weight',  '>=',$request->Weight_min)
      ->Where('product_Weight', '<=',$request->Weight_max)
                           ->orderBy('product_Weight','desc')->get();
          
          
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

          
           }else{
          
            $category_data=['null'=>'']; 
              
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
      ->WhereIn('shape_id',explode(',', $request->shape))
      ->WhereIn('enhancement_id',explode(',', $request->enhancement))
      ->Where('product_Weight',  '>=',$request->Weight_min)
      ->Where('product_Weight', '<=',$request->Weight_max)
                           ->orderBy('product_Weight','asc')->get();
                           
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

     }

     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


    }
    //BEFG
    if($request->Available AND  $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
    {

      $category_data=['null'=>''];

     $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
     ->WhereIn('clarity_id',explode(',', $request->clarity))
     ->WhereIn('enhancement_id',explode(',', $request->enhancement))
     ->Where('product_Weight',  '>=',$request->Weight_min)
     ->Where('product_Weight', '<=',$request->Weight_max)
     ->orderBy('product_Weight','desc')
     ->get();



     if($request->sortby == "Newest"){

      $category_data=['null'=>''];

                                 
        $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
     ->WhereIn('clarity_id',explode(',', $request->clarity))
     ->WhereIn('enhancement_id',explode(',', $request->enhancement))
     ->Where('product_Weight',  '>=',$request->Weight_min)
     ->Where('product_Weight', '<=',$request->Weight_max)
                           ->orderBy('product_Weight','desc')->get();
          
          
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

          
           }else{

            $category_data=['null'=>''];
          
              
              
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->Where('product_Weight',  '>=',$request->Weight_min)
            ->Where('product_Weight', '<=',$request->Weight_max)
                           ->orderBy('product_Weight','asc')->get();
                           
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

     }



    return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


   }
   //CDEF
   if($request->color AND  $request->shape AND $request->clarity AND $request->enhancement)
   {

      $category_data=['null'=>''];

    $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
    ->WhereIn('shape_id',explode(',', $request->shape))
    ->WhereIn('clarity_id',explode(',', $request->clarity))
    ->WhereIn('enhancement_id',explode(',', $request->enhancement))
    ->orderBy('product_Weight','desc')
    ->get();




    if($request->sortby == "Newest"){

                                
      $category_data=['null'=>''];
        
    $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
    ->WhereIn('shape_id',explode(',', $request->shape))
    ->WhereIn('clarity_id',explode(',', $request->clarity))
    ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                       ->orderBy('product_Weight','desc')->get();
      
      
         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

      
       }else{
      
          
         $category_data=['null'=>''];    
        
    $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
    ->WhereIn('shape_id',explode(',', $request->shape))
    ->WhereIn('clarity_id',explode(',', $request->clarity))
    ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                       ->orderBy('product_Weight','asc')->get();
                       
         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 }
    

   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


  }
   //CDEG
   if($request->color AND  $request->shape AND $request->clarity AND $request->Weight_min AND $request->Weight_max)
   {

      $category_data=['null'=>''];

    $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
    ->WhereIn('shape_id',explode(',', $request->shape))
    ->WhereIn('clarity_id',explode(',', $request->clarity))
    ->Where('product_Weight',  '>=',$request->Weight_min)
    ->Where('product_Weight', '<=',$request->Weight_max)
    ->orderBy('product_Weight','desc')
    ->get();


    if($request->sortby == "Newest"){

      $category_data=['null'=>''];                      
   
        $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
    ->WhereIn('shape_id',explode(',', $request->shape))
    ->WhereIn('clarity_id',explode(',', $request->clarity))
    ->Where('product_Weight',  '>=',$request->Weight_min)
    ->Where('product_Weight', '<=',$request->Weight_max)
                       ->orderBy('product_Weight','desc')->get();
      
      
         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

      
       }else{
      
         $category_data=['null'=>''];
          
        $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
    ->WhereIn('shape_id',explode(',', $request->shape))
    ->WhereIn('clarity_id',explode(',', $request->clarity))
    ->Where('product_Weight',  '>=',$request->Weight_min)
    ->Where('product_Weight', '<=',$request->Weight_max)
                       ->orderBy('product_Weight','asc')->get();
                       
         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

       }
    




   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


  }
  //CDFG
  if($request->color AND  $request->shape AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
  {

   $category_data=['null'=>''];

   $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
   ->WhereIn('shape_id',explode(',', $request->shape))
   ->WhereIn('enhancement_id',explode(',', $request->enhancement))
   ->Where('product_Weight',  '>=',$request->Weight_min)
   ->Where('product_Weight', '<=',$request->Weight_max)
   ->orderBy('product_Weight','desc')
   ->get();



   if($request->sortby == "Newest"){

                                
      $category_data=['null'=>''];

    $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
   ->WhereIn('shape_id',explode(',', $request->shape))
   ->WhereIn('enhancement_id',explode(',', $request->enhancement))
   ->Where('product_Weight',  '>=',$request->Weight_min)
   ->Where('product_Weight', '<=',$request->Weight_max)
                   ->orderBy('product_Weight','desc')->get();
  
  
     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
   }else{
  
     $category_data=['null'=>'']; 
      
    $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
   ->WhereIn('shape_id',explode(',', $request->shape))
   ->WhereIn('enhancement_id',explode(',', $request->enhancement))
   ->Where('product_Weight',  '>=',$request->Weight_min)
   ->Where('product_Weight', '<=',$request->Weight_max)
                   ->orderBy('product_Weight','asc')->get();
                   
     return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

   }


  return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


 }
 //CEFG
 if($request->color AND  $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
 {

   $category_data=['null'=>''];

  $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
  ->WhereIn('clarity_id',explode(',', $request->clarity))
  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
  ->Where('product_Weight',  '>=',$request->Weight_min)
  ->Where('product_Weight', '<=',$request->Weight_max)
  ->orderBy('product_Weight','desc')
  ->get();



  if($request->sortby == "Newest"){

   $category_data=['null'=>''];                            
   
  $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
  ->WhereIn('clarity_id',explode(',', $request->clarity))
  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
  ->Where('product_Weight',  '>=',$request->Weight_min)
  ->Where('product_Weight', '<=',$request->Weight_max)
                 ->orderBy('product_Weight','desc')->get();


   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


 }else{

   $category_data=['null'=>''];
    
  $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
  ->WhereIn('clarity_id',explode(',', $request->clarity))
  ->WhereIn('enhancement_id',explode(',', $request->enhancement))
  ->Where('product_Weight',  '>=',$request->Weight_min)
  ->Where('product_Weight', '<=',$request->Weight_max)
                 ->orderBy('product_Weight','asc')->get();
                 
   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 }




 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


}
//DEFG
if($request->shape AND  $request->clarity AND $request->enhancement AND $request->Weight_min AND $request->Weight_max)
{

   $category_data=['null'=>''];

 $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
 ->WhereIn('clarity_id',explode(',', $request->clarity))
 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
 ->Where('product_Weight',  '>=',$request->Weight_min)
 ->Where('product_Weight', '<=',$request->Weight_max)
 ->orderBy('product_Weight','desc')
 ->get();


 if($request->sortby == "Newest"){
   $category_data=['null'=>''];
                                
    $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
 ->WhereIn('clarity_id',explode(',', $request->clarity))
 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
 ->Where('product_Weight',  '>=',$request->Weight_min)
 ->Where('product_Weight', '<=',$request->Weight_max)
                 ->orderBy('product_Weight','desc')->get();


   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


 }else{

   $category_data=['null'=>''];
    $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
 ->WhereIn('clarity_id',explode(',', $request->clarity))
 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
 ->Where('product_Weight',  '>=',$request->Weight_min)
 ->Where('product_Weight', '<=',$request->Weight_max)
                 ->orderBy('product_Weight','asc')->get();
                 
   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 }

return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


}
            














        // ABC
        if($request->Category AND  $request->Available AND $request->color)
        {

         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
            ->orderBy('product_Weight','desc')
             ->get();

             if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();               
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
                             ->orderBy('product_Weight','desc')->get();
            

               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

            
             }else{
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('color_id',explode(',', $request->color))
                             ->orderBy('product_Weight','asc')->get();
                             
               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

             }

           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


        }
        //ABD
        if($request->Category AND  $request->Available AND $request->shape)
        {

         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('shape_id',explode(',', $request->shape))
            ->orderBy('product_Weight','desc')
             ->get();

             if($request->sortby == "Newest"){
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                ->WhereIn('Available_id',explode(',', $request->Available))
                ->WhereIn('shape_id',explode(',', $request->shape))
                             ->orderBy('product_Weight','desc')->get();
            

               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

            
             }else{
           
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('shape_id',explode(',', $request->shape))
                             ->orderBy('product_Weight','asc')->get();
                             
               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

             }

           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


        }
        //ABE
        if($request->Category AND  $request->Available AND $request->clarity)
        {

         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
            ->orderBy('product_Weight','desc')
             ->get();


             if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();               
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                ->WhereIn('Available_id',explode(',', $request->Available))
                ->WhereIn('clarity_id',explode(',', $request->clarity))
                             ->orderBy('product_Weight','desc')->get();
            

               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

            
             }else{
           
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('clarity_id',explode(',', $request->clarity))
                             ->orderBy('product_Weight','asc')->get();
                             
               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

             }

           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


        }
        //ABF
        if($request->Category AND  $request->Available AND $request->enhancement)
        {

         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
            ->orderBy('product_Weight','desc')
             ->get();



             if($request->sortby == "Newest"){

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();               
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                             ->orderBy('product_Weight','desc')->get();
            

               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

            
             }else{
           
               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
            ->WhereIn('Available_id',explode(',', $request->Available))
            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                             ->orderBy('product_Weight','asc')->get();
                             
               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

            }

           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


        }
        //ABG
        if($request->Category AND  $request->Available AND $request->Weight_min AND $request->Weight_max)
        {

         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                             ->WhereIn('Available_id',explode(',', $request->Available))
                             ->Where('product_Weight',  '>=',$request->Weight_min)
                             ->Where('product_Weight', '<=',$request->Weight_max)
                             ->orderBy('product_Weight','desc')
                             ->get();

                             if($request->sortby == "Newest"){

                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                             ->WhereIn('Available_id',explode(',', $request->Available))
                             ->Where('product_Weight',  '>=',$request->Weight_min)
                             ->Where('product_Weight', '<=',$request->Weight_max)
                                             ->orderBy('product_Weight','desc')->get();
                            
            
                               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                            
                             }else{
                           
                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                             ->WhereIn('Available_id',explode(',', $request->Available))
                             ->Where('product_Weight',  '>=',$request->Weight_min)
                             ->Where('product_Weight', '<=',$request->Weight_max)
                                             ->orderBy('product_Weight','asc')->get();
                                             
                               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                            }

           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


        }
        //ACD
        if($request->Category AND  $request->color AND $request->shape)
        {

         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                             ->WhereIn('color_id',explode(',', $request->color))
                             ->WhereIn('shape_id',explode(',', $request->shape))
                             ->orderBy('product_Weight','desc')
                             ->get();


                             if($request->sortby == "Newest"){
                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                             ->WhereIn('color_id',explode(',', $request->color))
                             ->WhereIn('shape_id',explode(',', $request->shape))
                                             ->orderBy('product_Weight','desc')->get();
                            
            
                               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                            
                             }else{
                           
                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                             ->WhereIn('color_id',explode(',', $request->color))
                             ->WhereIn('shape_id',explode(',', $request->shape))
                                             ->orderBy('product_Weight','asc')->get();
                                             
                               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                            }

           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


        }
        //ACE
        if($request->Category AND  $request->color AND $request->clarity)
        {

         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                             ->WhereIn('color_id',explode(',', $request->color))
                             ->WhereIn('clarity_id',explode(',', $request->clarity))
                             ->orderBy('product_Weight','desc')
                             ->get();


                             if($request->sortby == "Newest"){

                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                             ->WhereIn('color_id',explode(',', $request->color))
                             ->WhereIn('clarity_id',explode(',', $request->clarity))
                                             ->orderBy('product_Weight','desc')->get();
                            
            
                               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                            
                             }else{
                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                             ->WhereIn('color_id',explode(',', $request->color))
                             ->WhereIn('clarity_id',explode(',', $request->clarity))
                                             ->orderBy('product_Weight','asc')->get();
                                             
                               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                            }

           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


        }
        //ACF
        if($request->Category AND  $request->color AND $request->enhancement)
        {

               $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
    
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                             ->WhereIn('color_id',explode(',', $request->color))
                             ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                             ->orderBy('product_Weight','desc')
                             ->get();

                             if($request->sortby == "Newest"){

                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                             ->WhereIn('color_id',explode(',', $request->color))
                             ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                             ->orderBy('product_Weight','desc')->get();
                            
            
                               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                            
                             }else{
                           
                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                             ->WhereIn('color_id',explode(',', $request->color))
                             ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                             ->orderBy('product_Weight','asc')->get();
                                             
                               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                            }

           return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


        }
         //ACG
         if($request->Category AND  $request->color AND $request->Weight_min AND $request->Weight_max)
         {
            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                              ->orderBy('product_Weight','desc')
                              ->get();


                              if($request->sortby == "Newest"){

                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                             ->orderBy('product_Weight','desc')->get();
                            
            
                               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                            
                             }else{
                           
                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                             ->orderBy('product_Weight','asc')->get();
                                             
                               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                            }
 
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //ADE
         if($request->Category AND  $request->shape AND $request->clarity)
         {
            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
     
             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                              ->orderBy('product_Weight','desc')
                              ->get();

                              if($request->sortby == "Newest"){

                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                                             ->orderBy('product_Weight','desc')->get();
                            
            
                               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                            
                             }else{
                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                ->WhereIn('shape_id',explode(',', $request->shape))
                                ->WhereIn('clarity_id',explode(',', $request->clarity))
                                             ->orderBy('product_Weight','asc')->get();
                                             
                               return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                            }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //ADF
         if($request->Category AND  $request->shape AND $request->enhancement)
         {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
     
             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                              ->orderBy('product_Weight','desc')
                              ->get();

                              if($request->sortby == "Newest"){
                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                
                                    $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                    ->WhereIn('shape_id',explode(',', $request->shape))
                                    ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                    
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                           ->WhereIn('shape_id',explode(',', $request->shape))
                                           ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //ADG
         if($request->Category AND  $request->shape AND $request->Weight_min AND $request->Weight_max)
         {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
     
             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                              ->orderBy('product_Weight','desc')
                              ->get();


                              if($request->sortby == "Newest"){
                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{
                                    $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                                    $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                    ->WhereIn('shape_id',explode(',', $request->shape))
                                    ->Where('product_Weight',  '>=',$request->Weight_min)
                                    ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //AEF 
         if($request->Category AND  $request->clarity AND $request->enhancement)
         {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
     
             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                              ->orderBy('product_Weight','desc')
                              ->get();




                              if($request->sortby == "Newest"){

                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                               
                                    $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //AEG 
         if($request->Category AND  $request->clarity AND $request->Weight_min AND $request->Weight_max)
         {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
     
             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                              ->orderBy('product_Weight','desc')
                              ->get();


                              if($request->sortby == "Newest"){

                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                               
                                    $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //AFG 
         if($request->Category AND  $request->enhancement AND $request->Weight_min AND $request->Weight_max)
         {

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
     
             $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                              ->orderBy('product_Weight','desc')
                              ->get();


                              if($request->sortby == "Newest"){

                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                               
                                    $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //BCD 
         if($request->Available AND  $request->color AND $request->shape)
         {
             $category_data=['null'=>''];
     
             $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->orderBy('product_Weight','desc')
                              ->get();


                              if($request->sortby == "Newest"){
                                 $category_data=['null'=>''];
                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{
                                    $category_data=['null'=>''];
                                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //BCE
         if($request->Available AND  $request->color AND $request->clarity)
         {

            $category_data=['null'=>''];
     
             $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                              ->orderBy('product_Weight','desc')
                              ->get();

                              if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //BCF
         if($request->Available AND  $request->color AND $request->enhancement)
         {

            $category_data=['null'=>''];
     
             $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                              ->orderBy('product_Weight','desc')
                              ->get();


                              if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //BCG
         if($request->Available AND  $request->color AND $request->Weight_min AND $request->Weight_max)
         {

            $category_data=['null'=>''];
     
             $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                              ->orderBy('product_Weight','desc')
                              ->get();


                              if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('color_id',explode(',', $request->color))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //BDE
         if($request->Available AND  $request->shape AND $request->clarity)
         {

            $category_data=['null'=>''];
     
             $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                              ->orderBy('product_Weight','desc')
                              ->get();


                              if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //BDF
         if($request->Available AND  $request->shape AND $request->enhancement)
         {

            $category_data=['null'=>''];
     
             $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                              ->orderBy('product_Weight','desc')
                              ->get();



                              if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //BDG
         if($request->Available AND  $request->shape AND $request->Weight_min AND $request->Weight_max)
         {

            $category_data=['null'=>''];
     
             $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                              ->orderBy('product_Weight','desc')
                              ->get();


                              if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('shape_id',explode(',', $request->shape))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //BEF
         if($request->Available AND  $request->clarity AND $request->enhancement)
         {

            $category_data=['null'=>''];
     
             $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                              ->orderBy('product_Weight','desc')
                              ->get();


                              if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                                ->WhereIn('clarity_id',explode(',', $request->clarity))
                                ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //BEG
         if($request->Available AND  $request->clarity AND $request->Weight_min AND $request->Weight_max)
         {

            $category_data=['null'=>''];
     
             $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                              ->orderBy('product_Weight','desc')
                              ->get();


                              if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('clarity_id',explode(',', $request->clarity))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
         //BFG
         if($request->Available AND  $request->enhancement AND $request->Weight_min AND $request->Weight_max)
         {

            $category_data=['null'=>''];
     
             $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                              ->orderBy('product_Weight','desc')
                              ->get();



                              if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                              ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
 
            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

 
         }
          //CDE
          if($request->color AND  $request->shape AND $request->clarity)
          {

            $category_data=['null'=>''];
      
              $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('shape_id',explode(',', $request->shape))
                               ->WhereIn('clarity_id',explode(',', $request->clarity))
                               ->orderBy('product_Weight','desc')
                               ->get();

                               if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('shape_id',explode(',', $request->shape))
                               ->WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('shape_id',explode(',', $request->shape))
                               ->WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
          }
          //CDF
          if($request->color AND  $request->shape AND $request->enhancement)
          {

            $category_data=['null'=>''];
      
              $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('shape_id',explode(',', $request->shape))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->orderBy('product_Weight','desc')
                               ->get();


                               if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('shape_id',explode(',', $request->shape))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('shape_id',explode(',', $request->shape))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
          }
          //CDG
          if($request->color AND  $request->shape AND $request->Weight_min AND $request->Weight_max)
          {

            $category_data=['null'=>''];
      
              $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('shape_id',explode(',', $request->shape))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                               ->orderBy('product_Weight','desc')
                               ->get();


                               if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('shape_id',explode(',', $request->shape))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('shape_id',explode(',', $request->shape))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
          }
          //CEF
          if($request->color AND  $request->clarity AND $request->enhancement)
          {

            $category_data=['null'=>''];
      
              $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('clarity_id',explode(',', $request->clarity))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->orderBy('product_Weight','desc')
                               ->get();



                               if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('clarity_id',explode(',', $request->clarity))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('clarity_id',explode(',', $request->clarity))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
          }
          //CEG
          if($request->color AND  $request->clarity AND $request->Weight_min AND $request->Weight_max)
          {

            $category_data=['null'=>''];
      
              $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('clarity_id',explode(',', $request->clarity))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                               ->orderBy('product_Weight','desc')
                               ->get();



                               if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('clarity_id',explode(',', $request->clarity))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('clarity_id',explode(',', $request->clarity))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }


  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
          }
          //CFG
          if($request->color AND  $request->enhancement AND $request->Weight_min AND $request->Weight_max)
          {

            $category_data=['null'=>''];
      
              $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                               ->orderBy('product_Weight','desc')
                               ->get();



                               if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }

  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
          }
          //DEF
          if($request->shape AND  $request->clarity AND $request->enhancement)
          {

            $category_data=['null'=>''];
      
              $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                               ->WhereIn('clarity_id',explode(',', $request->clarity))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->orderBy('product_Weight','desc')
                               ->get();

                               if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                               ->WhereIn('clarity_id',explode(',', $request->clarity))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                    $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                                    ->WhereIn('clarity_id',explode(',', $request->clarity))
                                    ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }



  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
          }
          //DEG
          if($request->shape AND  $request->clarity AND $request->Weight_min AND $request->Weight_max)
          {

            $category_data=['null'=>''];
      
              $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                               ->WhereIn('clarity_id',explode(',', $request->clarity))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                               ->orderBy('product_Weight','desc')
                               ->get();

                               if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                               ->WhereIn('clarity_id',explode(',', $request->clarity))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                                 }else{

                                    $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                               ->WhereIn('clarity_id',explode(',', $request->clarity))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                   return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                }
  
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
          }
          //DFG
          if($request->shape AND  $request->enhancement AND $request->Weight_min AND $request->Weight_max)
          {

            $category_data=['null'=>''];
      
              $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                               ->orderBy('product_Weight','desc')
                               ->get();


                            if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                              }else{

                                 $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                            }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
          }
          //EFG
          if($request->clarity AND  $request->enhancement AND $request->Weight_min AND $request->Weight_max)
          {

            $category_data=['null'=>''];
      
              $stonedata=Stone::WhereIn('clarity_id',explode(',', $request->clarity))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                               ->orderBy('product_Weight','desc')
                               ->get();

                               if($request->sortby == "Newest"){

                                 $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('clarity_id',explode(',', $request->clarity))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                              }else{

                                 $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('clarity_id',explode(',', $request->clarity))
                               ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                               ->Where('product_Weight',  '>=',$request->Weight_min)
                               ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }
  
             return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

  
          }




        
        // category and other data
        if($request->Category AND  $request->Available){

         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                            ->WhereIn('Available_id',explode(',', $request->Available))
                            ->orderBy('product_Weight','desc')
                            ->get();


                            foreach ($category_data as $key => $catt) {
                              $cat[]=$catt->id;
                            }
                            
                            
                
                            $stonedataa=Stone::whereIn('category_id',$cat)->get();
                
                
                
                            foreach ($stonedataa as $key => $value) {
                
                              $cat[]=$value->category_id; 
                              $col[]=$value->color_id;
                              $av[]=$value->Available_id;
                              $shap[]=$value->shape_id;
                              $clar[]=$value->clarity_id;
                              $enh[]=$value->enhancement_id;
                              
                            }
                
                          
                            
                            $categorys=Category::whereIn('id',$cat)->get();
                            $availabilitys=Available::whereIn('id',$av)->get();                      
                            $colors=Color::whereIn('id',$col)->get();
                            $shapes=Shape::whereIn('id',$shap)->get();
                            $claritys=Clarity::whereIn('id',$clar)->get();
                            $enhancements=Enhancements::whereIn('id',$enh)->get();






                            if($request->sortby == "Newest"){

                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                                ->WhereIn('Available_id',explode(',', $request->Available))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data,'availability'=>$availabilitys,
                                'color'=>$colors,
                                'shape'=>$shapes,
                                'clarity'=>$claritys,
                                'enhancement'=>$enhancements]);

                                
                              }else{

                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                               
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                                ->WhereIn('Available_id',explode(',', $request->Available))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data,'availability'=>$availabilitys,
                                'color'=>$colors,
                                'shape'=>$shapes,
                                'clarity'=>$claritys,
                                'enhancement'=>$enhancements]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data,'availability'=>$availabilitys,
            'color'=>$colors,
            'shape'=>$shapes,
            'clarity'=>$claritys,
            'enhancement'=>$enhancements]);



        }
        if($request->Category AND  $request->color){

         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
            
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                            ->WhereIn('color_id',explode(',', $request->color))
                            ->orderBy('product_Weight','desc')
                            ->get();


                            if($request->sortby == "Newest"){

                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                                 ->WhereIn('color_id',explode(',', $request->color))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                              }else{

                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                               
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                                 ->WhereIn('color_id',explode(',', $request->color))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

            
        }
        if($request->Category AND  $request->shape){

         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
            
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                            ->WhereIn('shape_id',explode(',', $request->shape))
                            ->orderBy('product_Weight','desc')
                            ->get();

                            if($request->sortby == "Newest"){

                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                                ->WhereIn('shape_id',explode(',', $request->shape))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                              }else{
                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                                 ->WhereIn('shape_id',explode(',', $request->shape))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

            
        }
        if($request->Category AND  $request->shape){

          $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
            
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                            ->WhereIn('shape_id',explode(',', $request->shape))
                            ->orderBy('product_Weight','desc')
                            ->get();

                            if($request->sortby == "Newest"){

                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                                 ->WhereIn('shape_id',explode(',', $request->shape))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                              }else{

                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                               
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                                 ->WhereIn('shape_id',explode(',', $request->shape))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

            
        }
        if($request->Category AND  $request->clarity){


         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

 
            
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                            ->WhereIn('clarity_id',explode(',', $request->clarity))
                            ->orderBy('product_Weight','desc')
                            ->get();

                            if($request->sortby == "Newest"){

                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                                 ->WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                              }else{

                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                               
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                                 ->WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

            
        }
        if($request->Category AND  $request->enhancement){

            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
            
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                            ->orderBy('product_Weight','desc')
                            ->get();

                            if($request->sortby == "Newest"){

                              $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                                 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                              }else{

                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                               
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                                 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

            
        }
        if($request->Category AND  $request->Weight_min AND $request->Weight_max){

         $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
            
            $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                              ->Where('product_Weight',  '>=',$request->Weight_min)
                              ->Where('product_Weight', '<=',$request->Weight_max)
                              ->orderBy('product_Weight','desc')
                              ->get();


                              if($request->sortby == "Newest"){

                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                                ->Where('product_Weight',  '>=',$request->Weight_min)
                                                ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                              }else{

                                 $category_data=Category::whereIn('id',explode(',', $request->Category))->get();
                               
                                $stonedata=Stone::WhereIn('category_id',explode(',', $request->Category))
                                                 ->Where('product_Weight',  '>=',$request->Weight_min)
                                                 ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

            
        }

          // available and other data

        if($request->Available AND  $request->color){


         $category_data=['null'=>''];
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                            ->WhereIn('color_id',explode(',', $request->color))
                            ->orderBy('product_Weight','desc')
                            ->get();

                            if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                                                 ->WhereIn('color_id',explode(',', $request->color))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                              }else{

                                 $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                                                 ->WhereIn('color_id',explode(',', $request->color))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }
        if($request->Available AND  $request->shape){

         $category_data=['null'=>''];
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                            ->WhereIn('shape_id',explode(',', $request->shape))
                            ->orderBy('product_Weight','desc')
                            ->get();


                            if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                                                 ->WhereIn('shape_id',explode(',', $request->shape))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                              }else{

                                 $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                                                 ->WhereIn('shape_id',explode(',', $request->shape))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }
        if($request->Available AND  $request->clarity){

         $category_data=['null'=>''];
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                            ->WhereIn('clarity_id',explode(',', $request->clarity))
                            ->orderBy('product_Weight','desc')
                            ->get();

                            if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                                                 ->WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                              }else{

                                 $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                                                 ->WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }
        if($request->Available AND  $request->enhancement){

         $category_data=['null'=>''];
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                            ->orderBy('product_Weight','desc')
                            ->get();


                            if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                                                 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                              }else{

                                 $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                                                 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }
        if($request->Available AND  $request->Weight_min AND $request->Weight_max){

         $category_data=['null'=>''];
            $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                             ->Where('product_Weight',  '>=',$request->Weight_min)
                             ->Where('product_Weight', '<=',$request->Weight_max)
                             ->orderBy('product_Weight','desc')
                             ->get();



                             if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                                                 ->Where('product_Weight',  '>=',$request->Weight_min)
                                                 ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                              }else{

                                 $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('Available_id',explode(',', $request->Available))
                                                ->Where('product_Weight',  '>=',$request->Weight_min)
                                                 ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }

        // color and other data

        if($request->color AND  $request->shape){

         $category_data=['null'=>''];
            $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                            ->WhereIn('shape_id',explode(',', $request->shape))
                            ->orderBy('product_Weight','desc')
                            ->get();

                            if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                                                 ->WhereIn('shape_id',explode(',', $request->shape))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                              }else{

                                 $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                                                 ->WhereIn('shape_id',explode(',', $request->shape))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }
        if($request->color AND  $request->clarity){

         $category_data=['null'=>''];
            $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                            ->WhereIn('clarity_id',explode(',', $request->clarity))
                            ->orderBy('product_Weight','desc')
                            ->get();


                            if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                                                 ->WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                             }else{

                              $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                                                ->WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }
        if($request->color AND  $request->enhancement){


         $category_data=['null'=>''];
            $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                            ->orderBy('product_Weight','desc')
                            ->get();


                            if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                                                 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                             }else{

                              $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                                                 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }
        if($request->color AND  $request->Weight_min AND $request->Weight_max){


         $category_data=['null'=>''];
            $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                             ->Where('product_Weight',  '>=',$request->Weight_min)
                             ->Where('product_Weight', '<=',$request->Weight_max)
                             ->orderBy('product_Weight','desc')
                             ->get();



                             if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                                                 ->Where('product_Weight',  '>=',$request->Weight_min)
                                                 ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                             }else{

                              $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('color_id',explode(',', $request->color))
                                                 ->Where('product_Weight',  '>=',$request->Weight_min)
                                                 ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }

         //shape and other data
         if($request->shape AND  $request->clarity){

            $category_data=['null'=>''];
            $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                            ->WhereIn('clarity_id',explode(',', $request->clarity))
                            ->orderBy('product_Weight','desc')
                            ->get();


                            if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                                                 ->WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                             }else{

                              $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                                                 ->WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->orderBy('product_Weight','asc')->get();
                                                 
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }
        if($request->shape AND  $request->enhancement){

         $category_data=['null'=>''];
            $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                            ->orderBy('product_Weight','desc')
                            ->get();



                            if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                                                 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                             }else{

                              $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                                                 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','asc')->get();

                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }
        if($request->shape AND  $request->Weight_min AND $request->Weight_max){

         $category_data=['null'=>''];
            $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                            ->Where('product_Weight',  '>=',$request->Weight_min)
                            ->Where('product_Weight', '<=',$request->Weight_max)
                            ->orderBy('product_Weight','desc')
                            ->get();



                            if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                                                 ->Where('product_Weight',  '>=',$request->Weight_min)
                                                 ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                             }else{

                              $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('shape_id',explode(',', $request->shape))
                                                 ->Where('product_Weight',  '>=',$request->Weight_min)
                                                 ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }

        //chariy and other data

        if($request->clarity AND  $request->enhancement){

         $category_data=['null'=>''];
            $stonedata=Stone::WhereIn('clarity_id',explode(',', $request->clarity))
                            ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                            ->orderBy('product_Weight','desc')
                            ->get();


                            
                            if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                             }else{

                              $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->orderBy('product_Weight','asc')->get();
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }
                                                 

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }

        if($request->clarity AND  $request->Weight_min AND $request->Weight_max){

         $category_data=['null'=>''];

            $stonedata=Stone::WhereIn('clarity_id',explode(',', $request->clarity))
                            ->Where('product_Weight',  '>=',$request->Weight_min)
                            ->Where('product_Weight', '<=',$request->Weight_max)
                            ->orderBy('product_Weight','desc')
                            ->get();


                            if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('clarity_id',explode(',', $request->clarity))
                                                 ->Where('product_Weight',  '>=',$request->Weight_min)
                                                 ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                             }else{

                              $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('clarity_id',explode(',', $request->clarity))
                                                ->Where('product_Weight',  '>=',$request->Weight_min)
                                                 ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }



            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }

         //enhastment and other data

         if($request->enhancement AND  $request->Weight_min AND $request->Weight_max){

            $category_data=['null'=>''];

            $stonedata=Stone::WhereIn('enhancement_id',explode(',', $request->enhancement))
                            ->Where('product_Weight',  '>=',$request->Weight_min)
                            ->Where('product_Weight', '<=',$request->Weight_max)
                            ->orderBy('product_Weight','desc')
                            ->get();




                            if($request->sortby == "Newest"){

                              $category_data=['null'=>''];

                                $stonedata=Stone::WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->Where('product_Weight',  '>=',$request->Weight_min)
                                                 ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','desc')->get();
                                
                
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                                
                             }else{

                              $category_data=['null'=>''];
                               
                                $stonedata=Stone::WhereIn('enhancement_id',explode(',', $request->enhancement))
                                                 ->Where('product_Weight',  '>=',$request->Weight_min)
                                                 ->Where('product_Weight', '<=',$request->Weight_max)
                                                 ->orderBy('product_Weight','asc')->get();
                                return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

                             }                

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }

        

    
        if($request->Category)
        {

         

            
            
            
            $category_data=Category::whereIn('id',explode(',', $request->Category))->get();

            $stonedata=Stone::whereIn('category_id',explode(',', $request->Category))->orderBy('product_Weight','desc')->get();


            foreach ($category_data as $key => $catt) {
              $cat[]=$catt->id;
            }
            
            

            $stonedataa=Stone::whereIn('category_id',$cat)->get();



            foreach ($stonedataa as $key => $value) {

              $cat[]=$value->category_id; 
              $col[]=$value->color_id;
              $av[]=$value->Available_id;
              $shap[]=$value->shape_id;
              $clar[]=$value->clarity_id;
              $enh[]=$value->enhancement_id;
              
            }

          
            
            $categorys=Category::whereIn('id',$cat)->get();
            $availabilitys=Available::whereIn('id',$av)->get();                      
            $colors=Color::whereIn('id',$col)->get();
            $shapes=Shape::whereIn('id',$shap)->get();
            $claritys=Clarity::whereIn('id',$clar)->get();
            $enhancements=Enhancements::whereIn('id',$enh)->get();

           
            
            

                        
            if($request->sortby == "Newest"){

                $stonedata=Stone::whereIn('category_id',explode(',', $request->Category))
                                 ->orderBy('product_Weight','desc')->get();
                

                return response()->json([

                  'stonedata'=>$stonedata,
                  'category_data'=>$category_data,

                  'category'=>$categorys,
                  'availability'=>$availabilitys,
                  'color'=>$colors,
                  'shape'=>$shapes,
                  'clarity'=>$claritys,
                  'enhancement'=>$enhancements



               ]);
                
             }else{
               
                $stonedata=Stone::whereIn('category_id',explode(',', $request->Category))
                                 ->orderBy('product_Weight','asc')->get();

                return response()->json([
                  'stonedata'=>$stonedata,
                  'category_data'=>$category_data,

                  'category'=>$categorys,
                  'availability'=>$availabilitys,
                  'color'=>$colors,
                  'shape'=>$shapes,
                  'clarity'=>$claritys,
                  'enhancement'=>$enhancements
                ]);

             }
        

             return response()->json([
               'stonedata'=>$stonedata,
               'category_data'=>$category_data,

               'category'=>$categorys,
                  'availability'=>$availabilitys,
                  'color'=>$colors,
                  'shape'=>$shapes,
                  'clarity'=>$claritys,
                  'enhancement'=>$enhancements
             ]);


        }
        if($request->Available)
        {

         $category_data=[
            'null'=>'',
            
         ];


         

            
        $stonedata=Stone::whereIn('Available_id',explode(',', $request->Available))->orderBy('product_Weight','desc')->get();


         if($request->sortby == "Newest"){

            $stonedata=Stone::whereIn('Available_id',explode(',', $request->Available))
                             ->orderBy('product_Weight','desc')->get();
            

                             return response()->json([

                              'stonedata'=>$stonedata,
                              'category_data'=>$category_data
                           ]);
            
          }else{
           
            $stonedata=Stone::whereIn('Available_id',explode(',', $request->Available))
                             ->orderBy('product_Weight','asc')->get();

                             return response()->json([

                              'stonedata'=>$stonedata,
                              'category_data'=>$category_data
                           ]);
          }





          return response()->json([

            'stonedata'=>$stonedata,
            'category_data'=>$category_data
         ]);
                    
        

        }if($request->color){

         $category_data=[
            'null'=>'',
            
         ];
            
            $stonedata=Stone::whereIn('color_id',explode(',', $request->color))->orderBy('product_Weight','desc')->get();

            


            if($request->sortby == "Newest"){

                $stonedata=Stone::whereIn('color_id',explode(',', $request->color))
                                 ->orderBy('product_Weight','desc')->get();
                
    
                                 return response()->json([

                                    'stonedata'=>$stonedata,
                                    'category_data'=>$category_data
                                 ]);
                
              }else{
               
                $stonedata=Stone::whereIn('color_id',explode(',', $request->color))
                                 ->orderBy('product_Weight','asc')->get();
    
                                 return response()->json([

                                    'stonedata'=>$stonedata,
                                    'category_data'=>$category_data
                                 ]);
              }
    


              return response()->json([

               'stonedata'=>$stonedata,
               'category_data'=>$category_data
            ]);

        }if($request->shape){

         $category_data=['null'=>''];
           
            $stonedata=Stone::whereIn('shape_id',explode(',', $request->shape))->orderBy('product_Weight','desc')->get();

            if($request->sortby == "Newest"){

                $stonedata=Stone::whereIn('shape_id',explode(',', $request->shape))
                                 ->orderBy('product_Weight','desc')->get();
                
    
                                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                
              }else{
               
                $stonedata=Stone::whereIn('shape_id',explode(',', $request->shape))
                                 ->orderBy('product_Weight','asc')->get();
    
                                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
              }

            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }if($request->clarity){

            $category_data=['null'=>''];
            
            $stonedata=Stone::whereIn('clarity_id',explode(',', $request->clarity))->orderBy('product_Weight','desc')->get();


            if($request->sortby == "Newest"){

                $stonedata=Stone::whereIn('clarity_id',explode(',', $request->clarity))
                                 ->orderBy('product_Weight','desc')->get();
                
    
                                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                
              }else{
               
                $stonedata=Stone::whereIn('clarity_id',explode(',', $request->clarity))
                                 ->orderBy('product_Weight','asc')->get();
    
                                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
              }

              return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

          }if($request->enhancement){

            $category_data=['null'=>''];
            
            $stonedata=Stone::whereIn('enhancement_id',explode(',', $request->enhancement))->orderBy('product_Weight','desc')->get();

            if($request->sortby == "Newest"){

                 $stonedata=Stone::whereIn('enhancement_id',explode(',', $request->enhancement))
                                 ->orderBy('product_Weight','desc')->get();
                
    
                                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
                
              }else{
               
                 $stonedata=Stone::whereIn('enhancement_id',explode(',', $request->enhancement))
                                 ->orderBy('product_Weight','asc')->get();
    
                                 return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
              }



              return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);



        }if($request->Weight_min AND $request->Weight_max){

         $category_data=['null'=>''];
            
        $stonedata = DB::table('product')
        ->where('product_Weight',  '>=',$request->Weight_min)
        ->where('product_Weight', '<=',$request->Weight_max)
        ->orderBy('product_Weight','desc')
        ->get();



        if($request->sortby == "Newest"){

            $category_data=['null'=>''];

            $stonedata = DB::table('product')
                            ->where('product_Weight',  '>=',$request->Weight_min)
                            ->where('product_Weight', '<=',$request->Weight_max)
                            ->orderBy('product_Weight','desc')
                            ->get();
           

                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
           
         }else{

            $category_data=['null'=>''];
          
            $stonedata = DB::table('product')
                            ->where('product_Weight',  '>=',$request->Weight_min)
                            ->where('product_Weight', '<=',$request->Weight_max)
                            ->orderBy('product_Weight','asc')
                            ->get();

                            return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
         }

         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }

        
       


      

        if($request->sortby== "Weight"){

         $category_data=['null'=>''];


         $stonedata=Stone::orderBy('product_Weight','asc')->get();

               
         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

        }
        if($request->sortby== "Newest"){

         $category_data=['null'=>''];

         $stonedata=Stone::orderBy('product_Weight','desc')->get();

         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
         
        }else{


       if($request->qp=="Sapphire"){

         $category_qs=Category::where('category_name',$request->qp)->first();
         $category_data=['null'=>''];
         $stonedata=Stone::whereIn('category_id',explode(',', $category_qs->id))->orderBy('product_Weight','asc')->get();

         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);

         

       }if($request->qp=="Spinel"){
         $category_qs=Category::where('category_name',$request->qp)->first();
         $category_data=['null'=>''];
         $stonedata=Stone::whereIn('category_id',explode(',', $category_qs->id))->orderBy('product_Weight','asc')->get();

         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


       }if($request->qp=="Chrysoberyl"){
         $category_qs=Category::where('category_name',$request->qp)->first();
         $category_data=['null'=>''];
         $stonedata=Stone::whereIn('category_id',explode(',', $category_qs->id))->orderBy('product_Weight','asc')->get();

         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


       }if($request->qp=="Other%20Varieties"){

        
         $category_qs=Category::where('category_name',$request->qp)->first();
         $category_data=['null'=>''];
         $stonedata=Stone::whereIn('category_id',explode(',', $category_qs->id))->orderBy('product_Weight','asc')->get();

         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


       }if($request->qp=="Add-ons"){
         $category_qs=Category::where('category_name',$request->qp)->first();
         $category_data=['null'=>''];
         $stonedata=Stone::whereIn('category_id',explode(',', $category_qs->id))->orderBy('product_Weight','asc')->get();

         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);


       }if($request->qp=="Garnet"){
         $category_qs=Category::where('category_name',$request->qp)->first();
         $category_data=['null'=>''];
         $stonedata=Stone::whereIn('category_id',explode(',', $category_qs->id))->orderBy('product_Weight','asc')->get();

         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data]);
       
       
      }else{

         $category_data=['null'=>''];

         $stonedata=Stone::whereIn('Available_id',[1,4])->orderBy('product_Weight','asc')->get();

         $categorys=Category::whereIn('id', function($query){
          $query->select('category_id')->from('product')->get();
           })->get();

      

      $colors=Color::whereIn('id', function($query){
          $query->select('color_id')->from('product')->get();
          })->get();

      
      $availabilitys=Available::whereIn('id', function($query){
          $query->select('Available_id')->from('product')->get();
          })->get();
            

      
      $shapes=Shape::whereIn('id', function($query){
          $query->select('shape_id')->from('product')->get();
          })->get();




      $claritys=Clarity::whereIn('id', function($query){
          $query->select('clarity_id')->from('product')->get();
          })->get();


      $enhancements=Enhancements::whereIn('id', function($query){
          $query->select('enhancement_id')->from('product')->get();
          })->get();

        
         
         

         return response()->json(['stonedata'=>$stonedata,'category_data'=>$category_data,'category'=>$categorys,
         'availability'=>$availabilitys,
         'color'=>$colors,
         'shape'=>$shapes,
         'clarity'=>$claritys,
         'enhancement'=>$enhancements]);

       }


         

         
        

         

        } 
        
        
      

        

     }

   
    
    
}
