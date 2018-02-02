<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRandomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('random', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->integer('level');
            $table->integer('race_id')->unsigned();
            $table->integer('class_id')->unsigned();
            $table->integer('weapon_id')->unsigned();
            $table->integer('strength');
            $table->integer('intelligence');
            $table->integer('dexterity');
            $table->timestamps();

            $table->foreign('race_id')->references('id')->on('races');
            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('weapon_id')->references('id')->on('weapons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('random');
    }
}
