<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('user_info', function (Blueprint $table){
		    $table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('users')->unsigned();
		    $table->integer('age');
		    $table->string('gender');
		    $table->integer("height");
		    $table->integer('weight');
		    $table->string('intensity');
		    $table->integer('BMR');
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
	Schema::dropIfExists('user_info');
    }
}
