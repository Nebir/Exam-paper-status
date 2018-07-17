<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBatchIdSemesterIdAndTeacherIdToCommitteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('committees', function (Blueprint $table) {
            $table->integer('batch_id')->unsigned();
            $table->foreign('batch_id')
                ->references('id')->on('batches')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('semester_id')->unsigned();
            $table->foreign('semester_id')
                ->references('id')->on('semesters')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('committee_chairman_id')->unsigned();
            $table->foreign('committee_chairman_id')
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
        Schema::table('committees', function (Blueprint $table) {
            $table->dropForeign(['batch_id']);
            $table->dropForeign(['semester_id']);
            $table->dropForeign(['committee_chairman_id']);
            $table->dropColumn('batch_id');
            $table->dropColumn('semester_id');
            $table->dropColumn('committee_chairman_id');
        });
    }
}
