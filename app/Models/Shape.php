<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shape extends Model
{
    use HasFactory;

    protected $table = 'shape';

    protected $fillable=[
        'shape_name',
        'shape_image',
        'shape_description',
        

        
        
    ];
}
