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
        Schema::create('semenanalyses', function (Blueprint $table) {
            $table->id();
            $table->string('VOLUME');
            $table->string('COLOUR');
            $table->string('REACTION');
            $table->string('VISCOCITY');
            $table->string('LIQUEFACTION_TIME');
            $table->string('TOTAL_SPERMCOUNT');
            $table->string('ACTIVE');
            $table->string('SLUGGISH');
            $table->string('NON_MOTILE');
            $table->string('PUS_CELLS');
            $table->string('EPITHELIAL_CELLS');
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
        Schema::dropIfExists('semenanalyses');
    }
};
