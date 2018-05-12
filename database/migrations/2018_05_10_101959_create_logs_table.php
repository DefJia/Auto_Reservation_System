<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {if (!Schema::hasTable('logs')) {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('action');
            $table->integer('status')->default(0);
            $table->string('detail')->nullable();
            $table->timestamp('created_at')->nullable();

            //$table->foreign('name')->references('name')->on('users');
        });
    }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
