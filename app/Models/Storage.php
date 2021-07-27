<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;

    protected $table = 'storage';
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'operating_memory',
        'internal_storage',
        'storage_card'
    ];


}
