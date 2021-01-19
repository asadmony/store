<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductParameterItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_parameter_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_parameter_id')->unsigned()->nullable();
            $table->string('value')->nullable();
            $table->string('description')->nullable();
            $table->bigInteger('image_id')->unsigned()->nullable();
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
        Schema::dropIfExists('product_parameter_items');
    }
}
