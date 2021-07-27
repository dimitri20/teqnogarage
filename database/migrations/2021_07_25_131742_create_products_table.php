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

            $table->string("name");
            $table->string("type")->nullable();
            $table->bigInteger("count")->default(0);
            $table->longText("description")->nullable();

            $table->mediumInteger("price_from")->default(0);
            $table->mediumInteger("price_to")->default(0);

            $table->string("video_url")->nullable();

            $table->foreignId("screen_id")->nullable();
            $table->foreignId("camera_id")->nullable();
            $table->foreignId("platform_id")->nullable();
            $table->foreignId("storage_id")->nullable();
            $table->foreignId("others_id")->nullable();
            $table->foreignId("images_id")->nullable();

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
