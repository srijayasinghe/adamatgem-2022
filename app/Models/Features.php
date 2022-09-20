<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    use HasFactory;

    protected $table = 'features';

    protected $fillable=[
        'id',
        'category_id',
        'feature_images'
      
    ];

    public function showfeature(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function application()
    {
        return $this->hasMany(Category::class, 'id', 'category_id');
    }
}
