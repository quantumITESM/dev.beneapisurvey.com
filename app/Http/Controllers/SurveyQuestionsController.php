<?php namespace SurveyBene\Http\Controllers;

use SurveyBene\Http\Requests;
use SurveyBene\Http\Controllers\Controller;

use Illuminate\Http\Request;

use SurveyBene\Http\Requests\QuestionRequest;
use SurveyBene\Survey;
//use SurveyBene\Question;


class SurveyQuestionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($surveyId)
	{
		//
		$survey=Survey::find($surveyId);
		if(!$survey){
			return response()->json(['message'=>'Survey does not exist'],404);
		}

		return response()->json(['questions'=>$survey->questions],200);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(QuestionRequest $questionRequest, $surveyId)
	{
		//
		$survey=Survey::find($surveyId);
		$questionsParams=$questionRequest->all();

		if(!$survey){
			return response()->json(['message'=>'Survey does not exist'],404);
		}

		$question=$survey->questions()->create($questionsParams);

		return response()->json(['message'=>'Question successfully created',
			'code'=>201,'question'=>$question],201);





	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
