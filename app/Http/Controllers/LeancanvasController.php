<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeancanvasController extends Controller
{
    public function leancanvas()
 {
 	return view('leancanvas.leanmaster');
 }

 public function problem()
 {
 	return view('leancanvas.problem');
 }
 public function customer()
 {
 	return view('leancanvas.customer');
 }
 public function unique()
 {
 	return view('leancanvas.unique');
 }
 public function solution()
 {
 	return view('leancanvas.solution');
 }
 public function unfair()
 {
 	return view('leancanvas.unfair');
 }
 public function revenue()
 {
 	return view('leancanvas.revenue');
 }
 public function cost()
 {
 	return view('leancanvas.cost');
 }
 public function key()
 {
 	return view('leancanvas.key');
 }
 public function channels()
 {
 	return view('leancanvas.channels');
 }
}
