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
        Schema::create('mantouxes', function (Blueprint $table) {
            $table->id();
            $table->dateTime('Date_of_inoculation');
            $table->dateTime('Date_of_reporting');
            
            $table->string('ANTIGEN');
            $table->integer('DOSE');
            $table->string('MODE');
            $table->integer('OBSERVATION');
            $table->string('INDURATION');
            $table->string('IMPRESSION');

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
        Schema::dropIfExists('mantouxes');
    }
};
