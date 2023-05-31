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
        Schema::create('visit_statistics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('all_statistics_id');
            $table->foreign('all_statistics_id')
            ->references('id')->on('all_statistics')
            ->onDelete('cascade');
            $table->string('ip_address');
            $table->string('open_url');
            $table->integer('count_visit');
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
        Schema::dropIfExists('visit_statistics');
    }
};
