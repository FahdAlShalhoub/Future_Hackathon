<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveTrackSkillsTraitsFromSinglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('singles', function (Blueprint $table) {
            $table->dropColumn('traits');
            $table->dropColumn('skills');
            $table->dropColumn('track');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('singles', function (Blueprint $table) {
            $table->addColumn('traits');
            $table->addColumn('skills');
            $table->addColumn('track');
        });
    }
}
