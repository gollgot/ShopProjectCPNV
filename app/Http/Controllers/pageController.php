<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller{

    public function home(){
		return view('home');
    }

    public function about(){
		return view('about');
    }

    public function people(){
    	$people = ["Loïc", "Jean", "Pierre"];
		$test = ["test1", "test2", "test3"];

		return view('people')->with('people', $people)->with('test', $test);
    }

}
