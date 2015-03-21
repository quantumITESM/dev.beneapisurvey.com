<?php namespace SurveyBene;

use Illuminate\Database\Eloquent\Model;
use SurveyBene\UuidModel;
use Swagger\Annotations as SWG;

/**
 *
 * @SWG\Model(id="QuestionType")
 */
class QuestionType extends UuidModel {

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['created_at','updated_at'];


	/**
	 * @var Tag[]
	 *
	 * @SWG\Property(name="fillable", type="array", items="$ref:Tag")
	 */
	protected $fillable=['name', 'description', 'hasChoices'];

	public function questions(){
		return $this->hasMany('SurveyBene\Questions');

	}
}
