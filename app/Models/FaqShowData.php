<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faq_Category;

class FaqShowData extends Model
{
    use HasFactory;

    protected $table = 'faq';

    public function application()
    {
        return $this->hasMany(Faq_Category::class, 'id', 'faq_category_id');
    }
}
