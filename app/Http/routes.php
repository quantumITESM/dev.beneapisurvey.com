<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('berna', function(){
	return 'Hola Berna';

});

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(['prefix'=>'api/v1'], function(){
	Route::resource('surveys','SurveyController', ['except'=>['create']]);
	Route::resource('questions','QuestionController',['only'=>['index','show']]);
	Route::resource('surveys.questions','SurveyQuestionsController', ['only'=>['create','index']]);

});

