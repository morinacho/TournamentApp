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
            $table->float('weight')->unsigned();
            $table->float('height')->unsigned();
            $table->string('graduation');                  // referido al cinturon
            $table->string('country');
            $table->string('register')->unique();          //numero de matricula de cinturones negros
            
            $table->integer('instructor_id')->unsigned(); 
            $table->integer('category_id')->unsigned();        //Categorias de competencias

            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
