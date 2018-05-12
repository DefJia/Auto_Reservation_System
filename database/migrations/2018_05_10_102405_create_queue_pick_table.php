<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQueuePickTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {if (!Schema::hasTable('queue_pick')) {
        Schema::create('queue_pick', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('log_id');
            $table->string('option');
            $table->integer('date');
            $table->integer('weight');
            $table->integer('status')->default(0);
            $table->timestamps();

            //$table->foreign('log_id')->references('id')->on('logs');
        });
    }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('queue_pick');
    }
}
