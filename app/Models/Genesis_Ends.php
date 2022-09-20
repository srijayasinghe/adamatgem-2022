<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genesis_Ends extends Model
{
    use HasFactory;
    protected $table = 'genesis_ends';

    protected $fillable=[
        
        'genesis_ends_text1',
        'genesis_ends_text2',
        'genesis_ends_text3',
        'genesis_ends_image1',
         'genesis_image1_text1',
         'genesis_image1_text2',
         'genesis_ends_image2',
         'genesis_image2_text1',
         'genesis_image2_text2',
        
        

        
        
    ];
}
