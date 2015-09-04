<?php  namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

 class HomeController extends Controller{

	public function index(){
		return view('home.index');
	}
	public function contact(){
		return view('about.contact');
	}
	public function history(){
		return view('about.history');
	}
	public function vm(){
		return view('about.visionmission');
	}
	public function seal(){
		return view('about.seal');
	}
	public function hymn(){
		return view('about.hymn');
	}
	public function maps(){
		return view('about.maps');
	}
	public function highlights(){
		return view('about.highlights');
	}
	public function administration(){
		return view('about.administration');
	}
}