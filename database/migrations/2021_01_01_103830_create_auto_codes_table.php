<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_codes', function (Blueprint $table) {
            $table->id();
            $table->string('key')->nullable();
            $table->string('prefix')->nullable();
            $table->integer('increment')->nullable();
            $table->bigInteger('number')->nullable();
            $table->string('suffix')->nullable();
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
        Schema::dropIfExists('auto_codes');
    }
}
