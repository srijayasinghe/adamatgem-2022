<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process_Daylights extends Model
{
    use HasFactory;

    
    protected $table = 'process_daylights';

    protected $fillable=[
        'process_daylights_image',
        'process_daylights_header',
        'process_daylights_text1',
        'process_center_text2',
        'process_daylights_text2',
        
       
        

        
        
    ];
}





