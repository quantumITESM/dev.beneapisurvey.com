<?php namespace SurveyBene;

use Illuminate\Database\Eloquent\Model;
use SurveyBene\UuidModel;

class Choice extends UuidModel {

	//

	protected $fillable=['title','value'];
	protected $hidden = ['created_at','updated_at'];


	public function question(){
		return $this->belongsTo('SurveyBene\Question');
	}
}
