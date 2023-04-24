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
        Schema::create('order_enot', function (Blueprint $table) {
            $table->id();
            $table->integer('sum');
            $table->string('status');
            $table->string('char_name');
            $table->string('login');
            $table->integer('server_id');
            $table->unsignedBigInteger('accounts_expansion_id');
            $table->foreign('accounts_expansion_id')
            ->references('id')->on('accounts_expansion')
            ->onDelete('cascade');
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
        Schema::dropIfExists('order_enot');
    }
};
