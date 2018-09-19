<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunicationEquipmentStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communication_equipment_stores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('description_id');
            $table->string('sub_description_id');
            $table->string('type_radio');
            $table->string('unit');
            $table->string('date_of_service');
            $table->string('status');
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
        Schema::dropIfExists('communication_equipment_stores');
    }
}
