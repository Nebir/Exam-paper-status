<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferedCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offered_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher_id');
            $table->integer('course_id');
            $table->integer('semester_id');
            $table->integer('performance_attendence');
            $table->string('offered_department');
            $table->boolean('is_script_a_dist');
            $table->boolean('is_script_b_dist');
            $table->boolean('is_script_a_submitted');
            $table->boolean('is_script_b_submitted');
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
        Schema::dropIfExists('offered_courses');
    }
}
