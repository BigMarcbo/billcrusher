<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrusherController extends Controller
{
    //
      public function crush(Request $request)
    
   {


   		$text = $request->bills; 

   		

   		$regex = '/(?<=\[)(s\.|h\.).*?(?=\])/i';

preg_match_all($regex, $text, $matches);

$bills = [];

foreach ($matches[0] as $match) {
  $bills[] = str_replace('. ', 'B', $match);
}

// var_dump($bills); 

	$data = [
  		'bills' => $bills
	];

        return view('new.bills', $data);


   }

//    public function show() {

//    	$bills = Bill::all();

//    return view('new.bills')->with('bills', $bills);

// }

} 
