<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBatchIdCourseIdAndUserIdToCourseTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courseTeachers', function (Blueprint $table) {
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')
                ->references('id')->on('courses')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('batch_id')->unsigned();
            $table->foreign('batch_id')
                ->references('id')->on('batches')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')
                ->references('id')->on('users')
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
        Schema::table('courseTeachers', function (Blueprint $table) {
            $table->dropForeign(['course_id']);
            $table->dropForeign(['batch_id']);
            $table->dropForeign(['teacher_id']);
            $table->dropColumn('course_id');
            $table->dropColumn('batch_id');
            $table->dropColumn('teacher_id');
        });
    }
}
