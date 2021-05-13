<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spaces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->string('direction');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('type_id');
            $table->integer('phone');
            $table->string('email');
            $table->string('img');
            $table->boolean('destacado');
            $table->string('web');
            $table->integer('valoration')->nullable();
            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('type_id')->references('id')->on('space_types');
        });
        Schema::create('space_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('space_id');
            $table->string('comment')->nullable();
            $table->integer('valoration')->nullable();
            $table->boolean('is_published')->nullable();
            $table->date('published_at');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('space_id')->references('id')->on('spaces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spaces');
    }
}
