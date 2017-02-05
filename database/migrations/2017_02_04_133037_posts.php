<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('posts', function(Blueprint $table)
	    {
		    $table->increments('id');
		    $table->string('title');
		    $table->string('post');
		    $table->string('author');
		    $table->string('goal');
		    $table->string('intensity');
		    $table->string('Frequency');
		    $table->string('time');
		    $table->integer('likes')->default(0);
		    $table->integer('dislikes')->default(0);
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
	Schema::dropIfExists('posts');
    }
}
