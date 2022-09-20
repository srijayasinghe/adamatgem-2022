<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process_Twos extends Model
{
    use HasFactory;

    protected $table = 'process_twosections';

    protected $fillable=[
        'process_sub_header',
        'process_sub_header2',
        'process_sub_body',
        'process_sub_image1',
        
        
       
        

        
        
    ];
}
