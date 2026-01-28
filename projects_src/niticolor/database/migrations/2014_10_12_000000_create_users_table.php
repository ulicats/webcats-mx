<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('access')->default(0);
            $table->string('business_name')->nullable();
            $table->string('rfc')->nullable();
            $table->longText('comments')->nullable();
            $table->longText('payments_terms')->nullable();
            $table->unsignedBigInteger('images_id')->nullable();
            $table->unsignedBigInteger('documents_id_taxcertificate')->nullable();
            $table->unsignedBigInteger('documents_id_contract')->nullable();
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
        Schema::dropIfExists('users');
    }
}
