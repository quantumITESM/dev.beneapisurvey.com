<?php namespace SurveyBene\Http\Controllers;

use SurveyBene\Http\Requests;
use SurveyBene\Http\Controllers\Controller;

use Illuminate\Http\Request;

use SurveyBene\QuestionType;
use SurveyBene\Http\Requests\QuestionTypeRequest;




class QuestionTypeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$questionTypes=QuestionType::all();
		return response()->json(['questionsTypes'=>$questionTypes],200);
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
	public function store(QuestionTypeRequest $request)
	{
		//


		$values=$request->all();

		$questionType=QuestionType::create($values);

		if(!$questionType){
			return response()->json(['message'=>'something was wrong', 'code'=>401],401);
		}

		return response()->json(['message'=>'Question type created',
			'code'=>201,
			'QuestionType'=>$questionType],201);
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
		$questionType=QuestionType::find($id);
		if(!$questionType){
			return response()->json(['message'=>'Question type not found', 'code'=>401],401);
		}

		return response()->json(['survey'=>$questionType],200);
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
		$qType=QuestionType::find($id);
		if(!$qType){
			return response()->json(['message'=>'QuestionType does not exist','code'=>404],404);
		}

		$qType->delete();
		return response()->json(['message'=>'QuestionType successful deleted', 'code'=>'204'],204);
	}

}
