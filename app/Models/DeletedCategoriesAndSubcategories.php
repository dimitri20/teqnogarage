<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeletedCategoriesAndSubcategories extends Model
{
    use HasFactory;

    protected $table = "deleted_categories_and_subcategories";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'type',
        'old_id',
        'name',
        'name_ka',
        'name_en',
        'name_ru',
        'optional'
    ];
}
