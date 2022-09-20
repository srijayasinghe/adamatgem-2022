<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process_Thres extends Model
{
    use HasFactory;

    protected $table = 'process_thresections';

    protected $fillable=[
        'process_center_header1',
        'process_center_header2',
        'process_center_header3',
        
       
        

        
        
    ];
}
