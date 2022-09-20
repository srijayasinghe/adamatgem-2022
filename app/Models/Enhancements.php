<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enhancements extends Model
{
    use HasFactory;

    protected $table = 'enhancements';

    protected $fillable=[
        'enhancement_name',
        'enhancement_description',
        

        
        
    ];
}
