<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaperDistributionIdToPaperStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paperStatus', function (Blueprint $table) {
            $table->integer('paper_distribution_id')->unsigned();
            $table->foreign('paper_distribution_id')
                ->references('id')->on('paperDistributions')
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
        Schema::table('paperStatus', function (Blueprint $table) {
            $table->dropForeign(['paper_distribution_id']);
            $table->dropColumn('paper_distribution_id');
        });
    }
}
