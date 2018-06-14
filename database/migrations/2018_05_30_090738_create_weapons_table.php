<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('public')->default(false);
            $table->string('type');
            $table->string('name');
            $table->string('imgBigUrl')->default('/img/weapons/sample.png');
            $table->string('imgIconUrl')->default('/img/weapons/sample.png');
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
        Schema::dropIfExists('weapons');
    }
}
