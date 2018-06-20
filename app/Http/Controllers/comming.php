<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comming extends Controller
{
    public function basic()
 {
 	return view('comming.basic');
 }


 	public function advanced()
 {
 	return view('comming.advanced');
 }

	 public function marketing()
 {
 	return view('comming.marketing');
 }	
}
