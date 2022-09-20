<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_Details extends Model
{
    use HasFactory;

    

    protected $table = 'contact_details';

    protected $fillable=[
        'conatct_header',
        'conatct_header_text',
        'conatct_number',
        'conatct_number_image',
        'conatct_email',
        'conatct_email_image',
        'conatct_insta',
        'conatct_insta_image',
        'conatct_register_office',
        'conatct_register_adress1',
        'conatct_register_adress2',
        'conatct_register_adress3',
        'conatct_ourlist',
        'conatct_ourlist_text'
        
    ];

    
}
