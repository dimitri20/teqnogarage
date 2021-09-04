<?php

namespace Database\Seeders;

use App\Models\Images;
use App\Models\Products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0; $i < 20; $i++){
            Products::query()->create([
                'name' => Str::random(15),
                'categories_id' => 2,
                'subcategories_id' => 3,
                'video_url' => "blank",
                'available' => (bool)random_int(0, 1),
                'price_from' => random_int(1, 2000),
                'price_to' => random_int(2001, 3000),
                'images_id' => 0,
                'description_ka' => Str::random(300),
                'description_en' => Str::random(300),
                'description_ru' => Str::random(300),
            ]);

            Images::query()->create([
                "products_id" => Products::latest('id')->first()['id'], 
                "image_1" => "6130e7fd7e3eb__.png", 
                "image_2" => "6130e7fd7e3eb__.png", 
                'image_3' => "6130e7fd7e3eb__.png", 
                'image_4' => "6130e7fd7e3eb__.png"
            ]);
        }
    
    }
}
