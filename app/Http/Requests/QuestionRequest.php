<?php namespace SurveyBene\Http\Requests;

use SurveyBene\Http\Requests\Request;

class QuestionRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//
			'name'=>'required',
			'title'=>'required',
			'hasChoices'=>'required'
		];
	}

	public function response(array $errors)
	{
		return response()->json(['error'=>$errors],500);
	}

}
