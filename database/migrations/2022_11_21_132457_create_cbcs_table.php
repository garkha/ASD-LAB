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
        Schema::create('cbcs', function (Blueprint $table) {
            $table->id();
            $table->string('HAEMOGLOBIN');
            $table->string('RBC');
            $table->string('HCt');
            $table->string('MCV');
            $table->string('MCH');
            $table->string('MCHC');
            $table->string('RDW_SD');
            $table->string('RDW_CV');

            $table->string('TLC');
            $table->string('PLATELET_COUNT');
            $table->string('ESR')->nullable();

            $table->string('Neutrophil');
            $table->string('Lymphocytes');
            $table->string('Eosinophils');
            $table->string('Monocytes');
            $table->string('Basophils');

            $table->string('ANC');
            $table->string('ALC');
            $table->string('AEC');
            $table->string('AMC');
            $table->string('ABC');

            $table->string('NLR');
            $table->string('LMR');
            $table->string('PLR');
            
            $table->string('MPV')->nullable();
            $table->string('PCT')->nullable();
            $table->string('PDW')->nullable();
            
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
        Schema::dropIfExists('cbcs');
    }
};
