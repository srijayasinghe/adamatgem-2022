<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;

class Galleryshowdata extends Model
{
    protected $table = 'gallery_images';

    public function showgallery(){
        return $this->belongsTo(Gallery::class,'gallery_id','id');
    }

}
