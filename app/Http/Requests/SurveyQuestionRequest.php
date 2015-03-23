<?php namespace SurveyBene\Http\Requests;

use SurveyBene\Http\Requests\Request;

class SurveyQuestionRequest extends Request {

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
			'surveyId'=>'required',
			'questionId'=>'required'
		];
	}


	/**
	 * @param array $errors
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function response(array $errors)
	{
		return response()->json(['error'=>$errors],500);
	}
}
