<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('public')->default(false);
            $table->string('type');
            $table->string('name');
            $table->boolean('evolClass')->default(false);
            $table->string('classStart')->nullable();
            $table->string('classSecund')->nullable();
            $table->string('classThird')->nullable();
            $table->string('classForth')->nullable();
            $table->string('element');
            $table->text('descriptionInicial')->nullable();
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
        Schema::dropIfExists('characters');
    }
}
