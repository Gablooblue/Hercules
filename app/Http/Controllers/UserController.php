<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
	public function show(Request $request, $user)	
	{
		$user_id = DB::table('users')->where('username', $user)->first();;
		return view("account", ['user_id' => $user_id]);
	}	
}
