<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process_Studiobodys extends Model
{
    use HasFactory;

    protected $table = 'process_studiobodys';

    protected $fillable=[
        'process_studios_slider_headertext1',
        'process_studios_slider_headertext2',
           
    ];
}
