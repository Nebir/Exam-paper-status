<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExamIdAndTeachersIdToPaperDistributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paperDistributions', function (Blueprint $table) {
            $table->integer('exam_id')->unsigned();
            $table->foreign('exam_id')
                ->references('id')->on('exams')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('part_A_examiner_id')->unsigned();
            $table->foreign('part_A_examiner_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('part_B_examiner_id')->unsigned();
            $table->foreign('part_B_examiner_id')
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
        Schema::table('paperDistributions', function (Blueprint $table) {
            $table->dropForeign(['exam_id']);
            $table->dropForeign(['part_A_examiner_id']);
            $table->dropForeign(['part_B_examiner_id']);
            $table->dropColumn('exam_id');
            $table->dropColumn('part_A_examiner_id');
            $table->dropColumn('part_B_examiner_id');
        });
    }
}
