<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $table = 'journal';

    protected $fillable=[
        'post_text',
        'post_main_image',
        'post_body',
        

        
        
    ];
}
