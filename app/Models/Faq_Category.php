<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq_Category extends Model
{
    use HasFactory;

    protected $table = 'faq_category';

    protected $fillable=[
        'faq_category_name',
        'order'
       
        

        
        
    ];

    public function application()
    {
        return $this->hasMany(FaqShowData::class, 'faq_category_id', 'id');
    }
}
