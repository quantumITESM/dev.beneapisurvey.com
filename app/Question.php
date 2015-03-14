<?php namespace SurveyBene;

use Illuminate\Database\Eloquent\Model;


class Question extends Model {

	protected $fillable=['title'];
	//
	public function survey(){

		return $this->belongsToMany('SurveyBene\Survey')->withTimestamps();
	}

}
