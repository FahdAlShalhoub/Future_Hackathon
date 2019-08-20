<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uniID')->nullable();
            $table->string('email');
            $table->string('name');
            $table->string('gender');
            $table->string('track');
            $table->string('status');
            $table->longText('traits');
            $table->longText('skills');
            $table->string('major');
            $table->unsignedBigInteger('groupID')->nullable();
            $table->foreign('groupID')->references('id')->on('groups_of_singles');
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
        Schema::dropIfExists('singles');
    }
}
