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
        Schema::create('accounts_role', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('accounts_expansion_id');
            $table->foreign('accounts_expansion_id')
            ->references('id')->on('accounts_expansion')
            ->onDelete('cascade');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('accounts_role');
    }
};
