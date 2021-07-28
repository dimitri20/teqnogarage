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
        "product_id",
        "attribute",
        "value"
    ];
}
