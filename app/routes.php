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
    function(){
	   return View::make('home');
    }
);

Route::get(
	'home',
	function(){
		return View::make('home');
	}
);

Route::get(
	'kalender',
	function(){
		return View::make('kalender');
	}
);

Route::get(
	'uitslagen',
	function(){
		return View::make('uitslagen');
	}
);

Route::get(
	'archief',
	function(){
		return View::make('archief');
	}
);

Route::get(
	'contact',
	function(){
		return View::make('contact');
	}
);
