<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spells', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('public')->default(false);
            $table->string('name');
            $table->string('imgBigUrl')->default('/img/spells/samble.png');
            $table->string('imgIconUrl')->default('/img/spells/samble.png');
            $table->text('descriptionInicial')->nullable();
            $table->text('descriptionSecond')->nullable();
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
        Schema::dropIfExists('spells');
    }
}
