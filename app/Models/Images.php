<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'image_1',
        'image_2',
        'image_3',
        'image_4'
    ];
}
