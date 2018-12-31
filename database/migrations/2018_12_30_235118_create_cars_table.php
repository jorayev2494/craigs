<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');

            $table->string('type', 20);
            $table->string('title', 100);
            $table->string('uuid', 100);
            $table->integer('price')->unsigned();

            $table->string('your_name', 50)->nullable();
            $table->string('your_email', 50)->nullable();
            $table->string('your_phone', 50)->nullable();

            // Пример с машиной
            $table->string('vehicle_type', 100);        // Тип транспортной средства
            $table->string('status', 50);               // статус
            $table->string('car_type', 100);            // тип машины
            $table->string('model', 100);               // модель
            $table->integer('year')->unsigned();        // год


            $table->text('details');

            // Местоположение
            $table->integer('city')->unsigned()->nullable();        // Город
            $table->integer('district')->unsigned()->nullable();    // Район
            $table->string('street', 100)->nullable();              // Улица
            $table->string('exact_location', 100)->nullable();      // Точное местоположение


            $table->string('gallery', 100)->nullable();         // Фото

            // Дополнительная информация
            // Часы работы (по желанию)
            // Добавить часы работы
            // Понедельник
            $table->string('monday_open', 50)->nullable();      // Открывается
            $table->string('monday_close', 50)->nullable();     // Закрывается

            // Вторник
            $table->dateTime('tuesday_open')->nullable();       // Открывается
            $table->dateTime('tuesday_close')->nullable();      // Закрывается

            // Среда
            $table->dateTime('wednesday_open')->nullable();     // Открывается
            $table->dateTime('wednesday_close')->nullable();    // Закрывается

            // Четверг
            $table->dateTime('thursday_open')->nullable();      // Открывается
            $table->dateTime('thursday_close')->nullable();     // Закрывается

            // Пятница
            $table->dateTime('friday_open')->nullable();        // Открывается
            $table->dateTime('friday_close')->nullable();       // Закрывается

            // Суббота
            $table->dateTime('saturday_open')->nullable();      // Открывается
            $table->dateTime('saturday_close')->nullable();     // Закрывается

            // Воскресение
            $table->dateTime('sunday_open')->nullable();        // Открывается
            $table->dateTime('sunday_close')->nullable();       // Закрывается


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
        Schema::dropIfExists('cars');
    }
}
