<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommiteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commitees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher_id');
            $table->string('chairman');
            $table->string('semester');
            $table->boolean('is_major');
            $table->boolean('is_minor');
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
        Schema::dropIfExists('commitees');
    }
}
