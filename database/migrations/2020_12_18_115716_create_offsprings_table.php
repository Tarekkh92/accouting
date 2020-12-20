<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffspringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offsprings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('survey_id');

            $table->string('full_name',100)->nullable();
            $table->dateTime('dob')->nullable();
            $table->string('under_care',100)->nullable();
            $table->string('pay_for',100)->nullable();
            $table->string('single_parent',100)->nullable();
            $table->string('with_disabilities',100)->nullable();
            $table->string('special_education',100)->nullable();

            $table->timestamps();

            $table->foreign('survey_id')->references('id')->on('surveys')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offsprings');
    }
}
