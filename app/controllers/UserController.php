<?php

class UserController extends BaseController {

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
	public function showKoordinator()
	{
		return View::make('kevin.koordinator')->withCookie(Cookie::forever('name', 'value', $minutes));;
	}
	public function showRelawan()
	{
		return View::make('kevin.relawan');
	}
}
