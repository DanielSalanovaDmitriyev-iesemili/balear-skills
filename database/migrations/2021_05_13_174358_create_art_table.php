<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('exposition_id');
            $table->string('title');
            $table->date('create_at');
            $table->enum('format', ['pintura', 'escultura', 'fotografia']);
            $table->string('author');
            $table->string('img');
            $table->timestamps();

            $table->foreign('exposition_id')->references('id')->on('expositions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('art');
    }
}
