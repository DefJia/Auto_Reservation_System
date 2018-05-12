<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {if (!Schema::hasTable('users')) {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_vip')->default(0);
            $table->unsignedInteger('money')->nullable();
            $table->string('real_name')->nullable();
            $table->string('username')->unique()->nullable();
            $table->string('pwd')->nullable();
            $table->char('reminder', 10)->default('no');
            $table->string('mail')->nullable();
            $table->string('phone')->nullable();
            $table->string('wxid')->nullable();
            $table->integer('status')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
