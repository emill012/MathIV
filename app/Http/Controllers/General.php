<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class General extends Controller
{
		  private $operation = array(
        'the random and constants homepage' => '/',
        'a random number' => '/random',
        'a random high number' => '/random/{high}',
        'a random low and high number' => '/random/{low}/{high}',
        'the constant of PI' => '/constant/PI',
        'the constant of E' => '/constant/e',
        );
        
        function index(){
        return view('index', [
            'title' => 'Random and Constants',
            'standardOps' => $this->operation,
            'header' => 'Available Random and Constants to Utilize',
            'footer' => 'X and Y must be real numbers',
            'additional' => 'For some more math fun please type /math into the browser bar'
        ]);
        }
        
        /*function index(){
    	  $result = <<<EOT
    	  <h1>Lets Do Math with Randoms and Constants!</h1>
    	  <h3>Enter the items below to display the desired result in the browser</h3>
        /This page<br>
        /random<br>
        /random/{high}<br>
        /random/{low}/{high}<br>
        /constant/PI<br>
        /constant/e<br>
        <h3>For more math fun please type /math</h3>
EOT;
        return $result;
        }*/
        
        function random(){
        return	view('results', [
				'title' => 'Random Number',
				'header' => 'Random Number',
				'answer' => 'Below is a random number',
				'message' => rand(),
				'footer' => 'Completely random we promise!'        
        ]);
        echo rand();
		  }
		  
        function randomHigh($high){
        return	view('results', [
				'title' => 'Random High',
				'header' => 'Random High Number',
				'answer' => 'Below is a random high number between 1 and what you entered',
				'message' => rand(1,$high),
				'footer' => 'The high number should be a real number'        
        ]);
        }
        
        function randomLowHigh($low,$high){
        return view('results', [
				'title' => 'Random Low High',
				'header' => 'Random Low High Number',
				'answer' => 'Below is a random number between the numbers you entered',
				'message' => rand($low,$high),
				'footer' => 'The random low and high numbers should be real numbers'        
        ]);
		  echo rand($low,$high);        
        } 
        
        function constantPI(){
		  $message = pi();
        return view('results', [
				'title' => 'Constant of PI',
				'header' => 'Constant of PI',
				'answer' => 'Below shows the constant PI',
				'message' => $message,
				'footer' => 'I could really go for some PIE right now!'        
        ]);        
        }
        
        function constante(){
        $message = M_E;
        return view('results', [
				'title' => 'Constant of e',
				'header' => 'Constant of e',
				'answer' => 'Below shows the constant e',
				'message' => $message,
				'footer' => 'X and Y should be real numbers only'        
        ]);        
        }
    
}
