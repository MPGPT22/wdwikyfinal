<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PagesController extends Controller{


	public function getIndex(){

		$character = DB::table('characters')->orderBy('id', 'desc')->where('public', 1)->take(2)->get();
		$skill = DB::table('skills')->orderBy('id', 'desc')->where('public', 1)->first();
		$spell = DB::table('spells')->orderBy('id', 'desc')->where('public', 1)->first();
		$state = DB::table('states')->orderBy('id', 'desc')->where('public', 1)->first();
		$armor = DB::table('armors')->orderBy('id', 'desc')->where('public', 1)->first();
		$item = DB::table('items')->orderBy('id', 'desc')->where('public', 1)->first();
		$weapon = DB::table('weapons')->orderBy('id', 'desc')->where('public', 1)->first();



		return view('pages.home')->with(array('characters'=>$character,'skills'=>$skill,'spells'=>$spell,'states'=>$state, 'armors'=>$armor, 'items'=>$item,'weapons'=>$weapon));
	}

	public function getAbout(){
		return view('pages.about');
	}

	public function getMap(){
		return view('pages.map');
	}

	public function getSkills() {
		return view('pages.skills');
	}

}
