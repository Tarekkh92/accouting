<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();

            $table->string('contactName',100)->nullable();
            $table->string('idnumber',100)->nullable();
            $table->string('travel',100)->nullable();
            $table->string('wifename',100)->nullable();
            $table->string('idwife',100)->nullable();
            $table->string('wifetravel',100)->nullable();

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
        Schema::dropIfExists('contact');
    }
}
