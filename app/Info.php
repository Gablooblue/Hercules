<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Info extends Model
{
	protected $table = "user_info";
	protected $fillable = [
		'age', 'gender', 'height', 'weight','intensity', 'user_id', 'BMR',
	];

}
