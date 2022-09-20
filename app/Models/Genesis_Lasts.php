<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genesis_Lasts extends Model
{
    use HasFactory;

    

    protected $table = 'genesis_lasts';

    protected $fillable=[
        
        'genesis_lasts_header',
        'genesis_lasts_text1',
        'genesis_lasts_text2',
        'genesis_lasts_text3',
         'genesis_lasts_text4',
         'genesis_lasts_text5',
        
        

        
        
    ];
}
