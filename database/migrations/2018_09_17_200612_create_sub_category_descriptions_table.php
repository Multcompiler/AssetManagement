<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoryDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_category_descriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_description_id')->unsigned()->index();
            $table->foreign('category_description_id')->references('id')->on('category_descriptions')->onDelete('cascade');
            $table->string('sub_category_description_name')->unique();
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
        Schema::dropIfExists('sub_category_descriptions');
    }
}
