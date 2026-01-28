<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
          
            $table->string('destination')->nullable();
            $table->string('dates')->nullable();
            $table->string('unit')->nullable();
            $table->unsignedBigInteger('providers_id')->nullable();
            $table->string('rate')->nullable();
            $table->string('insurance')->nullable();
            $table->string('maneuvers')->nullable();
            $table->string('time_delay')->nullable();
            $table->string('delays')->nullable();
            $table->unsignedBigInteger('users_id');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers_rates');
    }
}
