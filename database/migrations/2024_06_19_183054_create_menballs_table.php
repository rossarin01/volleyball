<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenballsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menballs', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('round');
            $table->string('time');
            $table->string('event');
            $table->string('teamone');
            $table->string('score');
            $table->string('teamtwo');
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
        Schema::dropIfExists('menballs');
    }
}
