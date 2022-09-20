<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_slider extends Model
{
    use HasFactory;

    protected $table = 'homes';

    protected $fillable=[
        'home_banner_image',
        'home_body_image',
        'home_banner_header',
        'order',
        'home_banner_description'
        

        
        
    ];
}
