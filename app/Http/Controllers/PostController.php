<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller
{
	public function showPosts()
	{
		$posts = DB::table('posts')->paginate(5);
		return view("posts", ['posts' => $posts]);
	}	

	public function showCreate()
	{
		return view("create");
	}

	public function create(Request $request)
	{

		$data = $request->all();
		$user = Auth::user();

		return Post::create([
			'title' => $data['title'],
			'post' => $data['post'],
			'author' => $user['username'],
			
		]);	
	}	
}
