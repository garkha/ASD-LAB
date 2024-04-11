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
        Schema::create('kfts', function (Blueprint $table) {
            $table->id();
            $table->string('Blood_Urea');
            $table->string('Serum_Creatinine');
            $table->string('Uric_Acid');
            $table->string('Sodium');
            $table->string('Potassium');
            $table->string('Chloride');
            $table->string('Blood_Urea_Nitrogen');
            $table->string('Creatinine_Ratio');
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
        Schema::dropIfExists('kfts');
    }
};
