<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table){
             $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('avatar');
            $table->char('name');
            $table->char('surname');
            $table->integer('position_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('position_id')->references('id')->on('positions');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teams');
    }
}
