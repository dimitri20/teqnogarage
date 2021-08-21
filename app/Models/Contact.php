<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'contacts';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'phone_number',
        'facebook',
        'gmail',
        'instagram',
        'whatsapp',
        'location',
        'about_ka',
        'about_en',
        'about_ru'
    ];
}
