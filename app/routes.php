<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
	"uses" => "HomeController@showWelcome",
]);
Route::get('bencana/donasi', [
	"uses" => "DisasterController@showDonate",
]);
Route::get('bencana/user/relawan', [
	"uses" => "UserController@showMain",
]);
Route::get('bencana/user/koordinator', [
	"uses" => "UserController@showMain2",
]);