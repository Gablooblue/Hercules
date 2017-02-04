<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InfoController extends Controller
{
	public function index()
	{
		return view('survey');
	}	
	public function validator(array $data)
	{
		return Validator::make($data, [
			'height' => 'required',
			'weight' => 'required',
			'age' => 'required',
			'intensity' => 'required',
			'gender' => 'required|max:3'
		]);
	}	

	public function create(array $data)
	{
		return User::create([
			'weight' => $data['weight'],
			'height' => $data['height'],
			'age' => $data['age'],
			'intensity' => $data['intensity'],
			'gender' => $data['gender']

		]);
	}	
}
