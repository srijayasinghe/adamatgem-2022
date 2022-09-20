<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_Body extends Model
{
    use HasFactory;
    protected $table = 'home_body';

    protected $fillable=[
        'home_body_banner',
        'home_body_banner_text1',
        'home_body_text',
        'home_body_content',
        'home_body_logo'
        

        
        
    ];
}
