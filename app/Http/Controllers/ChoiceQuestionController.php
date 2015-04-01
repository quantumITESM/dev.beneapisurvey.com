<?php namespace SurveyBene\Http\Controllers;

use SurveyBene\Http\Requests;
use SurveyBene\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SurveyBene\Choice;
use SurveyBene\Http\Requests\ChoiceRequest;
use SurveyBene\Question;



class ChoiceQuestionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($questionID)
	{
		//
		$question=Question::find($questionID);
		if(!$question){
			return response()->json(['message'=>'Question not found','code'=>404],404);
		}

		return response()->json(['questions'=>$question->choices],200);
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
	public function store(ChoiceRequest $request, $questionID)
	{
		$question=Question::find($questionID);
		if(!$question){
			return response()->json(['message'=>'Question not found','code'=>404],404);
		}

		$values=$request->all();
		$choice= $question->choices()->create($values);
		if(!$choice){
			return response()->json(['message'=>'Ops something was wrong','code'=>401],401);

		}else{
			return response()->json(['message'=>'Choice added to question successful','choice'=>$choice,'code'=>201],201);

		}




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
