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
        Schema::create('urms', function (Blueprint $table) {
            $table->id();
            //PHYSICAL EXAMINATION
            $table->string('Color');
            $table->string('Transparency');
            $table->float('pH');
            $table->string('Specific_Gravity');

            //CHEMICAL EXAMINATION
            $table->string('Urine_Glucose');
            $table->string('Urine_Protein');
            $table->string('Urine_Bilirubin');
            $table->string('Ketones');
            $table->string('Blood');
            $table->string('Leukocytes_Est');

            //MICROSCOPIC EXAMINATION
            $table->string('Pus_Cells');
            $table->string('Epithelial_Cells');
            $table->string('Rbc');
            $table->string('Crystals');
            $table->string('Casts');
            $table->string('Bacteria');
            $table->string('Others')->nullable();
            

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
        Schema::dropIfExists('urms');
    }
};
