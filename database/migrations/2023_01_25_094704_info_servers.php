<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //`last_update_at`, `updated_at`, `created_at`
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_servers', function (Blueprint $table) {
            $table->id();
            $table->integer('server_id')->unique();
            $table->string('status');
            $table->integer('online');
            $table->timestamp('last_update_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_servers');
    }
};
