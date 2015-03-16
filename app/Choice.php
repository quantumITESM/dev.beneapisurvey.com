<?php namespace SurveyBene;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model {

	//
	public function question(){
		return $this->belongsTo('SurveyBene\Question');
	}
}
