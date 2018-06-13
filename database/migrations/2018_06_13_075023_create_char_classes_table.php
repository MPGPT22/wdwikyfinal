<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('char_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('evo_lvl');
            $table->string('HP')->default('i');
            $table->string('MP')->default('i');
            $table->string('ATK')->default('i');
            $table->string('DEF')->default('i');
            $table->string('MAT')->default('i');
            $table->string('MDEF')->default('i');
            $table->string('AGI')->default('i');
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
        Schema::dropIfExists('char_classes');
    }
}
