<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_Map extends Model
{
    use HasFactory;

    

    protected $table = 'home_map';

    protected $fillable=[
        'home_map_text',
        'home_map_body',
       
        

        
        
    ];
}
