<?php namespace SurveyBene;

use Illuminate\Database\Eloquent\Model;
use SurveyBene\UuidModel;

class Question extends UuidModel {

	protected $fillable=['title'];

	protected $hidden = ['created_at','updated_at','pivot'];
	//
	public function survey(){

		return $this->belongsToMany('SurveyBene\Survey')->withTimestamps();
	}


	public function questionsTypes(){
		return $this->belongsTo('SurveyBene\QuestionType');
	}

	public function choices(){
		return $this->hasMany('SurveyBene\Choices');
	}

}
