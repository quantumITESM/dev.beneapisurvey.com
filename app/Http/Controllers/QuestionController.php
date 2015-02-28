<?php namespace SurveyBene\Http\Controllers;

use SurveyBene\Http\Requests;
use SurveyBene\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SurveyBene\Http\Requests\QuestionRequest;
use SurveyBene\Question;
use SurveyBene\Survey;

class QuestionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$questions=Question::all();
		return response()->json(['questions'=>$questions],200);
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
	public function store(QuestionRequest $request)
	{
		//
		$surveyID=$request->input('idSurvey');
		$survey=Survey::find($surveyID);



		$questionTitle=$request->only(['title']);

		if ($survey){
			$question=$survey->questions()->create($questionTitle);
			//$survey->questions()->save($question);
		}

		return response()->json(['message'=>'Question successfully created','code'=>200,'question'=>$question],200);

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
