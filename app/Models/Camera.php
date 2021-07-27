<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    use HasFactory;

    protected $table = 'camera';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'main_camera',
        'main_camera_video',
        'frontal_camera',
        'frontal_camera_video'
    ];

}
