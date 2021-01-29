<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title', 75)->nullable();
            $table->string('keywords',250)->nullable();
            $table->string('description',250)->nullable();
            $table->string('company', 150)->nullable();
            $table->string('address', 150)->nullable();
            $table->integer('phone')->nullable();
            $table->integer('fax')->nullable();
            $table->string('email', 150)->nullable();
            $table->string('smtpserver', 150)->nullable();
            $table->string('smtpemail', 150)->nullable();
            $table->string('smtppassword', 150)->nullable();
            $table->integer('smtpport')->nullable()->default(0);
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->text('aboutus')->nullable();
            $table->text('contact')->nullable();
            $table->text('references')->nullable();
            $table->string('status')->nullable()->default('False');
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
        Schema::dropIfExists('settings');
    }
}
