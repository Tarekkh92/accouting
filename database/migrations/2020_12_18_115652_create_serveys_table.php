<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();

            $table->string('social_state',10)->nullable();
            $table->string('has_children',10)->nullable();
            $table->string('has_degree',10)->nullable();
            $table->string('has_home',10)->nullable();
            $table->string('gender',10)->nullable();
            $table->dateTime('birthday')->nullable();
            $table->dateTime('married_year')->nullable();
            $table->dateTime('divorced_year')->nullable();
            $table->string('pay_child_support',10)->nullable();
            $table->string('charity_donation',10)->nullable();
            $table->string('home_insurance',10)->nullable();
            $table->string('stakeholder',10)->nullable();
            $table->string('incapacitated',10)->nullable();
            $table->string('seller',10)->nullable();
            $table->string('tax_report',10)->nullable();
            $table->string('unemployment_benefits',10)->nullable();
            $table->string('average_salary',10)->nullable();
            $table->string('rental_income',10)->nullable();
            $table->string('withdraw',10)->nullable();
            $table->string('saving_fund',100)->nullable();
            $table->string('debts',10)->nullable();
            $table->string('bank_mortgage',10)->nullable();
            

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
        Schema::dropIfExists('serveys');
    }
}
