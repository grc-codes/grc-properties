<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('property_id')->nullable();
            $table->unsignedbigInteger('tenant_id')->nullable();
            $table->unsignedbigInteger('floor_id')->nullable();
            $table->bigInteger('beds');
            $table->bigInteger('baths');
            $table->bigInteger('rent_price');
            $table->string('apartment_num');
            $table->bigInteger('unit_num');
            $table->timestamps();

            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->foreign('floor_id')->references('id')->on('floors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
}
