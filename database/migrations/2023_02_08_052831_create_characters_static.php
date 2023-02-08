<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters_static_servers', function (Blueprint $table) {
            $table->id();
            $table->integer('obj_id')->unsigned()->nullable();
            $table->string('name')->unique();
            $table->string('class');
            $table->string('clan');
            $table->integer('lvl');
            $table->integer('pvp');
            $table->integer('pk');
            $table->integer('onlinetime');
            $table->boolean('online');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters_static_servers');
    }
};
