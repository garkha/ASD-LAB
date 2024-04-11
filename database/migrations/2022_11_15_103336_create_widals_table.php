<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widals', function (Blueprint $table) {
            $table->id();
            $table->string('TYPHI_O_1_40');
            $table->string('TYPHI_O_1_80');
            $table->string('TYPHI_O_1_160');
            $table->string('TYPHI_O_1_320');

            $table->string('TYPHI_H_1_40');
            $table->string('TYPHI_H_1_80');
            $table->string('TYPHI_H_1_160');
            $table->string('TYPHI_H_1_320');

            $table->string('TYPHI_AH_1_40');
            $table->string('TYPHI_AH_1_80');
            $table->string('TYPHI_AH_1_160');
            $table->string('TYPHI_AH_1_320');

            $table->string('TYPHI_BH_1_40');
            $table->string('TYPHI_BH_1_80');
            $table->string('TYPHI_BH_1_160');
            $table->string('TYPHI_BH_1_320');
            
            $table->string('RESULT');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
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
        Schema::dropIfExists('widals');
    }
};
