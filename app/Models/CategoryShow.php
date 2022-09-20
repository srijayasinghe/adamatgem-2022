<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class CategoryShow extends Model
{
    use HasFactory;
   
    protected $table = 'product';

    public function application()
    {
        return $this->hasMany(Category::class, 'id', 'category_id');
    }
}
