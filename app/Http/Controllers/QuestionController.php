<?php namespace SurveyBene\Http\Controllers;

use SurveyBene\Http\Requests;
use SurveyBene\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SurveyBene\Http\Requests\QuestionRequest;
use SurveyBene\Question;
use SurveyBene\Survey;

use SurveyBene\QuestionType;

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
	/*public function store(QuestionRequest $request)
	{
		$questionValues=$request->all();
		$newQuestion=new Question($questionValues);

		if(!$newQuestion){
			return response()->json(['message'=>'Something was wrong!','code'=>505],505);

		}

		//
		return response()->json(['message'=>'question successful created','code'=>201, 'question' => $newQuestion],201);


	}*/


	public function store(QuestionRequest $request, $questionTypeID)
	{
		$questionType=QuestionType::find($questionTypeID);
		if(!$questionType)
		{
			return response()->json(['message'=>'QuestionType not found', 'code'=>404],404);
		}

		$qValues=$request->all();

		//$newQuestion=Question::create($qValues);

		$newQuestion=$questionType->questions()->create($qValues);

		return response()->json(['message'=>'Question successful created','code'=>201, 'question'=>$newQuestion],201);



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
		$question=Question::find($id);
		if(!$question){
			return response()->json(['message'=>'question does not exists','code'=>404],404);
		}

		return response()->json(['question'=>$question],200);
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
		$question=Question::find($id);
		$question->delete();
		return response()->json(['message'=>'Question successful deleted', 'code'=>'204'],204);
	}

}
