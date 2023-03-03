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
        Schema::create('accounts_server_ids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('accounts_expansion_id');
            $table->foreign('accounts_expansion_id')
            ->references('id')->on('accounts_expansion')
            ->onDelete('cascade');
            $table->integer('server_id');
            $table->string('account_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts_server_ids');
    }
};
