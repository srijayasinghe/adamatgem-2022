<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process_Goldens extends Model
{
    use HasFactory;

    protected $table = 'process_goldens';

    protected $fillable=[
        'process_golden_header',
        'process_golden_text',
        'color_1',
        'process_golden_image1',
        'color_2',
        'process_golden_image2',
        'color_3',
        'process_golden_image3',
        'color_4',
        'process_golden_image4',
        'color_5',
        'process_golden_image5',
        
       
        

        
        
    ];
}


