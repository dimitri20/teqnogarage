<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
    use HasFactory;

    protected $table = 'screen';
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'size',
        'resolution',
        'technology',
        'protection'
    ];


}
