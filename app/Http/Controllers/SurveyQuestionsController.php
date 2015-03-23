<?php namespace SurveyBene\Http\Controllers;

use SurveyBene\Http\Requests;
use SurveyBene\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SurveyBene\Question;
use SurveyBene\Survey;
use SurveyBene\Http\Requests\SurveyQuestionRequest;

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
			return response()->json(['message'=>'Survey does not exist','code'=>401],401);
		}

		return response()->json(['survey'=>$survey,'questions'=>$survey->questions],200);
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
	public function store(SurveyQuestionRequest $request)
	{
		$surveyId=$request->get('surveyId');
		$questionId=$request->get('questionId');

		$survey=Survey::find($surveyId);
		$question=Question::find($questionId);

		if(!$survey){
			return response()->json(['message'=>'Survey does not exist','code'=>401],401);
		}

		if(!$question){
			return response()->json(['message'=>'Question does not exist','code'=>401],401);
		}


		$survey->questions()->save($question);

		return response()->json(['message'=>'Question added to survey successful','code'=>401],401);




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
