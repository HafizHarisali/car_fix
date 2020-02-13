<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarageBillingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garage_billing_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',65);
            $table->string('last_name',65);
            $table->string('address',250);
            $table->string('city',100);
            $table->string('postcode',15);
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
        Schema::dropIfExists('garage_billing_details');
    }
}
