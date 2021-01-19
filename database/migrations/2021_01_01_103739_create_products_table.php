<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('merchant_id')->unsigned()->nullable();
            $table->string('code')->nullable();
            $table->longText('details')->nullable();
            $table->string('brand')->nullable();
            $table->string('category')->nullable();
            $table->integer('quantity')->unsigned()->nullable();
            $table->integer('price')->unsigned()->nullable();
            $table->boolean('is_approved')->nullable()->default(false);
            $table->boolean('is_available')->nullable()->default(true);
            $table->boolean('is_visible')->nullable()->default(true);
            $table->boolean('free_delivery')->nullable()->default(false);
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
        Schema::dropIfExists('products');
    }
}
