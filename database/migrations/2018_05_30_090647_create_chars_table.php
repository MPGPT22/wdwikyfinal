<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chars', function (Blueprint $table) {
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
            $table->text('descriptionSecond')->nullable();
            $table->text('descriptionThird')->nullable();
            $table->text('descriptionForth')->nullable();
            $table->boolean('multyForm')->default(false);
            $table->string('imgFormUrlFirst')->default('/img/chars/samble.png');
            $table->string('imgFormUrlSecund')->default('/img/chars/samble.png');
            $table->string('imgFormUrlThird')->default('/img/chars/samble.png');
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
        Schema::dropIfExists('chars');
    }
}
