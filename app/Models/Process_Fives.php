<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process_Fives extends Model
{
    use HasFactory;

    protected $table = 'process_fivesections';

    protected $fillable=[
        'process_new_banner',
        'process_new_body_text1',
        'attention_italic',
        'process_new_body_text2',
        'process_new_body_image',
        'process_new_icon1',
        'process_new_icon2',
        'process_new_icon_text'
        
       
        

        
        
    ];
}
