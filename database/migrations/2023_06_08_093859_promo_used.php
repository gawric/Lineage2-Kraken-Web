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
        Schema::create('promo_used', function (Blueprint $table) {
            $table->id();
            $table->string('char_name');
            $table->unsignedBigInteger('accounts_server_id');
            $table->unsignedBigInteger('accounts_expansion_id');

            $table->unsignedBigInteger('promo_codes_id');
            $table->foreign('promo_codes_id')
            ->references('id')->on('promo')
            ->onDelete('cascade');

            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promo_used');
    }
};
