<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Others extends Model
{
    use HasFactory;

    protected $table = 'others';
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'unblock',
        '4G',
        'battery',
        'battery_uncharge_time',
        'building',
        'weight',
        'release'
    ];

}
