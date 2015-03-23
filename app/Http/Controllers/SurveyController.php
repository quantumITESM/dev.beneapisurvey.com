<?php namespace SurveyBene\Http\Controllers;

use SurveyBene\Http\Requests;
use SurveyBene\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SurveyBene\Survey;
use SurveyBene\Http\Requests\SurveyRequest;


class SurveyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$surveys= Survey::all();
		return response()->json(['message'=>'list of survey',
			'code'=>200, 'surveys'=>$surveys],200);
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
	public function store(SurveyRequest $request)
	{
		//
		$values=$request->only(['title','description']);

		$survey=Survey::create($values);

		if(!$survey){
			return response()->json(['message'=>'something was wrong :( :( '],401);
		}

		return response()->json(['message'=>'Survey created',
			'code'=>200,
			'survey'=>$survey],200);


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
		$survey=Survey::find($id);
		if(!$survey){
			return response()->json(['message'=>'Survey not found', 'code'=>401],401);
		}

		return response()->json(['survey'=>$survey,'questions'=>$survey->questions],200);
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
		$survey=Survey::find($id);
		$survey->delete();
		return response()->json(['message'=>'Survey successful deleted', 'code'=>'204'],204);

	}

}
