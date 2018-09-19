<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmamentStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armament_stores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('description_id');
            $table->string('sub_description_id');
            $table->string('registration_no')->unique();
            $table->string('stock_no');
            $table->string('asset_type');
            $table->string('caliber');
            $table->string('location');
            $table->string('country_code');
            $table->string('date_of_service');
            $table->string('maximum_range');
            $table->string('effective_range');
            $table->string('oparational_status');
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
        Schema::dropIfExists('armament_stores');
    }
}
