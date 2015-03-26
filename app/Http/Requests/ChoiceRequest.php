<?php namespace SurveyBene\Http\Requests;

use SurveyBene\Http\Requests\Request;

class ChoiceRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title'=>'required',
			'value'=>'required'
		];
	}


	public function response(array $errors)
	{
		return response()->json(['error'=>$errors],500);
	}
}
