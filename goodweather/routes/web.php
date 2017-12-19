<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@maMeteo');

Route::get('/examples/CurrentWeather', function (){
	return view('examples.CurrentWeather');
});


Route::get('/examples/WeatherForecast', function (){
	return view('examples.WeatherForecast');
});


Route::get('/examples/WeatherHistory', function (){
	return view('examples.WeatherHistory');
});