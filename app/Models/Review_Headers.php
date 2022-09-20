<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review_Headers extends Model
{
    use HasFactory;

    protected $table = 'reviews_headers';

    protected $fillable=[
        'reviews_banner_image',
        'reviews_header_header',
        'reviews_header_text',
        
        

        
        
    ];
}
