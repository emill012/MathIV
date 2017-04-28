<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Math extends Controller
{
 		  private $operation = array(
        'the standard math operations homepage' => '/math',
        'addition' => '/math/add/{x}/{y}',
        'subtraction' => '/math/subtract/{x}/{y}',
        'multiplication' => '/math/multiply/{x}/{y}',
        'division' => '/math/divide/{x}/{y}',
        'the random and constants homepage' => '/',
        'a random number' => '/random',
        'a random high number' => '/random/{high}',
        'a random low and high number' => '/random/{low}/{high}',
        'the constant of PI' => '/constant/PI',
        'the constant of E' => '/constant/e',
        'the functions homepage' => '/func',
        'square root' => '/func/sqrt/{x}',
        'log' => '/func/log/{x}'
        );
        
        function index(){
        return view('index', [
            'title' => 'Math Operations',
            'standardOps' => $this->operation,
            'header' => 'Available Math Operations to Utilize',
            'footer' => 'X and Y must be real numbers'
        ]);
        }
	
	     /*function index(){
    	  $result = <<<EOT
    	  <h1>Lets Do Math!</h1>
    	  <h3>Enter the items below to display the desired result in the browser</h3>
        /Math Displays This page<br>
        /math/add/{x}/{y}<br>
        /math/subtract/{x}/{y}<br>
        /math/multiply/{x}/{y}<br>
        /math/divide/{x}/{y}<br>
EOT;
        return $result;
        }*/
        
        function addition($x,$y){
    	  $message = $x+$y;
        return view('results', [
				'title' => 'Addition',
				'header' => 'Addition Operation',
				'answer' => 'Below is the answer to the inquiry',
				'message' => $message,
				'footer' => 'X and Y should be real numbers only'        
        ]);
        /*->where ([
			  'x'=>'[-\+]?[0-9]+',
			  'y'=>'[-\+]?[0-9]+'
			  ]);
		  */
        }
        
        function subtraction($x,$y){
        $message = $x-$y;
        return view('results', [
				'title' => 'Subtraction',
				'header' => 'Subtraction Operation',
				'answer' => 'Below is the answer to the inquiry',
				'message' => $message,
				'footer' => 'X and Y should be real numbers only'        
        ]);
        /*->where ([
			  'x'=>'[-\+]?[0-9]+',
			  'y'=>'[-\+]?[0-9]+'
			  ]);
		  */
		  }
		  
        function multiplication($x,$y){
        $message = $x*$y;
        return view('results', [
				'title' => 'Multiplication',
				'header' => 'Multiplication Operation',
				'answer' => 'Below is the answer to the inquiry',
				'message' => $message,
				'footer' => 'X and Y should be real numbers only'        
        ]);
        /*->where ([
			  'x'=>'[-\+]?[0-9]+',
			  'y'=>'[-\+]?[0-9]+'
			  ]);
		  */
        }
        
        function division($x,$y){
		  $message = $x/$y;
        return view('results', [
				'title' => 'Division',
				'header' => 'Division Operation',
				'answer' => 'Below is the answer to the inquiry',
				'message' => $message,
				'footer' => 'X and Y should be real numbers only'        
        ]);
        /*->where ([
			  'x'=>'[-\+]?[0-9]+',
			  'y'=>'[-\+]?[0-9]+'
			  ]);
		  */     
        } 
    
}
