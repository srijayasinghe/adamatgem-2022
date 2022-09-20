<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process_Studios extends Model
{
    use HasFactory;

    protected $table = 'process_studios';

    protected $fillable=[
        'process_studios_header_text',
        'process_studios_header_text2',
           
    ];
}
