<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_Select_Us extends Model
{
    use HasFactory;

    protected $table = 'home_select_us';

    protected $fillable=[
        'home_selectus_logo',
        'home_selectus_header',
        'home_selectus_body',
        

        
        
    ];
}
