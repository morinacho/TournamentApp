<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJudgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('graduation');   //Grado de Dan
            $table->string('register')->unique(); //Matricula de dan
            $table->string('judge_register')->unique(); //marticula de juez internacional
            $table->string('country');

            $table->integer('area_id')->unsigned();

            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');

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
        Schema::drop('judges');
    }
}
