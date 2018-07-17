<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCommitteeIdAndTeacherIdToCommitteeMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('committeeMembers', function (Blueprint $table) {
            $table->integer('committee_id')->unsigned();
            $table->foreign('committee_id')
                ->references('id')->on('committees')
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
        Schema::table('committeeMembers', function (Blueprint $table) {
            $table->dropForeign(['committee_id']);
            $table->dropForeign(['teacher_id']);
            $table->dropColumn('committee_id');
            $table->dropColumn('teacher_id');
        });
    }
}
