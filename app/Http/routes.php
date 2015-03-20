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

use SurveyBene\Http\Requests\Request;

Route::get('survey', 'SurveyForm@index');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('mydocs', function(){
	return view('vendor.l5-swagger.index');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);




Route::group(['prefix'=>'api/v1'], function(){

	Route::resource('surveys','SurveyController',['only'=>['show','store', 'index']]);

	Route::resource('questions','QuestionController',['only'=>['index','show']]);

	Route::resource('questionTypes.questions','QuestionController@store',['only'=>'store']);

	Route::resource('questionsType','QuestionTypeController');

	Route::resource('surveys.questions','SurveyQuestionsController', ['only'=>'index']);


});

