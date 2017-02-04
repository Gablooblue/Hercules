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
		    $table->integer('age');
		    $table->string('gender');
		    $table->integer("height");
		    $table->integer('weight');
		    $table->string('intensity');
		    $table->integer('BMR');
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	Scheme::dropIfExists('user_info');
    }
}
