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
        Schema::create('lfts', function (Blueprint $table) {
            $table->id();
            $table->string('Total_Bilirubin');
            $table->string('Conjugated_Bilirubin');
            $table->string('Unconjugated_Bilirubin');
            $table->string('SGOT');
            $table->string('SGPT');
            $table->string('Alk_Phosphatase');
            $table->string('T_Protein');
            $table->string('Albumin');
            $table->string('Globulin');
            $table->string('AG_Ratio');
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
        Schema::dropIfExists('lfts');
    }
};
