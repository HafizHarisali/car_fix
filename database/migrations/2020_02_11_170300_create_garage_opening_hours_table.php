<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarageOpeningHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garage_opening_hours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day',10);
            $table->dateTime('open_time');
            $table->dateTime('close_time');
            $table->integer('is_closed')->default(0);
            $table->integer('garage_id');
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
        Schema::dropIfExists('garage_opening_hours');
    }
}
