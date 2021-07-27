<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'type',
        'description',
        'video_url',
        'count',
        'price_from',
        'price_to',
        'screen_id',
        'camera_id',
        'platform_id',
        'storage_id',
        'others_id',
        'images_id'
    ];

    public function screen(){
        return $this->hasOne(Screen::class, "id");
    }

    public function camera(){
        return $this->belongsTo(Camera::class);
    }

    public function images(){
        return $this->belongsTo(Images::class);
    }

    public function others(){
        return $this->belongsTo(Others::class);
    }

    public function platform(){
        return $this->belongsTo(Platform::class);
    }

    public function storage(){
        return $this->belongsTo(Storage::class);
    }

    public function getTableColumns() {
        $columns = $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
        $temp_arr = [];
        $formatted_columns = [];

        foreach ($columns as $column){
            $array = explode("_", $column);
            if($column != "id" && $column != "updated_at" && $column != "created_at"){
                if($column != "id" && end($array) == "id"){
                    $temp_arr = [];
                    foreach (Schema::getColumnListing($array[0]) as $sub_column){
                        if($sub_column != "id" && $sub_column != "updated_at" && $sub_column != "created_at"){
                            array_push($temp_arr, $sub_column);
                        }
                    }
                    $formatted_columns[$column] = $temp_arr;
                } else {
                    $formatted_columns[$column] = null;
                }
            }
        }

        unset($columns, $temp_arr);

        return $formatted_columns;
    }

}
