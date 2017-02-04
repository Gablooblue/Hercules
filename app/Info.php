<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
	protected $fillable = [
		'age', 'gender', 'height', 'weight','intensity',
	];
}
