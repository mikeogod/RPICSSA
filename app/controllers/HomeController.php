<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	protected $layout="layout";
	
	public function About()
	{
		$url = URL::action('HomeController@About');
		return View::make('about');
	}
	
	public function Officers($oid=0)
	{
		return View::make('officers')->with('id', $oid);
	}
	

}
