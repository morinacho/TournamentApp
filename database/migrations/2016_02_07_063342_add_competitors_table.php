<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompetitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('age')->unsigned();
            $table->string('sex');
            $table->float('weight')->undigned();
            $table->float('height')->unsigned();
            $table->string('graduation');                   // referido al cinturon
            $table->integer('register')->unique();          //numero de matricula de cinturones negros
            $table->integer('instructor_id')->unsigned(); 
            $table->integer('category_id')->undigned();        //Categorias de competencias
            $table->integer('area_id')->unsigned();
            $table->foreing('instructor_id')->reference('id')->on('instructors')->onDelete('cascade');
            $table->foreing('category_id')->reference('id')->on
            $table->foreing('area_id')->reference('id')->on('areas')->onDelete('cascade');
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
        Schema::drop('competitors');
    }
}
