<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $table = 'platform';
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'operating_system',
        'processor_model',
        'processor_speed',
        'core',
        'graphics_processor'
    ];


}
