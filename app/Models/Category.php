<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stone;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable=[
        'category_name',
        'category_description',
        'category_image',
        'name_value',
        'description_value'
        
        
        
    ];

    public function application()
    {
        return $this->hasMany(Stone::class, 'category_id', 'id');
    }
    public function showimages(){
        return $this->belongsTo(Stone::class, 'category_id', 'id');
    }

    

   
}
