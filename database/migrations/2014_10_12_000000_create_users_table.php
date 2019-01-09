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
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid', 100);
            $table->string('avatar', 100)->nullable();
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('email')->unique();

            $table->string('phone', 50)->nullable();
            $table->string('phone_verify', 100)->nullable()->after("phone");
            $table->integer('phone_code')->unsigned()->nullable()->after("phone_verify");

            $table->string('sex', 10)->nullable();
            $table->string('password');

            // $table->integer('role_id')->unsigned();
            // $table->foreign('role_id')->references('id')->on('roles');

            // $table->integer('country_id')->unsigned()->nullable();
            // $table->foreign('country_id')->references('id')->on('roles');

            // $table->integer('ad_id')->unsigned()->nullable();

            $table->string('site', 100)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('instagram', 100)->nullable();
            $table->string('telegram', 100)->nullable();
            $table->string('vk', 100)->nullable();

            $table->string('api_token', 100)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->boolean('block')->nullable()->default(false);
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
        Schema::dropIfExists('users');
    }
}
