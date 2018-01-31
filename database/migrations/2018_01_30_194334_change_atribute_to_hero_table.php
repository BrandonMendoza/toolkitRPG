<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeAtributeToHeroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('heros', function (Blueprint $table) {
            $table->dropForeign(['class_id']);

            $table->foreign('class_id')->references('id')->on('chumans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('heros', function (Blueprint $table) {
            
        });
    }
}
