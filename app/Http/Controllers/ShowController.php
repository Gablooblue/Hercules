<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShowController extends Controller
{
	public function showPosts(Request $request)
	{
		if(request()->has('intensity'))
		{
			$posts = DB::table('posts')->where('intensity', request('intensity'))->paginate(5);
		}
		else
		{	
			$posts = DB::table('posts')->paginate(5);
		}
		return view("posts", ['posts' => $posts]);
	}	
}
