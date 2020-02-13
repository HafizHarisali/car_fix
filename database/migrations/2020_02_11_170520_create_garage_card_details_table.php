<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarageCardDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garage_card_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',65);
            $table->string('number',100);
            $table->string('exp_mm',10);
            $table->string('exp_yy',10);
            $table->string('cv2',10);
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
        Schema::dropIfExists('garage_card_details');
    }
}
