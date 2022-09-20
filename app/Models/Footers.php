<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footers extends Model
{
    use HasFactory;

    protected $table = 'footer_description';

    protected $fillable=[
        'footer_description',
        'footer_logo1',
        'footer_logo2',
        'footer_logo3'
    
        

        
        
    ];

    
}
