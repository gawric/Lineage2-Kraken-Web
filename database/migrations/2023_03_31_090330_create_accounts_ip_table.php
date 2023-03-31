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
        Schema::create('accounts_ip', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('accounts_expansion_id');
            $table->foreign('accounts_expansion_id')
            ->references('id')->on('accounts_expansion')
            ->onDelete('cascade');
            $table->string('ip_address');
            $table->timestamp('email_verified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts_ip');
    }
};
