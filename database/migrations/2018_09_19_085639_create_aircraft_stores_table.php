<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAircraftStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aircraft_stores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('description_id');
            $table->string('sub_description_id');
            $table->string('type');
            $table->string('manufacture');
            $table->string('aircraft_model');
            $table->string('reg_no');
            $table->string('date_of_service');
            $table->string('unit');
            $table->string('location');
            $table->string('status_one');
            $table->string('status_two');
            $table->string('remark');

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
        Schema::dropIfExists('aircraft_stores');
    }
}
