<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeptIdSemesterIdAndCourseTypeIdToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('dept_id')->unsigned();
            $table->foreign('dept_id')
                ->references('id')->on('departments')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('semester_id')->unsigned();
            $table->foreign('semester_id')
                ->references('id')->on('semesters')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('course_type_id')->unsigned();
            $table->foreign('course_type_id')
                ->references('id')->on('courseTypes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign(['dept_id']);
            $table->dropForeign(['semester_id']);
            $table->dropForeign(['course_type_id']);
            $table->dropColumn('dept_id');
            $table->dropColumn('semester_id');
            $table->dropColumn('course_type_id');
        });
    }
}
