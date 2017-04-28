<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Schedule extends Controller
{
	function index(){
		$message = '<h1>You are about to choose a course. Please when choosing this course enter 201730 for "Summer 2017" and 201810 for "Fall 2017"<h1>';
		
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
		]);where([
			'course'=>'^[A-Z]{3}\[0-9]{3}$'
		]);
	}

	function classSchedule($semester, $course = "ACT311"){

		$queryStringSemester ="SELECT * FROM sched WHERE semester LIKE '$semester%' ORDER BY course";

		$queryStringCourse = "SELECT * FROM sched WHERE course LIKE '$course%' ORDER BY semester, section";

		$columns = \DB::connection('schedule')->select($queryStringSemester);

		$rows = \DB::connection('schedule')->select($queryStringCourse);

		$m = count($columns);

		$n = count($rows);

		return view('scheduleTable', [
			'city' => $course,
			'count' => $n,
			'columns' =>$columns,
			'rows' =>$rows

		]);where([
			'semester'=>'^[0-9]{6}$',
			'course'=>'^[A-Z]{3}\[0-9]{3}$'
		]);
	}
}
