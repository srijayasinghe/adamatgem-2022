<?php

namespace App\Models;
use App\Models\Stone;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table = 'color';

    protected $fillable=[
        'color_name',
        'color_code',
        'color_description',

        
        
    ];

    public function application()
    {
        return $this->hasMany(Stone::class,'color_id', 'id');
    }
}

