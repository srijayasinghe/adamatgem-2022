<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Shape;
use App\Models\Color;
use App\Models\Clarity;
use App\Models\Variety;
use App\Models\Available;

class Stone extends Model
{
    use HasFactory;

    

    protected $table = 'product';
    

    protected $fillable=[
        'product_name',
        'product_image',
        'avalibility_status',
        'value',
        'color',
        'order_value',
        'product_description',
        'product_dimensions',
        'product_treatments',
        'product_labreport',
        'product_price',
        'Stone_Weight_Description',
        'product_Weight',
        'product_variety',
        'Available_id',
        'category_id',
        'Variety_id',
        'clarity_id',
        'color_id',
        'shape_id',
        'enhancement_id',
        'gallery_id',
        'solid',
        'Shape_Cut',
        'order'





        

        

        
        
    ];

}
