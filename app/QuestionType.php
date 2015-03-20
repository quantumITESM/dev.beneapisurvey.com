<?php namespace SurveyBene;

use Illuminate\Database\Eloquent\Model;
use Swagger\Annotations as SWG;

/**
 *
 * @SWG\Model(id="QuestionType")
 */
class QuestionType extends Model {
	//

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
