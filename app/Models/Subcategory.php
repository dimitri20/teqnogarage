<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $table = "subcategories";
    public $timestamps = false;

    protected $primaryKey = "id";

    protected $fillable = [
        'categories_id',
        'subcategory',
        'subcategory_ka',
        'subcategory_en',
        'subcategory_ru'
    ];
}
