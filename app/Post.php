<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'title', 'post', 'author', 'intensity', 'goal', 'Frequency', 'time',
	];
}
