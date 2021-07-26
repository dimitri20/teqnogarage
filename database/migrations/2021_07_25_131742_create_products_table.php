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

            $table->string("type");

            $table->foreignId("screen_id")->nullable();
            $table->foreignId("camera_id")->nullable();
            $table->foreignId("platform_id")->nullable();
            $table->foreignId("storage_id")->nullable();
            $table->foreignId("others_id")->nullable();

            $table->longText("description")->nullable();

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
