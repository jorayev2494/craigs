<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminMenuSelectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_menu_selects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 50);

            $table->integer('admin_menu_id')->unsigned()->nullable();
            $table->foreign('admin_menu_id')->references('id')->on('admin_menus');

            $table->integer('select_id')->unsigned()->nullable();
            $table->foreign('select_id')->references('id')->on('admin_menu_selects');

            $table->boolean('active')->default(true);

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
        Schema::dropIfExists('admin_menu_selects');
    }
}
