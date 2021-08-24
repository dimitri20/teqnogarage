<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->foreignId("categories_id")->nullable();
            $table->foreignId("subcategories_id")->nullable();
            $table->string("name");
            $table->string("video_url")->nullable();
            $table->boolean("available")->default(false);
            $table->bigInteger("price_from")->default(0);
            $table->bigInteger("price_to")->default(0);
            $table->foreignId("images_id")->nullable();
            $table->longText("description_ka");
            $table->longText("description_en");
            $table->longText("description_ru");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
