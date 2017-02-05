<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Redirect;
use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}	
	public function showCreate()
	{
		return view("create");
	}

	public function create(Request $request)
	{

		$data = $request->all();
		$user = Auth::user();

		Post::create([
			'title' => $data['title'],
			'post' => $data['post'],
			'author' => $user['username'],
			'intensity' => $data['intensity'],
			'goal' => $data['goal'],
			'user_id' => $user['id'],
			
		]);	
		return Redirect::to('/posts');
	}	
}
