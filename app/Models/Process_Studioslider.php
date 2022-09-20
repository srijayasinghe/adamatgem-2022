<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process_Studioslider extends Model
{
    use HasFactory;

    protected $table = 'process_studiosliders';

    protected $fillable=[
        'process_studios_slider_image',
        'process_studios_slider_endtext',
           
    ];
}
