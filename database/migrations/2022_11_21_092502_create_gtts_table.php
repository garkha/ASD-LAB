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
        Schema::create('gtts', function (Blueprint $table) {
            $table->id();
            $table->string('bs_fasting')->nullable();
            $table->string('bs_after_one_hour')->nullable();
            $table->string('bs_after_two_hour')->nullable();
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
        Schema::dropIfExists('gtts');
    }
};
