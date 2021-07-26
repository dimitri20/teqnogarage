<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('others', function (Blueprint $table) {
            $table->id();

            $table->string("unblock")->nullable();
            $table->string("4G")->nullable();
            $table->string("battery")->nullable();
            $table->string("battery_uncharge_time")->nullable();
            $table->string("building")->nullable();
            $table->string("weight")->nullable();
            $table->string("release")->nullable();


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
        Schema::dropIfExists('others');
    }
}
