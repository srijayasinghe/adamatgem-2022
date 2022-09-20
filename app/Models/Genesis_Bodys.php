<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genesis_Bodys extends Model
{
    use HasFactory;

    protected $table = 'genesis_bodys';

    protected $fillable=[
        
        'genesis_body_header',
        'genesis_body_text',
        'genesis_body_header',
        'genesis_body_image1',
        'genesis_image1_header',
        'genesis_image1_body',
        'genesis_body_image2',
        'genesis_image2_header',
        'genesis_image2_body',
        
        

        
        
    ];
}
