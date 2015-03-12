<?php namespace SurveyBene\Http\Controllers;

use SurveyBene\Http\Requests;
use SurveyBene\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SurveyForm extends Controller {

	//
	public function index(){
		return view('surveylist');
	}
}
