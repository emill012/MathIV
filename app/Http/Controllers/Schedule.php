<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Schedule extends Controller
{
	function index(){
		$message = '<h1>Course list will go here eventually<h1>';
		
		return $message;	
	}

	function table($course = "ACT311"){

		$queryString = "SELECT * FROM sched WHERE course LIKE '$course%' ORDER BY semester, section";

		$rows = \DB::connection('schedule')->select($queryString);

		$n = count($rows);

		return view('schedule', [
			'city' => $course,
			'count' => $n,
			'rows' =>$rows

		]);
	}
}
