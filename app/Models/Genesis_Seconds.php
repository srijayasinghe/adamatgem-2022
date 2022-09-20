<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genesis_Seconds extends Model
{
    use HasFactory;

    protected $table = 'genesis_seconds';

    protected $fillable=[
        
        'genesis_seconds_header',
        'genesis_seconds_body',
        
        

        
        
    ];
}
