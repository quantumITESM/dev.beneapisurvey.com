<?php namespace SurveyBene;

use Illuminate\Database\Eloquent\Model;
use SurveyBene\UuidModel;

class Survey extends UuidModel {

	protected $fillable=['title','description'];

	protected $hidden=['created_at','updated_at'];



	//
	public function questions(){
		return $this->belongsToMany('SurveyBene\Question')->withTimestamps();
	}
}
