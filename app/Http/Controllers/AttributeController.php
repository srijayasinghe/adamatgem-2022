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
use App\Models\Footers;

class AttributeController extends Controller
{
    public function Attribute_List(Request $request){

       
            

            $stonedata=Stone::whereIn('category_id',explode(',', $request->cat))->orderBy('product_Weight','asc')->paginate(40); 

            foreach ($stonedata as $key => $value) {

              $cat[]=$value->category_id; 
              $col[]=$value->color_id;
              $av[]=$value->Available_id;
              $shap[]=$value->shape_id;
              $clar[]=$value->clarity_id;
              $enh[]=$value->enhancement_id;
              
            }

            $categorys=Category::whereIn('id',$cat)->get();
            $colors=Color::whereIn('id',$col)->get();
            $availabilitys=Available::whereIn('id',$av)->get();
            $shapes=Shape::whereIn('id',$shap)->get();
            $claritys=Clarity::whereIn('id',$clar)->get();
            $enhancements=Enhancements::whereIn('id',$enh)->get(); 

            
            return response()->json([
                'categorys'=>$categorys,
                'colors'=>$colors,
                'availabilitys'=>$availabilitys,
                'shapes'=>$shapes,
                'claritys'=>$claritys,
                'enhancements'=>$enhancements,
            ]);

    }
}
