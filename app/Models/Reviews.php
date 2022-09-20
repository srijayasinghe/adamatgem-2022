<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable=[
        'reviews_banner_image',
        'reviews_header_header',
        'reviews_header_text',
        'reviews_header',
        'reviews_body',
        'reviews_client',
        'reviews_city',
        

        
        
    ];
}
