<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Products extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $primaryKey = "id";
    
    protected $fillable = [
        'name',
        'categories_id',
        'price_from',
        'price_to',
        'video_url',
        'images_id',
        'description_ka',
        'description_en',
        'description_ru',
    ];

    public function category(){
        return $this->hasMany(Categories::class, 'id');
    }

    public function images(){
        return $this->hasOne(Images::class, 'id');
    }
}
