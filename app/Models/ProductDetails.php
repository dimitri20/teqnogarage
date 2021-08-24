<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;

    protected $table = "product_details";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'products_id',
        'characteristic_category',
        'characteristic_category_en',
        'characteristic_category_ka',
        'characteristic_category_ru',
        'characteristic_attribute',
        'characteristic_attribute_en',
        'characteristic_attribute_ka',
        'characteristic_attribute_ru',
        'characteristic_value_ka',
        'characteristic_value_en',
        'characteristic_value_ru',
    ];

    public function product(){
        return $this->hasMany(Products::class);
    }
}
