<?php namespace SurveyBene;

use Illuminate\Database\Eloquent\Model;

class QuestionType extends Model {
	//
	protected $fillable=['name', 'description', 'hasChoices'];

	public function questions(){
		return $this->hasMany('SurveyBene\Questions');

	}
}
