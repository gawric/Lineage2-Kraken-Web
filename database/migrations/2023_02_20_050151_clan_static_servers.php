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
        Schema::create('clan_static_servers', function (Blueprint $table) {
            $table->id();
            $table->integer('clan_id');
            $table->string('clan_name');
            $table->integer('clan_level');
            $table->integer('reputation_score');
            $table->tinyInteger('hasCastle');
            $table->integer('ally_id');
            $table->string('ally_name')->nullable();;
            $table->integer('member');
            $table->integer('server_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clan_static_servers');
    }
};
