<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$name = "Home Page Template";
    	return view('home',compact("name"));
    }

    public function phpPage()
    {
    	$data = array(
			"lesson1" => "This is PHP Lesson1",
			"lesson2" => "This is PHP Lesson2",
			"lesson3" => "This is PHP Lesson3",
		);
	return view('php',compact('data'));
    }

    public function jsPage()
    {
    	$data = array(
			"lesson1" => "This is PHP Lesson1",
			"lesson2" => "This is PHP Lesson2",
			"lesson3" => "This is PHP Lesson3",
		);
	return view('js',compact('data'));
    }
}
