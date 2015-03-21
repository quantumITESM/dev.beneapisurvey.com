<?php namespace SurveyBene;

use Illuminate\Database\Eloquent\Model;
use SurveyBene\UuidModel;

class Choice extends UuidModel {

	//
	public function question(){
		return $this->belongsTo('SurveyBene\Question');
	}
}
