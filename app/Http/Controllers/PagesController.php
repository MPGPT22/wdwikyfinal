<?php 

namespace App\Http\Controllers;

class PagesController extends Controller{

	public function getIndex(){
		return view('pages.home');
	}

	public function getAbout(){

		$first = "Hello";
		$last = "World";

		$complete = $first. " " . $last;


		return view('pages.about')->with("all", $complete);
	}

	public function getContact() {
		return view('pages.contact');
	}

} 