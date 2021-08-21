<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId("products_id")->comment("this is entity");

            $table->string("characteristic_category");
            $table->string("characteristic_category_en")->nullable();
            $table->string("characteristic_category_ka")->nullable();
            $table->string("characteristic_category_ru")->nullable();

            $table->string("characteristic_attribute");
            $table->string("characteristic_attribute_en")->nullable();
            $table->string("characteristic_attribute_ka")->nullable();
            $table->string("characteristic_attribute_ru")->nullable();

            $table->string("characteristic_value_ka")->nullable();
            $table->string("characteristic_value_en")->nullable();
            $table->string("characteristic_value_ru")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}
