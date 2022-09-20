<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faq_Category;

class FaqShow extends Model
{
    use HasFactory;

    protected $table = 'faq';

    public function showfaq(){
        return $this->belongsTo(Faq_Category::class,'faq_category_id','id');
    }
}
