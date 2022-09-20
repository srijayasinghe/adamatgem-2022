<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Our_Stone extends Model
{
    use HasFactory;

    protected $table = 'our_stone';

    protected $fillable=[
        'our_stone_banner',
        'our_stone_header',
        'our_stone_body',
        'our_category_header',
        'our_category_body'
       
        

        
        
    ];

    
}
