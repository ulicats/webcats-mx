<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpertatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opertators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->unique();

            $table->string('rfc')->nullable();
            $table->string('curp')->nullable();
            $table->string('address')->nullable();

            $table->string('relationship')->nullable();
            $table->string('relationship_name')->nullable();
            $table->string('relationship_phone')->nullable();
            $table->unsignedBigInteger('images_id')->nullable();
            $table->unsignedBigInteger('documents_id_license')->nullable();
            $table->unsignedBigInteger('documents_id_ine')->nullable();
            $table->unsignedBigInteger('documents_id_taxcertificate')->nullable();
            $table->unsignedBigInteger('users_id')->nullable();
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
        Schema::dropIfExists('opertators');
    }
}
