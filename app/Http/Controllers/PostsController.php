<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
 {
 	return view('posts.index');
 }

  public function faq()
 {
 	return view('posts.faq');
 }

 
 public function business () {
 	return view('posts.business');
 }

 public function contact() {
 	return view('posts.contact');
 }

 public function leancanvas() {
 	return view('posts.leancanvas');
 }

}
