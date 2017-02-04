<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\InfoRequest;
use App\Info;
class InfoController extends Controller
{
	public function show()
	{
		return view('survey');
	}	

	public function update(Request $request)
	{

		$data = $request->all();
			
		return Info::create([
			'weight' => $data['weight'],
			'height' => $data['height'],
			'age' => $data['age'],
			'intensity' => $data['intensity'],
			'gender' => $data['gender']
		]);
	}	
}
