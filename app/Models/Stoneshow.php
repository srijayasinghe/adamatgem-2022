<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Shape;
use App\Models\Color;
use App\Models\Clarity;
use App\Models\Variety;

class Stoneshow extends Model
{
    protected $table = 'product';

    public function showcategory(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    
    public function showshape(){
        return $this->belongsTo(Shape::class,'shape_id','id');
    }
    public function showcolor(){
        return $this->belongsTo(Color::class,'color_id','id');
    }
    public function showclarity(){
        return $this->belongsTo(Clarity::class,'clarity_id','id');
    }
    public function showVariety(){
        return $this->belongsTo(Variety::class,'Variety_id','id');
    }
    
    
}
