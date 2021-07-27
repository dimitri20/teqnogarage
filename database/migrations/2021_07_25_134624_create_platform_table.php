<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platform', function (Blueprint $table) {
            $table->id();

            $table->string("operating_system")->nullable();
            $table->string("processor_model")->nullable();
            $table->string("processor_speed")->nullable();
            $table->string("core")->nullable();
            $table->string("graphics_processor")->nullable();

//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platform');
    }
}
