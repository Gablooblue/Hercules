<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\InfoRequest;
use App\Info;
use Auth;
use Redirect;

class InfoController extends Controller
{

	protected $redirectTo = '/posts';

	public function __construct()
	{
		$this->middleware('auth');
	}	

	public function show()
	{
		return view('survey');
	}	

	public function update(Request $request)
	{

		$data = $request->all();
		$user = Auth::user();
			
		Info::create([
			'weight' => $data['weight'],
			'height' => $data['height'],
			'age' => $data['age'],
			'intensity' => $data['intensity'],
			'gender' => $data['gender'],
			'user_id' => $user['id'],
			'BMR' => $user['id'],
		]);

		return Redirect::to('/posts');
	}	
}
