<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title', 75);
            $table->string('slug', 75);
            $table->string('keywords',150)->nullable();
            $table->longText('description')->nullable();
            $table->string('image',250)->nullable();
            $table->integer('category_id')->nullable();
            $table->longText('details')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('location')->nullable();
            $table->integer('user_id');
            $table->string('status')->default('FALSE')->nullable();
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
        Schema::dropIfExists('places');
    }
}
