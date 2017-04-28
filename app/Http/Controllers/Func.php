<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Func extends Controller
{
	     private $operation = array(
        'the functions homepage' => '/func',
        'square root' => '/func/sqrt/{x}',
        'log' => '/func/log/{x}'
        );
        
        function index(){
        return view('index', [
            'title' => 'Functions',
            'standardOps' => $this->operation,
            'header' => 'Available Functions to Utilize',
            'footer' => 'X and Y must be real numbers',
            'additional' => 'For some more math fun please type /math into the browser bar'
        ]);
        }
        
	     /*function index(){
    	  $result = <<<EOT
    	  <h1>Lets Do Math with Functions!</h1>
    	  <h3>Enter the items below to display the desired result in the browser</h3>
        /func Displays This page<br>
        /func/sqrt/{x}<br>
        /func/log/{x}<br>
        <h4>For more math fun please type /math</h4>
EOT;
        return $result;
        }*/
        
        function squareRoot($x){
    	  $message = sqrt($x);
    	  return view('results', [
				'title' => 'Square Root',
				'header' => 'Square Root Function',
				'answer' => 'Below is the answer to the inquiry',
				'message' => $message,
				'footer' => 'X should be a real number only'        
        ]);where ('x','[-\+]?[0-9]+');
        }
        
        function logX($x){
        $message = log10($x);
        return view('results', [
				'title' => 'Log Base 10',
				'header' => 'Log Base 10 of X',
				'answer' => 'Below is the answer to the inquiry',
				'message' => $message,
				'footer' => 'X should be a real number only'        
        ]);where ('x','[-\+]?[0-9]+');
		  }
    
}