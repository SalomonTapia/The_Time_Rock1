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

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/','HomeController@showWelcome');
Route::get('event/index',array('uses'=>'EventsController@index','as'=>'get.event.index'));

Route::model('events','Event');
Route::bind('events',function($value, $route) {
	return Event::whereId($value)->first();
});
Route::resource("discographyes", "DiscographyesController");
Route::resource('events','EventsController');
Route::resource("users","UsersController");
Route::resource("reports","ReportsController");
Route::resource("coments","ComentsController");