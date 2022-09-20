<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImages extends Model
{
    use HasFactory;

    protected $table = 'gallery_images';

    protected $fillable=[
        'gallery_id',
        'gallery_image',
        'order'
       
    
        

        
        
    ];
}
