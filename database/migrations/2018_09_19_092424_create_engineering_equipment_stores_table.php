<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEngineeringEquipmentStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineering_equipment_stores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('description_id');
            $table->string('sub_description_id');
            $table->string('stock_no');
            $table->string('equipment_type');
            $table->string('unit');
            $table->string('condition');
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
        Schema::dropIfExists('engineering_equipment_stores');
    }
}
