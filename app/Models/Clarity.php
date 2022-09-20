<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clarity extends Model
{
    use HasFactory;

    protected $table = 'clarity';

    protected $fillable=[
        'clarity_name',
        'clarity_description',
        

        
        
    ];
}
