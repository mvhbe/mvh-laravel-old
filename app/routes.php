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

Route::get(
    '/',
    'WedstrijdController@dezeMaand'
);

Route::get(
	'kalender',
	'KalenderController@kalender'
);

Route::get(
	'uitslagen',
    'UitslagenController@uitslagen'
);

Route::get(
	'archief/kalenders',
	'ArchiefController@overzichtKalenders'
);

Route::get(
	'archief/uitslagen',
	'ArchiefController@overzichtUitslagen'
);

Route::get(
	'contact',
	function(){
		return View::make('contact');
	}
);

Route::get(
    'uitslag/{wedstrijd_id}', 
    'UitslagController@showWedstrijdUitslag'
);
